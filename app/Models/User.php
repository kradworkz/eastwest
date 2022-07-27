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

    public function assignments()
    {
        return $this->hasMany('App\Models\UserAssignment', 'user_id');
    } 

    public function targets()
    {
        return $this->hasMany('App\Models\UserTarget', 'user_id');
    } 

    public function target()
    {
        return $this->hasMany('App\Models\UserTarget', 'user_id')->first();
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
        $user = $query->create(array_merge($request, ['username' => $username, 'password' => bcrypt('eastwest')]));
        $user->profile()->create(array_merge($request,['added_by' => \Auth::user()->id]));
        if($request['role'] == 'Group Leader'){
            foreach($request['region_code'] as $region){
                $user->assignments()->create(['region_code' => $region['code']]);
            }
        }
        if($request['role'] == 'Team Leader'){
            $user->assignments()->create($request);
        }
        
        
        // ($request['role'] == 'Teacher') ? $user->employee()->create($request) : $user->specialist()->create($request);
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
