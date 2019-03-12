<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamecategoryController extends Controller
{
    public function gamecategory(){
        return view('pages.gamecategory');
    }
}
