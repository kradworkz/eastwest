<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Http\Traits\ImageUploadTrait;
use App\Jobs\EmailNewAccount;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, ImageUploadTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'role',
        'is_active',
        'avatar',
        'welcome_valid_until'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile()
    {
        return $this->hasOne('App\Models\UserProfile', 'user_id');
    } 

    public function employee()
    {
        return $this->hasOne('App\Models\UserEmployee', 'user_id');
    } 

    public function specialist()
    {
        return $this->hasOne('App\Models\UserSpecialist', 'user_id');
    } 

    public function hasRole($roles)
    {
        foreach ($roles as $role) {
            if ($this->role == $role) {
                return true;
            }
        }
        return false;
    }

    public function scopeNew($query, $request){
        $username = strstr($request['email'], '@', true);
        $user = $query->create(array_merge($request, ['username' => $username, 'password' => bcrypt('dost9ict')]));
        $user->profile()->create($request);
        
        ($request['role'] == 'Teacher') ? $user->employee()->create($request) : $user->specialist()->create($request);
        return $user;
    }

    public function scopeImage($query, $request){
        $user = $this->storeImage($request);
        return $user;
    }

    public function getUpdatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }

    public function getCreatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }

}
