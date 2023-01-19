<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\Product;
use App\Models\catagory;
class homeController extends Controller
{
    public function home()
  {
    $catagory=catagory::all();
    return view('front.Home',['test'=>$catagory]);
    
  }
  public function admin()
  {
    return view('layouts.index');
  }

  public function productlist()
  {
    $product=Product::all();
        return view('front.allproduct', ['test'=>$product]);
    
  }
  




    public function create(Request $request)
  {
    
    $data['name'] = $request->name;
    $data['number'] = $request->number;
    $data['email'] = $request->email;
    $data['message'] = $request->message;
    

    customer::create($data);
    

    return redirect()->to('/');
  }

  function clist (){
    $customer=customer::all();
    return view('clist.index',['test'=>$customer]); 
}
function all_product (){
  $product=Product::all();
  return view('product.all_product',['test'=>$product]); 
}
  public function new_product()
  {
    $catagory=catagory::all();
    return view('product.new_product',['test'=>$catagory]);
  }
  public function new_catagory()
  {
    return view('product.new_catagory');
  }

   public function login()
 {
   return view('clist.login');
 }
 public function admincheck(Request $request)
 {
   $data['password'] = $request->password;
   if(($request->password)==12345)
   {
     return redirect()->route('admin');
   }else{
    return redirect()->route('home');
   }
 }
 public function add_product(Request $request){
  if(!file_exists(public_path('upload/product')))
      {
          mkdir(public_path('upload/product'),0777,true);
      }
      $image=$request->image;                          
      $name=$image->getClientOriginalName();
      $imagename=time()."_".$name;
      $destination=public_path('upload/product');
      $image->move($destination,$imagename);
      
      $data['image']='upload/product/'.$imagename;
      $data['name']=$request->name;
      $data['karet']=$request->karet;
      $data['weight']=$request->weight;
      $data['thickness']=$request->thickness;
      $data['height']=$request->height;
      $data['catagory']=$request->catagory;
      $data['price']=$request->price;
      $data['delivery_time']=$request->delivery_time;
      $data['product_code']=$request->product_code;
      $data['about']=$request->about;
      
      Product::create($data);
      

        return redirect()->route('new_product')->with('success', 'Product Added Successfully.');

 }
 public function add_catagory(Request $request){
  if(!file_exists(public_path('upload/product')))
      {
          mkdir(public_path('upload/product'),0777,true);
      }
      $image=$request->image;                          
      $name=$image->getClientOriginalName();
      $imagename=time()."_".$name;
      $destination=public_path('upload/product');
      $image->move($destination,$imagename);
      
      $data['image']='upload/product/'.$imagename;
      $data['name']=$request->name;
      
      catagory::create($data);
      

        return redirect()->route('new_catagory')->with('success', 'new catagory Added Successfully.');

 }

 public function catagory_product($id)
 {
  $test=Product::where('catagory','=','$id')->first();
        return view('front.allproduct',compact('test'));
 }
}
