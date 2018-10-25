<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TypeProduct;
use App\Http\Requests\AddTypeProductRequest;
use App\Http\Requests\EditTypeProductRequest;

class TypeProductController extends Controller
{
    //
    public function getTypeProduct()
    {
    	$data['typeproductlist'] = TypeProduct::all();
    	return view('backend.typeproduct',$data);
    }

    public function postTypeProduct(AddTypeProductRequest $request)
    {
    	$typeproduct = new TypeProduct;
    	$typeproduct->typeProduct_name = $request->name;
    	$typeproduct->save();
    	return back();
    }

    public function getEditTypeProduct($id)
    {
    	$data['typeproduct'] = TypeProduct::find($id);
    	return view('backend.edittypeproduct', $data);
    }

    public function postEditTypeProduct(EditTypeProductRequest $request,$id)
    {
    	$typeproduct = TypeProduct::find($id);
    	$typeproduct->typeProduct_name = $request->name;
    	$typeproduct->save();
    	return redirect()->intended('admin/typeproduct');
    }

    public function getDeleteTypeProduct($id)
    {
    	TypeProduct::destroy($id);
    	return back();
    }
}
