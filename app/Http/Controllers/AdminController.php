<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Category;

class AdminController extends Controller
{
    function index()
    {
        $this->data['inventory_count'] = Inventory::count();
        $this->data['categories'] = Category::get();
        return view('backend.admin.index', $this->data);
    }
}
