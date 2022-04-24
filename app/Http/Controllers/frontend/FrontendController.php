<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\PackageController;
use App\Models\Package;
use App\Models\Slider;
use App\Models\Element;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class FrontendController extends Controller
{
    public function view(){

        //slider is here
        $data['sliders'] = Slider::all(); 
        //elements is here
        $data['elements'] = Element::first(); 
        
        //$data['packages'] = Package::all();
        $data['hajj'] = DB::table('packages')
                    ->where('category', '=', 0)
                    ->get();
        $data['first'] =   DB::table('packages')
        ->where('category', '=', 0)
        ->first();
        $data['umrah'] = DB::table('packages')
                    ->where('category', '=', 1)
                    ->get();
        $data['second'] =   DB::table('packages')
                    ->where('category', '=', 1)
                    ->first();
        $data['tour'] = DB::table('packages')
                    ->where('category', '=', 2)
                    ->get();
        $data['third'] =   DB::table('packages')
            ->where('category', '=', 2)
            ->first();
        
       
   return view('welcome',$data);
   }
   
}
