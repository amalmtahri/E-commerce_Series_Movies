@extends('template.layouts.app')

@section('content')
@push('homecss')
<style>
    body{
        overflow-y:hidden;
    }
</style>
@endpush

<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg vh-100"
    style="background-image: url('{{url('assets/media/squid-game-3b.jpg')}}');background-size: cover;background-position: center;">
    <!--begin::Header-->
    <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header"
        data-kt-sticky-offset="{default: '200px', lg: '300px'}">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Wrapper-->
            <div class="d-flex align-items-center justify-content-between">
                <!--begin::Logo-->
                <div class="d-flex align-items-center flex-equal">
                    <!--begin::Mobile menu toggle-->
                    <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none"
                        id="kt_landing_menu_toggle">
                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                        <span class="svg-icon svg-icon-2hx">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                    fill="black" />
                                <path opacity="0.3"
                                    d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                    fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--end::Mobile menu toggle-->
                    <!--begin::Logo image-->
                    <a href="{{ route('index')}}">
                        <img alt="Logo" src="assets/media/logos/logo-landing.svg"
                            class="logo-default h-25px h-lg-30px" />
                    </a>
                    <!--end::Logo image-->
                </div>
                <!--end::Logo-->
                <!--begin::Menu wrapper-->
                <div class="d-lg-block" id="kt_header_nav_wrapper">
                    <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu"
                        data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                        data-kt-drawer-width="200px" data-kt-drawer-direction="start"
                        data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true"
                        data-kt-swapper-mode="prepend"
                        data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                        <!--begin::Menu-->
                        <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-bold"
                            id="kt_landing_menu">
                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <!--begin::Menu link-->
                                <a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="{{ route('index')}}"
                                    data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Home</a>
                                <!--end::Menu link-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <!--begin::Menu link-->
                                <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="{{ route('ourMovies')}}" data-kt-scroll-toggle="true"
                                    data-kt-drawer-dismiss="true">Movies</a>
                                <!--end::Menu link-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <!--begin::Menu link-->
                                <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="{{ route('ourSeries')}}" data-kt-scroll-toggle="true"
                                    data-kt-drawer-dismiss="true">Series</a>
                                <!--end::Menu link-->
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </div>
                </div>
                <!--end::Menu wrapper-->
                <!--begin::Toolbar-->
                <div class="flex-equal text-end ms-1">

                    @guest
                    @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="btn btn-secondary">Sign In</a>
                    @endif

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-success">Sign Up</a>
                    @endif
                    @else

                    <div class="menu-item px-5">
                        <a class="btn btn-secondary" href="{{ route('panier') }}"><i class="fa fa-shopping-cart"
                                aria-hidden="true"></i></a>
                        <a class="btn btn-secondary" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign Out</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </div>
                    @endguest
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Header-->
    <!--begin::Landing hero-->
    <div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
        <!--begin::Heading-->
        <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
            <!--begin::Title-->
                <h1 class="text-white lh-base fw-bolder fs-4x mb-15">
                    <br />SQUARE MOVIES</h1>
                <p class="text-white mx-auto mb-20 w-75" style="font-size: 1.3rem!important;">If you’re looking for movies that the whole family can enjoy, then Disney Plus is simply unbeatable. You’ll find almost every Disney movie on there, along with the entire back catalog of Pixar, Marvel, and Star Wars movies. That’s a staggering amount of top quality movies for you to watch.</p>
            <!--end::Title-->
            <!--begin::Action-->
            <a href="{{ route('ourMovies') }}" class="btn btn-primary btn-hover-rise me-5">Our Movies</a>
            <!--end::Action-->
        </div>
        <!--end::Heading-->
    </div>
    <!--end::Landing hero-->
</div>
<!--begin::Container-->
{{-- <div class="container">
    <div class="mb-0" id="home">
        <!--begin::Wrapper-->

        <!--end::Wrapper-->
        <!--begin::Curve bottom-->
        <div class="landing-curve landing-dark-color mb-10 mb-lg-20">
            <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                    fill="currentColor"></path>
            </svg>
        </div>
        <!--end::Curve bottom-->
    </div>
    <!--end::Header Section-->

</div> --}}
@endsection
