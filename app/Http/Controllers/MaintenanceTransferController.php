<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MaintenanceTransfer;
use App\Models\Inventory;
use App\Models\Item;
use App\Models\Assign;
use App\Models\Designation;

class MaintenanceTransferController extends Controller
{
    public function list()
    {
        $date_today = date("Y/m/d");
        // $overdue = MaintenanceSchedule::whereDate('date_scheduled', '<', $date_today)->update(['is_overdue' => '0']);
        // $duetoday = MaintenanceSchedule::whereDate('date_scheduled', '=', $date_today)->update(['is_overdue' => '1']);
        // $notdue = MaintenanceSchedule::whereDate('date_scheduled', '>', $date_today)->update(['is_overdue' => '2']);

        // $this->data['inventories'] = Inventory::where('is_active', '=', '1')->orderBy('item_id', 'asc')->paginate(5);
        $this->data['lists'] = MaintenanceTransfer::paginate(50);
        $this->data['inventories'] = Inventory::get();
        $this->data['items'] = Item::get();
        $this->data['assigns'] = Assign::get();
        $this->data['designations'] = Designation::get();
        return view('backend.admin.manageTransferList', $this->data);
    }
}
