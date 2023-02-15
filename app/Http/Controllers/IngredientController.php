<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;

class IngredientController extends Controller
{
    public function index()
    {
        $this->data['ingredients_count'] = Ingredient::where('status', '=', '1')->count();
        $this->data['ingredients'] = Ingredient::where('status', '=', '1')->orderBy('name', 'asc')->paginate(5);
        return view('backend.admin.ingredientIndex', $this->data);
    }
    public function create()
    {
        return view('backend.admin.ingredientCreate');
    }
    public function store(Request $request)
    {
        $data = new Ingredient();
        $data->name = $request->input('name');
        $data->uom = $request->input('uom');
        $data->save();
        return redirect()->route('ingredient.index')->with('ingredient_created', 'New ingredient has been created');
    }
}
