<?php
/**
 * Created by PhpStorm.
 * User: xuanhung
 * Date: 7/18/18
 * Time: 1:58 PM
 */

namespace App\Http\Controllers;


use App\Product;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('admin.product.list')
            -> with('products_in_view', $products);
    }

    public function create(){
        return view('admin.product.form');
    }

    public function store(){
        $product = new Product();
        $product -> name = Input::get('name');
        $product -> price = Input::get('price');
        $product -> categoryId = Input::get('categoryId');
        $product -> description = Input::get('description');
        $product -> image = Input::get('image');
        $product -> save();
        return redirect('/admin/product/list');
    }

    public function edit($id){
        $product = Product::find($id);
        if($product == null){
            return view('404');
        }
        return view('admin.product.edit') -> with('product_in_view', $product);
    }

    public function update(){
        $product = Product::find(Input::get('id'));
        if($product == null){
            return view('404');
        }
        $product -> name = Input::get('name');
        $product -> price = Input::get('price');
        $product -> categoryId = Input::get('categoryId');
        $product -> description = Input::get('description');
        $product -> image = Input::get('image');
        $product -> save();
        return redirect('/admin/product/list');
    }

    public function destroy($id){
        $product = Product::find($id);
        if($product == null){
            return view('404');
        }
    }
}