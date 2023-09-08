@extends('home')
@section('content')

<title>Product</title>
</head>
<body>
    <h1>Product</h1>
    <div>
        @if (session()->has('success'))
        <div class="alert alert-success col-md-3 m-2 " role="alert">
            {{session('success')}}
        </div>
            
        @endif
    </div>
    <div>
        <table  class="table table-hover" >
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
                @foreach ($products as $product )
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->qty}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->description}}</td>
                        <td>
                            <a href="{{route('product.edit',['product'=> $product])}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{route('product.destroy', ['product'=>$product])}}">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tr>
        </table>
    </div>
    @endsection
</body>
</html>