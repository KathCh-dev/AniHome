<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //Permet d'afficher la homepage
    public function homepage(){

        return view('homepage');
    }
}
