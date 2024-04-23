<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Information;
use App\Models\Subtitle;
use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function index(){

        return view('user_navigation.index');
    }

    public function catalogo(){

        $informations = Information::where('type', 'C')->take(12)->get();
        return view('user_navigation.catalogo', compact('informations'));
    }

    public function noticias(){

        $informations = Information::where('type', 'N')->take(12)->get();
        return view('user_navigation.noticias', compact('informations'));
    }

    public function contacto(){
        return view('user_navigation.contacto');
    }

    public function animal(Information $information){

        $subtitles = Subtitle::all()->where('id_information', $information->id);
        return view('user_navigation.components.animal', compact('information', 'subtitles'));
    }
}
