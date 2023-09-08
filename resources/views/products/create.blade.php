@extends('home')

<body>
    @section('content')
    <h1>Create a Product</h1>
    <div>
        @if($errors->any())
        <ul class="alert alert-danger col-md-3 m-2 " role="alert">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form  class="row g-4" method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div>
        <div class="col-md-6">
            <label class="form-label" >name</label>
            <input  class="form-control"type="text" name="name" placeholder="name">
        </div>
        <div class="col-md-6">
            <label class="form-label" >Quantity</label>
            <input class="form-control" type="text" name="qty" placeholder="Quantity">
        </div>
        <div class="col-md-6">
            <label class="form-label">Price</label>
            <input class="form-control" type="text" name="price" placeholder="Price">
        </div>
        <div class="col-md-6 ">
            <label class="form-label">description</label>
            <input class="form-control" type="text" name="description" placeholder="description">
        </div>
    </div>
        <div class="col-md-6 text-center">
            <input type="submit" class="btn btn-primary mb-3" value="Save a New Product">
        </div>
    </form>
    @endsection
</body>
</html>