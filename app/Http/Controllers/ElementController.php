<?php namespace App\Http\Controllers;

use App\Models\Element;
use Illuminate\Http\Request;
use Auth;

class ElementController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function view() {
        $data['elementcount']=Element::count();
        $data['data']=Element::all();
        #dd('ok');
        return view('backend.element.viewElement', $data);

    }

    public function add() {
        return view('backend.element.addElement');

    }

    public function store(Request $request) {

        $data=new Element();
        $data->email=$request->email;
        $data->title=$request->title;
        $data->phone_1=$request->phone_1;
        $data->phone_2=$request->phone_2;
        $data->phone_3=$request->phone_3;
        $data->address=$request->address;
        $data->website=$request->website;

        if ($request->file('image')) {

            $file=$request->image;
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/element_image'), $filename);
            $data['image']=$filename;
        }

        $data->save();
        //dd('ok');
        return redirect()->route('element.view');



    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Element  $element
     * @return \Illuminate\Http\Response
     */
    public function show(Element $element) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Element  $element
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $editData=Element::find($id);
        #dd($editData);
        return view('backend.element.editElement', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Element  $element
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        $data=Element::find($id);
        $data->email=$request->email;
        $data->title=$request->title;
        $data->phone_1=$request->phone_1;
        $data->phone_2=$request->phone_2;
        $data->phone_3=$request->phone_3;
        $data->address=$request->address;
        $data->website=$request->website;

        if ($request->file('image')) {

            $file=$request->file('image');
            unlink('upload/element_image/'.$data->image);
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/element_image'), $filename);
            $data['image']=$filename;
        }


        $data->save();
        #Toastr::success('User information updated successfully :)', 'Success');
        #Alert::success('Success', 'User data has been updated');
        return redirect()->route('element.view');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Element  $element
     * @return \Illuminate\Http\Response
     */
    public function delete($id) {
        $data=Element::find($id);

        if (file_exists('upload/element_image/'.$data->image) && ! empty($data->image)) {
            unlink('upload/element_image/'.$data->image);
        }

        $data->delete();
        # Toastr::warning('User deleted successfully :)', 'Success');
        #Alert::success('Deleted', 'User has been deleted');

        return redirect()->route('element.view');
    }
}
