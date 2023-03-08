<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Districtzone;
use Illuminate\Http\Request;

class DistrictZoneController extends Controller
{
    public function Index()
    {
        $districtinfo = Districtzone::latest()->get();
        return view('admin.districtzone', compact('districtinfo'));
    }
    public function EntryDistrict()
    {
        return view('admin.adddistrict');
    }
    public function StoryDistrict(Request $request)
    {
        $request->validate([
            'district_name' => 'required|unique:districtzones',
            'district_code' => 'required|unique:districtzones',
        ]);

        Districtzone::insert([
            'district_name' => $request->district_name,
            'district_code' => $request->district_code,
        ]);
        return redirect()->route('districtzone')->with('message', 'District Added Successfully!');
    }
    public function EdtiDistrict($id)
    {
        $editdist = Districtzone::findorFail($id);
        return view('admin.editdistrict', compact('editdist'));
    }
    public function UpdateDistrict(Request $request)
    {
        $request->validate([
            'district_name' => 'required|unique:districtzones',
            'district_code' => 'required',
        ]);
        $id = $request->id;
        Districtzone::findorFail($id)->update([
            'district_name' => $request->district_name,
            'district_code' => $request->district_code,
        ]);
        return redirect()->route('districtzone')->with('message', 'District Update Successfully!');
    }
    public function DeleteDistrict($id)
    {
        Districtzone::findOrFail($id)->delete();

        return redirect()->route('districtzone')->with('message', 'District Deleted Successfully!');
    }
}