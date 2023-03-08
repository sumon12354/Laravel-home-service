<?php

namespace App\Http\Controllers\admin;
use App\Models\Coupon;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Services;

class CouponController extends Controller
{
   public function Index()
   {
    $coupon = Coupon::latest()->get();
    return view('admin.coupon', compact('coupon'));
   
   }
   public function Showcoupon()
   {
    $serviceinfo = Services::latest()->get();
    return view('admin.addcoupon', compact('serviceinfo'));
   
   }
   public function Entrycoupon(Request $request)
   {
    //    $request->validate([
    //        'COUPON' => 'required',
    //        'DISCOUNT' => 'required',
    //        'START_DATE' => 'required',
    //        'DESCRIPTION' => 'required',
    //        'SERVICE' => 'required',
    //        'DISCOUNT_TYPE' => 'required',
    //        'EXPIRE_DATE' => 'required',
    //    ]);
       // $category_id = $request->category_id;
       // $category_name = Category::where('id', $category_id)->value('category_name');
       Coupon::insert([
           'COUPON' => $request->COUPON,
           'DISCOUNT' => $request->DISCOUNT,
           'START_DATE' => $request->START_DATE,
           'DESCRIPTION' => $request->DESCRIPTION,
           'SERVICE'=> $request->SERVICE,
           'DISCOUNT_TYPE' => $request->DISCOUNT_TYPE,
           'EXPIRE_DATE' => $request->EXPIRE_DATE,
           'created_at' => now(),
           'updated_at' => now()
       ]);
       return redirect()->back();
   }

   public function Delete($id)
   {
       Coupon::find($id)->delete();
        return redirect()->back();
    // return view('admin.coupon');
   
   }
}
