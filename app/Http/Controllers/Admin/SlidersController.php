<?php

namespace App\Http\Controllers\Admin;

use App\Models\sliders;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SlidersController extends Controller
{
    public function Index()
    {
        $sliders = sliders::latest()->get();
        return view('admin.addsliders', compact('sliders'));
    }
    public function Entrysliders()
    {
        return view('admin.sliders');
    }
    public function submitsliders(Request $request)
    {
        // $request->validate([
        //     'title' => 'required|unique:sliders',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,giv,svg|max:4048',
        //     'status' => 'required|unique:sliders',
        // ]);

        $image = $request->file('image');
        $img_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $request->image->move(public_path('upload'), $img_name);
        $img_url = 'upload/' . $img_name;

        sliders::insert([
            'title' => $request->title,
            'image' => $img_url,
            'status' => $request->status

        ]);
        return redirect()->back();
    }
}