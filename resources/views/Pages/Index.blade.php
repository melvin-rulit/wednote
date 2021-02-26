@extends('layouts.app')
@section('content')

        <router-view></router-view>


        <script src="{{ asset('js/app.js') }}"></script>
{{--        <script type="application/javascript"> src="{{ asset('js/app.js') }}" </script>--}}

@endsection
