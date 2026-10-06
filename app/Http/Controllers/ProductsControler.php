<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsControler extends Controller
{
     public function index (){
  $products =Product::query()->get();
 return response()->json([
   'massege'=>'the products contains',
'products'=>$products
  ]);
   }
   public function show( int $id){
    $product= Product::query()->where('id',$id)->get();
 return response()->json([
 'massege'=>'the product contains',
'product'=>$product
 ]);
   }

   public function store (StoreProductRequest $request){
   Product::query()->create($request->validated());
return'true';
}



public function update ($id,UpdateProductRequest $request){
$product= Product::query()->where('id',$id)->update($request->validated());
return response()->json([
'massege'=>'product updated',
'product'=>$product

]);
}
 public function destroy( int $id){
$product= Product::query()->where('id',$id)->delete();
return 'true';
   }
}
