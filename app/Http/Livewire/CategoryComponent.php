<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;


use Livewire\WithPagination;
use Cart;
use App\Models\Category;

class CategoryComponent extends Component
{       


    public$sorting;
       public $pagesize ;
       public $category_slug;

       public function mount($category_slug){
            $this->sorting="1";
            $this->pagesize=12;
            $this->category_slug=$category_slug;
       }
    

    public function store($product_id,$product_name,$product_price){
    Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        \session()->flash('success_massage','Item_added_cart');
        return \redirect()->route('product.cart');

    }
     function render()
    {       

        $category = Category::where('slug',$this->category_slug)->first();
        $category_id = $category->id;
        $category_name = $category->name;

        if($this->sorting=='default'){
            $products=Product::where('category_id',$category->id)->orderBy('regular_price','ASC')->paginate(12);
        }
        elseif($this->sorting=='price'){
            $products=Product::where('category_id',$category->id)->orderBy('regular_price','ASC');
        }
        elseif($this->sorting=='3'){
            $products=Product::where('category_id',$category->id)->orderBy('regular_price','DESC');
        }
        else{
            
        }


        $categories = Category::all();
       $products = Product::paginate(30);
        return view('livewire.category-component',['products'=>$products , 'categories'=>$categories,'category_name'=>$category_name] )-> layout ('layouts.base');
    }
}
