@extends('Dashboard.dashboard')
@section('content')
<div class="container">
    <div class="row">
        <h2 class="mb-6">Add Episodes</h2>
        <div class="col-md-12">
            <form action="{{ route('episodes.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}  
                <div class="form-group mb-5">
                    <label for="">Season of serie :</label>
                    <select name="season_id" id="" style="width:200px;" class="form-control">
                    @foreach($series as $serie)
                    <optgroup label="{{ $serie->name }}">
                        @foreach($serie->seasons as $season)
                            <option value="{{ $season->id }}">{{ $season->numbreSeason }}</option>
                        @endforeach
                    @endforeach
                    </select>
                </div>
                <div class="form-group mb-7">
                    <label for="">Number of Episode :</label>
                    <input type="number" name="number_episode" class="form-control">
                </div>
                <div class="form-group mb-7">
                    <label for="">Time of Episode :</label>
                    <input type="text" name="time_episode" class="form-control">
                </div>
                <input type="submit" value="Save" class="btn btn-primary mt-4">
            </form>
        </div>
    </div>
</div>

@endsection
