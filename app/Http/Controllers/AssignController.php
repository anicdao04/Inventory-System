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
        return redirect()->route('assign.index')->with('assign_created', 'Assign area has been created successfully!');
    }
    public function modify($id)
    {
        $this->data['assign'] = Assign::find($id);
        return view('backend.admin.assignEdit', $this->data);
    }
    public function update(Request $request, $id)
    {
        
        $data = Assign::find($id);
        $data->name = $request->input('name');
        $data->update();
            
        return redirect()->route('assign.index')->with('assign_updated', 'Assign area has been updated successfully!');
    }


}
