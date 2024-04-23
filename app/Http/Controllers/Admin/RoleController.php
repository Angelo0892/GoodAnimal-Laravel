<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index(Request $request){

        $searchRole = trim($request->searchRole);
        $roles = Role::where('name', 'LIKE', '%' . $searchRole . '%')->paginate(8);

        return view('admin.role.index' , compact('roles', 'searchRole'));
    }

    public function create(){

        $permissions = Permission::all();
        return view("admin.role.create", compact('permissions'));
    }

    public function show(Role $role){
        return view('admin.role.show', compact('role'));
    }

    public function modify(Role $role){

        $permissions = Permission::all();

        return view('admin.role.modify', compact('role', 'permissions'));
    }

    //Funciones que no se muestran

    public function store(Role $role, Request $request){

        $request->validate([
            'name' => 'required'
        ], [
            'required' => 'El campo debe de ser llenado'
        ]);

        $role = Role::create($request->all());

        $role->permissions()->sync($request->permissions);

        return redirect()->route('admin.role.index');
    }

    public function update(Role $role, Request $request){

        $request->validate([
            'name' => 'required'
        ], [
            'required' => 'El campo debe de ser llenado'
        ]);

        $role->update([
            'name' => $request->name,
        ]);
        $role->permissions()->sync($request->permissions);

        return redirect()->route('admin.role.index');
    }

    public function destroy(Role $role){
        $role->delete();

        return redirect()->route('admin.role.index');
    }
}
