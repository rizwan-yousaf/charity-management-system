<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use DB;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
     public function SearchEducationEvent(Request $request)
    {
        $education_event = $request->searchData;
        $education_event = DB::table('events')
                ->where('Title', 'Like', '%' . $education_event . '%')
                ->where('Category_id','1')
                ->where('Status','1')
                ->get();
        return view('front-end.partials.education',[
            'education_event' => $education_event
        ]);
    }

    public function SearchMedicalEvent(Request $request)
    {
        $medical_event = $request->searchData;
        $medical_event = DB::table('events')
                ->where('Title', 'Like', '%' . $medical_event . '%')
                ->where('Category_id','4')
                ->where('Status','1')
                ->get();
        return view('front-end.partials.medical',[
            'medical_event' => $medical_event
        ]);
    }

    public function SearchPovertyEvent(Request $request)
    {
        $poverty_event = $request->searchData;
        $poverty_event = DB::table('events')
                ->where('Title', 'Like', '%' . $poverty_event . '%')
                ->where('Category_id','5')
                ->where('Status','1')
                ->get();
        return view('front-end.partials.poverty',[
            'poverty_event' => $poverty_event
        ]);
    }

     public function SearchOngoingEvent(Request $request)
    {
        $ongoing_event = $request->searchData;
        $ongoing_event = DB::table('events')
                ->where('Title', 'Like', '%' . $ongoing_event . '%')
                ->where('Status','1')
                ->where('raised_fund','>','0')
                ->get();
        return view('front-end.partials.ongoingevent',[
            'ongoing_event' => $ongoing_event
        ]);
    }

    public function SearchUpcomingEvent(Request $request)
    {
        $upcoming_event = $request->searchData;
        $upcoming_event = DB::table('events')
                ->where('Title', 'Like', '%' . $upcoming_event . '%')
                ->where('Status','1')
                ->where('raised_fund','=','0')
                ->get();
        return view('front-end.partials.upcomingevent',[
            'upcoming_event' => $upcoming_event
        ]);
    }

     public function SearchCompletedEvent(Request $request)
    {
        $completed_event = $request->searchData;
        $completed_event = DB::table('events')
                ->where('Title', 'Like', '%' . $completed_event . '%')
                ->whereColumn('raised_fund','>=','Fund')
                ->where('Status','1')
                ->get();
        return view('front-end.partials.completedevent',[
            'completed_event' => $completed_event
        ]);
    }

    public function SearchSuccessStory(Request $request)
    {
        $success_story = $request->searchData;
        $success_story = DB::table('events')
                ->where('Title', 'Like', '%' . $success_story . '%')
                ->whereColumn('raised_fund','>=','Fund')
                ->where('Status','1')
                ->get();
        return view('front-end.partials.successstories',[
            'success_story' => $success_story
        ]);
    }

    public function SearchBlogPost(Request $request)
    {
        $ongoing_event = Event::where('status','1')->orderBy('created_at','desc')->get();
        $blog_post = $request->searchData;
        $blog_post = DB::table('blogs')
                ->where('Title', 'Like', '%' . $blog_post . '%')
                ->paginate(10);
        return view('front-end.partials.blog',[
            'blog_post' => $blog_post, 'ongoing_event' => $ongoing_event
        ]);
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
