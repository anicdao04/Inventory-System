<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MaintenanceRepair;
use App\Models\MaintenanceSchedule;
use App\Models\MaintenanceReplacement;

class RecordController extends Controller
{
    public function index()
    {
        $this->data['replacementlistsCount'] = MaintenanceReplacement::count();
        $this->data['repairlistsCount'] = MaintenanceRepair::count();
        $this->data['schedulelistsCount'] = MaintenanceSchedule::count();
        return view('backend.admin.recordHome', $this->data);
    }
}
