<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Element;
use Auth;
use DB;

class PackageController extends Controller
{
       public function __construct()
   {
       $this->middleware('auth');
   }

     public function view(){

        $data['packagecount'] = Package::count();
        $data['data'] = Package::all();
        #dd('ok');
        return view('backend.package.viewPackage',$data);
        

    }
    public function add(){
        return view('backend.package.addPackage');

    }
    public function store(Request $request){

        $this->validate($request,[
            'titlee' => 'required',
            'description' => 'required',

        ]);
        $data = new Package();
        $data->category = $request->category;
        $data->titlee = $request->titlee;
        $data->name = $request->name;
        $data->description = $request->description;
        $data->starts_at = $request->starts_at;
        $data->meta_title = $request->meta_title;
        $data->meta_description = $request->meta_description;
        
        if ($request->file('image')) 
    	{
    		
    		$file=$request->image;
    		$filename=date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/package_image'),$filename);
    		$data['image']=$filename;
    	}

        if ($request->file('meta_image')) 
    	{
    		
    		$file=$request->meta_image;
    		$filename=date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/package_image/meta_image'),$filename);
    		$data['meta_image']=$filename;
    	}
       $data->save();
        //dd('ok');
        return redirect()->route('package.view');
        


    }

    public function edit($id)
    {   
        
    	#$id = Auth::user()->id;
    	$editData = Package::find($id);
        #dd($editData);
    	return view('backend.package.editPackage',compact('editData'));	

    }
 

    public function update(Request $request,$id){

        $data = Package::find($id);
        $data->category = $request->category;
        $data->titlee = $request->titlee;
        $data->description = $request->description;
        $data->starts_at = $request->starts_at;
        $data->meta_title = $request->meta_title;
        $data->meta_description = $request->meta_description;
        
        if ($request->file('image')) 
    	{
    		
    		$file=$request->file('image');
    		@unlink(public_path('upload/package_image/'.$data->image))	;
    		$filename=date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/package_image'),$filename);
    		$data['image']=$filename;
    	}

        if ($request->file('meta_image')) 
    	{
    		
    		$file=$request->file('meta_image');
    		@unlink(public_path('upload/package_image/meta_image/'.$data->meta_image))	;
    		$filename=date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/package_image/meta_image'),$filename);
    		$data['meta_image']=$filename;
    	}
        $data->save();
        #Toastr::success('User information updated successfully :)','Success');
        #Alert::success('Success', 'User data has been updated');
        return redirect()->route('package.view');

    }

    public function delete($id){
        $data = Package::find($id);
        if (file_exists('upload/Package_image/'.$data->image) && ! empty($data->image)) {
    		unlink('upload/package_image/'.$data->image);
    	}
        $data->delete();
       # Toastr::warning('User deleted successfully :)','Success');
        #Alert::success('Deleted', 'User has been deleted');
        
        return redirect()->route('package.view');
    }

    

   
}
