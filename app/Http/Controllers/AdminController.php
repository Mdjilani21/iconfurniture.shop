<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.pages.index');
        // dd('Admin Page');
    }

    public function adminAuthLogin()
    {
        return view('auth.adminLogin');
    }

    public function AdminAuthLoginPost(Request $request)
    {
        // dd($request->all());
        //validate data
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8'
        ]);

        // //login Code
        $admin = Admin::where('email','=',$request->email)->first();
        if($admin){
            if(Hash::check($request->password,$admin->password)){
                $request->session()->put('username',$admin->username);
                return redirect('admin');
            }else{
                return back()->with('fail','Password does not matches');
            }
        }else{
            return back()->with('fail','This email is not registered');
        }
    }

    public function adminAuthLogout()
    {
        if(Session::has('username')){
            Session::pull('username');
            return redirect('home');
        }
    }

    public function adminProductList()
    {
        $product = Products::all();
        return view('admin.pages.Products',compact('product'));
    }
    public function adminProductAdd()
    {
        return view('admin.pages.ProductAdd');
    }
    public function adminProductStore(Request $request)
    {
    //    dd($request->all());

       $name = $request->name;
       $shortInfo = $request->shortInfo;
       $category = $request->category;
       $material = $request->material;
       $materialColor = $request->materialColor;
       $productSize = $request->productSize;
       $productQuantity = $request->productQuantity;
       $productImages = $request->productImages;
       $price = $request->price;
       $status = $request->status;
       $warranty = $request->warranty;
       $branchDivision = $request->branchDivision;
       $branchDistrict = $request->branchDistrict;
       $branchUpazila = $request->branchUpazila;
       $DiscountRange = $request->DiscountRange;
       $discount = $request->discount;
       $discountType = $request->discountType;
       $tags = $request->tags;
       $barcode = $request->barcode;
       $tnc_select1 = $request->tnc_select1;

       $product = new Products();

       $product->name =  $name;
       $product->shortInfo =  $shortInfo;
       $product->category =  $category;
       $product->material =  $material;
       $product->materialColor =  $materialColor;
       $product->productSize =  $productSize;
       $product->productQuantity =  $productQuantity;
       $product->productImages =  $productImages;
       $product->price =  $price;
       $product->status =  $status;
       $product->warranty =  $warranty;
       $product->branchDivision =  $branchDivision;
       $product->branchDistrict =  $branchDistrict;
       $product->branchUpazila =  $branchUpazila;
       $product->DiscountRange =  $DiscountRange;
       $product->discount =  $discount;
       $product->discountType =  $discountType;
       $product->tags =  $tags;
       $product->barcode =  $barcode;

       $product->save();

       return redirect()->back()->with('success','product added successfully');
    }
}
