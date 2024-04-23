<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index(Request $request){

        $searchUser = trim($request->searchUser);
        $users = User::where('name', 'LIKE', '%' . $searchUser . '%')->paginate(8);

        return view("admin.user.index", compact('users', 'searchUser'));
    }

    public function create(){
        $roles = Role::all();
        return view('admin.user.create', compact('roles'));
    }

    public function modify(User $user){

        $roles = Role::all();
        return view('admin.user.modify', compact('user', 'roles'));
    }

    public function show(User $user){

        $roles = Role::all();
        return view('admin.user.show', compact('user', 'roles'));
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ], [
            'required' => 'El campo debe de ser llenado',
            'email' => 'El campo debe de ser un email',
            'unique' => 'El campo debe de ser unico'
        ]);

        $hashedPassword = Hash::make($request->password);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $hashedPassword;

        $user->save();

        $user->roles()->sync($request->roles);

        return redirect()->route('admin.user.index');
    }

    public function update(User $user, Request $request){

        $hashedPassword = Hash::make($request->password);

        if($request->change_password === 'generate'){

            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email,'.$user->id,
                'password' => 'required',
            ], [
                'required' => 'El campo debe de ser llenado',
                'email' => 'El campo debe de ser un email',
                'unique' => 'El campo debe de ser unico'
            ]);
    
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $hashedPassword,
            ]);

        }elseif($request->change_password === 'no_generate'){

            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email,'.$user->id,
            ], [
                'required' => 'El campo debe de ser llenado',
                'email' => 'El campo debe de ser un email',
                'unique' => 'El campo debe de ser unico'
            ]);

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        }

        $user->roles()->sync($request->roles);

        return redirect()->route('admin.user.index');
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->route('admin.user.index');
    }

    
}
