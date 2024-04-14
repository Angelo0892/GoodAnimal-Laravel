<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;
use Carbon\Carbon;

class InformationController extends Controller
{
    public function index(){
        
        $informations = Information::all();

        return view("admin.information.index", compact('informations'));
    }

    public function create(){
        return view('admin.information.create');
    }

    public function modify(Information $information){
        return view('admin.information.modify', compact('information'));
    }

    public function show(Information $information){
        return view('admin.information.show', compact('information'));
    }

    public function store(Request $request){

        $now = Carbon::now()->format('Y-m-d H:i:s');

        $information = new Information();
        $information->title = $request->title;
        $information->type = $request->type;
        $information->date_time = $now;
        $information->imagen = "123456789";

        $information->save();

        return redirect()->route('admin.information.index');
    }

    public function update(Information $information, Request $request){
        $now = Carbon::now()->format('Y-m-d H:i:s');
        
        $information->update([
            'title' => $request->title,
            'type' => $request->type,
            'date_time' => $now
        ]);
        return redirect()->route('admin.information.index');
    }

    public function destroy(Information $information){
        $information->delete();
        return redirect()->route('admin.information.index');
    }
}
