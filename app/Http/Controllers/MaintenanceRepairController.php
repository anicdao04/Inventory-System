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
use App\Models\MaintenanceRepair;
use App\Models\Condition;
use App\Models\Task;

class MaintenanceRepairController extends Controller
{
    public function set()
    {
        $item_id = $_GET['item_id'];
        $date_scheduled = $_GET['date_scheduled'];
        $work_type = $_GET['work_type'];
        $note = $_GET['note'];

        $data = new MaintenanceRepair();
        $data->item_id = $item_id;
        $data->type = $work_type;
        $data->note = $note;
        $data->date_scheduled = $date_scheduled;
        $data->save();
        return redirect()->route('repair.list')->with('repair_created', 'Request for repair has been created successfully!');

    }

    public function list()
    {
        $this->data['lists'] = MaintenanceRepair::paginate(10);
        $this->data['inventories'] = Inventory::get();
        $this->data['tasks'] = Task::get();
        $this->data['items'] = Item::get();
        return view('backend.admin.manageRecordRepairIndex', $this->data);
    }

    public function item($id)
    {
        $this->data['items'] = Item::get();
        $this->data['tasks'] = Task::get();
        $this->data['inventories'] = Inventory::get();
        $this->data['assigns'] = Assign::get();
        $this->data['designations'] = Designation::get();
        $this->data['categories'] = Category::get();
        $this->data['conditions'] = Condition::get();
        $this->data['item'] = MaintenanceRepair::find($id);
        return view('backend.admin.manageRecordRepairSelect', $this->data);
    }

    public function repair_update(Request $request)
    {
        $item_id = $_GET['item_id'];
        $status = $_GET['status'];
        $data = MaintenanceRepair::find($item_id);
        $data->status = $status;
        $data->update();
        return redirect()->route('repair.list')->with('repair_updated', 'Request for repair has been updated!');

    }

}
