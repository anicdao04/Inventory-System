<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Item;
use App\Models\Assign;
use App\Models\Designation;
use App\Models\Category;
use App\Models\MaintenanceSchedule;
use App\Models\MaintenanceReplacement;
use App\Models\Condition;

class ManageController extends Controller
{
    public function index()
    {
        $this->data['statusCount'] = MaintenanceSchedule::count();
        $this->data['replacementlistsCount'] = MaintenanceReplacement::count();
        return view('backend.admin.manageHome', $this->data);
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


    public function replacement()
    {
        $this->data['items'] = Item::get();
        return view('backend.admin.manageReplaceIndex', $this->data);
    }
    public function replacement_query()
    {
        $category_id = $_GET['id'];
        $this->data['category_id'] = $category_id;
        $this->data['items'] = Item::get();
        $this->data['assigns'] = Assign::get();
        $this->data['designations'] = Designation::get();
        $this->data['lists'] = Inventory::where('item_id', '=', $category_id)->get();
        return view('backend.admin.manageReplaceQuery', $this->data);
    }
    public function replacement_item($id)
    {
        $this->data['items'] = Item::get();
        $this->data['assigns'] = Assign::get();
        $this->data['designations'] = Designation::get();
        $this->data['categories'] = Category::get();
        $this->data['conditions'] = Condition::get();
        $this->data['item'] = Inventory::find($id);
        return view('backend.admin.manageReplacementSelect', $this->data);
    }

    public function replacement_update(Request $request)
    {
        $item_id = $_GET['item_id'];
        $condition = $_GET['condition'];
        $note = $_GET['note'];
        $date_today = date("Y/m/d");

        $find_item = Inventory::find($item_id);
        $find_item->is_active = 0;
        $find_item->update();

        $data = new MaintenanceReplacement();
        $data->item_id = $item_id;
        $data->condition_id = $condition;
        $data->note = $note;
        $data->date_created = $date_today;
        $data->save();
        return redirect()->route('replacement.query','?id=' . $item_id);
    }
    public function replacement_list()
    {
        $this->data['replacementlistsCount'] = MaintenanceReplacement::count();
        $this->data['replacementlists'] = MaintenanceReplacement::get();
        $this->data['inventories'] = Inventory::get();
        $this->data['items'] = Item::get();
        $this->data['conditions'] = Condition::get();
        return view('backend.admin.manageReplacementList', $this->data);
    }
    public function replacement_preview($id)
    {
        $this->data['item'] = MaintenanceReplacement::find($id);
        $this->data['inventories'] = Inventory::get();
        $this->data['items'] = Item::get();
        $this->data['assigns'] = Assign::get();
        $this->data['designations'] = Designation::get();

        $this->data['conditions'] = Condition::get();
        return view('backend.admin.manageReplacePreview', $this->data);
    }

}
