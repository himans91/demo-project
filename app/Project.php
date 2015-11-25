<?php

namespace App;

//use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
/*use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;*/

class Project extends Model {

    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'projects';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'telephone', 'street', 'zippcode', 'city', 'startdate', 'enddate']; // attributen die je zelf mag aanpassen

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

    /* 
       Get the users associated with the projects
    */

    public function users()
    {
        return $this->belongsToMany('App\User', 'assigned_users', 'project_id', 'user_id')->withPivot('singleday', 'single_date', 'multidays', 'begin_date', 'end_date')->withTimestamps();
    }

}

