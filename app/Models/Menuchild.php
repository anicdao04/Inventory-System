<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menuchild extends Model
{
    use HasFactory;
    protected $table = "menuchildren";
    protected $fillables = ['category_id','name','image'];

    public function getNameAttribute($value)
    {
        return ucwords($value);
    }

}
