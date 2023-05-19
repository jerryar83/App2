<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categories;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index(){
        $products = Product::select('ProductID', 'ProductName', 'Categories.CategoryName', 'UnitPrice', 'UnitsInStock')
        ->join('Categories','Products.CategoryID','=','Categories.CategoryID')   
        ->where('Discontinued',"=",0)                                            
        ->get();

        return view('products/index')->with('products',$products);
    }

    public function edit($id){
        $products = Product::select ('ProductID','ProductName','Categories.CategoryName','UnitPrice','UnitsInStock')
        ->join('Categories','Products.CategoryID','=','Categories.CategoryID')
        ->where('ProductID',$id)
        ->get();

        $categories=Categories::select('CategoryID','CategoryName')
        ->get();
        return View('products.edit',compact('products','categories'));
    }

    public function update(Request $request){

        $request->all();
        $id = $request->input('id');
       $productName = $request->input('productName');
       /*  $categoryName = $request->input('categoryName');
        $categoryID=Categories::select('CategoryID')
        ->where('CategoryName',$categoryName)
        ->first(); */
        $categoryID=$request->input('categoryName');
        $unitPrice = $request->input('unitPrice');
        $unitsInStock = $request->input('unitsInStock');

        $update= Product::where('ProductID',$id)
        ->update(['ProductName'=>$productName,
        //'CategoryID'=>$categoryID->CategoryID,
        'CategoryID'=>$categoryID,
        'UnitPrice'=>$unitPrice,
        'UnitsInStock'=>$unitsInStock
        ]);
       return redirect('/IndexProducts');
       // return $request;
    }
    
    public function delete($id){
        $elimina = Product::where('ProductID',$id)->first();
        if($elimina){
            $deleteProduct =Product::where('ProductID',$id)
            ->update(['Discontinued'=>1]);
        }
        else{
            return "error";
        }
        if($deleteProduct >=1)
        {
        
            return redirect('/IndexProducts');
        }
    }
}
