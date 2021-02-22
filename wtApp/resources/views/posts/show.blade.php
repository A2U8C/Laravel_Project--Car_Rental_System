@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Go back</a>
<h1>{{$post->Vehicle_name}}</h1>
<img style="width: 60%" src="/storage/cover_image/{{$post->cover_image}}">
<br><br>
       <div>
           <p>Description:</p>
           {{$post->Description}}
       </div>
       <hr>
       <div>
            <p>Price: Rs {{$post->Price}}</p>
            
        </div>
        <hr>
        <div>
                <p>Contact the owner: </p>
                <ul>
                    <li>Owner's Name :  {{$post->user->name}}</li>
                    <li>Email ID :  {{$post->user->email}}</li>
                    <li>Phone Number : {{$post->user->Phone_No}}</li>
                </ul>
                
            </div>
       <hr>
       <small>Posted on {{$post->created_at}} by {{$post->user->name}}</small>

<hr>
    @if (!AUTH::guest())
        @if ((AUTH::user()->id==$post->user_id)|| (AUTH::user()->name==='admin'))
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

        {{Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>"float-right"])}}
        <!--Hidden spoofing method-->
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
        {{Form::close()}}
        @endif
@endif
<br><br><br><br><br>

@endsection