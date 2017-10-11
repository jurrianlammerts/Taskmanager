<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Todo application</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('public/css/style.css') }}" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>

    <div class="login-page">

        <div class="row">
            <div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4">
                <img src="http://www.bighedz.com/370-thickbox_default/donald-trump-life-size-celebrity-face-mask.jpg" class="user-avatar">
                <h2>You want to improve yourself? Start now!</h2>

                {!! Form::open(array('autocomplete' => 'off')) !!}

                @foreach($errors->all() as $error)
                    <p class="error">{{ $error }}</p>
                @endforeach

                {{ csrf_field() }}

                <form role="form">
                    <div class="form-content">
                        <div class="form-group">
                            <input type="text" name="username" placeholder="Name" class="form-control input-underline input-lg">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" class="form-control input-underline input-lg">
                        </div>
                    </div>
                    <input type="submit" class="btn btn-white btn-outline btn-lg btn-rounded progress-login" value="Log in">

                    <a href="/signup" class="btn btn-white btn-outline btn-lg btn-rounded">Register</a>
                </form>

                {!! Form::close() !!}

            </div>
        </div>
    </div>

</body>

