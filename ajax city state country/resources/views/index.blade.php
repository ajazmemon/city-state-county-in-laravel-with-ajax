<!DOCTYPE html>
<html>
    <head>
        <title>Dependent country state city dropdown using ajax in PHP Laravel Framework</title>
        <link rel="stylesheet" href="http://www.expertphp.in/css/bootstrap.css">    
        <script src="http://demo.expertphp.in/js/jquery.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Dependent country state city dropdown using ajax in PHP Laravel Framework</div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="title">Select Country:</label>
                        {!! Form::select('country', $country,'',array('class'=>'form-control','id'=>'country','style'=>'width:350px;'));!!}

                    </div>
                    <div class="form-group">
                        <label for="title">Select State:</label>
                        <select name="state" id="state" class="form-control" style="width:350px">
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="title">Select City:</label>
                        <select name="city" id="city" class="form-control" style="width:350px">
                        </select>
                    </div>
                    
                    <div class="form-group">
                        {{Form::open()}}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            {{Form::file('file')}}
                            <input type="submit" name="add">
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

    {!! Html::script('js/ajax.js') !!}
