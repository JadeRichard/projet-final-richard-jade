@extends('front.layouts.app')

@section('content')

<div class="sidebar-menu-container" id="sidebar-menu-container">

    <div class="sidebar-menu-push">

        <div class="sidebar-menu-overlay"></div>

        <div class="sidebar-menu-inner">

            @include('front.partials.header')
            @include('front.partials.banner')
            @include('front.partials.services')
            @include('front.partials.courses')
            @include('front.partials.testimonials')
            @include('front.partials.books')
            @include('front.partials.teachers')
            @include('front.partials.action')
            @include('front.partials.footer')

        </div>

    </div>

    @include('front.partials.nav')
    
</div>
@endsection
