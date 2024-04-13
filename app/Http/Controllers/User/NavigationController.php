<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function index(){

        return view('user_navigation.index');
    }

    public function catalogo(){
        return view('user_navigation.catalogo');
    }

    public function noticias(){
        return view('user_navigation.noticias');
    }

    public function contacto(){
        return view('user_navigation.contacto');
    }
}
