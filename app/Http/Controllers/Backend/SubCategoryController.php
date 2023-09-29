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
}
