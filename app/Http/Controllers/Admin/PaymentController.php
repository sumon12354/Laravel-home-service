<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class PaymentController extends Controller
{
    public function Index()
    {
     $paymentinfo = Payment::latest()->get();   
        return view('admin.allpayment',compact('paymentinfo'));
    }
    public function AddPayment()
    {
        $providerinfo =DB::table('users')->where('utype','=','SVP')->get();
        return view('admin.addpayment',compact('providerinfo'));
    }
    public function StorePayment(Request $request)
    {
        $request->validate([
            'provider_name' => 'required',
            'payment_amount' => 'required',
            'payment_date' => 'required',
            'payment_note' => 'required',
        ]);
        Payment::insert([
            'provider_name' => $request->provider_name,
            'payment_amount' => $request->payment_amount,
            'payment_date' => $request->payment_date,
            'payment_note' => $request->payment_note,
        ]);
        return redirect()->route('allpayment')->with('message', 'Payment Added Successfully!');
    }
    public function EditPayment($id)
        {
            $payment = Payment::findorFail($id);
            return view('admin.editpayment', compact('payment'));
        }

    public function UpdatePayment(Request $request)
        {
            $request->validate([
                'payment_amount' => 'required',
                'payment_date' => 'required',
                'payment_note' => 'required',
            ]);
            $id = $request->id;
            Payment::findorFail($id)->update([
                'payment_amount' => $request->payment_amount,
                'payment_date' => $request->payment_date,
                'payment_note' => $request->payment_note,
            ]);
            return redirect()->route('allpayment')->with('message', 'Payment Update Successfully!');
        }

        public function DeletePayment($id)
            {
                Payment::findOrFail($id)->delete();
            
                return redirect()->route('allpayment')->with('message', 'Payment Deleted Successfully!');
            }

            public function PaymentReport(){
                $paymentreport = Payment::latest()->get();
                $pdf = PDF::loadView('admin.payment_report',compact('paymentreport'));
                // return $pdf->download();
                return $pdf->stream('payment_report.admin');
            }
            

}
