<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use DB;

class PostsController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index']]);
    }

 


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts= Post::orderBy('updated_at','desc')->get();
        //$posts=DB::select('Select * from posts');
        return view('posts.index')->with('posts',$posts);
    }



     
  





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }


  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'Vehicle_name'=>'required',
            'Registration_No'=>'required',
            'Description'=>'required',
            'Price'=>'required',
            'cover_image'=>'image|max:1999|required'
            //'Aadhar_No'=>'required'
        ]);



//////////////////////Adding image///////////////////////////////
        //Get filename with extension
        $fileNameWithExt=$request->file('cover_image')->getClientOriginalName();
        //To get only file name
        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        //To get extension
        $extension=$request->file('cover_image')->getClientOriginalExtension();
        //FileName to store
        $fileNameToStore=$fileName.'_'.time().'.'.$extension;
        $path=$request->file('cover_image')->storeAs('public/cover_image',$fileNameToStore);

///////////////////////////////////////////////////////



        //Adding a new vehicle data into database
        $post=new Post;
        $post->Vehicle_name=$request->input('Vehicle_name');
        $post->Registration_No=$request->input('Registration_No');
        $post->Description=$request->input('Description');
        $post->Price=$request->input('Price');
        //$post->Aadhar_No=$request->input('Aadhar_No');
        //$post->user_Aadhar_No=auth()->user()->Aadhar_No;

        $post->cover_image=$fileNameToStore;

        $post->user_id=auth()->user()->id;
        $post->save();
        return redirect('/posts')->with('success','New Vehicle Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= Post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);


        //Check if the user is the owner of that post

        if(auth()->user()->id !==$post->user_id)
        {
            return view('/posts')->with('error','You are not the owner of this post');
        }

        return view('posts.edit')->with('post',$post);
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
        $this->validate($request,[
            'Vehicle_name'=>'required',
            'Registration_No'=>'required',
            'Description'=>'required',
            'Price'=>'required',
            //'Aadhar_No'=>'required'
        ]);


//////////////////////Adding image///////////////////////////////
        //Get filename with extension
        if($request->hasFile('cover_image'))
        {
            $fileNameWithExt=$request->file('cover_image')->getClientOriginalName();
        //To get only file name
        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        //To get extension
        $extension=$request->file('cover_image')->getClientOriginalExtension();
        //FileName to store
        $fileNameToStore=$fileName.'_'.time().'.'.$extension;
        $path=$request->file('cover_image')->storeAs('public/cover_image',$fileNameToStore);
        }
///////////////////////////////////////////////////////

        //Adding a new vehicle data into database
        $post=Post::find($id);
        $post->Vehicle_name=$request->input('Vehicle_name');
        $post->Registration_No=$request->input('Registration_No');
        $post->Description=$request->input('Description');
        $post->Price=$request->input('Price');
        //$post->Aadhar_No=$request->input('Aadhar_No');


        if($request->hasFile('cover_image'))
        {
            $post->cover_image=$fileNameToStore;
        }

        $post->save();
        return redirect('/posts')->with('success','Details Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);

        if((auth()->user()->id !==$post->user_id) && (auth()->user()->name !='admin') )
        {
            return view('/posts')->with('error','You are not the owner of this post');
        }
        $post->delete();
        if(auth()->user()->name==='admin')
        {
            return redirect('/home/admin/posts')->with('success','Vehicle removed');
        }
        return redirect('/posts')->with('success','Vehicle removed');
    }
}
