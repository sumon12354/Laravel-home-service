<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admindashboardcontroller extends Controller
{
    public function Index()
    {
        $customerinfo =DB::table('users')->where('utype','=','CST')->get();
        $total = DB::table('collections')->sum('collect_amount');
        $provider = DB::table('users')->where('utype','=','SVP')->get();
        return view('admin.dashboard',compact('customerinfo','total','provider'));
    }
}