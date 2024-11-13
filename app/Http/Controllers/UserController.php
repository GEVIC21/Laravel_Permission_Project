<?php

namespace App\Http\Controllers;

use App\Models\PermissionRoleModel;
use App\Models\RoleModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function list()
    {

        $data['getRecord'] = User::getRecord();
        return view('panel.user.list',$data);
    }

    public function add()
    {
        $data['getRole'] = RoleModel::getRecord();
        return view('panel.user.add',$data);
    }

    public function insert(Request $request){
        request()->validate([
            'email' => 'required|email|unique:users'
        ]);

        $user = new User;
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->role_id = trim($request->role_id);
        $user->save();

        return redirect()->route("user.list")->with('success','Utilisateur enregistré avec success');

    }

    public function edit($id){
        $data['getRecord'] = User::getSingle($id);
        $data['getRole'] = RoleModel::getRecord();
        return view('panel.user.edit', $data);

    }

    public function update(Request $request, $id){


        $user = User::getSingle($id);
        $user->name = trim($request->name);
        if(!empty($request->password))
        {
            $user->password = Hash::make($request->password);
        }

        $user->role_id = trim($request->role_id);
        $user->save();

        return redirect()->route("user.list")->with('success','Utilisateur mise à jour avec success');

    }

    public function delete($id){

        // dd($id);
        $delete = User::find($id);
        $delete->delete();

        return redirect()->route('user.list')->with('success','User deleted successfully');
    }
}
