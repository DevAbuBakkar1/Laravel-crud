@extends('welcome')
@section('content')

<div class="col-md-4 m-auto border mt-3 p-2 border-info">
    <h5 class="text-center text-warning">update product</h5>
    <form action="updatedata" method="get">
        <div class="mb-2">
            <input type="hidden" name="id" value="{{$pid}}">

            <label for="ProductName">Product Name</label>
            <input type="text" name="name" value="{{$pname}}" class="form-control" id="">
        </div>
        <div class="mb-2">
            <label for="ProductName">Product Price</label>
            <input type="text" name="price" value="{{$pprice}}" class="form-control" id="">
        </div>
        <br>
        <button type="submit" class="btn btn-outline-danger rounded-pill">UPDATE</button>
    </form>
</div>







@endsection
