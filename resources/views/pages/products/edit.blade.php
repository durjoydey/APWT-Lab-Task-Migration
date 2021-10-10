@extends('layouts.app')
@section('content')
    <form action="{{route('product.edit')}}" class="col-md-6" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$product->id}}">

        <div class="col-md-4 form-group">
            <span>Product Name:</span>
            <input type="text" name="p_name" value="{{$product->p_name}}" class="form-control">
            @error('p_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Code:</span>
            <input type="number" name="p_code" value="{{$product->p_code}}" class="form-control">
            @error('p_code')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
       
        <div class="col-md-4 form-group">
            <span>Product Description:</span>
            <input type="text" name="p_desc" value="{{$product->p_desc}}" class="form-control">
            @error('p_desc')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Category:</span>
            <input type="text" name="p_category" value="{{$product->p_category}}" class="form-control">
            @error('p_category')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Price:</span>
            <input type="number" name="p_price" value="{{$product->p_price}}" class="form-control">
            @error('p_price')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Quantity:</span>
            <input type="number" name="p_quantity" value="{{$product->p_quantity}}" class="form-control">
            @error('p_quantity')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Stock Date:</span>
            <input type="date" name="p_stock_date" value="{{$product->p_stock_date}}" class="form-control">
            @error('p_stock_date')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Rating:</span>
            <input type="text" name="p_rating" value="{{$product->p_rating}}" class="form-control">
            @error('p_rating')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Purchased:</span>
            <input type="date" name="p_purchased" value="{{$product->p_purchased}}" class="form-control">
            @error('p_purchased')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-success" value="Edit Product" >
    </form>
@endsection