@extends('layouts.app')

@section('content')
<h1>Rent a vehicle</h1>
{{ Form::open(['action'=>'PostsController@store','method'=>'POST','enctype'=>'multipart/form-data']) }}
<div class="form-group">
{{Form::label('Vehicle_name','Vehicle Name')}}
{{Form::text('Vehicle_name','',['class'=>'form-control','placeholder'=>'Vehicle Name'])}}
</div>
<div class="form-group">
        {{Form::label('Registration_No','Registration Number')}}
        {{Form::text('Registration_No','',['class'=>'form-control','placeholder'=>'Registration No'])}}
        </div>
<div class="form-group">
        {{Form::label('Description','Description')}}
        {{Form::textarea('Description','',['class'=>'form-control','placeholder'=>'Description'])}}
        </div>
        <div class="form-group">
                {{Form::label('Price','Price')}}
                {{Form::number('Price','',['class'=>'form-control','placeholder'=>'Price'])}}
                </div>


                <div class="form-group">
                {{Form::file('cover_image')}}
                </div>

        
{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{{ Form::close() }}
       
@endsection