<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AlgorithmController extends Controller
{
    //
    //xử lý xuất ra màn hình
    public function index(){
        return view('algorithm');
    }
   
    //end

   
}
