<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        return view('backend.admin.inventoryIndex');
    }
    public function create()
    {
        return view('backend.admin.inventoryCreate');
    }
}
