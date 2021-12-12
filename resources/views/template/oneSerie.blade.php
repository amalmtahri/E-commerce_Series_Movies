@extends('template.layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 mt-6">
            <img src="{{url('assets/img/'.$oneSerie->poster)}}" alt="" style="width:90% ; height:400px">
        </div>
        <div class="col-lg-6 mt-6 d-flex align-items-center">
            <div class="row pt-4 mt-2">
                <h2>{{ $oneSerie->name }}</h2>
                <div class="row mt-4 text-justify">
                    <p>{{$oneSerie->description}} </p>
                </div>
            </div>





        </div>
    </div>
        <div class="row g-10 mt-4 pt-3">



        @foreach($oneSerie->seasons as $season)
            <!--begin::Col-->
            <div class="col-md-3">
                <!--begin::Feature post-->


                <div class="cardcontainer">
                    <div class=" container ">
                        <div class="card"
                            style="background-image:url('{{url('assets/img/'.$oneSerie->poster)}}') ; background-size:cover;">
                            <div class="contentBx">
                                <h2 style="background-color:#000;">Season: {{$season->numbreSeason}}</h2>
                                <form action="{{ route('addSeason') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $season->id }}" name="idSeason">
                                    <button class="border-none" style=" background-color: Transparent; border:none;"
                                        type="submit"><a>Add to card</a></button>
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
</div>
@endsection
