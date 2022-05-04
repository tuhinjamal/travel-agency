<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

use Auth;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
 
      public function view(){
 

        $data['packagecount'] = Contact::count();
        $data['data'] = Contact::all();
        //dd($data);
        return view('backend.contact.view',$data);
        
         
 
     }
     public function add(){
        
         return view('backend.contact.add');
 
     }
     public function store(Request $request){
        //  $this->validate($request,[
        //      'title' => 'required',
        //      'description' => 'required',
 
        //  ]);
         $data = new Contact();
         $data->office_1 = $request->office_1;
         $data->office_2 = $request->office_2;
         $data->office_3 = $request->office_3;
         $data->office_4 = $request->office_4;
         $data->phone_1 = $request->phone_1;
         $data->phone_2 = $request->phone_2;
         $data->phone_3 = $request->phone_3;
         $data->description = $request->description;
         $data->email = $request->email;
        $data->save();
         //dd('ok');
         return redirect()->route('contact.view');
         
 
 
     }

       public function edit($id)
    {   
        
    	#$id = Auth::user()->id;
    	$editData = Contact::find($id);
        #dd($editData);
    	return view('backend.contact.edit',compact('editData'));	
    }

    public function update(Request $request,$id){

        $data = Contact::find($id);
        $data->office_1 = $request->office_1;
        $data->office_2 = $request->office_2;
        $data->office_3 = $request->office_3;
        $data->office_4 = $request->office_4;
        $data->phone_1 = $request->phone_1;
        $data->phone_2 = $request->phone_2;
        $data->phone_3 = $request->phone_3;
        $data->email = $request->email;
        $data->description = $request->description;

        $data->save();
        #Toastr::success('User information updated successfully :)','Success');
        #Alert::success('Success', 'User data has been updated');
        return redirect()->route('contact.view');
    }
}
