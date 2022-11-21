<?php

namespace App\Http\Controllers\api;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Http\Traits\ApiResponser;
use App\Http\Resources\SallerResource;
use App\Models\Saller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Foundation\Auth\ThrottlesLogins;

class SallerAuthController extends Controller
{

    use ApiResponser;
    use AuthenticatesUsers;
    use ThrottlesLogins;
     protected $maxAttempts = 3; // Default is 5
    protected $decayMinutes = 2; // Default is 1                    


     public function __construct()
    {
        $this->middleware('auth:Saller', ['except' => ['createSaller','login']]);

        // $this->middleware('auth:api')->except(['index', 'show']);    
    }
    public function refresh()
{
    return $this->respondWithToken(auth()->refresh());
}
    
  protected function validator(array $data)
    {

       $rules=  [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string','max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:sallers'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'string', 'max:255', 'unique:sallers'],
            'email' => ['required', 'email', 'max:255', 'unique:sallers' ],
            'gender' => ['required'],
            'password' => ['required'],
            'password_confirmation' => 'required|min:8|same:password'
       ];

         $error_messages=[
            // 'firstname.required'=>'password are not the same password must match same value',
            // 'password1.min'=>'password length must be greater than 8 characters',
            // 'password2.min'=>'confirm-password length must be greater than 8 characters',  
        ];
        return Validator::make($data,$rules,$error_messages);
    }

    
   public function createSaller(Request $request)
    {
        $this->validator($request->all())->validate();
        
        try{
            $Saller = Saller::create([
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'username' => $request['username'],
            'address' =>$request['address'],
            'city' => $request['city'],
            'mobile' => $request['mobile'],
            'email' => $request['email'],
            'gender' => $request['gender'],
            'password' => Hash::make($request['password']),
        ]); 


        if($Saller)
           return $this->successResponse(new SallerResource($Saller), 'Data Saved Successfully!');
     
        } catch (\Illuminate\Database\QueryException $exception) {
   
        return  $errorInfo = $exception->errorInfo;
    
      }
    
      return $this->errorResponse();
        
    }



    public function login(Request $request)
    {
        
        $this->validate($request, [
            'username' => 'required|string',
            'password' => 'required|string',
        ]);


         // If the class is using the ThrottlesLogins trait, we can automatically throttle
    // the login attempts for this application. We'll key this by the username and
    // the IP address of the client making these requests into this application.
    if ($this->hasTooManyLoginAttempts($request)) {
        $this->fireLockoutEvent($request);
        return $this->sendLockoutResponse($request);
    }


    
        if ($Saller =\Auth::guard('Saller')->attempt(['username' => $request->username, 'password' => $request->password],$request->get('remember'))){
           
        //   $user = \Auth::getLastAttempted();
        $user =\Auth::guard('Saller')->user();

        // $user = \Auth::guard('Saller')->getLastAttempted();
        // $user =\Auth::Saller();
        //  dd($user);
        if($user->active == 0 ){
            
            $this->incrementLoginAttempts($request);
            return $this->errorResponse($message = "This account has not been activated.", $code = 401, $data = null);
        }
            
        $token = $user->claims(['role' => 'Saller'])->attempt($credentials);

        
       $this->clearLoginAttempts($request);
       return  $this->successResponseArray([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('Saller')->factory()->getTTL() * 60*60
        ], $message = "login secces", $code = 200);
       
             
        }
        $this->incrementLoginAttempts($request);
        return $this->errorResponse($message = "Unauthorized", $code = 401, $data = null);
        
    }

    
    
    public function signOut() {
     
        \Auth::guard('Saller')->logout(true);
         return $this->successResponse('', "logout done", 200);
     }

    
}