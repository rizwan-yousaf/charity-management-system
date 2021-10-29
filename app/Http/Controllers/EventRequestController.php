<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Event;
use Auth;

class EventRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::where('User_id',auth()->user()->id)->orderBy('created_at','desc')->get();
        return view('users-panel.event-request.index')->with('event',$event);
    }

    public function approveindex()
    {
        $event = Event::where('User_id',auth()->user()->id)->orderBy('created_at','desc')->get();
        return view('users-panel.event-request.approveindex')->with('event',$event);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Categories::all();
        return view('users-panel.event-request.create')->with('categories',$categories);
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

        $user_id = Auth::user()->id;
                
        $event = new Event;
        $event->Title = $request->input('title');
        $event->Description = $request->input('description');
        $event->Fund = $request->input('fund');
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

        $event->User_id= $user_id;

        $event->save();

        return redirect('/showevents')->with('flash_message','Your Event has been created successfully,but when approve from admin then will show on our website otherwise not!');
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
        $event= Event::find($id);
        return view('users-panel.event-request.edit')->with('categories' , $categories)->with('event',$event);
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

        $user_id = Auth::user()->id;
                
        $event = Event::find($id);
        $event->Title = $request->input('title');
        $event->Description = $request->input('description');
        $event->Fund = $request->input('fund');
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
            
        $event->User_id= $user_id;

        $event->update();

        return redirect('/showevents')->with('flash_message','Your Event has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();

        return back()->with('flash_message','Your Event has been deleted successfully!');
    }
}
