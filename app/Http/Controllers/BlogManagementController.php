<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Auth;

class BlogManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog_posts = Blog::all();
        return view('admin.blog-management.index')->with('blog_posts',$blog_posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog-management.create');
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
        ]);

        $user_id = Auth::user()->id;

        $blog = new Blog;
        $blog->Title = $request->input('blog_title');
        $blog->Body = $request->input('blog_body');
        $blog->Date = $request->input('blog_date');
        $blog->Poster_Name = $request->input('poster_name');
                              
        $Image =$request->file('imgFile');
        $name = time().'.'.$Image->getClientOriginalExtension();
        $desti =public_path('/uploads');
        $Image->move($desti,$name);
        $blog->Image= $name;

        $blog->User_id= $user_id;

        $blog->save();

        return redirect('/show-blog')->with('flash_message','Blog has been published successfully!');
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
       $blog= Blog::find($id);
        return view('admin.blog-management.edit')->with('blog' , $blog);
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
        ]);
        
        $user_id = Auth::user()->id;

        $blog = Blog::find($id);
        $blog->Title = $request->input('blog_title');
        $blog->Body = $request->input('blog_body');
        $blog->Date = $request->input('blog_date');
        $blog->Poster_Name = $request->input('poster_name');
        
        if($request->hasfile('imgFile'))
        {                       
            $Image =$request->file('imgFile');
            $name = time().'.'.$Image->getClientOriginalExtension();
            $desti =public_path('/uploads');
            $Image->move($desti,$name);
            $blog->Image= $name;
        }    

        $blog->User_id= $user_id;

        $blog->update();

        return redirect('/show-blog')->with('flash_message','Blog has been Updated & published successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();

        return back()->with('flash_message','Blog has been deleted successfully!');
    }
}
