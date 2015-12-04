<?php

namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class AssignedUser extends User implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
      use Authenticatable, Authorizable, CanResetPassword;

      /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'assigned_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['singleday', 'single_date', 'multidays', 'begin_date', 'end_date']; // attributen die je zelf mag aanpassen

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];// attributen d
}
