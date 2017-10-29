
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>

<body>


<div class="login-page">

    <div class="row">
        <div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4">

            @foreach($errors->all() as $error)
                <div class="alert alert-danger alert-dismissable" role="alert">
                    <span class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></span>
                    <p>{{ $error }}</p>
                </div>

            @endforeach

                {{ csrf_field() }}

            <form action="{{ route('signup') }}" method="post" autocomplete="off">

                <div class="form-content">
                    <div class="form-group">
                        <input type="text" name="first_name" placeholder="First Name" class="form-control input-underline input-lg">
                    </div>
                    <div class="form-group">
                        <input type="text" name="last_name" placeholder="Last Name" class="form-control input-underline input-lg">
                    </div>
                    <div class="form-group">
                        <input type="text" name="username" placeholder="Username" class="form-control input-underline input-lg">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" class="form-control input-underline input-lg">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" class="form-control input-underline input-lg">
                    </div>
                </div>
                <input type="submit" class="btn btn-white btn-outline btn-lg btn-rounded progress-login" value="Create">
                <input type="hidden" name="_token" value="{{ Session::token() }}">

                <a href="{{ route('login') }}" class="btn btn-white btn-outline btn-lg btn-rounded">Have an account already?</a>
            </form>

            {!! Form::close() !!}

        </div>
    </div>
</div>

</body>

