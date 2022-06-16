<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewpageController extends Controller
{
    public function settexx()
    {
        $tit = "heloworld";
        return view('setpage')->with("tit",$tit);
    }
}
