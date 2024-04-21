<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        
        $users = User::all();

        return view("admin.user.index", compact('users'));
    }

    public function create(){
        return view('admin.user.create');
    }

    public function modify(User $user){
        return view('admin.user.modify', compact('user'));
    }

    public function show(User $user){
        return view('admin.user.show', compact('user'));
    }

    public function store(Request $request){

        $hashedPassword = Hash::make($request->password);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $hashedPassword;

        $user->save();

        return redirect()->route('admin.user.index');
    }

    public function update(User $user, Request $request){

        $hashedPassword = Hash::make($request->password);

        if($request->change_password === 'generate'){
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $hashedPassword,
            ]);

        }elseif($request->change_password === 'no_generate'){

            $user->update([
                'name' => $request->name,
                'email' => $request->email
            ]);
        }

        return redirect()->route('admin.user.index');
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->route('admin.user.index');
    }

    
}
