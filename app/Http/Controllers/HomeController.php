<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\EventDonation;
use App\GeneralDonation;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_event = Event::where('User_id',auth()->user()->id)->count();
        $approved_event = Event::where('User_id',auth()->user()->id)->where('Status','1')->count();
        $rejected_event = Event::where('User_id',auth()->user()->id)->where('Status','2')->count();
        $pending_event = Event::where('User_id',auth()->user()->id)->where('Status', Null)->count();
        $completed_event = Event::where('User_id',auth()->user()->id)->whereColumn('raised_fund','>=','Fund')->count();
        $ongoing_event = Event::where('User_id',auth()->user()->id)->whereColumn('raised_fund','<','Fund')->count();
        $event_donation = EventDonation::where('User_id',auth()->user()->id)->sum('Payment');
        $general_donation = GeneralDonation::where('User_id',auth()->user()->id)->sum('Payment');

        return view('users-panel.partials.home', compact('total_event','approved_event','rejected_event','pending_event','completed_event','ongoing_event','event_donation','general_donation'));
    }
}
