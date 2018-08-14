@extends('layouts.app')
@section('title','Image')
@section('content')
<div class="container">
    {{Form::open(['id'=>'form','files'=>true])}}
    <div class="form-group">
        {{Form::file('image',['id'=>'image'])}}
    </div>
    <div id='hide'>
        
    </div>
    <div class="form-group">
        {{Form::submit('save',['id'=>'save','class'=>'btn btn-primary'])}}
    </div>
    {{Form::close()}}
</div>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('form').on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData($(this)[0]);
            $.ajax({
                url: 'imageUpload',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success:function(res)
                {
                    $('#hide').text(res.success).css('color','red');
                },
            });
        });
    });
</script>
@endsection