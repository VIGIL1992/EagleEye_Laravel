<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\contact_page;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(Request $request){
        return view('admin.home');
    }

    public function about(Request $request){
        return view('admin.about');
    }
    public function product(Request $request){
        $products = Product::all();
        return view('admin.products', compact('products'));
        // return view('admin.product');
    }

    public function contact(Request $request){
        $contact = contact_page::first();
        return view('admin.contact', compact('contact'));
    }

}

