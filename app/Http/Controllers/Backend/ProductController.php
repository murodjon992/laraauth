<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use Image;

class ProductController extends Controller
{
    public function AddProduct(){
        $categories = Category::latest()->get();
        $brands = Brand::latest()->get();
        return view('backend.product.add_product',compact('categories','brands'));
    }
    public function ProductStore(Request $request){
        $image = $request->file('product_thambnail');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(400,400)->save('upload/products/thambnail/'.$name_gen);
        $save_url = 'upload/products/thambnail/'.$name_gen;
        $product_id = Product::insertGetId([
            'brand_id' => $request->brand_id,
            'brand_id' => $request->brand_id,
            'brand_id' => $request->brand_id,
            'brand_id' => $request->brand_id,
            'brand_id' => $request->brand_id,
            ]);

    }
}
