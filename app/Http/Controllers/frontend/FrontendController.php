<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\PackageController;
use App\Models\Package;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class FrontendController extends Controller
{
    public function view(){
        
        //$data['packages'] = Package::all();
        $data['hajj'] = DB::table('packages')
                    ->where('category', '=', 0)
                    ->get();
        $data['first'] =   DB::table('packages')
        ->where('category', '=', 0)
        ->get();
        $data['umrah'] = DB::table('packages')
                    ->where('category', '=', 1)
                    ->get();
        $data['second'] =   DB::table('packages')
                    ->where('category', '=', 0)
                    ->get();
        $data['tour'] = DB::table('packages')
                    ->where('category', '=', 2)
                    ->get();
        $data['third'] =   DB::table('packages')
                    ->where('category', '=', 0)
                    ->get();
        
       
   return view('welcome',$data);
   }
}
