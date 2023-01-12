<?php

namespace App\Http\Controllers\Section;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section\Description;
use App\Models\Section\About;
use Illuminate\Support\Str;

class DescController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Description::find(1);
        $data2 = About::find(1);

        return view('frontend.index', [
            'data' => $data,
            'data2' => $data2,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.section');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $data = Description::find(1);

        if($request->file('background_image')) {

            $file = $request->file('background_image');
            $filename = str::random(12).$file->getClientOriginalName();
            $file->move(public_path('upload/Section/Descriptions'),$filename);

            $data->title_text = $request->title_text;
            $data->title_button = $request->title_button;
            $data->paragraph = $request->paragraph;
            $data->background_image = $filename;

            $data->save();


            $notification = array(
                'message' => 'Description Section has been Updated',
                'alert-type' => 'success'
            );
    
            return redirect()->route('admin.section')->with($notification);
    
         }
    }

}
