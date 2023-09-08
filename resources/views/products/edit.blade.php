@extends('home')
<body>
    @section('content')
    <h1>Edit a Product</h1>
    <div>
        @if($errors->any())
        <ul class="alert alert-danger col-md-3 m-2 " role="alert">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form class="row g-3 m-3" method="post" action="{{route('product.update', ['product'=>$product])}}">
        @csrf
        @method('put')
        <div class="">
        <div class="col-md-6">
            <label class="form-label" >name</label>
            <input class="form-control" type="text" name="name" placeholder="name" value="{{$product->name}}">
        </div>
        <div class="col-md-6">
            <label class="form-label" >Quantity</label>
            <input class="form-control" type="text" name="qty" placeholder="Quantity" value="{{$product->qty}}" >
        </div>
        <div class="col-md-6">
            <label  class="form-label">Price</label>
            <input class="form-control" type="text" name="price" placeholder="Price" value="{{$product->price}}" >
        </div>
        <div class="col-md-6">
            <label class="form-label">description</label>
            <input class="form-control" type="text" name="description" placeholder="description" value="{{$product->description}}">
        </div></div>
        <div class="col-md-6 text-center">
            <input type="submit" class="btn btn-primary " value="update Product">
        </div>
    </form>
    @endsection
</body>
</html>