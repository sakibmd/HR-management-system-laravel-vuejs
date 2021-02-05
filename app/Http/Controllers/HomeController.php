<?php

namespace App\Http\Controllers;

use App\Record;
use App\User;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function topFiveEmployee()
    {
        $now = Carbon::now();
        $now = $now->format('F Y');

        $getTopFive = Record::orderBy('leave', 'asc')
            ->orderBy('working_hour_per_day', 'desc')
            ->orderBy('absents', 'asc')
            ->where('month', $now)
            ->take(5)->get();
        return view('topFiveEmployee', compact('getTopFive'));
    }

    public function ourTeam()
    {
        $ourTeam = User::where('isapproved', 'approved')->where('role_id', 2)->get();
        return view('ourTeam', compact('ourTeam'));
    }
}
