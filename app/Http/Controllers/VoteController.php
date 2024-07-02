<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use App\Models\Pemilihan;
use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index()
    {
        $data = Kandidat::all();

        return view("users.vote", compact("data"));
    }


    public function create_action(Request $request)
    {

        $data = [
            "name" => $request->name,
            "kandidats_id" => $request->kandidats_id,
            "tanggal" => now(),

        ];

        Pemilihan::create($data);

        return redirect('logout');
    }


    // public function home()
    // {

    //     return view("users.home", compact("data"));
    // }
}
