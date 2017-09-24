<?php

namespace App;

use Backpack\CRUD\CrudTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Backpack\Base\app\Notifications\ResetPasswordNotification as ResetPasswordNotification;

class User extends Authenticatable
{
    use Notifiable, CrudTrait, SoftDeletes;

    protected $table = 'users';

    protected $fillable = [ 'name', 'email', 'password' ];
    protected $hidden = [ 'password', 'remember_token' ];
    // protected $dates = ['deleted_at'];
    public $timestamps = true;

    public function roles()
    {
        return $this
            ->belongsToMany('App\Role')
            ->withTimestamps();
    }

    public function hasRole($role) {
        if ($this->roles()->where('slug', $role)->first()) {
            return true;
        }
        return false;
    }

    public function isAdmin() {
        return $this->hasRole('committee');
    }

    /**
     * Set crypted password
     *
     * @param  string  $password
     * @return void
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}
