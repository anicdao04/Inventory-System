<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Assign;

class InventoryController extends Controller
{
    public function index()
    {
        $this->data['inventory_count'] = Inventory::count();
        $this->data['inventories'] = Inventory::where('is_active', '=', '1')->orderBy('item_name', 'asc')->paginate(5);
        return view('backend.admin.inventoryIndex', $this->data);
    }
    public function create()
    {
        $this->data['assigns'] = Assign::get();
        return view('backend.admin.inventoryCreate', $this->data);
    }
    public function store(Request $request)
    {
        $name = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('uploads/images/inventory/', $name);

        $data = new Inventory();
        $data->item_code = $request->input('item_code');
        $data->serial_no = $request->input('serial_no');
        $data->color = $request->input('color');
        $data->quantity = $request->input('quantity');
        $data->assign_id = $request->input('assign_id');
        $data->designation_id = $request->input('designation_id');
        $data->warranty = $request->input('warranty');
        $data->image = $name;
        $data->item_name = $request->input('item_name');
        $data->category_id = $request->input('category_id');
        $data->bundled_to = $request->input('bundled_to');
        $data->date_purchased = $request->input('date_purchased');
        $data->or_no = $request->input('or_no');
        $data->description = $request->input('description');

        $data->save();
        return redirect()->route('inventory.index')->with('item_created', 'New item has been created successfully!');
    }

    public function preview($id)
    {
        $this->data['inventory'] = Inventory::find($id);
        return view('backend.admin.inventoryPreview', $this->data);
    }
}
