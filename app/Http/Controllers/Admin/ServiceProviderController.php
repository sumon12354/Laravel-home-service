<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Sprovider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ServiceProviderController extends Controller
{
    public function Index()
    {
        $sproviders =DB::table('users')->where('utype','=','SVP')->get();
        return view('admin.allserviceprovider',compact('sproviders'));
    }

    public function AddSProvider()
    {
        $Sproviders = Category::latest()->get();
        return view('admin.addserviceprovider', compact('Sproviders'));
    }

    public function Sproviderentry(Request $request)
    {
        $request->validate([
            'SproviderName' => 'required',
            'ContactNo' => 'required',
            'EmailId' => 'required',
            'LocationCity' => 'required',
            'Servicescategory' => 'required',
        ]);
        Sprovider::insert([
            'SproviderName' => $request->SproviderName,
            'ContactNo' => $request->ContactNo,
            'EmailId' => $request->EmailId,
            'LocationCity' => $request->LocationCity,
            'Servicescategory' => $request->Servicescategory,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return redirect()->back();
    }

    public function EditSprovider($id)
    {
        $findsrovider = Sprovider::findOrFail($id);
        return view('admin.editsprovider', compact('findsrovider'));
    }

    public function UpdateSprovider(Request $request)
    {

        $request->validate([
            'SproviderName' => 'required',
            'ContactNo' => 'required',
            'EmailId' => 'required',
            'LocationCity' => 'required',
        ]);
        $id = $request->id;
        Sprovider::findOrFail($id)->update([
            'SproviderName' => $request->SproviderName,
            'ContactNo' => $request->ContactNo,
            'EmailId' => $request->EmailId,
            'LocationCity' => $request->LocationCity,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return redirect()->route('allserviceprovider')->with('message', 'Service Provider Update Successfully!');
    }

    public function deletesprovider($id)
    {
        Sprovider::find($id)->delete();
        return redirect()->back();
    }
}