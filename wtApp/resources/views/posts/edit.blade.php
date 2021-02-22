@extends('layouts.app')

@section('content')
<h1>Edit details of {{$post->Vehicle_name}}</h1>
{{ Form::open(['action'=>['PostsController@update',$post->id],'method'=>'POST','enctype'=>'multipart/form-data']) }}
<div class="form-group">
{{Form::label('Vehicle_name','Vehicle Name')}}
{{Form::text('Vehicle_name',$post->Vehicle_name,['class'=>'form-control','placeholder'=>'Vehicle Name'])}}
</div>
<div class="form-group">
        {{Form::label('Registration_No','Registration Number')}}
        {{Form::text('Registration_No',$post->Registration_No,['class'=>'form-control','placeholder'=>'Registration No'])}}
        </div>
<div class="form-group">
        {{Form::label('Description','Description')}}
        {{Form::textarea('Description',$post->Description,['class'=>'form-control','placeholder'=>'Description'])}}
        </div>
        <div class="form-group">
                {{Form::label('Price','Price')}}
                {{Form::number('Price',$post->Price,['class'=>'form-control','placeholder'=>'Price'])}}
                </div>
<!--To be removed
<div class="form-group">
        {{Form::label('Aadhar_No','Aadhar No')}}
        {{Form::number('Aadhar_No',$post->Aadhar_No,['class'=>'form-control','placeholder'=>'Aadhar No'])}}
        </div>

Till here-->
<div class="form-group">
                {{Form::file('cover_image')}}
                </div>

{{Form::hidden('_method','PUT')}}

        
{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{{ Form::close() }}
       
@endsection