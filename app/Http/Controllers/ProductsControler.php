<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsControler extends Controller
{
     public function index (){
 return Product::query()->get();
   }
   public function show( int $id){
    return Product::query()->where('id',$id)->get();
   }

   public function store (StoreProductRequest $request){
   Product::query()->create($request->validated());

}



public function update ($id,UpdateProductRequest $request){
Product::query()->where('id',$id)->update($request->validated());

}
 public function destroy( int $id){
$product= Product::query()->where('id',$id)->delete();
return "true";
   }
}
