<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\SubSubCategory;

class SubCategoryController extends Controller
{
    public function SubCategoryView(){
        $categories = Category::orderBy('category_name_en', 'ASC')->get();
        $subcategory = SubCategory::latest()->get();
        return view('backend.category.subcategory_view', compact('subcategory','categories'));
    }
    public function SubCategoryStore(Request $request){
        $request->validate([
            'subcategory_name_en' => 'required',
            'subcategory_name_uz' => 'required',
            'category_id' => 'required'
        ], [
            'subcategory_name_en.required' => 'Inglizcha kategoriya yozilmadi',
            'subcategory_name_uz.required' => 'O`zbekcha kategoriya yozilmadi',
            'category_id.required' => 'Kategoriya Tanlanmadi',
            
        ]);
        SubCategory::insert([
            'subcategory_name_en' => $request->subcategory_name_en,
            'subcategory_slug_en' => strtolower(str_replace(' ', '-', $request->subcategory_name_en)),
            'subcategory_name_uz' => $request->subcategory_name_uz,
            'subcategory_slug_uz' => strtolower(str_replace(' ', '-', $request->subcategory_name_uz)),
            'category_id' => $request->category_id,
        ]);
        $notification = array(
            'message' => 'Yangi Yordamchi Kategoriya muvaffaqqiyatli qo`shildi',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function SubCategoryEdit($id){
        $categories = Category::orderBy('category_name_en', 'ASC')->get();
        $subcategory = SubCategory::findOrFail($id);
        return view('backend.category.subcategory_edit', compact('subcategory','categories'));
    }
    public function SubCategoryUpdate(Request $request) {
            $subcategory_id = $request->id;
            $request->validate([
                'subcategory_name_en' => 'required',
                'subcategory_name_uz' => 'required',
                'category_id' => 'required'
            ], [
                'subcategory_name_en.required' => 'Inglizcha kategoriya yozilmadi',
                'subcategory_name_uz.required' => 'O`zbekcha kategoriya yozilmadi',
                'category_id.required' => 'kategoriya tanlanmadi',
            ]);
           
            SubCategory::findOrFail($subcategory_id)->update([
                'subcategory_name_en' => $request->subcategory_name_en,
                'subcategory_slug_en' => strtolower(str_replace(' ', '-', $request->subcategory_name_en)),
                'subcategory_name_uz' => $request->subcategory_name_uz,
                'subcategory_slug_uz' => strtolower(str_replace(' ', '-', $request->subcategory_name_uz)),
                'category_id' => $request->category_id,
            ]);
            $notification = array(
                'message' => 'Yordamchi Kategoriya muvaffaqqiyatli yangilandi',
                'alert-type' => 'info'
            );
            return redirect()->route('all.subcategory')->with($notification);
    }
    public function SubCategoryDelete($id){
        $subcategory = SubCategory::findOrFail($id);
        SubCategory::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Yordamchi Kategoriya muvaffaqqiyatli o`chirildi',
            'alert-type' => 'danger'
        );
        return redirect()->route('all.subcategory')->with($notification);
    }

    public function SubSubCategoryView(){
        $categories = Category::orderBy('category_name_en', 'ASC')->get();
        $subsubcategory = SubSubCategory::latest()->get();
        return view('backend.category.subsubcategory_view',compact('categories','subsubcategory'));
    }
    public function GetSubCategoryView($category_id){
        $subcat = SubCategory::where('category_id', $category_id)->orderBy('subcategory_name_en', 'ASC')->get();
        return json_encode($subcat);
    }
    public function SubSubCategoryStore(Request $request){
        $request->validate([
            'subsubcategory_name_en' => 'required',
            'subsubcategory_name_uz' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required'
        ], [
            'subsubcategory_name_en.required' => 'Inglizcha kategoriya yozilmadi',
            'subsubcategory_name_uz.required' => 'O`zbekcha kategoriya yozilmadi',
            'category_id.required' => 'Kategoriya Tanlanmadi',
            'subcategory_id.required' => 'Yordamchi Kategoriya Tanlanmadi',
            
        ]);
        SubSubCategory::insert([
            'subsubcategory_name_en' => $request->subsubcategory_name_en,
            'subsubcategory_slug_en' => strtolower(str_replace(' ', '-', $request->subsubcategory_name_en)),
            'subsubcategory_name_uz' => $request->subsubcategory_name_uz,
            'subsubcategory_slug_uz' => strtolower(str_replace(' ', '-', $request->subsubcategory_name_uz)),
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
        ]);
        $notification = array(
            'message' => 'Yordamchi ichi  Kategoriya muvaffaqqiyatli qo`shildi',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function SubSubCategoryEdit($id){
        $categories = Category::orderBy('category_name_en', 'ASC')->get();
        $subcategories = SubCategory::orderBy('subcategory_name_en', 'ASC')->get();
        $subsubcategories = SubSubCategory::findOrFail($id);
        return view('backend.category.subsubcategory_edit', compact('subcategories','categories', 'subsubcategories'));
    }
    public function SubSubCategoryUpdate(Request $request){
        $subsubcategory_id = $request->id;
            $request->validate([
                'subsubcategory_name_en' => 'required',
                'subsubcategory_name_uz' => 'required',
                'category_id' => 'required',
                'subcategory_id' => 'required'
            ], [
                'subsubcategory_name_en.required' => 'Inglizcha kategoriya yozilmadi',
                'subsubcategory_name_uz.required' => 'O`zbekcha kategoriya yozilmadi',
                'category_id.required' => 'kategoriya tanlanmadi',
                'subcategory_id.required' => 'kategoriya tanlanmadi',
            ]);
           
            SubSubCategory::findOrFail($subsubcategory_id)->update([
                'subsubcategory_name_en' => $request->subsubcategory_name_en,
                'subsubcategory_slug_en' => strtolower(str_replace(' ', '-', $request->subsubcategory_name_en)),
                'subsubcategory_name_uz' => $request->subsubcategory_name_uz,
                'subsubcategory_slug_uz' => strtolower(str_replace(' ', '-', $request->subsubcategory_name_uz)),
                'category_id' => $request->category_id,
                'subcategory_id' => $request->subcategory_id,
            ]);
            $notification = array(
                'message' => 'Ichi Kategoriya muvaffaqqiyatli yangilandi',
                'alert-type' => 'info'
            );
            return redirect()->route('all.subsubcategory')->with($notification);
    }
    public function SubSubCategoryDelete($id){
        $subsubcategory = SubSubCategory::findOrFail($id);
        SubSubCategory::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Ichki Kategoriya muvaffaqqiyatli o`chirildi',
            'alert-type' => 'danger'
        );
        return redirect()->route('all.subsubcategory')->with($notification);
    }
    
}
