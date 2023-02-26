<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Designation;

class DesignationController extends Controller
{
    public function index()
    {
        $this->data['designation_count'] = Designation::count();
        $this->data['designations'] = Designation::orderBy('name', 'asc')->paginate(5);
        return view('backend.admin.designationIndex', $this->data);
    }
    public function create()
    {
        return view('backend.admin.designationCreate');
    }
    public function store(Request $request)
    {
        $data = new Designation();
        $data->name = $request->input('name');
        $data->save();
        return redirect()->route('designation.index')->with('designation_created', 'Designation has been created successfully!');
    }
    public function modify($id)
    {
        $this->data['designation'] = Designation::find($id);
        return view('backend.admin.designationEdit', $this->data);
    }
    public function update(Request $request, $id)
    {
        $data = Designation::find($id);
        $data->name = $request->input('name');
        $data->update();       
        return redirect()->route('designation.index')->with('designation_updated', 'Designation has been updated successfully!');
    }
}
