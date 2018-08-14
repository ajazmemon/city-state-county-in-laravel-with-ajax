$(document).ready(function() {


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: 'getUser',
        type: 'GET',
        success: function(e) {
            e.forEach(function(data) {
                $("#chk").append("<ul><input type='checkbox' id='ck' value='" + data.id + "'>" + data.name + "</ul>");

            })
        }
    });
    $('#tbl').hide();

    $(document).on('change', '#ck', function(ev) {

        ev.preventDefault();
        var Id = $("#ck").val();


        $.ajax({
            url: 'getId/' + Id,
            type: 'GET',
            success: function(et) {
                alert(et);
            },
        });

    });


});