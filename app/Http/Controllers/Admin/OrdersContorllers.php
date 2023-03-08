<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Dompdf\Adapter\PDFLib;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class OrdersContorllers extends Controller
{
    public function Index()
    {
        $order_details = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->select('orders.*', 'users.name')
            ->get();
        return view('admin.allorders', compact('order_details'));
    }
    public function InvoiceDetails($id)
    {
        // $order_details = DB::table('orders')
        //     ->join('users', 'orders.user_id', '=', 'users.id')
        //     ->select('orders.*', 'users.name')
        //     ->find($id)
        //     ->get();
        $bookingde = Orders::where('id', $id)->get();
        return view('admin.invoicedetails', compact('bookingde'));
    }
    public function EditStatus($id)
    {
        $edit = Orders::findOrFail($id);
        return view('admin.bookingdetails', compact('edit'));
    }
    public function InvoicePage()
    {
        // $bookingde = Orders::findOrFail($id);
        return view('admin.invoice');
    }

     public function BookingEdit($id)
     {
        $booking = Orders::findOrFail($id);
        return view('admin.bookingupdate', compact('booking'));
     }
     public function UpdateStatus(Request $request)
     {
 
        
         $sprovider_id = $request->id;
         Orders::findOrFail($sprovider_id)->update([
             'booking_status' => $request->booking_status,
             'payment_status' => $request->payment_status,
          
         ]);
         return redirect()->back();
     }

     //report method
     public function BookingReport(){
        $bookinginfo = DB::table('orders')
        ->join('users', 'orders.user_id', '=', 'users.id')
        ->select('orders.*', 'users.name')
        ->get();
        $pdf = PDF::loadView('admin.booking_report',compact('bookinginfo'));
        // return $pdf->download();
        return $pdf->stream('booking_report.admin');
     }
}