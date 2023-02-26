<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Inventory extends Model
{
    use HasFactory;

    public function getItemNameAttribute($value)
    {
        return ucwords($value);
    }
    public function getBundledToAttribute($value)
    {
        return ucwords($value);
    }
    public function getDescriptionAttribute($value)
    {
        return ucfirst($value);
    }
    public function getColorAttribute($value)
    {
        return ucfirst($value);
    }
    
}
