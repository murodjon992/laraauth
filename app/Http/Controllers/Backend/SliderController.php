<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Carbon\Carbon;
use Image;

class SliderController extends Controller
{
    public function ViewSlider(){
        $sliders = Slider::latest()->get();
        return view('backend.slider.slider_view', compact('sliders'));
    }
    public function AddSlider(Request $request){
        $image = $request->file('slider_img');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(830,370)->save('upload/sliders/'.$name_gen);
        $save_url = 'upload/sliders/'.$name_gen;
        $slider_id = Slider::insertGetId([
           'title' => $request->slider_title,
           'description' => $request->slider_description,
           'slider_img' => $save_url,
           'created_at' => Carbon::now()
            ]);
           $notification = [
            'message' => 'Slider yangi qo`shildi',
            'alert-type' => 'success'
           ];
           return redirect()->back()->with($notification);
           
    }
    public function SliderInactive($id){
        Slider::findOrFail($id)->update(['status' => 0]);
        $notification = [
                    'message' => 'mahsulot tugadi',
                    'alert-type' => 'info'
                ];
                return redirect()->back()->with($notification);
    }
    public function SliderActive($id){
        Slider::findOrFail($id)->update(['status' => 1]);
        $notification = [
                    'message' => 'mahsulot mavjud',
                    'alert-type' => 'info'
                ];
                return redirect()->back()->with($notification);
    }
    public function SliderEdit($id){
        $slider = Slider::findOrFail($id);
        return view('backend.slider.slider_edit', compact('slider'));
    }
    public function SliderUpdate(Request $request){
        $slider_id = $request->id;
        Slider::findOrFail($slider_id)->update([
            'title' => $request->slider_title,
            'description' => $request->slider_description,
        ]);
        $notification = [
            'message' => 'Slider yangilandi rasmsiz',
            'alert-type' => 'info'
        ];
        return redirect()->route('manage-slider')->with($notification);
    }
    public function SliderDelete($id){
        $slider = Slider::findOrFail($id);
        $img = $slider->slider_img;
        unlink($img);
        Slider::findOrFail($id)->delete();
        $notification = [
            'message' => 'Slider o`chirildi',
            'alert-type' => 'info'
        ];
        return redirect()->back()->with($notification);
    }
}
