<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CartComponent extends Component
{   
    public function increaseQiantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product-> qty +1 ;
        Cart::update($rowId,$qty);
    }
    public function decreaseQiantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product-> qty - 1 ;
        Cart::update($rowId,$qty);
    }

    public function destroy($rowId)
    {
        
        Cart::remove($rowId);
        \session()->flash('success_message','Item has been removed');
    }
    public function checkout(){
        if(Auth::check()){
            return \redirect(\route('checkout'));
        }
        else{
            return \redirect(\route('login'));
        }
    }

    public function setAmountForCheckout(){
        // if (!Cart::instance('cart')->count()>0){
        //     \session()->forget('checkout');
        //     return;
        // }

        \session()->put('checkout',[
            'discount'=>0,
            'subtotal' => Cart::instance('cart')->subtotal(),
            'tax'=>Cart::instance('cart')->tax(),
            'total'=>Cart::instance('cart')->total(),

        ]);
    }
    public function render()
    {   
        // $this->setAmountForCheckout();
        return view('livewire.cart-component')-> layout ('layouts.base');
    }
}
