<?php

namespace App\Http\Livewire;

use App\Models\Product;

use Livewire\Component;
use Livewire\WithPagination;
use Cart;
use App\Models\Category;



class ShopComponent extends Component
{   

 
        public$sorting;
       public $pagesize ;

       public function mount(){
            $this->sorting="1";
            $this->pagesize=12;
       }
    

    public function store($product_id,$product_name,$product_price){
    Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        \session()->flash('success_massage','Item_added_cart');
        return \redirect()->route('product.cart');

    }
    use WithPagination;
    public function render()
    {   

            if($this->sorting=='1'){
                $products=Product::orderBy('created_at','DESC');
            }
            elseif($this->sorting=='2'){
                $products=Product::orderBy('regular_price','ASC');
            }
            elseif($this->sorting=='3'){
                $products=Product::orderBy('regular_price','DESC');
            }
            else{
                
            }


            $categories = Category::all();
         $products = Product::paginate(30);
        return view('livewire.shop-component',['products'=>$products , 'categories'=>$categories])-> layout ('layouts.base');
    }
}
