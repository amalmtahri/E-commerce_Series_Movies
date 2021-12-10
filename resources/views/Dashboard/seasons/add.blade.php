@extends('Dashboard.dashboard')
@section('content')
<div class="container">
    <div class="row">
    <h2 class="mb-6">Add Seasons</h2>
        <div class="col-md-12">
            <form action="{{ route('seasons.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}  
                <div class="form-group mb-5">
                    <label for="">Serie Name :</label>
                    <select name="serie_name" id="" style="width:200px;" class="form-control">
                        @foreach($series as $serie)
                            <option value="{{ $serie->id }}">{{ $serie->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-7">
                    <label for="">Number of Seasons :</label>
                    <input type="number" name="number_season" class="form-control">
                </div>
                <input type="submit" value="Save" class="btn btn-primary mt-4">
            </form>
        </div>
    </div>
</div>

@endsection
