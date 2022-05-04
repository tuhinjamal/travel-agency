<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\BuildManager;
use Auth;
use DB;

class BuildManagerController extends Controller
{
       public function __construct()
   {
       $this->middleware('auth');
   }

     public function view(){

        $data['packagecount'] = BuildManager::count();
        $data['data'] = BuildManager::all();
        #dd('ok');
        return view('backend.buildManager.view',$data);
        

    }
    public function add(){
        return view('backend.buildManager.add');

    }
    public function store(Request $request){
        $this->validate($request,[
            'tour_type' => 'required',

        ]);
        $data = new BuildManager();
        $data->tour_type = $request->tour_type;
        $data->days = $request->days;
        $data->days_detail = $request->days_detail;
        $data->days_expenses = $request->days_expenses;
        $data->hotel = $request->hotel;
        $data->hotel_category = $request->hotel_category;
        $data->hotel_fair = $request->hotel_fair;
        $data->ticket_class = $request->ticket_class;
        $data->ticket_fair = $request->ticket_fair;
        $data->others_expenses = $request->others_expenses;
       $data->save();
        //dd('ok');
        return redirect()->route('buildManager.view');
        


    }

    public function edit($id)
    {   
        
    	#$id = Auth::user()->id;
    	$editData = BuildManager::find($id);
        #dd($editData);
    	return view('backend.buildManager.edit',compact('editData'));	

    }
 

    public function update(Request $request,$id){

        $data = BuildManager::find($id);
        $data->tour_type = $request->tour_type;
        $data->days = $request->days;
        $data->days_detail = $request->days_detail;
        $data->days_expenses = $request->days_expenses;
        $data->hotel = $request->hotel;
        $data->hotel_category = $request->hotel_category;
        $data->hotel_fair = $request->hotel_fair;
        $data->ticket_class = $request->ticket_class;
        $data->ticket_fair = $request->ticket_fair;
        $data->others_expenses = $request->others_expenses;
        $data->save();
        #Toastr::success('User information updated successfully :)','Success');
        #Alert::success('Success', 'User data has been updated');
        return redirect()->route('buildManager.view');

    }

    public function delete($id){
        $data = BuildManager::find($id);
        $data->delete();
       # Toastr::warning('User deleted successfully :)','Success');
        #Alert::success('Deleted', 'User has been deleted');
        
        return redirect()->route('buildManager.view');
    }
}
