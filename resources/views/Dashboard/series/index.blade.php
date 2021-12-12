@extends('Dashboard.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>List of Series</h1>
        <div class="pull-right py-4">
        <a href="{{ route('series.create') }}" class="btn btn-success">+</a>
        </div>

        <table class="table">
    <thead>
        <tr class="fw-bolder fs-6 text-gray-800">
            <th>Poster</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Name Category</th>
            <th>Actions</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($series as $serie)
        <tr>
        <td><img src="{{url('assets/img/'.$serie->poster)}} " class="rounded-circle" width="50px" height="50px" alt=""> </td>
            <td >{{ $serie->name }}</td>
            <td>{{ $serie->price }}</td>
            <td>{{ $serie->description }}</td>
            <td>{{$serie->categorie->name}}</td>
            <td>
                 
            <form action="{{ route('series.destroy',$serie->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field("DELETE") }}
                        <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app{{ $serie->id }}" id="kt_toolbar_primary_button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-trash" aria-hidden="true"></i></button>
            </form>
            </td>
            <td>
             <!--begin::Modal - Edit movie-->
		<div class="modal fade" id="kt_modal_create_app{{ $serie->id }}" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered mw-900px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header">
						<!--begin::Modal title-->
						<h2>Edit Serie</h2>
						<!--end::Modal title-->
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body py-lg-10 px-lg-10 row">
                        <div class="col-lg-4">
                        <form action="{{ route('series.update',$serie->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                        <label for="">Poster :</label>
                        <input type="file" name="poster" class="dropify" data-default-file="{{url('assets/img/'.$serie->poster)}}" />
                        </div>
                        <div class="col-lg-8">
                                <div class="form-group mb-5">
                                    <label for="">Name :</label>
                                    <input type="text" name="name" class="form-control" value="{{ $serie->name }}">
                                </div>
                                <div class="form-group mb-5">
                                    <label for="">Description :</label>
                                    <textarea name="description" class="form-control" cols="85" rows="2" >{{ $serie->description }}</textarea>
                                </div>
                                <div class="form-group mb-5">
                                    <label for="">Price :</label>
                                    <input type="number" name="price" class="form-control" value="{{ $serie->price }}">
                                </div>
                                <div class="form-group mb-5">
                                    <label for="">Category :</label><br>
                                    <select name="cetegory" id="" style="width:200px;" class="form-control">
                                    <option value="{{$serie->categorie->name}}">{{$serie->categorie->name}}</option>
                                    @foreach($categories as $categorie)
                                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                     @endforeach
                                    </select>
                                </div>
                                <input type="submit" value="Update" class="btn btn-primary mt-4">
                            </form>
                        </div>
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
		</div>
		<!--end::Modal - Edit movie-->

		<!--end::Modals-->
        </td>
        </tr>
    @endforeach
    </tbody>
</table>
        </div>
    </div>
   
</div>
@endsection
