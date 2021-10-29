<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\SuccessStory;

class TransferFundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $successstories = Event::where('Transfer_Fund' , '1')->orderBy('created_at','desc')->get();
        return view('admin.successful-stories.index')->with('successstories',$successstories);
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

    public function TransferByCard(Request $request)
    {
         
        \Stripe\Stripe::setApiKey ( 'sk_test_51HwuCIBYduvu7eS02Uo6lpVD9FasaquI7zUgMUL64ElXZCEbDYpEDK34aXcOOEzpB7zmGVgsBAx7uCWZ3GIl17XR003yVhhz4g' );
        try {
            \Stripe\Charge::create ( array (
                "amount" => $request->input ( 'amount' ) * 100,
                "currency" => "PKR",
                "source" => $request->input ( 'stripeToken' ), // obtained with Stripe.js
                "description" => "Test payment." 
            ) );

            $donation = SuccessStory::create([
            'User_id'=>$request->input('user_id'),
            'User_Name'=>$request->input('name'),
            'User_Email'=>$request->input('email'),
            'Event_id'=>$request->input('event_id'),
            'Event_Title'=>$request->input('purpose'),
            'Card_Number'=>$request->input('card_no'),
            'Payment'=>$request->input('amount'),
            ]);
                    
            $event = Event::find($request->input('event_id'));
            $approveVal = $request->approve;
            $User_Email = $request->input('email');
            $Admin_Email = $request->input('admin_email');
            if($approveVal=='on')
            {
                $approveVal=1;
                $details = [
                'title' => 'Mail From Smile-Charity.com.pk',
                'body' => 'Your Fund Request has been completed and funds are transferred to your account.Please Check your account!' 
                ];

                $event->Transfer_Fund=$approveVal;
                $event->save();

                \Mail::to($User_Email)->send(new \App\Mail\TestMail($details));
                
                return redirect('/view-completed-event')->with('flash_message','Fund has been Transfered successfully!');
            }else{
                $approveVal=2;
                $details = [
                'title' => 'Mail From Smile-Charity.com.pk',
                'body' => 'System error!....Fund Not transfered!!....Please check and try again!'
                ];
                
                $event->Transfer_Fund=$approveVal;
                $event->save();

                \Mail::to($Admin_Email)->send(new \App\Mail\TestMail($details));

                return redirect('/view-completed-event')->with('flash_message','System error!....Fund Not transfered!!....Please check and try again!'); 
            }    
            
        } catch ( \Exception $e ) {
            
            dd('failed');
        }
    }


    public function TransferByEasyPaisa(Request $request)
    {
        $donation = SuccessStory::create([
            'User_id'=>$request->input('user_id'),
            'User_Name'=>$request->input('name'),
            'User_Email'=>$request->input('email'),
            'Event_id'=>$request->input('event_id'),
            'Event_Title'=>$request->input('purpose'),
            'Card_Number'=>$request->input('easypaisa_no'),
            'Payment'=>$request->input('amount'),
        ]);

        $event = Event::find($request->input('event_id'));
        $approveVal = $request->approve;
        $User_Email = $request->input('email');
        $Admin_Email = $request->input('admin_email');
        if($approveVal=='on')
        {
            $approveVal=1;
            $details = [
            'title' => 'Mail From Smile-Charity.com.pk',
            'body' => 'Your Fund Request has been completed and funds are transferred to your account.Please Check your account!' 
            ];

            $event->Transfer_Fund=$approveVal;
            $event->save();

            \Mail::to($User_Email)->send(new \App\Mail\TestMail($details));
            
            return redirect('/view-completed-event')->with('flash_message','Fund has been Transfered successfully!');
        }else{
            $approveVal=2;
            $details = [
            'title' => 'Mail From Smile-Charity.com.pk',
            'body' => 'System error!....Fund Not transfered!!....Please check and try again!'
            ];
            
            $event->Transfer_Fund=$approveVal;
            $event->save();

            \Mail::to($Admin_Email)->send(new \App\Mail\TestMail($details));

            return redirect('/view-completed-event')->with('flash_message','System error!....Fund Not transfered!!....Please check and try again!'); 
        }
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
        $transferfund = Event::find($id);
        return view('front-end.partials.transferfund')->with('transferfund',$transferfund);    }

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
        $successstories = Event::find($id);
        $successstories->delete();

        return back()->with('flash_message','Success Stories has been deleted successfully!');
    }
}
