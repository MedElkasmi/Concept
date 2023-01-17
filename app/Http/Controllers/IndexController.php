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
        $menu = Menu::find(1);
        $service = Service::all();

        return view('frontend.index', [
            'desc' => $Desc,
            'about' => $about,
            'menu' => $menu,
            'service' => $service,
        ]);

    }
}
