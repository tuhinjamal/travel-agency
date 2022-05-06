<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Element;
use App\Models\Build;
use App\Models\BuildManager;
use App\Models\Contact;
use DB;


class BuildController extends Controller
{

      public function view(){
         $data['elements'] = Element::firstOrFail();
        $data['customcount'] = Build::count();
        $data['builds'] = Build::orderBy('id', 'DESC')->first();
       // $data['operations'] = Build::orderBy('id', 'DESC')->first()->sum(DB::raw('days + hotel_fair'));
        //$data['operations']=Build::select(DB::raw('(days * hotel_fair + ticket_fair) as total '))->firstOrFail();
       //$data['ops']=collect(Build::select(DB::raw('(days * hotel_fair + ticket_fair) as total '))->firstOrFail())->flatten();
      
      
        $data['contacts']=Contact::firstOrFail();


        #dd('ok');
        return view('backend.custom_package.view',$data);
        

    }
    public function add(){
        $data['elements'] = Element::firstOrFail();
        $data['buildManager'] = BuildManager::all();
        return view('backend.custom_package.add',$data);

    }
      public function store(Request $request)
    {   
        
      $this->validate($request,[
            'name' => 'required',
            'email' => 'required',

        ]);
        $data = new Build();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->tour_type = $request->tour_type;
        $data->days_detail = $request->days_detail;
        $data->days = $request->days;
        $data->hotel_fair = $request->hotel_fair;
        $data->ticket_fair = $request->ticket_fair;
        $data->preference = $request->preference;
        $data->save();
       // dd($data);
        return redirect()->route('custom.view');

    }

    
}
