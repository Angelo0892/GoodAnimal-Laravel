<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Information;
use App\Models\Subtitle;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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

        $subtitles = Subtitle::all()->where('id_information', $information->id);
        return view('admin.information.modify', compact('information', 'subtitles'));
    }

    public function show(Information $information){

        $subtitles = Subtitle::all()->where('id_information', $information->id);
        return view('admin.information.show', compact('information', 'subtitles'));
    }

    public function store(Request $request){

        $now = Carbon::now()->format('Y-m-d H:i:s');

        $information = new Information();
        $information->title = $request->title;
        $information->type = $request->type;
        $information->date_time = $now;
        $information->imagen = "123456789";

        $information->save();

        $user = Auth::user();
        $information->user()->attach($user->id, ['type' => "A", 'date_time' => $now]);

        foreach ($request->subtitle as $key => $subtitle) {
            Subtitle::create([
                'id_information' => $information->id,
                'subtitle' => $subtitle,
                'information' => $request->information[$key],
            ]);
        }

        return redirect()->route('admin.information.index');
    }

    public function update(Information $information, Request $request){
        $now = Carbon::now()->format('Y-m-d H:i:s');
        
        $information->update([
            'title' => $request->title,
            'type' => $request->type,
            'date_time' => $now
        ]);

        $user = Auth::user();
        $information->user()->attach($user->id, ['type' => "M", 'date_time' => $now]);

        $information->subtitles()->delete();
        
        foreach ($request->subtitle as $key => $subtitle) {
            Subtitle::create([
                'id_information' => $information->id,
                'subtitle' => $subtitle,
                'information' => $request->information[$key],
            ]);
        }

        return redirect()->route('admin.information.index');
    }

    public function destroy(Information $information){
        $information->delete();
        return redirect()->route('admin.information.index');
    }
}
