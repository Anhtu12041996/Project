<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;

class BillController extends Controller
{
    //
    public function getBillController()
    {
    	$data['customer'] = Customer::all();
    	return view('backend.bill', $data);
    }
}
