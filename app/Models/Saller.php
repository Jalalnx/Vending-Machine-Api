<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;

 use Spatie\Permission\Traits\HasRoles;

/**
 * App\Models\Saller
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $username
 * @property string $address
 * @property string $city
 * @property string $mobile
 * @property string $email
 * @property string $gender
 * @property string $password
 * @property string $active
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|Saller newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Saller newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Saller permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|Saller query()
 * @method static \Illuminate\Database\Eloquent\Builder|Saller role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Saller whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Saller whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Saller whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Saller whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Saller whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Saller whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Saller whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Saller whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Saller whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Saller whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Saller wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Saller whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Saller whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Saller whereUsername($value)
 * @mixin \Eloquent
 */
class Saller extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable,HasRoles;
    
     protected $guard = "Saller";
    
    protected $guarded = [];

     protected $hidden = [
        'password',
        'remember_token',
    ];



     /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */

     public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

}