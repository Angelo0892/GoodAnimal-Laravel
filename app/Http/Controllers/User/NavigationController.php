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

    public function catalogo(Request $request){

        $searchDocument = trim($request->searchDocument);
        $informations = Information::where('type', 'C')
        ->where('title', 'LIKE', '%' . $searchDocument . '%')->paginate(12);
        
        return view('user_navigation.catalogo', compact('informations', 'searchDocument'));
    }

    public function noticias(Request $request){

        $searchDocument = trim($request->searchDocument);
        $informations = Information::where('type', 'N')
        ->where('title', 'LIKE', '%' . $searchDocument . '%')->paginate(4);
        return view('user_navigation.noticias', compact('informations', 'searchDocument'));
    }

    public function contacto(){
        return view('user_navigation.contacto');
    }

    public function animal(Information $information){

        $subtitles = Subtitle::all()->where('id_information', $information->id);
        return view('user_navigation.components.animal', compact('information', 'subtitles'));
    }
}
