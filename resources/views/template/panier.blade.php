@extends('template.layouts.app')
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
       @php 
       $total=0;

       @endphp
            @foreach($cardLines as $cardLine)
         
            @if($cardLine->productToBuy->season_id != null)
                    <tr>
                         <td><img src="{{url('assets/img/'.$cardLine->productToBuy->product->serie->poster)}} " class="rounded-circle" width="50px" height="50px" alt=""> </td>
                        <td>{{$cardLine->productToBuy->product->serie->name." Season ".$cardLine->productToBuy->product->numbreSeason}}</td>
                        <td>{{$cardLine->productToBuy->product->serie->price}}</td>
                        <td>
                            <form action="{{ route('cardLine.destroy',$cardLine->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field("DELETE") }}
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    @php $total = $total +$cardLine->productToBuy->product->serie->price  @endphp
             @else
                    <tr>
                         <td><img src="{{url('assets/img/'.$cardLine->productToBuy->product->poster)}} " class="rounded-circle" width="50px" height="50px" alt=""> </td>
                        <td>{{$cardLine->productToBuy->product->name}}</td>
                        <td>{{$cardLine->productToBuy->product->price}}</td>
                        <td>
                            <form action="{{ route('cardLine.destroy',$cardLine->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field("DELETE") }}
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    @php $total  =$total + $cardLine->productToBuy->product->price @endphp
                
            @endif
            
           @endforeach
           <tr>
                         <td><b>Total :</b> </td>

                        <td></td>
                        <td><b>{{ $total }}</b></td>
                        <td>
                           

                        </td>
                    </tr>
        </tbody>
    </table>

    <a href="" class="btn btn-success float-end my-4">Validate your choice</a>
</div>
</div>
@endsection