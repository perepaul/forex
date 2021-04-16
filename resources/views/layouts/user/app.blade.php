@extends('layouts.user.front')

@section('content')
    <div id="main-wrapper">

    @include('partials.user.front.header')

    @yield('page')

    @include('partials.user.front.footer')

    </div>
@endsection
