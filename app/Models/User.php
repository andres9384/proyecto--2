<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table ="users";
    protected $primaryKey="id";
    protected $filltable=['name','lastname','emial','password'];
    protected $hidden=['password'];
}
