<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Image;

class BrandController extends Controller
{
    public function BrandView()
    {
        $brands = Brand::latest()->get();
        return view('backend.brand.brand_view', compact('brands'));
    }

    public function BrandStore(Request $request){
        $request->validate([
            'brand_name_en' => 'required',
            'brand_name_uz' => 'required',
            'brand_image' => 'required'
        ], [
            'brand_name_en.required' => 'Inglizcha brend yozilmadi',
            'brand_name_uz.required' => 'O`zbekcha brend yozilmadi',
            'brand_image.required' => 'Rasm joylanmadi',
        ]);
        $image = $request->file('brand_image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(300, 300)->save('upload/brand/' . $name_gen);
        $save_url = 'upload/brand/' . $name_gen;

        Brand::insert([
            'brand_name_en' => $request->brand_name_en,
            'brand_slug_en' => strtolower(str_replace(' ', '-', $request->brand_name_en)),
            'brand_name_uz' => $request->brand_name_uz,
            'brand_slug_uz' => strtolower(str_replace(' ', '-', $request->brand_name_uz)),
            'brand_image' => $save_url,
        ]);
        $notification = array(
            'message' => 'Yangi brend muvaffaqqiyatli yangilandi',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function BrandEdit($id)
    {
        $brand = Brand::findOrFail($id);
        $brands = Brand::latest()->get();
        return view('backend.brand.brand_edit', compact('brand', 'brands'));
    }
    public function BrandUpdate(Request $request) {
        $brand_id = $request->id;
        $old_img = $request->old_image;
        if ($request->file('brand_image')) {
            $request->validate([
                'brand_name_en' => 'required',
                'brand_name_uz' => 'required',
                'brand_image' => 'required'
            ], [
                'brand_name_en.required' => 'Inglizcha brend yozilmadi',
                'brand_name_uz.required' => 'O`zbekcha brend yozilmadi',
                'brand_image.required' => 'Rasm joylanmadi',
            ]);
            unlink($old_img);
            $image = $request->file('brand_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('upload/brand/' . $name_gen);
            $save_url = 'upload/brand/' . $name_gen;

            Brand::findOrFail($brand_id)->update([
                'brand_name_en' => $request->brand_name_en,
                'brand_slug_en' => strtolower(str_replace(' ', '-', $request->brand_name_en)),
                'brand_name_uz' => $request->brand_name_uz,
                'brand_slug_uz' => strtolower(str_replace(' ', '-', $request->brand_name_uz)),
                'brand_image' => $save_url,
            ]);
            $notification = array(
                'message' => 'Brend rasm bilan muvaffaqqiyatli yangilandi',
                'alert-type' => 'info'
            );
            return redirect()->route('all.brand')->with($notification);
        } else {
            Brand::findOrFail($brand_id)->update([
                'brand_name_en' => $request->brand_name_en,
                'brand_slug_en' => strtolower(str_replace(' ', '-', $request->brand_name_en)),
                'brand_name_uz' => $request->brand_name_uz,
                'brand_slug_uz' => strtolower(str_replace(' ', '-', $request->brand_name_uz)),
            ]);
            $notification = array(
                'message' => 'Brend rasmsiz muvaffaqqiyatli yangilandi',
                'alert-type' => 'info'
        );
            return redirect()->route('all.brand')->with($notification);
        }
    }

    public function BrandDelete($id){
        $brand = Brand::findOrFail($id);
        $img = $brand->brand_image;
        unlink($img);
        Brand::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Brend muvaffaqqiyatli o`chirildi',
            'alert-type' => 'danger'
        );
        return redirect()->route('all.brand')->with($notification);
    }
}
