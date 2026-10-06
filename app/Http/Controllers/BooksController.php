<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
   public function index (){
 return Book::query()->get();
 
   }
   public function show( int $id){
    return Book::query()->where('id',$id)->get();
   }

   public function store (StoreBookRequest $request){
   Book::query()->create($request->validated());

}



public function update ($id,UpdateBookRequest $request){
Book::query()->where('id',$id)->update($request->validated());

}
 public function destroy( int $id){
$book= Book::query()->where('id',$id)->delete();
return "true";
   }
}
