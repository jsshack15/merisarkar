<?php
namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Auth\Authenticable as AuthenticableTrait;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
class User extends Basemodel implements AuthenticatableContract, AuthorizableContract,CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;
 protected $fillable = ['name','adhaar','contact', 'address','email', 'password'];
public static $rules=array(
'name'=>'required|min:2|alpha_dash',
'contact'=>'required|min:10|max:10',
'email'=>'required|unique:users',
'password'=>'required|min:4|confirmed',
'password_confirmation'=>'required|min:4'
);

}
?>