<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PayWayService;

class PaymentController extends Controller
{
    //
    protected $payWayService;
    public function __construct(PayWayService $payWayService){
        $this->payWayService=$payWayService;

    }
    public function showCheckOutForm(){
        $cart = session()->get('cart');
        $item =[
            ['name' => 'test1','quantity' => '1','price' => '1'],
            ['name' => 'test2','quantity' => '1','price' => '1']

            
        ];;
     
        $items = base64_encode(json_encode($item));

         $req_time = time();
         $merchant_id = config('payway.merchant_id');
         $transactionId = time();
         $amount = '100.00';
         $firstName = 'Kim';
         $lastName = 'Thoy';
         $phone = '0884210655';
         $email = 'kimthoy@gmail.com';
         $return_params = "Hello World!";
         $type = "purchase";
         $currency='USD';
         $payment_option = '';
         $shipping = '0.60';
    
   


    $hash=$this->payWayService->getHash(
        $req_time.$merchant_id.$transactionId.$amount.$items.$shipping.$firstName.$lastName.$email.$phone.$type.$payment_option.$currency.$return_params
    );
    return view('home.checkout',compact(
        'hash','transactionId','amount','firstName','lastName','phone','email',
        'items','return_params','shipping','currency','type','payment_option','merchant_id','req_time'
    ));
    }
}
