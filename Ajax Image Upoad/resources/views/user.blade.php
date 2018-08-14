@extends('layouts.app')
@section('content')
<div class="container">
    <div class="dropdown">
        {{Form::select('id',$users,null,['class'=>'form-control','id'=>'user'])}}
    </div>
    <div class="table" id="tab">
        <form method="post" id="table">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><label id='id1'></label></td>
                        <td><input type="text" name="name" id="name" class="form-control"></td>
                        <td><input type="email" name="email" id="email" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="submit" value="save" id="save">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>

</div>
<script>

    $(document).ready(function() {
        $("#tab").hide();
        $("#user").change(function(evt) {
            $("#tab").show();
            evt.preventDefault();
            var id = $(this).val();

            $.ajax({
                url: 'userlist/' + id,
                type: 'GET',
                success: function(res) {
                    $("#id1").text(res.id),
                            $("#name").val(res.name),
                            $("#email").val(res.email)
                }
            });
        });
        $("form").on('submit', function(e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();
            var i = $("#user").val();
            
            $.ajax({
                type: 'POST',
                url: 'userUpdate/' + i,
                data: $("#table").serialize(),
                success:function(res){
                    alert(res);
                }
            });
        });


    });

</script>
@endsection