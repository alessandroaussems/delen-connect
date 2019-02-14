<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;


    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * @param string|array $roles
     * @return null
     */
    public function authorizeRoles($roles)
    {
        if (is_array($roles)) {
            return $this->hasAnyRole($roles) || abort(401, 'This action is unauthorized.');
        }
        return $this->hasRole($roles) || abort(401, 'This action is unauthorized.');
    }

    /**
     * Check multiple roles
     * @param array $roles
     * @return null
     */
    public function hasAnyRole($roles)
    {
        return null !== $this->roles()->whereIn('name', $roles)->first();
    }

    /**
     * Check one role
     * @param string $role
     * @return null
     */
    public function hasRole($role)
    {
        return null !== $this->roles()->where('name', $role)->first();
    }

    /**
     * Check the current role for the given email
     */
    public function getRole($user_email)
    {

        $user = User::where('email', '=', $user_email)->first();
        $user_id = $user->id;

        $role = DB::table('roles')
            ->join('role_user', 'role_user.role_id', '=', 'roles.id')
            ->where('role_user.id', 'LIKE', $user_id)
            ->first();
        return $role->name;
    }

    /**
     * Check if the user is an Admin
     */
    public function isAdmin()
    {
        return $this->hasRole('admin');
    }

    /**
     * Check if the user is an Admin
     */
    public function isEditor()
    {
        return $this->hasRole('editor');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
