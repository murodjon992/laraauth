<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Slider;
use App\Models\Product;
use App\Models\MultiImg;;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function index(){
        $products = Product::where('status', 1)->orderBy('id','DESC')->get();
        $sliders = Slider::where('status', 1)->orderBy('id','DESC')->limit(3)->get();
        $categories = Category::orderBy('category_name_en','ASC')->get();
        $featureds = Product::where('featured', 1)->orderBy('id','DESC')->limit(6)->get();
        $hot_deals = Product::where('hot_deals', 1)->orderBy('id','DESC')->limit(3)->get();
        return view('frontend.index', compact('products', 'sliders', 'categories','featureds','hot_deals'));
    }
    public function ProductDetail($id){
        $product = Product::findOrFail($id);
        $multi_img = MultiImg::where('product_id', $id)->orderBy('id','DESC')->get();
        return view('frontend.product.product_detail', compact('product','multi_img'));
    }
    public function UserLogout(){
        Auth::logout();
        return redirect()->route('login');
    }
    public function UserProfile(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('frontend.profile.user_profile', compact('user'));
    }
    public function UserProfileStore(Request $request){
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;

        if ($request->file('profile_photo_path')){
            $file = $request->file('profile_photo_path');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'), $filename);
            $data['profile_photo_path'] = $filename;
        }
        $data->save();

        $notification = array(
            'message' => 'Foydalanuvchi profili muvaffaqqiyatli yangilandi',
            'alert-type' => 'success'
        );
        return redirect()->route('dashboard')->with($notification);
    }
    public function UserChangepassword(){
        return view('frontend.profile.change_password');
    }
    public function UserUpdatePassword(Request $request){
        $validateData = $request->validate([
                'oldpassword' => 'required',
                'password' => 'required|confirmed'
            ]);

            $hashedPassword = Auth::user()->password;
            if(Hash::check($request->oldpassword,$hashedPassword)){
                $user = User::find(Auth::id());
                $user->password = Hash::make($request->password);
                $user->save();
                Auth::logout();
                return redirect()->route('user.logout');
            } else {
                return redirect()->back();
            }

    }
}
