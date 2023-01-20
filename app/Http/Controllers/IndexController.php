<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section\Description;
use App\Models\Section\About;
use App\Models\Section\Menu;
use App\Models\Section\Service;

class IndexController extends Controller
{
    public function index()
    {
        $Desc = Description::find(1);
        $about = About::find(1);
        $service = Service::all();

        return view('frontend.index', [
            'desc' => $Desc,
            'about' => $about,
            'service' => $service,
        ]);

    }

    public function Fetch_About_Section() {

        $about = About::find(1);
        return view('frontend.index', ['about' => $about]);
    }

    public function Fetch_Desc_Section() {
        
        $desc = Description::find(1);
        return view('frontend.index', ['desc' => $desc]);
    }

    public function Fetch_Service_Section() {
        
        $service = Service::find(1);
        return view('frontend.index', ['service' => $service]);
    }


}
