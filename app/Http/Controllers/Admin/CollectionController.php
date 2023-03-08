<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Collection as ModelsCollection;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use PhpParser\ErrorHandler\Collecting;
use Ramsey\Collection\Collection;

class CollectionController extends Controller
{
    public function Index()
    {
        $collectioninfo =ModelsCollection::get();
     return view('admin.allcollection', compact('collectioninfo'));

    }
    public function AddCollection(){
        $collection = DB::table('users')->where('utype', 'CST')->get();
        $serviceinfo = DB::table('orders')->where('booking_status', 'complete')->get();
        return view('admin.addcollection', compact('collection','serviceinfo'));
    }

    public function StoreCollection(Request $request){
        $request->validate([
            'customer_name' => 'required',
            'service_name' => 'required',
            'collect_amount' => 'required',
            'collect_date' => 'required',
        ]);

        ModelsCollection::insert([
            'customer_name' => $request->customer_name,
            'service_name' => $request->service_name,
            'collect_amount' => $request->collect_amount,
            'collect_date' => $request->collect_date,
        ]);
        return redirect()->route('allcollection')->with('message', 'Collection Added Successfully!');
    }
    public function EditCollection($id){
        $edicollectio = ModelsCollection::findOrFail($id);
        return view('admin.editcollection',compact('edicollectio'));
    }
    public function UpdateCollection(Request $request){

            $id = $request->id;
  
            ModelsCollection::findorFail($id)->update([
                'collect_amount' => $request->collect_amount,
            ]);
            return redirect()->route('allcollection')->with('message', 'Collection Update Successfully!');

        }
        // public function DeleteArea($id)
        // //     {
        // //         Areazone::findOrFail($id)->delete();
        
        // //         return redirect()->route('areazone')->with('message', 'Area Deleted Successfully!');
        // //     }
        
    
        public function ReportCollection(){
            $collectioreport = ModelsCollection::latest()->get();
            $pdf = PDF::loadView('admin.collection_report',compact('collectioreport'));
            // return $pdf->download();
            return $pdf->stream('collection_report.admin');
        }
        
     
}

