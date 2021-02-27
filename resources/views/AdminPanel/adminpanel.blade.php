<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />

</head>
<body>



<div id="wrapper">

    <form class="login-form" action="{{ route($loginRoute) }}" method="post">

        <div class="header">
            <h1>{{$title}}</h1>
            <span>{{ $h1 }}</span>
        </div>

        <div class="content">

            <input name="username" type="text" class="input username" placeholder="Логин" value="{{ old('username') }}"/>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <input name="password" type="password" class="input password" placeholder="Пароль"  />

{{--            @error('password')--}}
{{--            <div class="invalid-feedback">--}}
{{--                <strong>{{ $error }}</strong>--}}
{{--            </div>--}}
{{--            @enderror--}}


        </div>

        <div class="footer">

            <button class="button">{{$enter}}</button>



        </div>

    </form>
</div>


</body>
</html>
