<?php

namespace App\Http\Controllers;

use App\Category;
use App\Products;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\Console\Input\Input;

class ProductsController extends Controller
{
    public function getProductForm()
    {
        $categories=Category::where(['parent_id'=>0])->get();
        $categories_dropdown="<option value='' selected disabled>select</option>";
        foreach ($categories as $category_details){
            $categories_dropdown.="<option value='".$category_details->id."'>".$category_details->name."</option>";
            $sub_categories=Category::where(['parent_id'=>$category_details->id])->get();
            foreach ($sub_categories as$sub_cat){
                $categories_dropdown.="<option value='".$sub_cat->id."'>&nbsp;--&nbsp;".$sub_cat->name."</option>";
            }
        }
        return view('Administrator.Products.add_products',['categories_dropdown'=>$categories_dropdown]);
    }

    public function storeProductFormData(Request $request)
    {
        $data = $request->all();
        $product = new Products;
        $product->category_id = $data['category_id'];
        $product->name = $data['name'];
        $product->code = $data['code'];
        $product->color = $data['color'];
        if (!empty($data['description'])) {
            $product->description = $data['description'];
        } else {
            $product->description = '';
        }
        $product->price = $data['price'];

        if ($file = $request->file('image')) {
            $imageName = $file->getClientOriginalExtension();
            $filename = rand(111, 99999) . '.' . $imageName;
            $img_path = public_path() . '/Assets/Admin/uploads/products/' . $filename;
            Image::make($file)->resize(500, 500)->save($img_path);
            $product->image = $filename;
        }
        $product->save();
        Alert::alert('Product', 'Successfully Add', 'success');



        return redirect()->route('add_product_form');
    }

    public function viewProducts()
    {
        $products = Products::get();
        return view('Administrator.Products.view_products')->with(compact('products'));
    }

    public function editProduct($id)
    {
        $products = Products::find($id);

        return view('Administrator.Products.edit_product', ['products' => $products]);
    }

    public function StoreeditProduct(Request $request)
    {
        $products = Products::find($request->product_id);
        if ($file = $request->file('image')) {

            $imageName = $file->getClientOriginalExtension();
            $filename = rand(111, 99999) . '.' . $imageName;
            $img_path = public_path() . '/Assets/Admin/uploads/products/' . $filename;
            Image::make($file)->resize(500, 500)->save($img_path);
            $products->image = $filename;
        }

        $products->name = $request->name;
        $products->code = $request->code;
        $products->color = $request->color;
        $products->description = $request->description;
        $products->price = $request->price;

        $products->save();
        Alert::alert('Product', 'Successfully Update', 'success');
        return redirect()->route('ViewProducts');
    }

    public function productDelete($id)
    {
        $products = Products::find($id);
        $products->delete();
        Alert::alert('Product', 'Successfully Deleted', 'success');
        return redirect()->route('ViewProducts');

    }


}
