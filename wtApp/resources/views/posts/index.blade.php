@extends('layouts.app')

@section('content')
<h1>Posts</h1>
<!--SearchBar in main user page-->
<form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control col-md-8 col-sm-8" name="searchCars"
            placeholder="Search Car"><span>
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
        </span>
    </div>
</form>

<!---->
    <br>
    @if(count($posts)>0)
        @foreach ($posts as $post)
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                <img style="width: 100%" src="/storage/cover_image/{{$post->cover_image}}">
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3><a href="/posts/{{$post->id}}">{{$post->Vehicle_name}}</a></h3>
                    <small>Price : Rs {{$post->Price}}</small>
                    <br><small>Owner : {{$post->user->name}}</small>
                    <br>
                    <small>Posted on {{$post->created_at}}</small>
                
                    </div>
            </div>


            </div>
        @endforeach
    @else
        <p>No posts found</p>
    @endif
       
@endsection