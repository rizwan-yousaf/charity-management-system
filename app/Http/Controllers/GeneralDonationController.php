<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GeneralDonation;
use Auth;

class GeneralDonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() //For user panel donation view function
    {
        $generaldonate = GeneralDonation::where('User_id',auth()->user()->id)->get();
        return view('users-panel.general-donation.index')->with('generaldonate',$generaldonate);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front-end.partials.generaldonate');
    }

    public function GeneralDonation(Request $request)
    {
         
        \Stripe\Stripe::setApiKey ( 'sk_test_51HwuCIBYduvu7eS02Uo6lpVD9FasaquI7zUgMUL64ElXZCEbDYpEDK34aXcOOEzpB7zmGVgsBAx7uCWZ3GIl17XR003yVhhz4g' );
        try {
            \Stripe\Charge::create ( array (
                "amount" => $request->input ( 'amount' ) * 100,
                "currency" => "PKR",
                "source" => $request->input ( 'stripeToken' ), // obtained with Stripe.js
                "description" => "Test payment." 
            ) );

            $donation = GeneralDonation::create([
            'User_id'=>Auth::user()->id,
            'User_Name'=>$request->input('name'),
            'User_Email'=>$request->input('email'),
            'User_Contact'=>$request->input('phone_no'),
            'Purpose'=>$request->input('purpose'),
            'Card_Number'=>$request->input('card_no'),
            'Payment'=>$request->input('amount'),
            ]);
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

    public function storeEasypaisa(Request $request)
    {
        $donation = GeneralDonation::create([
            'User_id'=>Auth::user()->id,
            'User_Name'=>$request->input('name'),
            'User_Email'=>$request->input('email'),
            'User_Contact'=>$request->input('phone_no'),
            'Purpose'=>$request->input('purpose'),
            'Card_Number'=>$request->input('easypaisa_no'),
            'Payment'=>$request->input('amount'),
        ]);

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
