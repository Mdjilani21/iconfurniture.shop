<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $product = Products::all();
        return view('frontend.products', compact('product'));
    }
    public function allProduct(Request $request)
    {
        $product = Products::all();
        return view('frontend.pages.allProduct', compact('product'));
    }

    public function productListAjax()
    {
        $products = Products::select('name')->where('status', 'available')->get();

        $data = [];

        foreach ($products as $item){
            $data[] = $item['name'];
        }
        return $data;

    }

    public function searchProduct(Request $request)
    {
        if($request->productName){

            $searchProduct = Products::where('name','LIKE','%'.$request->productName.'%')->latest()->paginate(15);
            return view('frontend.pages.search', compact('searchProduct'));
        }
        else{
            return redirect()->back()->with('message','No products found !');
        }
    }
}
