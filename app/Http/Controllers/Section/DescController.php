<?php

namespace App\Http\Controllers\Section;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section\Description;

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

        return view('frontend.index', [
            'data' => $data,
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
        //
        if($request->file('background_image')) {

            $file = $request->file('background_image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/Section/Descriptions'),$filename);

            Description::create([

                'title_text' => $request->title_text,
                'title_button' => $request->title_button,
                'paragraph' => $request->paragraph,
                'background_image' => $filename,
    
            ]);
         }
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
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/Section/Descriptions'),$filename);

            $data->title_text = $request->title_text;
            $data->title_button = $request->title_button;
            $data->paragraph = $request->paragraph;
            $data->background_image = $filename;

            $data->save();
    
         }
    }

}
