@extends('template.layouts.app')
@section('content')

<!--begin::filter-->
<div id="kt_toolbar" data-select2-id="select2-data-kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack"
        data-select2-id="select2-data-kt_toolbar_container">
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
            data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
            class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
        </div>
        <!--begin::Page title-->

        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center py-1" data-select2-id="select2-data-72-t3mg">
            <!--begin::Wrapper-->
            <div class="">
                <!--begin::Menu-->
                <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary btn btn-primary btn-hover-rise me-5 fw-bolder mt-10"
                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                    <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                fill="black"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->Filter</a>
                <!--begin::Menu 1-->
                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                    id="kt_menu_616838fb2edc9" style="">
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
                            <label class="form-label fw-bold">Category:</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div>
                            <form action="{{ route('filtreMovies') }}" method="post">
                                        {{ csrf_field() }}
                                        <select class="form-select form-select-solid select2-hidden-accessible" name="id_category"
                                            data-kt-select2="true" data-placeholder="Select option"
                                            data-dropdown-parent="#kt_menu_616838fb2edc9" data-allow-clear="true"
                                            data-select2-id="select2-data-7-y06f" tabindex="-1" aria-hidden="true">
                                            @foreach($categories as $categorie)
                                                <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                        data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary"
                                        data-kt-menu-dismiss="true">Apply</button>
                                </div>
                            </form>
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
    <h3 class="fs-2hx text-dark mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">Our
        Movies</h3>
    <!--end::Title-->
</div>
<!--end::Heading-->

<!--begin::Row-->
<div class="row g-10">



    @foreach($movies as $movie)
    <!--begin::Col-->
    <div class="col-md-3">
        <!--begin::Feature post-->


        <div class="cardcontainer">
            <div class=" container ">
                <div class="card" style="background-image:url('{{url('assets/img/'.$movie->poster)}}') ; background-size:cover;">
                    <div class="contentBx">
                        <h2>{{$movie->name}}</h2>
                        <div class="size">
                            <h3>Price: {{$movie->price}} DH</h3>
                        </div>
                        <form action="{{ route('productToBuy') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" value="{{$movie->id}}" name="idMovie">
                            <button class="border-none" style=" background-color: Transparent; border:none;" type="submit"><a>Add to card</a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Feature post-->
    </div>
    <!--end::Col-->
    @endforeach
</div>
<!--end::Row-->
</div>
<!--end::Container-->

@endsection
