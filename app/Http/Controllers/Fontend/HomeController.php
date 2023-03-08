<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\AreaZone;
use App\Models\Category;
use App\Models\Services;
use App\Models\sliders;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index()
    {   

        $categores = Category::latest()->get();
        $categofea = Category::latest()->take(8)->get();
        $sliders = sliders::latest()->get();
        $allservices = Services::latest()->take(8)->get();
        return view('forntend.home', compact('categores', 'sliders', 'allservices', 'categofea'));
    }
}