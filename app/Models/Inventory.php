<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Inventory extends Model
{
    use HasFactory;
    protected $table = "inventories";
    protected $fillables = ['item_code','serial_no','color', 'assign_id', 'designation_id', 'warranty', 'image', 'item_id', 'category_id', 'bundled_to', 'date_purchased', 'is_active', 'is_critical'];

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
