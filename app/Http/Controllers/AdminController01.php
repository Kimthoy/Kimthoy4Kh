<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;


class AdminController01 extends Controller
{
    //
    public function dashboard(){
        $counts=Comment::count();
        $user=User::count();
        $product=Product::count();
        $order=Order::count();
        $order_item=OrderItem::count();
       
        
        return view('admin.dashboard',compact('counts','user','product','order','order_item'));
    }
    
  
}
