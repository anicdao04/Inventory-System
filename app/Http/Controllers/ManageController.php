<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Item;
use App\Models\Assign;
use App\Models\Designation;


class ManageController extends Controller
{
    public function index()
    {
        return view('backend.admin.manageIndex');
    }
    public function transfer()
    {
        $this->data['items'] = Item::get();
        return view('backend.admin.manageTransferIndex', $this->data);
    }

    public function transfer_query()
    {
        $category_id = $_GET['id'];
        $this->data['category_id'] = $category_id;
        $this->data['items'] = Item::get();
        $this->data['assigns'] = Assign::get();
        $this->data['designations'] = Designation::get();
        $this->data['lists'] = Inventory::where('item_id', '=', $category_id)->get();
        return view('backend.admin.manageTransferQuery', $this->data);
    }
}
