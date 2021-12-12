@extends('template.layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 mt-6">
            <img src="{{url('assets/img/'.$oneSerie->poster)}}" alt="" style="width:90% ; height:400px">
        </div>
        <div class="col-lg-6 mt-6">
            <h2>{{ $oneSerie->name }}</h2>
            <p>{{$oneSerie->description}} </p>
            <form action="{{ route('addSeason') }}" method="post">
            {{ csrf_field() }}
            <div class="col-lg-4">
            <label for="">Season :</label>
            <select name="idSeason" class="form-control">
                @foreach($oneSerie->seasons as $season)
                <option value="{{ $season->id }}">{{ $season->numbreSeason }}</option>
                @endforeach
            </select>
            </div>
            <button class="btn btn-primary mt-8" type="submit">Add to card</button>
            </form>
        </div>
    </div>
</div>
@endsection