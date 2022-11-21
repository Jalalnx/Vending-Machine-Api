<?php

namespace App\Http\Controllers\api;


use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Http\Traits\ApiResponser;

use App\Http\Resources\SallerResource;
use App\Models\Saller;
use Illuminate\Support\Facades\Hash;

class SallerAuthController extends Controller
{

    use ApiResponser;

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

            $credentials = $request->only('username', 'password');
        if ($Saller =\Auth::guard('Saller')->attempt($request->only(['username','password']), $request->get('remember'))){
           
        $token = \Auth::guard('Saller')->claims(['role' => 'Saller'])->attempt($credentials);



       return  $this->successResponseArray([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('Saller')->factory()->getTTL() * 60*60
        ], $message = "login secces", $code = 200);
       
             
        }
        return $this->errorResponse($message = "Unauthorized", $code = 401, $data = null);
        
    }

    
    
    public function signOut() {
     
        \Auth::guard('Saller')->logout(true);
         return $this->successResponse('', "logout done", 200);
     }

    
}