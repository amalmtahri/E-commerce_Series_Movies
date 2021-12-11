@extends('template.layouts.app')

@section('content')
    

<!--begin::Container-->
<div class="container">
    <!--begin::Heading-->
    <div class="text-center mb-17">
        <!--begin::Title-->
        <h3 class="fs-2hx text-dark mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">Latest Movies</h3>
        <!--end::Title-->
    </div>
    <!--end::Heading-->

    <!--begin::Row-->
    <div class="row g-10">




        <!--begin::Col-->
        <div class="col-md-3">
            <!--begin::Feature post-->
            <div class="card-xl-stretch me-md-6">
                <!--begin::Image-->
                <a href="" class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-400px mb-5" style="background-image:url('https://thumbnail-lg.shofda.net/uploads/m-red-stone-20211204-175036.webp')">
                    <!-- <img src="assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="" /> -->
                </a>
                <!--end::Image-->
                <!--begin::Body-->
                <div class="m-0">
                    <!--begin::Title-->
                    <a href="#" class="fs-5 text-dark fw-bolder text-hover-primary text-dark lh-base">Metronic Admin - How To Started the Dashboard Tutorial</a>
                    <!--end::Title-->
                    <!--begin::Content-->
                    <div class="fs-6 fw-bolder">
                        <!--begin::Author-->
                        <a href=".#" class=" text-danger  float-end ">Action</a>
                        <!--end::Author-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Feature post-->
        </div>
        <!--end::Col-->



        
    </div>
    <!--end::Row-->
</div>
<!--end::Container-->


@endsection