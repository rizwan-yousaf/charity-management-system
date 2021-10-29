<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class ApprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function approval(Request $request)
    {
        $event = Event::find($request->id);
        $approveVal = $request->approve;
        $User_Email = $request->user_email;
        if($approveVal=='on')
        {
            $approveVal=1;
            $details = [
            'title' => 'Mail From Smile-Charity.com.pk',
            'body' => 'Your Event Have Been Approved Successfully' 
            ];

            $event->Status=$approveVal;
            $event->save();

            \Mail::to($User_Email)->send(new \App\Mail\TestMail($details));
            
            return back()->with('flash_message','Event has been Approved successfully!');
        }else{
            $approveVal=2;
            $details = [
            'title' => 'Mail From Smile-Charity.com.pk',
            'body' => 'Your Event Have Been Rejected'
            ];
            
            $event->Status=$approveVal;
            $event->save();

            \Mail::to($User_Email)->send(new \App\Mail\TestMail($details));

            return back()->with('flash_message','Event has been Rejected!'); 
        }
    }

    public function index()
    {
        //
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
