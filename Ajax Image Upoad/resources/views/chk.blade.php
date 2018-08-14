@extends('layouts.app')
@section('title','Chk')
@section('content')
   
<div class="chk" id="chk">
</div>
<div class="table">
    <table class="table table-responsive" id="tbl">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td id="i"></td>
                <td id="n"></td>
                <td id="e"></td>
                <td id="s"></td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
@section('script')
{{ Html::script('js/chk.js') }}
@endsection