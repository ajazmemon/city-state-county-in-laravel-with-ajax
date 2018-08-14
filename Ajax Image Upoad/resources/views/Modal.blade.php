@extends('layouts.app')
@section('title','Bootstrap Modal')
@section('content')
@section('style')
<link href="js/select2/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="js/jquery-ui.css">
@endsection

<button type="button" class="btn btn-primary center-block" data-toggle="modal" data-target="#exampleModalLong">
    Register Here
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-info message" style="display: none" id="msg1">                

                </div>
                {{Form::open(['id'=>'fm'])}}
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            {{ Form::label('name','Name: <span style="color: red">*</span>',[],false) }}
                            {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Enter Name']) }}
                            @if($errors->has('name'))
                            <div class="error text-left" style="color: red">
                                {{ $errors->first('name') }}
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            {{ Form::label('email','Email: <span style="color: red">*</span>',[],false) }}
                            {{ Form::email('email',null,['class'=>'form-control','placeholder'=>'Enter Email']) }}
                            @if($errors->has('email'))
                            <div class="error text-left" style="color: red">
                                {{ $errors->first('email') }}
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            {{ Form::label('gender','Gender : ',[],false) }}
                            {{ Form::radio('gender','male',true,['class'=>'field']) }}Male
                            {{ Form::radio('gender','female',null,['class'=>'field']) }}Female
                            @if($errors->has('gender'))
                            <div class="error text-left" style="color: red">
                                {{ $errors->first('gender') }}
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            {{ Form::label('hobby','Hobby:',[],false) }}
                            {{ Form::checkbox('hobby[]','cricket',true,['class'=>'field']) }}Cricket 
                            {{ Form::checkbox('hobby[]','hockey',null,['class'=>'field']) }}Hockey
                            {{ Form::checkbox('hobby[]','vollyball',null,['class'=>'field']) }}Vollyball
                            @if($errors->has('hobby'))
                            <div class="error text-left" style="color: red">
                                {{ $errors->first('hobby') }}
                            </div>
                            @endif
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            {{Form::label('city','City :<span style="color:red"> *</span>',[],false)}}<br>
                            {{Form::select('city_id',$city,null,['class'=>'js-example-basic-single form-control'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('password','Password :<span style="color:red"> *</span>',[],false)}}<br>
                            {{Form::text('password',null,['class'=>'form-control','placeholder'=>'Enter Password'])}}
                            @if($errors->has('password'))
                            <div class="error text-left" style="color: red">
                                {{ $errors->first('password') }}
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            {{ Form::label('date','Date : <span style="color:red">*</span>',[],false) }}
                            {{ Form::text('date','',['id'=>'datepicker','class'=>'form-control']) }}
                        </div>
                    </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    {{Form::submit('Save',['class'=>'btn btn-primary'])}}
                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="js/select2/dist/js/select2.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.validate.js"></script>
{{ Html::script('js/modal.js') }}

@endsection
