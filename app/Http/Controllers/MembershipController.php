<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserArticles;
use App\Models\UserVideos;
use Illuminate\Support\Facades\Auth;

class MembershipController extends Controller
{
    public function index()
    {
        return view('membership', [
            "title" => "Membership"
        ]);
    }

    public function getLevel($level)
    {
        if ($level == 'A') {
            $level = 1;
        } else if ($level == 'B') {
            $level = 2;
        } else {
            $level = 3;
        }

        return $level;
    }

    public function upgrade(Request $request, string $id)
    {
        $this->validate($request, [
            'level' => 'required'
        ]);

        $previousLevel = $this->getLevel(Auth::user()->level);
        $newLevel = $this->getLevel($request->get('level'));

        if ($newLevel < $previousLevel) {
            UserArticles::where('id_user', '=', $id)->delete();
            UserVideos::where('id_user', '=', $id)->delete();
        }

        $user = User::find($id);
        $user->level = $request->get('level');
        $user->save();

        return redirect(route('home'));
    }
}
