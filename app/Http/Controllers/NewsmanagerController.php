<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsteller;
use Carbon\Carbon;
use Auth;
use DB;

class NewsmanagerController extends Controller
{   
        public function __construct()
        {
            $this->middleware('auth');
        }
     public function view()
     {

        $data['newscount'] = Newsteller::count();
        $data['newstellers'] = Newsteller::all();
        #dd($data);
        return view('backend.newsteller.view',$data);
        

    }

    public function add(){
        return view('backend.newsteller.add');

    }

    public function store(Request $request){
        $this->validate($request,[
            'news_title' => 'required',
            'source' => 'required',

        ]);
        $data = new Newsteller();
        $data->approval = $request->approval;
        $data->news_title = $request->news_title;
        $data->source = $request->source; 
        $data->news = $request->news; 
        $data->blog = $request->blog; 
        $data->image = $request->image; 
        $data->published_on = Carbon::now()->timezone('Asia/Dhaka'); 
        if ($request->file('image')) 
    	{
    		
    		$file=$request->image;
    		$filename=date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/news_image'),$filename);
    		$data['image']=$filename;
    	}
       $data->save();
        //dd('ok');
        return redirect()->route('newsManager.view');
        


    }

    public function edit($id)
    {   
        
    	#$id = Auth::user()->id;
    	$editData = Newsteller::find($id);
        #dd($editData);
    	return view('backend.newsteller.edit',compact('editData'));	

    }
 

    public function update(Request $request,$id){

        $data = Newsteller::find($id);
        $data->approval = $request->approval;
        $data->news_title = $request->news_title;
        $data->source = $request->source; 
        $data->news = $request->news; 
        $data->blog = $request->blog; 
        $data->image = $request->image; 
        $data->published_on = $request->published_on;  
        if ($request->file('image')) 
    	{
    		
    		$file=$request->image;
            @unlink(public_path('upload/news_image/'.$data->image))	;
    		$filename=date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/news_image'),$filename);
    		$data['image']=$filename;
    	}
       $data->save();
        #Toastr::success('User information updated successfully :)','Success');
        #Alert::success('Success', 'User data has been updated');
        return redirect()->route('newsManager.view');

    }

    public function delete($id){
        $data = Newsteller::find($id);
        if (file_exists('upload/news_image/'.$data->image) && ! empty($data->image)) {
    		unlink('upload/news_image/'.$data->image);
    	}
        $data->delete();
       # Toastr::warning('User deleted successfully :)','Success');
        #Alert::success('Deleted', 'User has been deleted');
        
        return redirect()->route('newsManager.view');
    }
}
