<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Event;
use App\User;
use Auth;

class EventManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_event = Event::orderBy('created_at','desc')->get();
        return view('admin.event-management.index')->with('all_event',$all_event);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        $users = User::all();
        return view('admin.event-management.create')->with('categories',$categories)->with('users',$users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $request->validate([
            'imgFile' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'imgProof' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $event = new Event;
        $event->Title = $request->input('title');
        $event->Description = $request->input('description');
        $event->Fund = $request->input('fund');
        $event->User_id = $request->input('user_id'); 
        $event->User_Name = $request->input('user_name');
        $event->User_Email = $request->input('user_email');
        $event->User_Contact = $request->input('contact_no');
        $event->Category_id = $request->input('category_id');
                      
        $Image =$request->file('imgFile');
        $name = time().'.'.$Image->getClientOriginalExtension();
        $desti =public_path('/uploads');
        $Image->move($desti,$name);
        $event->Image= $name;

        $Proof =$request->file('imgProof');
        $name = time().'.'.$Proof->getClientOriginalExtension();
        $desti =public_path('/uploads');
        $Proof->move($desti,$name);
        $event->Proof= $name;
        
        $event->save();

        return redirect('/showallevent')->with('flash_message','Your Event has been created successfully,but when approve from admin then will show on our website!');
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
        $categories= Categories::all();
        $users = User::all();
        $event= Event::find($id);
        return view('admin.event-management.edit')->with('categories' , $categories)->with('users',$users)->with('event',$event);
    }

    public function view($id)
    {
        $event= Event::find($id);
        return view('admin.event-management.view')->with('event',$event);
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
        $request->validate([
            'imgFile' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'imgProof' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $event = Event::find($id);
        $event->Title = $request->input('title');
        $event->Description = $request->input('description');
        $event->Fund = $request->input('fund');
        $event->User_id = $request->input('user_id'); 
        $event->User_Name = $request->input('user_name');
        $event->User_Email = $request->input('user_email');
        $event->User_Contact = $request->input('contact_no');
        $event->Category_id = $request->input('category_id');
        
        if($request->hasfile('imgFile'))
        {               
            $Image =$request->file('imgFile');
            $name = time().'.'.$Image->getClientOriginalExtension();
            $desti =public_path('/uploads');
            $Image->move($desti,$name);
            $event->Image= $name;
        }

        if($request->hasfile('imgProof'))
        {
            $Proof =$request->file('imgProof');
            $name = time().'.'.$Proof->getClientOriginalExtension();
            $desti =public_path('/uploads');
            $Proof->move($desti,$name);
            $event->Proof= $name;
        }
        
        $event->update();

        return redirect('/showallevent')->with('flash_message','Your Event has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eventadd = Event::find($id);
        $eventadd->delete();

        return back()->with('flash_message','Your Event has been deleted successfully!');
    }
}
