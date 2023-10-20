<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use App\Models\Brand;
use App\Models\MultiImg;
use App\Models\Product;
use Carbon\Carbon;
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
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'subsubcategory_id' => $request->subsubcategory_id,
            'product_name_en' => $request->product_name_en,
            'product_name_uz' => $request->product_name_uz,
            'product_slug_en' => strtolower(str_replace(' ', '-', $request->product_slug_en)),
            'product_slug_uz' => strtolower(str_replace(' ', '-', $request->product_slug_uz)),
            'product_code' => $request->product_code,
            'product_qty' => $request->product_qty,
            'product_tags_en' => $request->product_tags_en,
            'product_tags_uz' => $request->product_tags_uz,
            'product_size_en' => $request->product_size_en,
            'product_size_uz' => $request->product_size_uz,
            'product_color_en' => $request->product_color_en,
            'product_color_uz' => $request->product_color_uz,
            'selling_price' => $request->selling_price,
            'discount_price' => $request->discount_price,
            'short_descp_en' => $request->short_descp_en,
            'short_descp_uz' => $request->short_descp_uz,
            'long_descp_en' => $request->long_descp_en,
            'long_descp_uz' => $request->long_descp_uz,
            'hot_deals' => $request->hot_deals,
            'featured' => $request->featured,
            'special_offer' => $request->special_offer,
            'special_deals' => $request->special_deals,
            'status' => 1,
            'product_thambnail' => $save_url,
            'created_at' => Carbon::now()
            ]);
            $images = $request->file('multi_img');
            foreach($images as $img){
                $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
                Image::make($img)->resize(500,500)->save('upload/products/multi-img/'.$make_name);
                $upload_path = 'upload/products/multi-img/'.$make_name;

                MultiImg::insert([
                    'product_id' => $product_id,
                    'photo_name' => $upload_path,
                    'created_at' => Carbon::now()
                ]);

                $notification = [
                    'message' => 'yangi mahsulot qo`shildi',
                    'alert-type' => 'info'
                ];
                return redirect()->back()->with($notification);

            }


    }
}
