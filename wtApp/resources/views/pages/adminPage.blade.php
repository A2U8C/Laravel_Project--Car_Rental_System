@extends('layouts.app2')

@section('content')
<h1>Posts</h1>

<br>
    @if(count($posts)>0)
        @foreach ($posts as $post)
        <div class="jumbotron">

            <div class="row">
                <div class="col-md-4 col-sm-4">
                <img style="width: 100%" src="/storage/cover_image/{{$post->cover_image}}">
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3>{{$post->Vehicle_name}}</h3>
                    <small>Owner: {{$post->user->name}}</small><br>
                    <small>Price: Rs {{$post->Price}}</small><br>
                    <small>Posted on: {{$post->created_at}} </small>
                {{Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>"float-right"])}}
        <!--Hidden spoofing method-->
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}

        {{Form::close()}}
                    </div>

                    
                        
            </div>


            </div>
        @endforeach
    @else
        <p>No posts found</p>
    @endif
       
@endsection