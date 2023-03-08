<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AreaZone;
use App\Models\Category;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function Index()
    {
        $services = Services::latest()->get();
        return view('admin.allservices', compact('services'));
    }
    public function AddServices()
    {
        $categories = Category::latest()->get();

        return view('admin.addservices', compact('categories'));
    }
    public function storeservices(Request $request)
    {
        $request->validate([

            'service_name' => 'required|unique:services',
            'category_id' => 'required',
            'tage_line' => 'required',
            'price' => 'required',
            'description' => 'required',
            'inclusion' => 'required',
            'status' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,giv,svg|max:4048',
            'thumbnail_image' => 'required|image|mimes:jpeg,png,jpg,giv,svg|max:2048',
        ]);

        $image1 = $request->file('image');
        $img_name1 = hexdec(uniqid()) . '.' . $image1->getClientOriginalExtension();
        $request->image->move(public_path('upload'), $img_name1);
        $img_url1 = 'upload/' . $img_name1;

        $image = $request->file('thumbnail_image');
        $img_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $request->thumbnail_image->move(public_path('upload'), $img_name);
        $img_url = 'upload/' . $img_name;

        $category_id = $request->category_id;
        $category_name = Category::where('id', $category_id)->value('category_name');
        Services::insert([
            'category_id' =>  $category_id,
            'category_name' => $category_name,
            'service_name' => $request->service_name,
            'tage_line' => $request->tage_line,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'description' => $request->description,
            'inclusion' => $request->inclusion,
            'status' => $request->status,
            'image' => $img_url1,
            'thumbnail_image' => $img_url,
            'slug' => strtolower(str_replace(' ', '-', $request->service_name)),

        ]);
        Category::where('id', $category_id)->increment('services_count', 1);
        return redirect()->route('allservices')->with('message', 'Services Information Inserted Successfully!');
    }
    public function EditServices($id)
    {
        $editservices = Services::findorFail($id);
        return view('admin.editservices', compact('editservices'));
    }

    public function UpdateServices(Request $request)
    {
        $request->validate([
            'service_name' => 'required|unique:services',
            'tage_line' => 'required',
            'price' => 'required',
            'description' => 'required',
            'inclusion' => 'required',
            'status' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,giv,svg|max:4048',
            'thumbnail_image' => 'required|image|mimes:jpeg,png,jpg,giv,svg|max:2048',
        ]);
        $id = $request->id;
        $image1 = $request->file('image');
        $img_name1 = hexdec(uniqid()) . '.' . $image1->getClientOriginalExtension();
        $request->image->move(public_path('upload'), $img_name1);
        $img_url1 = 'upload/' . $img_name1;

        $image = $request->file('thumbnail_image');
        $img_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $request->thumbnail_image->move(public_path('upload'), $img_name);
        $img_url = 'upload/' . $img_name;


        Services::findorFail($id)->update([
            'service_name' => $request->service_name,
            'tage_line' => $request->tage_line,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'description' => $request->description,
            'inclusion' => $request->inclusion,
            'status' => $request->status,
            'image' => $img_url1,
            'thumbnail_image' => $img_url,
            'slug' => strtolower(str_replace(' ', '-', $request->service_name)),
        ]);
        return redirect()->route('allservices')->with('message', 'Services Information Updated Successfully!');
    }


    public function DeleteServices($id)
    {
        Services::findOrFail($id)->delete();

        return redirect()->route('allservices')->with('message', 'Services Deleted Successfully!');
    }
}




// public function UpdateArea(Request $request)
// {
//     $request->validate([
//         'area_name' => 'required|unique:area_zones',
//         'area_code' => 'required|unique:area_zones',
//     ]);
//     $id = $request->id;
//     Areazone::findorFail($id)->update([
//         'area_name' => $request->area_name,
//         'area_code' => $request->area_code,
//     ]);
//     return redirect()->route('areazone')->with('message', 'Area Update Successfully!');
// }


// public function DeleteArea($id)
// {
//     Areazone::findOrFail($id)->delete();

//     return redirect()->route('areazone')->with('message', 'Area Deleted Successfully!');
// }