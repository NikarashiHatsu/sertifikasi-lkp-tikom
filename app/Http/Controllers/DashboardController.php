<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\Schema;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        return view('dashboard', [
            'total_schema' => Schema::count(),
            'total_user' => User::count(),
            'total_participants' => Participant::count(),
        ]);
    }
}
