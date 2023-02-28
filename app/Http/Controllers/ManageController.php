<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Item;
use App\Models\Assign;
use App\Models\Designation;
use App\Models\Category;

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

    public function transfer_item($id)
    {
        $this->data['items'] = Item::get();
        $this->data['assigns'] = Assign::get();
        $this->data['designations'] = Designation::get();
        $this->data['categories'] = Category::get();
        $this->data['item'] = Inventory::find($id);
        return view('backend.admin.manageTransferSelect', $this->data);
    }
    public function transfer_update(Request $request)
    {
        $id = $_GET['id'];
        $assign_id = $_GET['assign_id'];
        $designation_id = $_GET['designation_id'];
        $bundled_to = $_GET['bundled_to'];

        $data = Inventory::find($id);
        $data->assign_id = $assign_id;
        $data->designation_id = $designation_id;
        $data->bundled_to = $bundled_to;
        $data->update();

        return redirect()->back()->with('transfer_updated', 'Item has been transfered successfully!');
    }


    public function scheduling()
    {
        $this->data['items'] = Item::get();
        return view('backend.admin.manageSchedulingIndex', $this->data);
    }
    public function scheduling_query()
    {
        $category_id = $_GET['id'];
        $this->data['category_id'] = $category_id;
        $this->data['items'] = Item::get();
        $this->data['assigns'] = Assign::get();
        $this->data['designations'] = Designation::get();
        $this->data['lists'] = Inventory::where('item_id', '=', $category_id)->get();
        return view('backend.admin.manageSchedulingQuery', $this->data);
    }
    public function scheduling_item($id)
    {
        $this->data['items'] = Item::get();
        $this->data['assigns'] = Assign::get();
        $this->data['designations'] = Designation::get();
        $this->data['categories'] = Category::get();
        $this->data['item'] = Inventory::find($id);
        return view('backend.admin.manageSchedulingSelect', $this->data);
    }

}
