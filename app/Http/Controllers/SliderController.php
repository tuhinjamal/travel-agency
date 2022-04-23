<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
class SliderController extends Controller
{
    public function view(){

        $data['slidercount'] = Slider::count();
        $data['data'] = Slider::all();
        #dd('ok');
        return view('backend.slider.viewSlider',$data);
        

    }
    public function add(){
        return view('backend.slider.addSlider');

    }
    public function store(Request $request){
        $this->validate($request,[
            // 'title' => 'required',
            // 'description' => 'required',

        ]);
        $data = new Slider();
        $data->title_1 = $request->title_1;
        $data->title_2 = $request->title_2; 
        if ($request->file('image')) 
    	{
    		
    		$file=$request->image;
    		$filename=date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/slider_image'),$filename);
    		$data['image']=$filename;
    	}
       $data->save();
        //dd('ok');
        return redirect()->route('slider.view');
        


    }

    public function edit($id)
    {   
        
    	#$id = Auth::user()->id;
    	$editData = Slider::find($id);
        #dd($editData);
    	return view('backend.slider.editSlider',compact('editData'));	

    }
 

    public function update(Request $request,$id){

        $data = Slider::find($id);
        $data->title_1 = $request->title_1;
        $data->title_2 = $request->title_2;
        
        if ($request->file('image')) 
    	{
    		
    		$file=$request->file('image');
    		@unlink(public_path('upload/slider_image/'.$data->image))	;
    		$filename=date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/slider_image'),$filename);
    		$data['image']=$filename;
    	}
        $data->save();
        #Toastr::success('User information updated successfully :)','Success');
        #Alert::success('Success', 'User data has been updated');
        return redirect()->route('slider.view');

    }

    public function delete($id){
        $data = Slider::find($id);
        if (file_exists('upload/Slider_image/'.$data->image) && ! empty($data->image)) {
    		unlink('upload/slider_image/'.$data->image);
    	}
        $data->delete();
       # Toastr::warning('User deleted successfully :)','Success');
        #Alert::success('Deleted', 'User has been deleted');
        
        return redirect()->route('slider.view');
    }
}
