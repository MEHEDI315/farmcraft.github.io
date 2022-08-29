<?php

namespace App\Http\Livewire;

use App\Models\Product;

use Livewire\Component;
use Livewire\WithPagination;
use Cart;
use App\Models\Category;



class SearchComponent extends Component
{   

 
        public $sorting;
       public $pagesize ;
       public $search;
       public $product_cat;
       public $product_cat_id;

       public function mount(){
            $this->sorting="1";
            $this->pagesize=12;
            $this->fill(\request()->only('search','product_cat','product_cat_id'));
       }
    

    public function store($product_id,$product_name,$product_price){
    Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        \session()->flash('success_massage','Item_added_cart');
        return \redirect()->route('product.cart');

    }
    use WithPagination;
    public function render()
    {   

            if($this->sorting=='default'){
                $products=Product::where('name','like','%'.$this->search.'%')->where('category_id',$this->product_cat_id)->orderBy('created_at','DESC');
            }
            elseif($this->sorting=='price'){
                $products=Product::where('name','like','%'.$this->search.'%')->where('category_id',$this->product_cat_id)->orderBy('regular_price','ASC');
            }
            elseif($this->sorting=='3'){
                $products=Product::where('name','like','%'.$this->search.'%')->where('category_id',$this->product_cat_id)->orderBy('regular_price','DESC');
            }
            else{
                
            }


            $categories = Category::all();
         $products = Product::paginate(30);
        return view('livewire.search-component',['products'=>$products , 'categories'=>$categories])-> layout ('layouts.base');
    }
}
