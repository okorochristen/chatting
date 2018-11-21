<?php

namespace App;
use\User;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded=['id'];
    // this the name of the TABLE
    protected $table='profiles';
// for  fillables
    protected $fillable = [
        'user_id', 'name', 'email', 'bio','profile_image','dob','country','phone_no'
    ];



}
