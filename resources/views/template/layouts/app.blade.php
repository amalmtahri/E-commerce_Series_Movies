<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head><base href="">
		<title>Square Movies</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/dropify.css')}}" rel="stylesheet" type="text/css" />

		@stack('homecss')
		
		<!--end::Global Stylesheets Bundle-->
</head>
<style>
	body{
		overflow-x: hidden;

	}
	

    @import url('https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,600,700,800, 800i, 900&display=swap');

    .cardcontainer .container {
        position: relative;
    }

    .cardcontainer .container .card {
        position: relative;
        width: 220px;
        height: 350px;
        border-radius: 20px;
        overflow: hidden;
    }

    

    .cardcontainer .container .card:hover:before {
        clip-path: circle(300px at 80% -20%);
    }

    

    .cardcontainer .container .card .imgBx {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 1000;
        width: 100%;
        height: 100%;
        transition: .5s;
    }

    .cardcontainer .container .card:hover .imgBx {
        top: 0%;
        transform: translateY(-25%);
        /* bug  */
    }

    .cardcontainer .container .card .imgBx img {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(20deg);
        width: 270px;
    }

    .cardcontainer .container .card .contentBx {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 100px;
        text-align: center;
        transition: 1s;
        z-index: 90;
    }

    .cardcontainer .container .card:hover .contentBx {
        height: 210px;
    }

    .cardcontainer .container .card .contentBx h2 {
        position: relative;
        font-weight: 600;
        letter-spacing: 1px;
        color: #fff;
    }

    .cardcontainer .container .card .contentBx .size,
    .cardcontainer .container .card .contentBx .color {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 8px 20px;
        transition: .5s;
        opacity: 0;
        visibility: hidden;
    }

    .cardcontainer .container .card:hover .contentBx .size {
        opacity: 1;
        visibility: visible;
        transition-delay: .5s;
    }

    .cardcontainer .container .card:hover .contentBx .color {
        opacity: 1;
        visibility: visible;
        transition-delay: .6s;
    }

    .cardcontainer .container .card .contentBx .size h3,
    .cardcontainer .container .card .contentBx .color h3 {
        color: white;
        font-weight: 300;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-right: 10px;
    }

    .cardcontainer .container .card .contentBx .size span {
        width: 26px;
        height: 26px;
        text-align: center;
        line-height: 26px;
        font-size: 14px;
        display: inline-block;
        color: #111;
        background: #fff;
        margin: 0 5px;
        transition: .5s;
        color: #111;
        border-radius: 4px;
        cursor: pointer;
    }

    .cardcontainer .container .card .contentBx .size span:hover {
        /* other bug */
        background: #B90000;
    }

    .cardcontainer .container .card .contentBx .color span {
        width: 20px;
        height: 20px;
        background: #ff0;
        border-radius: 50%;
        margin: 0 5px;
        cursor: pointer;
    }

    .cardcontainer .container .card .contentBx .color span:nth-child(2) {
        background: #1BBFE9;
    }

    .cardcontainer .container .card .contentBx .color span:nth-child(3) {
        background: #1B2FE9;
    }

    .cardcontainer .container .card .contentBx .color span:nth-child(4) {
        background: #080481;
    }

    .cardcontainer .container .card .contentBx a {
        display: inline-block;
        padding: 10px 20px;
        background: #fff;
        border-radius: 4px;
        margin-top: 10px;
        text-decoration: none;
        font-weight: 600;
        color: #111;
        opacity: 0;
        transform: translateY(50px);
        transition: .5s;
    }

    .cardcontainer .container .card:hover .contentBx a {
        opacity: 1;
        transform: translateY(0px);
        transition-delay: .7s;
    }

</style>
<body>

    <!--begin::Main-->
		<div class="d-flex flex-column">
			<!--begin::Header Section-->
			

			@if (Request::route()->getName()!=='index')
				@include('template.layouts.header')
			@endif
			<!--end::Header Section-->
			<!--begin::How It Works Section-->
			<div id="app">
				
                    @yield('content')
            </div>
			<!--end::How It Works Section-->
			
            {{-- begin:: footer  --}}
            @if (Request::route()->getName()!=='index')
				@include('template.layouts.footer')
			@endif
            {{-- end:: footer  --}}


		</div>
		<!--end::Main-->



    <!--end::Main-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ asset('assets/js/custom/widgets.js')}}"></script>
		<script src="{{ asset('assets/js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{ asset('assets/js/custom/modals/create-app.js')}}"></script>
		<script src="{{ asset('assets/js/custom/modals/upgrade-plan.js')}}"></script>
		<!--end::Page Custom Javascript-->
		<script src="https://use.fontawesome.com/b9f85c081e.js"></script>

		<script src="{{ asset('assets/js/dropify.js')}}"></script>
		
		

		<script>
        $('.dropify').dropify();
    </script>
		<!--end::Javascript-->
</body>
</html>
