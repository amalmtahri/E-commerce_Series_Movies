@extends('template.layouts.app')

@section('content')

<!--begin::Container-->
<div class="container">

    <!--begin::filter-->
    <div class="toolbar" id="kt_toolbar" data-select2-id="select2-data-kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack" data-select2-id="select2-data-kt_toolbar_container"><div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                
            </div>
            <!--begin::Page title-->
            
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center py-1" data-select2-id="select2-data-72-t3mg">
                <!--begin::Wrapper-->
                <div class="">
                    <!--begin::Menu-->
                    <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                    <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->Filter</a>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_616838fb2edc9" style="">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10" data-select2-id="select2-data-71-lj6v">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid select2-hidden-accessible" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_616838fb2edc9" data-allow-clear="true" data-select2-id="select2-data-7-y06f" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-9-u9xz"></option>
                                        <option value="1" data-select2-id="select2-data-76-h53s">Approved</option>
                                        <option value="2" data-select2-id="select2-data-77-dcpe">Pending</option>
                                        <option value="2" data-select2-id="select2-data-78-jt7w">In Process</option>
                                        <option value="2" data-select2-id="select2-data-79-q5v9">Rejected</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5 select2-container--below" dir="ltr" data-select2-id="select2-data-8-n7ym" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-eqlw-container" aria-controls="select2-eqlw-container"><span class="select2-selection__rendered" id="select2-eqlw-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1">
                                        <span class="form-check-label">Author</span>
                                    </label>
                                    <!--end::Options-->
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                        <span class="form-check-label">Customer</span>
                                    </label>
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Notifications:</label>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                                    <label class="form-check-label">Enabled</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Menu-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::filter-->

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