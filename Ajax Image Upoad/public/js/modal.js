$(document).ready(function() {

    $('.js-example-basic-single').select2({
         placeholder: "Select a city",
    });

    $(function() {
        $("#datepicker").datepicker({
            dateFormat: 'yy-mm-dd'
        });
    });

    $("form").on('submit', function(e) {
        e.preventDefault();

        var data = $("#fm").serialize();

        $.ajax({
            url: 'save',
            type: 'POST',
            data: data,
            success: function(e)
            {
                var infoModal = $('#exampleModalLong');
                htmlData = e.message;
                infoModal.find('.message').html(htmlData);
                modal.modal('show');
            }
        });
    });

    $("#fm").validate({
        rules: {
            'name': {
                required: true,
                maxlength: '30',
//                clettersonly: true
            },
            'email': {
                required: true,
                email: true,
                maxlength: '50',
            },
            'password': {
                required: true,
                maxlength: '20',
                minlength: '6'
            },
            'date': {
                required: true,    
            },
            'city_id': {
                required: true,    
            }
            
        },
        messages: {
            'name': {
                required: "Please enter name",
                maxlength: "Please enter less than 30 characters",
                clettersonly: "Please enter characters only"
            },
            'email': {
                required: "Please enter customer email id",
                email: "Please enter valid email id",
                maxlength: "Please enter less than 50 characters",
            },
            'password': {
                required: "Please enter password",
                maxlength: 'password must be less than 20 characters',
                minlength: 'Password must be of minimum 6 characters long'
            },
            'date': {
                required: "Please enter date",
                
            }

        },
        submitHandler: function (form) {
            form.submit();
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element);
            error.addClass('text-left text-danger');
        }
    });

});

