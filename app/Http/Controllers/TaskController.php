<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $this->data['task_count'] = Task::count();
        $this->data['tasks'] = Task::orderBy('name', 'asc')->paginate(5);
        return view('backend.admin.taskIndex', $this->data);
    }
    public function create()
    {
        return view('backend.admin.taskCreate');
    }
    public function store(Request $request)
    {
        $data = new Task();
        $data->name = $request->input('name');
        $data->save();
        return redirect()->route('task.index')->with('task_created', 'New task has been created successfully!');
    }
    public function modify($id)
    {
        $this->data['task'] = Task::find($id);
        return view('backend.admin.taskEdit', $this->data);
    }
    public function update(Request $request, $id)
    {
        $data = Task::find($id);
        $data->name = $request->input('name');
        $data->update();       
        return redirect()->route('task.index')->with('task_updated', 'Task has been updated successfully!');
    }
}
