<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = "user_table";
    protected $fillable = ['nom', 'prenom', 'email', 'password'];
}
