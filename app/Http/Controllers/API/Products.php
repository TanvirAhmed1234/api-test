<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use Validator;
class Products extends Controller
{
    public function save(Request $req){
        $valid = Validator::make($req->all(),[
            'category'=>'required'
        ]);
        if($valid->fails()){
            return response()->json(
                ['error'=>$valid->errors()],
                401
            );
        }
        $product = new Product;
        $product->name = $req->name;
        $product->category = $req->category;
        $product->price = $req->price;
        echo $product->save();
    }
    public function update(Request $req){
        $product = Product::find($req->id);
        $product->category = $req->category;
        if($product->save()){
            return ['result'=>"success", "msg"=>"Data is Updated"];
        }
    }
}
