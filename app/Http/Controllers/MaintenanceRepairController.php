<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MaintenanceRepair;
use App\Models\Inventory;
use App\Models\Item;
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
        // return redirect()->route('status.list')->with('schedule_created', 'Maintenance schedule has been created successfully!');

    }

    public function list()
    {
        $this->data['lists'] = MaintenanceRepair::paginate(10);
        $this->data['inventories'] = Inventory::get();
        $this->data['tasks'] = Task::get();
        $this->data['items'] = Item::get();
        return view('backend.admin.manageRecordRepairIndex', $this->data);
    }

    public function item()
    {
        return 'Coming soon..';
    }
}
