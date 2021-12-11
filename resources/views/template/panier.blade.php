@extends('Dashboard.dashboard')
@section('content')

<div class="container">
<div class="py-5">
    <table class="table table-row-dashed table-row-gray-300 gy-7">
        <thead>
            <tr class="fw-bolder fs-6 text-gray-800">
                <th>Poster</th>
                <th>Name</th>
                <th>Price</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($cardLines as $cardLine)
         
            @if($cardLine->productToBuy->season_id != null)
                    <tr>
                         <td><img src="{{url('assets/img/'.$cardLine->productToBuy->product->serie->poster)}} " class="rounded-circle" width="50px" height="50px" alt=""> </td>
                        <td>{{$cardLine->productToBuy->product->serie->name." Season ".$cardLine->productToBuy->product->numbreSeason}}</td>
                        <td>{{$cardLine->productToBuy->product->serie->price}}</td>
                        <td></td>
                    </tr>
             @else
                    <tr>
                         <td><img src="{{url('assets/img/'.$cardLine->productToBuy->product->poster)}} " class="rounded-circle" width="50px" height="50px" alt=""> </td>

                        <td>{{$cardLine->productToBuy->product->name}}</td>
                        <td>{{$cardLine->productToBuy->product->price}}</td>
                        <td></td>
                    </tr>
                
            @endif
            
           @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection