<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_contact = Contact::orderBy('created_at','desc')->get();
        return view('admin.contact-management.index')->with('all_contact',$all_contact);
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
        /*$user_id = Auth::user()->id;*/
                
        $contactus = new Contact;
        $contactus->Name = $request->input('c_name');
        $contactus->Email = $request->input('c_email');
        $contactus->Contact_No = $request->input('c_phone');
        $contactus->Subject = $request->input('c_subject');
        $contactus->Message = $request->input('c_message');
        
       /* $contactus->User_id= $user_id;*/

        $contactus->save();

        return redirect('/contact')->with('flash_message','Your Message Have Been Sent Successfully');
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

    public function ContactView(Request $request)
    {
        $contactus = Contact::find($request->id);
        $contactViewer = $request->view;
        $User_Email = $request->c_email;
        if($contactViewer=='on')
        {
            $contactViewer=1;
            $details = [
            'title' => 'Mail From Smile-Charity.com.pk',
            'body' => 'Okay!! Dear User, I am working on an update, next time there will be no issue' 
            ];

            $contactus->Status=$contactViewer;
            $contactus->save();

            \Mail::to($User_Email)->send(new \App\Mail\TestMail($details));
            
            return back()->with('flash_message','Contact has been Read successfully!');
        }else{
            $contactViewer=2;
            $details = [
            'title' => 'Mail From Smile-Charity.com.pk',
            'body' => 'Most Welcome For Your Suggestion'
            ];
            
            $contactus->Status=$contactViewer;
            $contactus->save();

            \Mail::to($User_Email)->send(new \App\Mail\TestMail($details));

            return back()->with('flash_message','Contact has been Un-Read!'); 
        }
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
        $contactus = Contact::find($id);
        $contactus->delete();

        return back()->with('flash_message','Contact has been deleted successfully!');
    }
}
