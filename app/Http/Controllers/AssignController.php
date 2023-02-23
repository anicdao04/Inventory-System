<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assign;

class AssignController extends Controller
{
    public function index()
    {
        $this->data['assign_count'] = Assign::count();
        $this->data['assigns'] = Assign::orderBy('name', 'asc')->paginate(5);
        return view('backend.admin.assignIndex', $this->data);
    }
    public function create()
    {
        return view('backend.admin.assignCreate');
    }
    public function store(Request $request)
    {
        $data = new Assign();
        $data->name = $request->input('name');
        $data->save();
        return redirect()->route('assign.index')->with('assign_created', 'Assign has been created successfully!');
    }
}
