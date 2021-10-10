@extends('layouts.app')
@section('content')
    <table class="table table-borded">
        <tr>
        <th>ID</th>
            <th>Product Name</th>
            <th>Product Code</th>
            <th>Product Description</th>
            <th>Product Category</th>
            <th>Product Price</th>
            <th>Product Quantity</th>
            <th>Product Stock Date</th>
            <th>Product Rating</th>
            <th>Product Purchased</th>
            
            <th></th>
        </tr>
        @foreach($products as $product)
            <tr>
            <td>{{$product->id}}</td>
                <td>{{$product->p_name}}</td>
                <td>{{$product->p_code}}</td>
                <td>{{$product->p_desc}}</td>
                <td>{{$product->p_category}}</td>
                <td>{{$product->p_price}}</td>
                <td>{{$product->p_quantity}}</td>
                <td>{{$product->p_stock_date}}</td>
                <td>{{$product->p_rating}}</td>
                <td>{{$product->p_purchased}}</td>
                
             
                <td><a href="/product/edit/{{$product->id}}/{{$product->p_name}}">Edit</a></td>
                <td><a href="/product/delete/{{$product->id}}/{{$product->p_name}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
@endsection