<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function OngoingEventindex()
    {
        $ongoingevents = Event::where('Status','1')->where('raised_fund','>','0')->orderBy('created_at','desc')->get();
        return view('admin.event-info.ongoing-event.index')->with('ongoingevents',$ongoingevents);
    }

    public function UpcomingEventindex()
    {
        $upcomingevents = Event::where('Status','1')->where('raised_fund','=','0')->orderBy('created_at','desc')->get();
        return view('admin.event-info.upcoming-event.index')->with('upcomingevents',$upcomingevents);
    }

    public function CompletedEventindex()
    {
        $completedevents = Event::orderBy('created_at','desc')->get();
        return view('admin.event-info.completed-event.index')->with('completedevents',$completedevents);
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
    public function destroyongoingevent($id)
    {
        $ongoingevents = Event::find($id);
        $ongoingevents->delete();

        return back()->with('flash_message','Event has been deleted successfully!');
    }

    public function destroyupcomingevent($id)
    {
        $upcomingevents = Event::find($id);
        $upcomingevents->delete();

        return back()->with('flash_message','Event has been deleted successfully!');
    }

    public function destroycompletedevent($id)
    {
        $completedevents = Event::find($id);
        $completedevents->delete();

        return back()->with('flash_message','Event has been deleted successfully!');
    }
}
