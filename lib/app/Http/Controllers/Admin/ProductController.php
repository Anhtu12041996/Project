<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddSlideRequest;
use App\Models\Product;
use App\Models\Category;
use App\Models\TypeProduct;
use DB;

class ProductController extends Controller
{
    //
    public function getProduct()
    {
    	$data['productlist'] = DB::table('db_products')->join('db_categories','db_products.cate_id','=','db_categories.cate_id')
    			->orderBy('product_id','asc')
    			->paginate(15);
    	return view('backend.product',$data);
    }

    public function getAddProduct()
    {
    	$data['catelist'] = Category::all();
    	$data1['typelist'] = TypeProduct::all();
    	return view('backend.addproduct',$data,$data1);
    }

    public function postAddProduct(AddSlideRequest $request)
    {
    	$filename = $request->img->getClientOriginalName();
    	$product = new Product;
    	$product->product_name = $request->name;
    	$product->unit_price = $request->unit_price;
    	$product->img = $filename;
    	$product->promotion_price = $request->promotion_price;
    	$product->description = $request->description;
    	$product->cate_id = $request->cate;
    	$product->typeProduct_id = $request->type;
    	$product->save();
    	$request->img->storeAs('product',$filename);
    	return back();
    }


    public function getEditProduct($id)
    {
    	$data['product'] = Product::find($id);
    	$data['listcate'] = Category::all();
    	$data['listtype'] = TypeProduct::all();
    	return view('backend.editproduct',$data);
    }

    public function postEditProduct(Request $request,$id)
    {
    	$product = new Product;
    	$arr['product_name'] = $request->name;
    	$arr['unit_price'] = $request->unit_price;
    	$arr['promotion_price'] = $request->promotion_price;
    	$arr['description'] = $request->description;
    	$arr['cate_id'] = $request->cate;
    	$arr['typeProduct_id'] = $request->type;
    	if ($request->hasFile('img')) {
    		$img = $request->img->getClientOriginalName();
    		$arr['img'] = $img;
    		$request->img->storeAs('product',$img);
    	}
    	$product::where('product_id',$id)->update($arr);
    	return redirect('admin/product');
    }

    public function getDeleteProduct($id)
    {
    	Product::destroy($id);
    	return back();
    }
}
