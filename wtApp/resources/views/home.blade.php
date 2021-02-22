@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="btn btn-primary" href='/posts/create'>Rent your vehicle</a>
                    <hr>
                    <h3>Your Rented vehicles here</h3>


                    @if (count($posts)>0)
                        
                    
                   <table class="table table-striped">
                    <tr>
                        <th>Vehicle</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach ($posts as $post)
                    <tr>
                            <td>{{$post->Vehicle_name}}</td>
                            <td><a href='/posts/{{$post->id}}/edit' class="btn btn-default">Edit</a></td>
                            <td>
                                    {{Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>"float-right"])}}
                                    <!--Hidden spoofing method-->
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                
                                    {{Form::close()}}
                            </td>
                        </tr>
                    @endforeach

                   </table> 
                   
                   @else
                        <p>You have not rented any vehicle</p>
                   @endif





                </div>
            </div>
        </div>
    </div>
</div>
@endsection

