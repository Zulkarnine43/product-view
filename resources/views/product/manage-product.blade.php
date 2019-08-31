$extends('admin.master');

@section('body')
    <div class="table-responsive">

        <table class="table table-dark">

            <tr>
                <th scope="col">id</th>
                <th scope="col">category-name</th>
                <th scope="col">Brand-Name</th>
                <th scope="col">product-price</th>
                <th scope="col">product-Iamge</th>
                <th scope="col">product-quantity</th>
                <th>publication status</th>
                <th scope="col">Action</th>


            </tr>
            @php($i=1)
            @foreach($products as $product)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$product->category-name}}</td>
                <td>{{$product->brand-name}}</td>
                <td>{{$product->product-name}}</td>
                <td>
                <img src ="{{asset($product->product-image)}}" alt="">
                </td>
                <td>{{$product->product-price}}</td>
                <td>{{$product->product-quantity}}</td>
                <td>{{$product->publication-status}}</td>
                <td>
                    <a href="" class="btn btn-info btn-xs" title="view details">
                        <span class="glyphicon glyphicon-zoom-in"></span>
                    </a>
                    <a href="" class="btn btn-info btn-xs" title="published">
                        <span class="glyphicon glyphicon-arrow-up"></span>
                    </a>
                    <a href="{{route('edit-product',['id'=>$product->id])}}" class="btn btn-info btn-xs " title="edit">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a href="" class="btn btn-info btn-xs" title="edit">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a>
                </td>
            </tr>
  @endforeach
        </table>
    </div>
@endsection