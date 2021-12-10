@extends('Dashboard.dashboard')
@section('content')
<div class="container">
<h2 class="mb-6">Add Series</h2>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('series.store') }}" method="post" enctype="multipart/form-data">

            {{ csrf_field() }}
                <div class="form-group mb-5">
                    <label for="">Name :</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group mb-5">
                    <label for="">Description :</label>
                    <textarea name="description" class="form-control" cols="142" rows="2"></textarea>
                </div>
                <div class="form-group mb-5">
                    <label for="">Price :</label>
                    <input type="number" name="price" class="form-control">
                </div>
                <div class="form-group mb-7">
                    <label for="">Poster :</label>
                    <input type="file" name="poster"  accept=".png, .jpg, .jpeg" class="form-control">
                </div>
                <div class="form-group mb-5">
                    <label for="">Category :</label>
                    <select name="cetegory" id="" style="width:200px;" class="form-control">
                    @foreach($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                    @endforeach
                    </select>
                </div>
                <input type="submit" value="Save" class="btn btn-primary mt-4">
            </form>
        </div>
    </div>
</div>

@endsection
