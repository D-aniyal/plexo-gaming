<?php

namespace App\Http\Controllers;

use App\Category;
use App\Game;
use App\Platform;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    public function index()
    {
        return view('tournament.index');
    }

    public function set_platform(Request $request)
    {
        $platform = Platform::where("slug", $request->slug)->first();
        session(['tournament.platform' => $platform]);
        return redirect(url('tournament/category'));
    }

    public function category()
    {
        return view('tournament.category');
    }

    public function set_category(Request $request)
    {
        $category = Category::where("slug", $request->slug)->first();
        session(['tournament.category' => $category]);
        return redirect(url('tournament/games'));
    }

    public function games()
    {
        $platform = session("tournament.platform");
        $category = session("tournament.category");

        $games = Game::where([
            "platform_id" => $platform->id,
            "category_id" => $category->id
        ])->get();

        return view('tournament/games', compact('platform', 'category', 'games'));
    }
}
