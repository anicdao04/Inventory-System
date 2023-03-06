<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condition;

class ConditionController extends Controller
{
    public function index()
    {
        $this->data['condition_count'] = Condition::count();
        $this->data['conditions'] = Condition::orderBy('name', 'asc')->paginate(5);
        return view('backend.admin.conditionIndex', $this->data);
    }
    public function create()
    {
        return view('backend.admin.conditionCreate');
    }
    public function store(Request $request)
    {
        $data = new Condition();
        $data->name = $request->input('name');
        $data->save();
        return redirect()->route('condition.index')->with('condition_created', 'New condition has been created successfully!');
    }
    public function modify($id)
    {
        $this->data['condition'] = Condition::find($id);
        return view('backend.admin.conditionEdit', $this->data);
    }
    public function update(Request $request, $id)
    {
        $data = Condition::find($id);
        $data->name = $request->input('name');
        $data->update();       
        return redirect()->route('condition.index')->with('condition_updated', 'Condition has been updated successfully!');
    }
}
