@extends('layouts.app')
@section('content')
    <form action="{{route('product.create')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <div class="col-md-4 form-group">
            <span>Id</span>
            <input type="text" name="id" value="{{old('id')}}"class="form-control">
            @error('id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-4 form-group">
            <span>Product Name:</span>
            <input type="text" name="p_name" value="{{old('p_name')}}" class="form-control">
            @error('p_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Code:</span>
            <input type="number" name="p_code" value="{{old('p_code')}}" class="form-control">
            @error('p_code')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
       
        <div class="col-md-4 form-group">
            <span>Product Description:</span>
            <input type="text" name="p_desc" value="{{old('p_desc')}}" class="form-control">
            @error('p_desc')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Category:</span>
            <input type="text" name="p_category" value="{{old('p_category')}}" class="form-control">
            @error('p_category')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Price:</span>
            <input type="number" name="p_price" value="{{old('p_price')}}" class="form-control">
            @error('p_price')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Quantity:</span>
            <input type="number" name="p_quantity" value="{{old('p_quantity')}}" class="form-control">
            @error('p_quantity')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Stock Date:</span>
            <input type="date" name="p_stock_date" value="{{old('p_stock_date')}}" class="form-control">
            @error('p_stock_date')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Rating:</span>
            <input type="text" name="p_rating" value="{{old('p_rating')}}" class="form-control">
            @error('p_rating')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-md-4 form-group">
            <span>Product Purchased:</span>
            <input type="date" name="p_purchased" value="{{old('p_purchased')}}" class="form-control">
            @error('p_purchased')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-success" value="Add Product" >
    </form>
@endsection