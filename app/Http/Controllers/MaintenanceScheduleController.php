<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MaintenanceSchedule;
use App\Models\Inventory;
use App\Models\Item;

class MaintenanceScheduleController extends Controller
{
    public function set()
    {
        $item_id = $_GET['item_id'];
        $date_scheduled = $_GET['date_scheduled'];
        $work_type = $_GET['work_type'];
        $note = $_GET['note'];
        $date_today = date("Y/m/d");

        $data = new MaintenanceSchedule();
        $data->item_id = $item_id;
        $data->type = $work_type;
        $data->note = $note;
        $data->date_scheduled = $date_scheduled;
        $data->date_requested = $date_today;
        $data->save();
        return redirect()->back()->with('schedule_created', 'Maintenance schedule has been created successfully!');
    }

    public function list()
    {
        $this->data['lists'] = MaintenanceSchedule::get();
        $this->data['inventories'] = Inventory::get();
        $this->data['items'] = Item::get();
        return view('backend.admin.manageStatusList', $this->data);
    }
}
