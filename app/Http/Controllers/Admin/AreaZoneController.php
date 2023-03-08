<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Areazone;
use App\Models\Districtzone;
use Illuminate\Http\Request;

class AreaZoneController extends Controller
{
    public function Index()
    {
        $areainfo = Areazone::latest()->get();
        return view('admin.areazone', compact('areainfo'));
    }
    public function AddAreaZone()
    {
        $district = Districtzone::latest()->get();
        return view('admin.addarea', compact('district'));
    }
    public function StoreArea(Request $request)
    {
        $request->validate([
            'area_name' => 'required|unique:area_zones',
            'area_code' => 'required|unique:area_zones',
        ]);

        Areazone::insert([
            'district_name' => $request->district_name,
            'area_name' => $request->area_name,
            'area_code' => $request->area_code,
        ]);
        return redirect()->route('areazone')->with('message', 'Area Added Successfully!');
    }
    public function EdtiArea($id)
    {
        $editarea = Areazone::findorFail($id);
        return view('admin.editarea', compact('editarea'));
    }

    public function UpdateArea(Request $request)
    {
        $request->validate([
            'area_name' => 'required',
            'area_code' => 'required',
        ]);
        $id = $request->id;
        Areazone::findorFail($id)->update([
            'area_name' => $request->area_name,
            'area_code' => $request->area_code,
        ]);
        return redirect()->route('areazone')->with('message', 'Area Update Successfully!');
    }


    public function DeleteArea($id)
    {
        Areazone::findOrFail($id)->delete();

        return redirect()->route('areazone')->with('message', 'Area Deleted Successfully!');
    }
}