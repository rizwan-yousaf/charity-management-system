<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Event;
use App\EventDonation;
use App\GeneralDonation;
use App\Blog;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() {
        $this->middleware(['auth', 'isAdmin']); 
    }

    public function index()
    {
        $total_donors = User::where('register_as','donor')->where('register_as','Donor')->count();
        $total_receiver = User::where('register_as','receiver')->count();
        $total_events = Event::count();
        $pending_event = Event::where('Status', Null)->count();
        $approved_event = Event::where('Status','1')->count();
        $rejected_event = Event::where('Status','2')->count();
        $completed_event = Event::whereColumn('raised_fund','>=','Fund')->count();
        $ongoing_event = Event::where('Status','1')->whereColumn('raised_fund','<','Fund')->count();
        $success_stories = Event::where('Transfer_Fund','1')->count();
        $total_blogs = Blog::count();
        $event_donation = EventDonation::sum('Payment');
        $general_donation = GeneralDonation::sum('Payment');

        return view('admin.index',compact('total_donors','total_receiver','total_events','pending_event','approved_event','rejected_event','completed_event','ongoing_event','success_stories','total_blogs','event_donation','general_donation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
