$('#country').change(function() {
        var countryId = $(this).val();
        if (countryId!=0)
        {
            $.ajax({
                type: 'GET',
                url: "get-state-list?country_id=" + countryId,
                success: function(res) {
                    $('#state').empty();
                    $('#state').append('<option>Select State</option>');
                    $.each(res, function(key, value) {
                        $('#state').append('<option  value="' + key + '">' + value + '</option>');
                    });
                }
            });
        }
        else
        {
            $('#state').empty();
            $('#city').empty();
        }
    });

    $('#state').change(function() {
        var stateId = $(this).val();
        if (stateId!="Select State")
        {
            $.ajax({
                type: 'GET',
                url: "get-city-list?state_id=" + stateId,
                success: function(res) {
                    
                        $('#city').empty();
                        $.each(res, function(key, value) {
                            $('#city').append('<option  value="' + key + '">' + value + '</option>');
                        });
                    
                }
            });
        }
        else
        {
            $('#city').empty();
        }
    });
    $("form").submit(function(evt){
        evt.preventDefault();
        var formData = new FormData($(this)[0]);
        $.ajax({
           url: 'file',
           type:'POST',
           data:formData,
           async:false,
           cache:false,
           contentType:false,
           enctype:'multipart/form-data',
           processData:false,
           sucess:function(res){
               alert("File Uploaded Successful");
           }
        });
    });
