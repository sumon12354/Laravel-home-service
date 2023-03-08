<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\AddtoCart;
use App\Models\Category;
use App\Models\Contactus;
use App\Models\Orders;
use App\Models\Services;
use App\Models\sliders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function ServicesCetagory()
    {
        $categories = Category::latest()->get();
        $sliders = sliders::latest()->get();
        return view('forntend.servicescategory', compact('categories', 'sliders'));
    }
    public function ServicesByCategory($id)
    {
        $categoriesinfo = Category::findOrFail($id);
        $services = Services::where('category_id', $id)->latest()->get();

        return view('forntend.servicesbycategory', compact('categoriesinfo', 'services'));
    }

    public function ServicesDetails($id)
    {
        $servicesdet = Services::where('id', $id)->get();
        return view('forntend.servicedetails', compact('servicesdet'));
    }

    public function AllAddToCart()
    {
        $userid = Auth::id();
        $cart_item = AddtoCart::where('user_id', $userid)->get();
        return view('forntend.alladdtocart', compact('cart_item'));
    }

    public function AddToCart(Request $request)
    {
        $services_price = $request->price;
        $discount_price = $request->discount_price;
        $total_price =  $services_price - $discount_price;
        $quentity = $request->service_quantity;
        $price = $total_price * $quentity;

        AddtoCart::insert([
            'service_id' => $request->service_id,
            'user_id' => Auth::id(),
            'service_quantity' => $request->service_quantity,
            'price' => $price,
        ]);


        return redirect()->route('alladdtocart')->with('message', 'Your item added to cart successfully');;
    }
    public function RemoveToCart($id)
    {
        AddtoCart::findOrFail($id)->delete();
        return redirect()->route('alladdtocart')->with('message', 'Your item removed from cart successfully');
    }

    public function LocationDetalis()
    {
        $userid = Auth::id();
        $cart_item = AddtoCart::where('user_id', $userid)->get();
        return view('forntend.locationdetalis', compact('cart_item'));
    }
    public function OrderComplete(Request $request)
    {
        $userid = Auth::id();
        $cart_item = AddtoCart::where('user_id', $userid)->get();
        foreach ($cart_item as $item) {
            Orders::insert([
                'booking_id' => mt_rand(1000000, 9999999),
                'user_id' => $userid,
                'city_village' => $request->city_village,
                'house' => $request->house,
                'email' => $request->email,
                'phone' => $request->phone,
                'postal_code' => $request->postal_code,
                'service_name' => $request->service_name,
                'service_quantity' => $item->service_quantity,
                'price' => $item->price,
                'created_at' => now(),

            ]);
        }
        return redirect()->back();
    }

    public function AboutUs(){
        return view('forntend.aboutus');
    }
    public function PrivacyPoly(){
        return view('forntend.privacypoly');
    }
    public function TeramCondition(){
        return view('forntend.teramcondition');
    }
    public function ContactUs(){
        return view('forntend.contactus');
    }
    public function ContactInfo(Request $request){
     
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'location' => 'required',
            'message' => 'required',
        ]);

        Contactus::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'location' => $request->location,
            'message' => $request->message,
            'created_at'=> now (),
        ]);
        return redirect()->back()->with('message', 'Message Added Successfully!');
    
    }


    // //search Controller

    public function autocomplete(Request $req){
      
    $data = Services::where('service_name','like','%'.$req->input('query').'%')->get();
        return view('forntend.search',['servicesinfo' =>$data]);
    }
  
}