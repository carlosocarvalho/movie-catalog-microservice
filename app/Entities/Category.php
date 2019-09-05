<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
     protected $fillable = ['name', 'description', 'is_active'];
}
