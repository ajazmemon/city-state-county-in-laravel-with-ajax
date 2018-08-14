$(document).ready(function() {
    
    $('form').on('submit', function(e) {
         $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
        
        e.preventDefault();
        var data = $(this).serialize();
        $.ajax({
            url: 'inviteuser/create',
            type: 'POST',
            data: data,
             dataType: 'JSON',
            success: function(e) {
                if (e.error)
                {
                    $("#usr").text(e.message);
                } else {
                    $("#usr").text(e.message);
                    $("#usr").addClass('alert alert-success');
                }
            }
        });
    });
    
});