<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //
    public function roles() {
        return $this->belongsToMany('App\Role','user_role');
    }

    // check if user has a sub-role to any of $role
    public function hasSubRole($role) {
        if (!$role) return true; //check nothing

        // create array
        if (is_array($role)) {
            $roles=$role;
        } else {
            $roles=array($role);
        }
        // check roles
        foreach($this->roles() as $user_role) {
            foreach($roles as $role) {
                if ($role===$user_role || substr($user_role,0,strlen($role)+1)===$role.'/') {
                    return true;
                }
            }
        }
        return false;
    }

    // check if user has super-role to any of $role
    public function hasSuperRole($role) {
        // create array
        if (is_array($role)) {
            $roles=$role;
        } else {
            $roles=array($role);
        }
        // push super roles
        $len=count($roles);
        for ($i=0;$i<$len;$i++) {
            $segs=explode('/', $roles[$i]);
            $super=$segs[0];
            for ($j=1; $j<count($segs); $j++) {
                if (!in_array($super,$roles)) {
                    array_push($roles,$super);
                }
                $super.='/'.$segs[$j];
            }
        }
        // check roles
        foreach ($roles as $role) {
            if ($this->roles()->where('name',$role)->first()) {
                return true;
            }
        }
        return false;
    }

}
