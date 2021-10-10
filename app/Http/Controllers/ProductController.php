<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
   
    public function Create(){
        return view('pages.products.create');
    }
    public function createSubmit(Request $request){
       
        $this->validate(
            $request,
            [
                'id'=>'required',
                'p_name'=>'required',
                'p_code'=>'required',
                'p_desc'=>'required',
                'p_category'=>'required',
                'p_price'=>'required',
                'p_quantity'=>'required',
                'p_stock_date'=>'required',
                'p_rating'=>'required',
                'p_purchased'=>'required',
               
            ],
            [
                'p_name.required'=>'Name Required!',
                'p_code.required'=>'Code Required!',
                'p_desc.required'=>'Description Required!',
                'p_category.required'=>'Category Required!',
                'p_price.required'=>'Price Required!',
                'p_quantity.required'=>'Quantity Required!',
                'p_stock_date.required'=>'Stock Date Required!',
                'p_rating.required'=>'Rating Required!',
                'p_purchased.required'=>'Purchased Required!',
            ]
        );


        $var = new Product();
       
        $var->p_name= $request->p_name;
        $var->p_code= $request->p_code;
        $var->p_desc= $request->p_desc;
        $var->p_category= $request->p_category;
        $var->p_price= $request->p_price;
        $var->p_quantity= $request->p_quantity;
        $var->p_stock_date= $request->p_stock_date;
        $var->p_rating= $request->p_rating;
        $var->p_purchased= $request->p_purchased;
        $var->save();


        return redirect()->route('product.list');      
    }
    public function list(){
   
        $products = Product::all();
        return view('pages.products.list')->with('products',$products);
    }
    public function edit(Request $request){
        
        $id = $request->id;
       
        $product = Product::where('id',$id)->first();
       
        return view('pages.products.edit')->with('product', $product);

    }

    public function editSubmit(Request $request){
        $var = Product::where('id',$request->id)->first();
        
        $var->p_name= $request->p_name;
        $var->p_code= $request->p_code;
        $var->p_desc= $request->p_desc;
        $var->p_category= $request->p_category;
        $var->p_price= $request->p_price;
        $var->p_quantity= $request->p_quantity;
        $var->p_stock_date= $request->p_stock_date;
        $var->p_rating= $request->p_rating;
        $var->p_purchased= $request->p_purchased;
        $var->save();
        return redirect()->route('product.list');

    }
    public function delete(Request $request){
        $var = Product::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('product.list');

    }

}