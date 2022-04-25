<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Element;
use App\Models\Package;
class DetailController extends Controller
{
    public function detail($id)
    {   
        
        $data['elements'] = Element::all(); 
        $data['package'] = Package::find($id);
        return view('detail',$data);
    }

    public function ownpackage($id)
    {   
        
        $data['elements'] = Element::all(); 
        $data['package'] = Package::find($id);
        return view('detail',$data);
    }
}
