<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Transection;
use Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CheckOutComponent extends Component
{   

    public $firstname;
   
    // public $country;
    public $city;
    public $province;
    public $zipcode;
    public $email;
    public $mobile;
    public $status;
    // public $address;
  
    

    public $paymentmode;
    public $thankyou;

    // public function updated($fields){
    //     $this->validateOnly([$fields,
    //         'firstname'=>'required',
           
           
           
         
    //     ]);
    // }

    public function placeOrder(){
        // $this->validate([
        //     'firstname'=>'required',
           
            
            
            
        // ]);

        $order = new Order();
        $order->user_id=Auth::user()->id;
        // $order->subtotal=session()->get('checkout')['subtotal'];
        // $order->discount=session()->get('checkout')['discount'];
        // $order->tax=session()->get('checkout')['tax'];
        // $order->total=session()->get('checkout')['total'];
        $order->firstname= 'mehedi';
        $order->lastname='hasan';
      
        $order->country='Bangladesh';
        $order->city = 'Kustia';
        $order->province='yea';
        $order->zipcode='5550';
        $order->email='mehedihasan@gmail.com';
        $order->mobile='0185468265';

         $order->subtotal=81;
         $order->discount=0;
         $order->tax=17;
         $order->total=98.01;
        //  $order->address=$this->address;
       
        $order->status='ordered';
       $order->save() ;

    //    foreach(Cart::instance('cart')->content() as $item){
         
    //     $orderItem = new OrderItem();
    //     $orderItem->product_id = $item->id;
    //     $orderItem->order_id = $order->id;
    //     $orderItem->price = $item->price;
    //     $orderItem->quantity = $item->qty;
    //     $orderItem->save();

    //    }

    //    if($this->paymentmode == 'cod'){

    //      $transections = new Transection();
    //      $transections->user_id=Auth::user()->id;
    //      $transections->order_id = $orders->id;
    //      $transections->mode = 'cod';
    //      $transections->status = 'pending';
    //      $transections->save();

    //    }

       $this->thankyou = 1;
       Cart::instance('cart')->destroy();
       \session()->forget('checkout');

       
     }

     public function verifyForCheckout()
    {   
        if(!Auth::check()){
            return \redirect()->route('login');
        }
        elseif($this->thankyou){
            return \redirect()->route('thankyou');
        }
        elseif(session()->get('checkout')){
            return \redirect()->route('product.cart');
        }
      

        
    }

    public function render()
    {   
        
        $this->verifyForCheckout();
        return view('livewire.check-out-component')->layout ('layouts.base');
    }
}
