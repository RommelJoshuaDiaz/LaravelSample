@extends('main')

@section('title','| Contact')

@section('content') 


<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Create New Post</h1>
        <hr>
            
 <input type="submit" value="Send Message" class="btn btn-success">





        {!! Form::open(array('route' => 'posts.store' , 'data-parsley-validate' => '')) !!}
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
        
            {{ Form::label('body', "Post Body:")}}
            {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}  

            {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px;')) }}
        {!! Form::close() !!}
@endsection

 