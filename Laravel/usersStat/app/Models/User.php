<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;


class User extends Model
{
    protected $fillable =['name','email'];
    protected $connection = 'mongodb';
    protected $collection = 'user';
  
}
