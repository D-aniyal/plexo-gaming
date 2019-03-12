<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        $user = User::find(Auth::user()->id);

        $user->game_tags = json_decode($user->game_tags);
        if (empty($user->game_tags)) {
            $user->game_tags = array_fill(0, 4, '');
        }

        $user->social_accounts = json_decode($user->social_accounts);
        if (empty($user->social_accounts)) {
            $user->social_accounts = array_fill(0, 4, '');
        }

        return view('user.profile', compact('user'));
    }

    public function save_profile(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->game_tags = json_encode($request->game_tags);
        $user->social_accounts = json_encode($request->social_accounts);
        $user->payment_info = $request->payment_info;
        $user->save();

        return redirect()->back();
    }

    public function generalprofile()
    {
        $user = User::find(Auth::user()->id);
        return view('user.generalprofile', compact('user'));
    }

    public function save_generalprofile(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->psn = $request->psn;
        $user->timezone = $request->timezone;
        if ( ! empty($request->password) ) {
            $user->password = bcrypt($request->password);
        }
        $user->membership_status = $request->membership_status;
        $user->save();

        return redirect()->back();
    }
}
