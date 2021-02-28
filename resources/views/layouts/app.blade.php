<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet" type="text/css" />
    <link href="/css/notebl.css" rel="stylesheet" type="text/css" />



    <!--  анимированные переходы между компонентами */ -->
    <style type="text/css">
        .component-fade-enter-active,
        .component-fade-leave-active {
            transition: opacity .3s ease;
        }
        .component-fade-enter,
        .component-fade-leave-to
            /* .component-fade-leave-active до версии 2.1.8 */
        {
            opacity: 0;
        }
    </style>

</head>
<body>


<div id="app">


    <menu-component></menu-component>
    <div class="container">
        <div class="row">
            <div class="col-xl-8">

                @include('layouts.mynote_bl')

                <!-- анимированные переходы между компонентами -->
                    <transition name="component-fade" mode="out-in">
                        <router-view></router-view>
                    </transition>

            </div>
{{--    col-xl        --}}
        </div>

    </div>



</div>
<script src="{{ asset('js/app.js') }}"></script>


</body>
</html>
