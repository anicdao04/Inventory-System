<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Category;
use App\Models\MaintenanceSchedule;
use App\Models\MaintenanceRepair;
use App\Models\MaintenanceReplacement;
use App\Models\MaintenanceTransfer;
use App\Models\User;

class AdminController extends Controller
{
    function index()
    {
        $this->data['inventory_count'] = Inventory::count();
        $this->data['schedulelistsCount'] = MaintenanceSchedule::count();
        $this->data['repairlistsCount'] = MaintenanceRepair::count();
        $this->data['transferlistsCount'] = MaintenanceTransfer::count();
        $this->data['replacementlistsCount'] = MaintenanceReplacement::count();
        $this->data['userCount'] = User::count();
        $this->data['categories'] = Category::get();
        return view('backend.admin.dashboard', $this->data);
    }
}
