<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $guarded = [];

    public function products(){
        return $this->hasMany(Products::class);
    }
}
