<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Blog;
use App\User;
use App\EventDonation;

class htmlcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function homepage()
    {
        return view('front-end.partials.index');
    }

    public function aboutpage()
    {
        $total_donors = User::where('register_as','donor')->where('register_as','Donor')->count();
        $total_events = Event::count();
        $event_donations = EventDonation::sum('Payment');
        $successfully_completed = Event::whereColumn('raised_fund','>=','Fund')->count();

        return view('front-end.partials.about',compact('total_donors','total_events','event_donations','successfully_completed'));
    }

     public function educationpage()
    {
        $education_event = Event::where('Category_id','1')->where('Status','1')->orderBy('created_at','desc')->get();
        return view('front-end.partials.education',compact('education_event'));
    }

     public function educationdetailpage($id)
    {
        $education_event_details = Event::where('id',$id)->get();
        $education_event = Event::where('Category_id','1')->where('Status','1')->orderBy('created_at','desc')->get();
        $education_event_count = Event::where('Category_id','1')->count();
        $medical_event_count = Event::where('Category_id','4')->count();
        $poverty_event_count = Event::where('Category_id','5')->count();
        return view('front-end.partials.educationdetail',compact('education_event_details','education_event','education_event_count','medical_event_count','poverty_event_count'));
    }

      public function medicalpage()
    {
        $medical_event = Event::where('Category_id','4')->where('Status','1')->orderBy('created_at','desc')->get();
        return view('front-end.partials.medical',compact('medical_event'));
    }

     public function medicaldetailpage($id)
    {
        $medical_event_details = Event::where('id',$id)->get();
        $medical_event = Event::where('Category_id','4')->where('Status','1')->orderBy('created_at','desc')->get();
        $education_event_count = Event::where('Category_id','1')->count();
        $medical_event_count = Event::where('Category_id','4')->count();
        $poverty_event_count = Event::where('Category_id','5')->count();
        return view('front-end.partials.medicaldetail',compact('medical_event_details','medical_event','education_event_count','medical_event_count','poverty_event_count'));
    }

     public function povertypage()
    {
        $poverty_event = Event::where('Category_id','5')->where('Status','1')->orderBy('created_at','desc')->get();
        return view('front-end.partials.poverty',compact('poverty_event'));
    }

     public function povertydetailpage($id)
    {

        $poverty_event_details = Event::where('id',$id)->get();
        $poverty_event = Event::where('Category_id','5')->where('Status','1')->orderBy('created_at','desc')->get();
        $education_event_count = Event::where('Category_id','1')->count();
        $medical_event_count = Event::where('Category_id','4')->count();
        $poverty_event_count = Event::where('Category_id','5')->count();
        return view('front-end.partials.povertydetail',compact('poverty_event_details','poverty_event','education_event_count','medical_event_count','poverty_event_count'));
    }

     public function ongoingeventpage()
    {
        $ongoing_event = Event::where('Status','1')->where('raised_fund','>','0')->get();
        return view('front-end.partials.ongoingevent',compact('ongoing_event'));
    }

    public function ongoingeventdetailpage($id)
    {
        $ongoing_event_details = Event::where('id',$id)->get();
        $ongoing_event = Event::where('Status','1')->where('raised_fund','>','0')->orderBy('created_at','desc')->limit(7)->get();
        $education_event_count = Event::where('Category_id','1')->count();
        $medical_event_count = Event::where('Category_id','4')->count();
        $poverty_event_count = Event::where('Category_id','5')->count();
        return view('front-end.partials.ongoingeventdetail',compact('ongoing_event_details','ongoing_event','education_event_count','medical_event_count','poverty_event_count'));
    }

     public function upcomingeventpage()
    {
        $upcoming_event = Event::where('Status','1')->where('raised_fund','=','0')->get();
        return view('front-end.partials.upcomingevent',compact('upcoming_event'));
    }

    public function upcomingeventdetailpage($id)
    {
        $upcoming_event_details = Event::where('id',$id)->get();
        $upcoming_event = Event::where('Status','1')->where('raised_fund','=','0')->orderBy('created_at','desc')->limit(7)->get();
        $education_event_count = Event::where('Category_id','1')->count();
        $medical_event_count = Event::where('Category_id','4')->count();
        $poverty_event_count = Event::where('Category_id','5')->count();
        return view('front-end.partials.upcomingeventdetail',compact('upcoming_event_details','upcoming_event','education_event_count','medical_event_count','poverty_event_count'));
    }

       public function completedeventpage()
    {
        $completed_event = Event::where('Status','1')->get();
        return view('front-end.partials.completedevent',compact('completed_event'));
    }

    public function completedeventdetailpage($id)
    {
        $completed_event_details = Event::where('id',$id)->get();
        $completed_event = Event::where('Status','1')->orderBy('created_at','desc')->get();
        $education_event_count = Event::where('Category_id','1')->count();
        $medical_event_count = Event::where('Category_id','4')->count();
        $poverty_event_count = Event::where('Category_id','5')->count();
        return view('front-end.partials.completedeventdetail',compact('completed_event_details','completed_event','education_event_count','medical_event_count','poverty_event_count'));
    }

     public function blogpage()
    {
        $blog_post = Blog::orderBy('created_at','desc')->paginate(10);
        $ongoing_event = Event::where('status','1')->orderBy('created_at','desc')->limit(7)->get();
        $education_event_count = Event::where('Category_id','1')->count();
        $medical_event_count = Event::where('Category_id','4')->count();
        $poverty_event_count = Event::where('Category_id','5')->count();
        return view('front-end.partials.blog',compact('blog_post','ongoing_event','education_event_count','medical_event_count','poverty_event_count'));
    }

     public function blogdetailpage($id)
    {
        $blog_post_details = Blog::where('id',$id)->get();
        $ongoing_event = Event::where('Status','1')->orderBy('created_at','desc')->limit(7)->get();
        $blog_post = Blog::orderBy('created_at','desc')->get();
        $education_event_count = Event::where('Category_id','1')->count();
        $medical_event_count = Event::where('Category_id','4')->count();
        $poverty_event_count = Event::where('Category_id','5')->count();
        return view('front-end.partials.blogdetail',compact('blog_post_details','ongoing_event','blog_post','education_event_count','medical_event_count','poverty_event_count'));
    }

     public function successstoriespage()
    {
        $success_story = Event::where('Status','1')->get();
        return view('front-end.partials.successstories',compact('success_story'));
    }

     public function successstoriesdetailpage($id)
    {
        $success_story_details = Event::where('id',$id)->get();
        $success_story = Event::where('Status','1')->orderBy('created_at','desc')->limit(7)->get();
        $education_event_count = Event::where('Category_id','1')->count();
        $medical_event_count = Event::where('Category_id','4')->count();
        $poverty_event_count = Event::where('Category_id','5')->count();
        return view('front-end.partials.successstoriesdetail',compact('success_story_details','success_story','education_event_count','medical_event_count','poverty_event_count'));
    }

    /* public function registerpage()
    {
        return view('front-end.partials.sign-up');
    }
     
    public function loginpage()
    {
        return view('front-end.partials.sign-in');
    }*/
    
     public function contactpage()
    {
        return view('front-end.partials.contact');
    }

     public function termpage()
    {
        return view('front-end.partials.termofuse');
    }

    public function privacypage()
    {
        return view('front-end.partials.privacy&policy');
    }

    public function faqspage()
    {
        return view('front-end.partials.faqs');
    }

       public function readmorepage()
    {
        return view('front-end.partials.readmore');
    }

     public function Thankyoupage()
    {
        return view('front-end.partials.thankyou');
    }

     public function CommitNowpage()
    {
        return view('front-end.partials.commitnow');
    }

     /* public function volunteerpage()
    {
        return view('home.volunteer');
    }*/

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
