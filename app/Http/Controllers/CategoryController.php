<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function AddCategoryFrom()
    { $cate=Category::where(['parent_id'=>0])->get();
        return view('Administrator.Category.add_category',['cate'=>$cate]);
    }

    public function storeCategoryFromData(Request $request)
    {
        $data=$request->all();
        $category= new Category;
        $category->name=$data['name'];
        $category->parent_id=$data['parent_id'];
        $category->url=$data['url'];
        $category->description=$data['description'];

        if (!empty($data['status'])){
            $category->status=$data['status'];
        }
         else{
             $category->status=0;
         }
        $category->save();
        Alert::alert('Category', 'Successfully Created', 'success');
        return redirect()->route('storeCategoryFromData');
    }
        public function ViewCategoryFrom(){
        $categories=Category::get();

            return view('Administrator.Category.view_category',['categories'=>$categories]);

        }
  public function EditCategory($id){
   $category = Category::find($id);
   $levels= Category::where(['parent_id'=>0])->get();
   $categoryDetails = Category::where(['id'=>$id])->first();
    return view('Administrator.Category.Edit-Category',['category'=> $category,'categoryDetails'=>$categoryDetails,'levels'=>$levels]);

  }

  public function EditCategoryUpdate(Request $request){

        $category = Category::find($request->cat_id);
        $category->name=$request->name;
        $category->parent_id=$request->parent_id;
        $category->url=$request->url;
        $category->description=$request->description;

        if (!empty($request->status)){
            $category->status=$request->status;
        }
         else{
             $category->status=0;
         }
        $category->save();
        Alert::alert('Category', 'Successfully Created', 'success');
        return redirect()->route('storeCategoryFromData');

  }

}
