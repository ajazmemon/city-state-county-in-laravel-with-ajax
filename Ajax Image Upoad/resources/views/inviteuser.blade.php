@extends('layouts.app')
@section('title','Invite User')
@section('content')
<div class="container">

    {{Form::open()}}
    <div class="form-group">
        {{Form::label('name','Name')}}
        {{Form::text('name',null,['id'=>'name','class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('name','Email')}}
        {{Form::email('email',null,['id'=>'email','class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::submit('save',['id'=>'save','class'=>'btn btn-primary'])}}
    </div>
    {{Form::close()}}
    
    <div id="usr">
        
    </div>
</div>
@endsection
@section('script')
   {{Html::script('js/ajax.js')}}
@endsection