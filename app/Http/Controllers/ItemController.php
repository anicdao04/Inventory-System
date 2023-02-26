<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $this->data['item_count'] = Item::count();
        $this->data['items'] = Item::orderBy('name', 'asc')->paginate(5);
        return view('backend.admin.itemIndex', $this->data);
    }
    public function create()
    {
        return view('backend.admin.itemCreate');
    }
    public function store(Request $request)
    {
        $data = new Item();
        $data->name = $request->input('name');
        $data->save();
        return redirect()->route('item.index')->with('item_created', 'New Item has been created successfully!');
    }
    public function modify($id)
    {
        $this->data['item'] = Item::find($id);
        return view('backend.admin.itemEdit', $this->data);
    }
    public function update(Request $request, $id)
    {
        $data = Item::find($id);
        $data->name = $request->input('name');
        $data->update();       
        return redirect()->route('item.index')->with('item_updated', 'Item has been updated successfully!');
    }
}
