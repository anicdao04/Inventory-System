<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MaintenanceSchedule;
use App\Models\Inventory;
use App\Models\Item;
use App\Models\Assign;
use App\Models\Designation;
use App\Models\Category;
use Carbon\Carbon;

class MaintenanceScheduleController extends Controller
{
    public function set()
    {
        $item_id = $_GET['item_id'];
        $date_scheduled = $_GET['date_scheduled'];
        $work_type = $_GET['work_type'];
        $note = $_GET['note'];
        $date_today = date("Y/m/d");

        $scheduled = Carbon::createFromDate($date_scheduled);
        $today = Carbon::createFromDate($date_today);

    
        if($scheduled == $today)
            {
                $data = new MaintenanceSchedule();
                $data->item_id = $item_id;
                $data->type = $work_type;
                $data->note = $note;
                $data->is_overdue = 1;
                $data->date_scheduled = $date_scheduled;
                $data->date_requested = $date_today;
                $data->save();
                return redirect()->route('status.list')->with('schedule_created', 'Maintenance schedule has been created successfully!');
            }
        elseif($scheduled < $today)
            {
                return redirect()->back()->with('schedule_invalid', 'Unable to set maintenance from previous date schedule');
            }
        else
            {
                $data = new MaintenanceSchedule();
                $data->item_id = $item_id;
                $data->type = $work_type;
                $data->note = $note;
                $data->is_overdue = 2;
                $data->date_scheduled = $date_scheduled;
                $data->date_requested = $date_today;
                $data->save();
                return redirect()->route('status.list')->with('schedule_created', 'Maintenance schedule has been created successfully!');
            }
    }

    public function list()
    {
        $date_today = date("Y/m/d");
        $overdue = MaintenanceSchedule::whereDate('date_scheduled', '<', $date_today)->update(['is_overdue' => '0']);
        $duetoday = MaintenanceSchedule::whereDate('date_scheduled', '=', $date_today)->update(['is_overdue' => '1']);
        $notdue = MaintenanceSchedule::whereDate('date_scheduled', '>', $date_today)->update(['is_overdue' => '2']);

        // $this->data['inventories'] = Inventory::where('is_active', '=', '1')->orderBy('item_id', 'asc')->paginate(5);
        $this->data['lists'] = MaintenanceSchedule::paginate(10);
        $this->data['inventories'] = Inventory::get();
        $this->data['items'] = Item::get();
        $this->data['assigns'] = Assign::get();
        return view('backend.admin.manageStatusList', $this->data);
    }

    public function item($id)
    {
        $this->data['items'] = Item::get();
        $this->data['assigns'] = Assign::get();
        $this->data['designations'] = Designation::get();
        $this->data['lists'] = Inventory::get();

        $this->data['item'] = MaintenanceSchedule::find($id);
        return view('backend.admin.manageStatusUpdate', $this->data);
    }
    public function status_update(Request $request)
    {
        $item_id = $_GET['item_id'];
        $status = $_GET['status'];

        $data = MaintenanceSchedule::find($item_id);
        $data->status = $status;
        $data->update();
        return redirect()->route('status.list')->with('status_updated', 'Maintenance request has been updated!');

    }
}
