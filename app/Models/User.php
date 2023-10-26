<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory,Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'name',
        'cognome',
        'residenza',
        'occupazione',
        'data_di_nascita',
        'role',
        'password', 
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'username',
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     public function getUsers(){
        return User::all();
     }

     public function getUserById($user_id){
        return User::where('id',$user_id)->get();
     }
    
     public function getUser(){
        return User::where('role','user')->get();
     }

     public function getStaff(){
        return User::where('role','staff')->get();
     }

     public function getUserId(){
        return User::select('id')->get();
     }
    
    public function hasRole($role) {
        $role = (array)$role;
        return in_array($this->role, $role);
    }

    public function getStaffById($id){
        return User::findOrfailUser($id);
    }

    public function findOrfailUser($id){
        return User::findOrFail($id);
    }

    public function getUserByUsername($username){
        return User::where('username', $username);
    }


    public function autos()
    {
        return $this->hasMany(Auto::class);
    }

}
