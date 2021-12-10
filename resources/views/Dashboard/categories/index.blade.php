@extends('Dashboard.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>List of Categories</h1>
        <div class="pull-right py-4">
        <a href="{{ route('categories.create') }}" class="btn btn-success">+</a>
        </div>

        <table class="table">
    <thead>
        <tr class="fw-bolder fs-6 text-gray-800">
            <th>Categories Name</th>
            <th>Actions</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($categories as $categorie)
   
        <tr>
            <td>{{ $categorie->name }}</td>
            <td>     
            <form action="{{ route('categories.destroy',$categorie->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field("DELETE") }}
                <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app{{ $categorie->id }}" id="kt_toolbar_primary_button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-trash" aria-hidden="true"></i></button>
            </form>
            </td>
            <td>
             <!--begin::Modal - Edit movie-->
		<div class="modal fade" id="kt_modal_create_app{{ $categorie->id }}" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered mw-900px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header">
						<!--begin::Modal title-->
						<h2>Edit Categorie</h2>
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
                        <form action="{{ route('categories.update',$categorie->id) }}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                        {{ csrf_field() }} 
                                <div class="form-group mb-5">
                                    <label for="">Categories Name :</label>
                                    <input type="text" name="nameCategorie" class="form-control" value="{{ $categorie->name }}">
                                </div>
                                <input type="submit" value="Update" class="btn btn-primary mt-4">
                            </form>
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
