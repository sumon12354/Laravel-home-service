<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function Index()
    {
        $customerinfo =DB::table('users')->where('utype','=','CST')->get();
        return view('admin.allcustomer',compact('customerinfo'));
    }
    public function DeleteCustomer($id){
       User::findOrFail($id)->delete();
       return redirect()->route('allcustomer')->with('message', 'Customer Deleted Successfully!');
    }
}
