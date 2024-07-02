<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $Users = [
            "kandidats" => User::where('role', 'kandidat')->first(),
            "getkandidats" => Kandidat::all()

        ];


        return view('admin.dashboard', $Users);
    }
}
