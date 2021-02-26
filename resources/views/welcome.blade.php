<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet" type="text/css" />
        <link href="/css/notebl.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="../js/spl2.js"></script>


    </head>
    <body>


    <div  id="app">


        <menu-component></menu-component>

        <div class="container">
            <div class="row">
                <div class="col-xl-4">

                    @include('layouts.mynote_bl')
                </div>

                <div class="col-xl-8">
                    <div class="note">
                        {{--                    @yield('content')--}}


                    </div>


                </div>
            </div>

        </div>


    </div>


    </body>
</html>
