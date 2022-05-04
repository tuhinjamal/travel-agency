<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\PackageController;
use App\Models\Package;
use App\Models\Slider;
use App\Models\Element;
use App\Models\Contact;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class FrontendController extends Controller
{
    public function view(){

        //slider is here
        $data['sliders'] = Slider::all(); 
        //elements is here
        $data['elements'] = Element::firstOrFail(); 
        
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
        
        
        $data['contacts'] = Contact::all(); 
        
       
   return view('welcome',$data);
   }

   public function hajj_packages(){
    
    $data['elements'] = Element::firstOrFail(); 
    $data['hajj_package'] = DB::table('packages')
    ->where('category', '=', 0)
    ->get();
    #$data['all_packge'] = Package::get(); 
    #dd($data);
    return view('detail.hajj_package',$data);	
    }

    public function umrah_packages(){
    
        $data['elements'] = Element::firstOrFail(); 
        $data['umrah_package'] = DB::table('packages')
        ->where('category', '=', 1)
        ->get();
        #$data['all_packge'] = Package::get(); 
        #dd($data);
        return view('detail.umrah_package',$data);	
        }
        public function tour_packages(){
    
            $data['elements'] = Element::firstOrFail(); 
            $data['tour_package'] = DB::table('packages')
            ->where('category', '=', 2)
            ->get();
            #$data['all_packge'] = Package::get(); 
            #dd($data);
            return view('detail.tour_package',$data);	
        }


        public function contact(){
            $data['elements'] = Element::firstOrFail(); 
            $data['contacts']=Contact::firstOrFail();
            return view('contact',$data);
        }
   
}




