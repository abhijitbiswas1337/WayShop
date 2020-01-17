<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\Console\Input\Input;

class ProductsController extends Controller
{
    public function getProductForm()
    {
        return view('Administrator.Products.add_products');
    }

    public function storeProductFormData(Request $request)
    {
        $data = $request->all();
        $product = new Products;
        $product->name = $data['name'];
        $product->code = $data['code'];
        $product->color = $data['color'];
        if (!empty($data['description'])) {
            $product->description = $data['description'];
        } else {
            $product->description = '';
        }
        $product->price = $data['price'];

        if ($file=$request->file('image')){
             echo $img_tmp=Input::file('image');
             $extension=$img_tmp->getClientOriginalExtension();
             $file_name=rand(111,9999).'.'.$extension;
             $img_path=public_path().'Assets/Admin/uploads/products'.$file_name;

             Image::make($img_tmp)->resize(500,500)->save($img_path);
             $product->image=$file_name;
        }
          $product->save();
        Alert::alert('Product','Successfully Add', 'success');
        return view('Administrator.Products.add_products');
    }

}
