<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $name = "ali";
        $contact = "0348587452";
        $data = compact('name','contact');
        return view('dashboard')->with($data);
    }
    public  function welcome()
    {
        $arr = [
            'username' => "baber",
            'Address'  => "lahore",
            'contact' => '035485545'

        ];
        return view('welcome')->with(['name' => 'ali', 'contact' => '0545454','data' => $arr]);
    }

}
