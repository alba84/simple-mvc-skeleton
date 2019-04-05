<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $name;

    public $timestamps = ['created_at', 'updated_at'];

    public $fillable = ['email', 'first_name', 'last_name'];
}