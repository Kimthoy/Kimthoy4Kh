<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Mail\Mail;
use App\Models\Comment;
use App\Models\Reply_Comment;
use Illuminate\Support\Facades\Mail as MailFacades;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index()
    {
        $orders = Order::all();
        return view('admin.order.order')->with('orders',$orders);
    }
    public function approve($id){
        $orders = Order::findOrFail($id);
        $details=[
            'title'=>'Dear, Customers!',
            'body'=>'Now that your goods have been delivered to your location, please wait for 8 - 12 hours.
                        For more information, please contact 088 42 10 655 or Telegram: @kim_thoy
                        Thank you !!! ',
        ];
        $orders->status = 1; //Approved
       
        $orders->save();
        MailFacades::to('pheangtiger03@mail.com')->send(new Mail($details));
        return redirect()->back(); //Redirect user somewhere
    }
     public function reject($id){
        $orders = Order::findOrFail($id);
        $orders->status = 0; //Declined
        $orders->save();
        return redirect()->back(); //Redirect user somewhere
    }

}
