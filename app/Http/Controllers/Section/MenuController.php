<?php

namespace App\Http\Controllers\Section;

use App\Http\Controllers\Controller;
use App\Models\Section\Menu;
use Illuminate\Http\Request;


class MenuController extends Controller
{
    //
    public function update(Request $request) {

        $data = Menu::find(1);

        $data->main_page = $request->main_page;
        $data->second_page = $request->second_page;
        $data->third_page = $request->third_page;
        $data->fourth_page = $request->fourth_page;
        $data->fifth_page = $request->fifth_page;
        $data->sixth_page = $request->sixth_page;

        $data->save();

        $notification = array(
            'message' => 'Menu has been Updated',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.section')->with($notification);



    }
}
