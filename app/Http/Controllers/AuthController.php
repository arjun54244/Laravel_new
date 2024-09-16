<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // public function index (){
    //     return view('welcome');
    // }
    // function user($user_id,$User_name){
    //     return $user_id . $User_name;
    // }

    // public function index( $name){
    //     return "thsi is invoked" - $name;
    // }
    public function create(){
        return "This is create";
    }
    // public function login(){
    //     return view('auth.login', [
    //         'name' => 'James',
    //         'last' => 'doi',
    //     ]);
    // }
    public function login(){
        return view('auth.login');
    }
    public function greeting(){
        return view('auth.login');
    }
    public function listUser(){
        // return view('auth.login');
        $users = User::get();
        return view('welcome', compact('users'));
    }

    function insertProducts(){
        return view('form');
    }
    function insertProductsPost(Request $request){
        
        // Validate input fields
        $request->validate([
            'p_name' => 'required',
            'p_slug' => 'required',
            'p_price' => 'required|numeric',
            'p_date' => 'required|date',
        ]);
    
        // Save the product
        $product = new Products();
        $product->product_name = $request->p_name;
        $product->slug = $request->p_slug;
        $product->price = $request->p_price;
        $product->date = $request->p_date;
        
        // Uncomment this line to save the product to the database
        
        if($product->save()){
            return redirect('/products')->with('success', 'Product inserted successfully');
        }
    
        // Redirect back to the form after successful submission
        // return redirect('/products/insert')->with('success', 'Product inserted successfully');
    }
    function updateProductsPost(Request $request){
        // Validate input fields
        $request->validate([
            'p_name' => 'required',
            'p_slug' => 'required',
            'p_price' => 'required|numeric',
            'p_date' => 'required|date',
        ]);
    
        // Save the product
        $product = Products::where('slug',$request->p_slug)->first();
        $product->product_name = $request->p_name;
        $product->slug = $request->p_slug;
        $product->price = $request->p_price;
        $product->date = $request->p_date;
        if($product->save()){
            return "Product updated successfully";
        }
        return "Error in updating product";
    }

    
    
    
}
