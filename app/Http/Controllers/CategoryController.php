<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $this->data['category_count'] = Category::count();
        $this->data['categories'] = Category::orderBy('name', 'asc')->paginate(5);
        return view('backend.admin.categoryIndex', $this->data);
    }
    public function create()
    {
        return view('backend.admin.categoryCreate');
    }
    public function store(Request $request)
    {
        $data = new Category();
        $data->name = $request->input('name');
        $data->save();
        return redirect()->route('category.index')->with('category_created', 'Category has been created successfully!');
    }
    public function modify($id)
    {
        $this->data['category'] = Category::find($id);
        return view('backend.admin.categoryEdit', $this->data);
    }
    public function update(Request $request, $id)
    {
        $data = Category::find($id);
        $data->name = $request->input('name');
        $data->update();       
        return redirect()->route('category.index')->with('category_updated', 'Category has been updated successfully!');
    }
}
