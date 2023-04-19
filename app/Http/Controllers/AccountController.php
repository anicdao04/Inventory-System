<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\AccountRequest;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index()
    {
        $this->data['accounts'] = User::get();
        return view('backend.admin.accountIndex', $this->data);
    }
    public function create()
    {
        return view('backend.admin.accountCreate');
    }

    public function store(AccountRequest $request)
    {
        $data = new User();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->password = Hash::make($request->input('password'));
        $data->role = 1;
        $data->status = 1;
        $data->is_admin = $request->input('is_admin');
        $data->save();
        return redirect()->route('account.index')->with('account_created', 'New account has been created successfully!');
    }
    public function modify($id)
    {
        $this->data['account'] = User::find($id);
        return view('backend.admin.accountEdit', $this->data);
    }
    public function update(Request $request, $id)
    {
        $data = User::find($id);
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->password = Hash::make($request->input('password'));
        $data->role = 1;
        $data->status = 1;
        $data->is_admin = $request->input('is_admin');
        $data->update();       
        return redirect()->route('account.index')->with('account_updated', 'Account has been updated successfully!');
    }

    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('account.index')->with('account_deleted', 'Account has been deleted successfully!');
    }
}
