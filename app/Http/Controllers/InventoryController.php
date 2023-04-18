<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InventoryRequest;
use App\Models\Inventory;
use App\Models\Assign;
use App\Models\Category;
use App\Models\Designation;
use App\Models\Item;
use DB;

class InventoryController extends Controller
{
    public function index()
    {
        $this->data['categories'] = Category::get();
        $this->data['designations'] = Designation::get();
        $this->data['assigns'] = Assign::get();
        $this->data['items'] = Item::get();
        $this->data['inventory_count'] = Inventory::count();
        $this->data['inventory_active'] = Inventory::where('is_active', '=', '1')->count();
        $this->data['inventory_inactive'] = Inventory::where('is_active', '=', '0')->count();
        $this->data['inventories'] = Inventory::where('is_active', '=', '1')->orderBy('item_id', 'asc')->paginate(5);
        return view('backend.admin.inventoryIndex', $this->data);
    }
    public function create()
    {
        $this->data['assigns'] = Assign::get();
        $this->data['items'] = Item::get();
        $this->data['categories'] = Category::get();
        $this->data['destinations'] = Designation::get();
        $this->data['item_count'] = Inventory::count();
        return view('backend.admin.inventoryCreate', $this->data);
    }
    public function store(InventoryRequest $request)
    {
        
        $name = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('uploads/images/inventory/', $name);

        $data = new Inventory();
        $data->item_code = $request->input('item_code');
        $data->serial_no = $request->input('serial_no');
        $data->color = $request->input('color');
        $data->assign_id = $request->input('assign_id');
        $data->designation_id = $request->input('designation_id');
        $data->warranty = $request->input('warranty');
        $data->image = $name;
        $data->item_id = $request->input('item_id');
        $data->category_id = $request->input('category_id');
        $data->bundled_to = $request->input('bundled_to');
        $data->date_purchased = $request->input('date_purchased');
        $data->or_no = $request->input('or_no');
        $data->description = $request->input('description');
        $data->supplier_name = $request->input('supplier_name');
        $data->supplier_address = $request->input('supplier_address');
        $data->supplier_contact = $request->input('supplier_contact');
        $data->save();
        return redirect()->route('inventory.index')->with('item_created', 'New item has been created successfully!');
    }
    
    public function preview($id)
    {
        $this->data['categories'] = Category::get();
        $this->data['assigns'] = Assign::get();
        $this->data['items'] = Item::get();
        $this->data['designations'] = Designation::get();
        $this->data['inventory'] = Inventory::find($id);
        return view('backend.admin.inventoryPreview', $this->data);
    }
    public function modify($id)
    {
        $this->data['categories'] = Category::get();
        $this->data['assigns'] = Assign::get();
        $this->data['designations'] = Designation::get();
        $this->data['items'] = Item::get();
        $this->data['inventory'] = Inventory::find($id);
        return view('backend.admin.inventoryEdit', $this->data);
    }
    public function update(Request $request, $id)
    {
        
        if($request->hasfile('image')){
            $name = $request->file('image')->getClientOriginalName();
            $request->file('image')->move('uploads/images/inventory/', $name);

            $data = Inventory::find($id);
            $data->item_code = $request->input('item_code');
            $data->serial_no = $request->input('serial_no');
            $data->color = $request->input('color');
            $data->assign_id = $request->input('assign_id');
            $data->designation_id = $request->input('designation_id');
            $data->warranty = $request->input('warranty');
            $data->image = $name;
            $data->item_id = $request->input('item_id');
            $data->category_id = $request->input('category_id');
            $data->bundled_to = $request->input('bundled_to');
            $data->date_purchased = $request->input('date_purchased');
            $data->or_no = $request->input('or_no');
            $data->description = $request->input('description');
            $data->supplier_name = $request->input('supplier_name');
            $data->supplier_address = $request->input('supplier_address');
            $data->supplier_contact = $request->input('supplier_contact');
            $data->update();
        }
        else{
            $data = Inventory::find($id);
            $data->item_code = $request->input('item_code');
            $data->serial_no = $request->input('serial_no');
            $data->color = $request->input('color');
            $data->assign_id = $request->input('assign_id');
            $data->designation_id = $request->input('designation_id');
            $data->warranty = $request->input('warranty');
            $data->item_id = $request->input('item_id');
            $data->category_id = $request->input('category_id');
            $data->bundled_to = $request->input('bundled_to');
            $data->date_purchased = $request->input('date_purchased');
            $data->or_no = $request->input('or_no');
            $data->description = $request->input('description');
            $data->supplier_name = $request->input('supplier_name');
            $data->supplier_address = $request->input('supplier_address');
            $data->supplier_contact = $request->input('supplier_contact');
            $data->update();
        }
        return redirect()->route('inventory.index')->with('item_updated', 'Item has been updated successfully!');
    }

    public function query()
    {
        $assign_id = $_GET['assign_id'];
        $designation_id = $_GET['designation_id'];

        $this->data['categories'] = Category::get();
        $this->data['designations'] = Designation::get();
        $this->data['assigns'] = Assign::get();
        $this->data['results'] = Inventory::where('assign_id', '=', $assign_id)->where('designation_id', '=', $designation_id)->paginate(5);
        $this->data['result_count'] = Inventory::where('assign_id', '=', $assign_id)->where('designation_id', '=', $designation_id)->count();
        $this->data['items'] = Item::get();
        return view('backend.admin.inventoryQuery', $this->data);
    }

}
