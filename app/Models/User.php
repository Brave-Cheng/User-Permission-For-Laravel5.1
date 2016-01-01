<?php
namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use Zizaco\Entrust\Traits\EntrustUserTrait;


class User extends Model implements AuthenticatableContract,
                                    CanResetPasswordContract
{
    //https://github.com/Zizaco/entrust/issues/401
    use Authenticatable, CanResetPassword;

    use EntrustUserTrait; // add this trait to your user model

    protected $table = 'users';
}
