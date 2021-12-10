@extends('Dashboard.dashboard')
@section('content')
<div class="container">
    <div class="row">
    <h2 class="mb-6">Add Categories</h2>
        <div class="col-md-12">
            <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}  
                <div class="form-group mb-5">
                    <label for="">Categorie Name :</label>
                    <input type="text" name="nameCategorie" class="form-control">
                </div>
                
                <input type="submit" value="Save" class="btn btn-primary mt-4">
            </form>
        </div>
    </div>
</div>

@endsection
