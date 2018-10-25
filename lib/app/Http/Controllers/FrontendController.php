<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Bill;
use App\Models\BillDetail;
use App\User;
use Hash;
use Auth;
use Cart;

class FrontendController extends Controller
{
    //
    public function getHome()
    {
    	$data['slidelist'] = Slide::all();
    	$data['promotion'] = Product::where('promotion_price','<>',0)
    			->orderBy('product_id','desc')
    			->paginate(4);
		$data['football'] = Product::where('cate_id',1)->where('typeProduct_id',1)->paginate(4);
		$data['badminton'] = Product::where('cate_id',3)->where('typeProduct_id',4)->paginate(4);
		$data['basketball'] = Product::where('cate_id',2)->where('typeProduct_id',3)->paginate(4);
    	return view('frontend.index', $data);
    }

    public function getBongDa()
    {
    	$data['shoelist'] = Product::where('cate_id',1)->where('typeProduct_id',2)->get();
    	$data['clothinglist'] = Product::where('cate_id',1)->where('typeProduct_id',1)->get();
    	$data['accessories'] = Product::where('cate_id',1)->where('typeProduct_id',3)->get();
    	return view('frontend.product_type',$data);
    }

    public function getBongRo()
    {
    	$data['shoelist'] = Product::where('cate_id',2)->where('typeProduct_id',2)->get();
    	$data['clothinglist'] = Product::where('cate_id',2)->where('typeProduct_id',1)->get();
    	$data['accessories'] = Product::where('cate_id',2)->where('typeProduct_id',3)->get();
    	return view('frontend.product_type1', $data);
    }

    public function getCauLong()
    {
    	$data['shoelist'] = Product::where('cate_id',3)->where('typeProduct_id',2)->get();
    	$data['clothinglist'] = Product::where('cate_id',3)->where('typeProduct_id',4)->get();
    	$data['accessories'] = Product::where('cate_id',3)->where('typeProduct_id',3)->get();
    	return view('frontend.product_type2',$data);
    }

    public function getChiTiet($id)
    {
    	$product = Product::find($id);
    	$related= Product::where('cate_id',$product->cate_id)->where('typeProduct_id',$product->typeProduct_id)->paginate(3);
    	$new = Product::orderBy('product_id','desc')->take(5)->get();
    	return view('frontend.product',compact('product','related','new'));
    }

    public function getLienHe()
    {
    	return view('frontend.contacts');
    }

    public function getGioiThieu()
    {
    	return view('frontend.about');
    }

    public function getLogin()
    {
        return view('frontend.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request,
            [
                'email'=>'required',
                'password'=>'required|min:6|max:20'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Email không đúng định dạng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự'
            ]
        );

        $credentials = array('email'=>$request->email,'password'=>$request->password);
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }
        else {
            return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
        }
    }

    public function getSignup()
    {
        return view('frontend.signup');
    }

    public function postSignup(Request $request)
    {
        $this->validate($request,
            [
                'email'=>'required|email|unique:db_admin,email',
                'password'=>'required|min:6|max:20',
                'fullname'=>'required',
                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'email.unique'=>'Email đã được sử dụng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                're_password.same'=>'Mật khẩu không giống nhau',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự'
            ]
        );
        $user = new User();
        $user->full_name = $request->fullname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->address = $request->adress;
        $user->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->intended('/');
    }

    public function getSearch(Request $request)
    {
        $product = Product::where('product_name','like','%'.$request->key.'%')
            ->orWhere('unit_price',$request->key)
            ->get();
        return view('frontend.search',compact('product'));
    }

    public function getAddToCart($id)
    {
        $product = Product::find($id);
        Cart::add(array(
            'id' => $id,
            'name' => $product->product_name,
            'price' => $product->unit_price,
            'quantity' => 1,
            'attributes'  => array(
                'image'  => $product->img,
                'promotion_price' => $product->promotion_price
            )
        ));
        return redirect()->back();
    }

    public function getDeleteCart($id)
    {
        Cart::remove($id);
        return back();
    }

    public function getCheckout()
    {
        return view('frontend.checkout');
    }

    public function postCheckout(Request $request)
    {
        $cart = Cart::getContent();

        $customer = new Customer;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->phone_number = $request->phone;
        $customer->note = $request->notes;
        $customer->save();

        $bill = new Bill;
        $bill->customer_id = $customer->customer_id;
        $bill->date_order = date('Y-m-d');
        $bill->total = $cart = Cart::getTotal();
        $bill->note = $request->notes;
        $bill->save();

        // foreach ($cart->items as $key => $value) {
        //     $billDetail = new BillDetail;
        //     $billDetail->bill_id = $bill->bill_id;
        //     $billDetail->product_id = $key;
        //     $billDetail->quantity = Cart::get('quantity');
        //     $billDetail->price = Cart::get('price');
        //     $billDetail->save();
        // }
        Cart::clear();


        return redirect()->back()->with('thongbao','Đặt hàng thành công');
    }
}