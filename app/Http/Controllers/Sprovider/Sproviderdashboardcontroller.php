<?php

namespace App\Http\Controllers\Sprovider;

use App\Models\Registration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class Sproviderdashboardcontroller extends Controller
{
    public function Index()
    {
        return view('sprovider.dashboard');
    }

    // public function SproviderProfile()
    // {
    //     return view('sprovider.SproviderProfile');
    // }

    public function SproviderReg()
    {
        $categoryinfo = Category::latest()->get();
        return view('sprovider.sproviderReg', compact('categoryinfo'));

    }

    public function SpRegstration(Request $request)
    {
            $request->validate([
                'name' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,giv,svg|max:4048',
                'email' => 'required',
                'phone' => 'required',
                'location' => 'required',
                'service' => 'required',
            ]);

            $image = $request->file('image');
            $img_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $request->image->move(public_path('upload'), $img_name);
            $img_url = 'upload/' . $img_name;

            Registration::insert([
                'name' => $request->name,
                'image' =>$img_url,
                'email' => $request->email,
                'phone' => $request->phone,
                'location' => $request->location,
                'service' => $request->service,
                'created_at' => now(),
                'updated_at' => now(),

            ]);
            return redirect()->back();
    }

    public function ServicePProfile()
    {
        $profile = Registration::latest()->take(1)->get();
        return view('sprovider.SproviderProfile', compact('profile'));
    }


}
