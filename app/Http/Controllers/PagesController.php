<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function login(){
        return view('pages.login');
    }
    public function signup(){
        return view('pages.signup');
    }
    public function support(){
        return view('pages.support');
    }
    public function findmatch(){
        return view('pages.findmatch');
    }
    public function shop(){
        return view('pages.shop');
    }
    public function bank(){
        return view('pages.bank');
    }
    public function leaderboard(){
        return view('pages.leaderboard');
    }
    public function wager(){
        return view('pages.wager');
    }
    public function tournament(){
        return view('pages.tournament');
    }
    public function profile(){
        return view('pages.profile');
    }
    public function match(){
        return view('pages.match');
    }
    public function viewteam(){
        return view('pages.viewteam');
    }
    public function viewteam1(){
        return view('pages.viewteam1');
    }
    public function scoreprofile(){
        return view('pages.scoreprofile');
    }
    public function resultsubmittion(){
        return view('pages.resultsubmittion');
    }
    public function AllPlatform1(){
        return view('pages.AllPlatform1');
    }
    public function acceptmatch(){
        return view('pages.acceptmatch');
    }
    public function createteam(){
        return view('pages.createteam');
    }
    public function gamefilter(){
        return view('pages.gamefilter');
    }
    public function gameselection(){
        return view('pages.gameselection');
    }
    public function notification(){
        return view('pages.notification');
    }
    public function selectionslider(){
        return view('pages.selectionslider');
    }
    public function submittmatch(){
        return view('pages.submittmatch');
    }
    public function Tournament1(){
        return view('pages.Tournament1');
    }
    public function generalprofile(){
        return view('pages.generalprofile');
    }
    public function mockedlogin(){
        return view('pages.mockedlogin');
    }
}

