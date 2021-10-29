<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\EventDonation;
use Auth;
use DB;

class EventDonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //For user panel event donation view function
    {
        $eventdonate = EventDonation::where('User_id',auth()->user()->id)->get();
        return view('users-panel.event-donation.index')->with('eventdonate',$eventdonate);
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

    public function EventDonation(Request $request)
    {
         
        \Stripe\Stripe::setApiKey ( 'sk_test_51HwuCIBYduvu7eS02Uo6lpVD9FasaquI7zUgMUL64ElXZCEbDYpEDK34aXcOOEzpB7zmGVgsBAx7uCWZ3GIl17XR003yVhhz4g' );
        try {
            \Stripe\Charge::create ( array (
                "amount" => $request->input ( 'amount' ) * 100,
                "currency" => "PKR",
                "source" => $request->input ( 'stripeToken' ), // obtained with Stripe.js
                "description" => "Test payment." 
            ) );

            $donation = EventDonation::create([
            'User_id'=>Auth::user()->id,
            'User_Name'=>$request->input('name'),
            'User_Email'=>$request->input('email'),
            'User_Contact'=>$request->input('phone_no'),
            'Event_id'=>$request->input('event_id'),
            'Event_Title'=>$request->input('purpose'),
            'Card_Number'=>$request->input('card_no'),
            'Payment'=>$request->input('amount'),
            ]);
                    
            $event = Event::find($request->input('event_id'));
            $event->raised_fund =$event->raised_fund + $request->input('amount');

            DB::table('events')
                ->where('id', $request->input('event_id'))
                ->update(['raised_fund' => $event->raised_fund]);     
            
        } catch ( \Exception $e ) {
            
            dd('failed');
        }
        return redirect('/thankyou');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function EasypaisaDonation(Request $request)
    {
        $donation = EventDonation::create([
            'User_id'=>Auth::user()->id,
            'User_Name'=>$request->input('name'),
            'User_Email'=>$request->input('email'),
            'User_Contact'=>$request->input('phone_no'),
            'Event_id'=>$request->input('event_id'),
            'Event_Title'=>$request->input('purpose'),
            'Card_Number'=>$request->input('easypaisa_no'),
            'Payment'=>$request->input('amount'),
        ]);

        $event = Event::find($request->input('event_id'));
            $event->raised_fund =$event->raised_fund + $request->input('amount');

            DB::table('events')
                ->where('id', $request->input('event_id'))
                ->update(['raised_fund' => $event->raised_fund]);  

        return redirect('/commitnow');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $eventamount = Event::find($id);
        return view('front-end.partials.eventdonate')->with('eventamount',$eventamount);
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
