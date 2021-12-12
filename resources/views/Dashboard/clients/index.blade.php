@extends('Dashboard.dashboard')

@section('content')
<div class="card pt-4 mb-6 mb-xl-9 mx-4">
    <!--begin::Card header-->
    <div class="card-header border-0">
        <!--begin::Card title-->
        <div class="card-title">
            <h2>List Clients</h2>
        </div>
        <!--end::Card title-->
        <!--begin::Card toolbar-->

        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0 pb-5">
        <!--begin::Table-->
        <div id="kt_table_customers_payment_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="table-responsive">
                <table class="table align-middle table-row-dashed gy-5 dataTable no-footer"
                    id="kt_table_customers_payment">
                    <!--begin::Table head-->
                    <thead class="border-bottom border-gray-200 fs-7 fw-bolder">
                        <!--begin::Table row-->
                        <tr class="text-start text-muted text-uppercase gs-0">
                            <th class="min-w-100px sorting" tabindex="0" aria-controls="kt_table_customers_payment"
                                rowspan="1" colspan="1" aria-label="Invoice No.: activate to sort column ascending"
                                style="width: 100px;">Name</th>

                            <th class="sorting" tabindex="0" aria-controls="kt_table_customers_payment" rowspan="1"
                                colspan="1" aria-label="Amount: activate to sort column ascending"
                                style="width: 54.4375px;">Email</th>
                            <th class="sorting" tabindex="0" aria-controls="kt_table_customers_payment" rowspan="1"
                                colspan="1" aria-label="Status: activate to sort column ascending"
                                style="width: 58.8958px;">Status</th>
                        </tr>
                        <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="fs-6 fw-bold text-gray-600">
                        @foreach($clients as $client)
                        <tr class="odd">
                            <td>
                                <a href="#" class="text-gray-600 text-hover-primary mb-1">{{ $client->name }}</a>
                            </td>
                            <td>
                                {{ $client->email }}
                            </td>
                            <td>
                                <span class="badge badge-light-success">Successful</span>
                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                    <!--end::Table body-->
                </table>
            </div>

        </div>
        <!--end::Table-->
    </div>
    <!--end::Card body-->
</div>
@endsection
