<?php

namespace App\Entities;

use App\Entities\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genre extends Model
{
    use Uuid,
        SoftDeletes;
    protected $fillable = ['name', 'is_active'];

    protected $keyType = 'string';

    public $incrementing = false;
}
