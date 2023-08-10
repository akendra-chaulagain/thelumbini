@extends('layouts.master')
@push('title')
    Home
@endpush

@section('content')
<section class="pt-0">
    @include('website.main_slider')
    @include('website.homeRajnetiAndSports')
    @include('website.home_artha')
    @include('website.homeWorld')


</section>
@endsection
