<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadJsonFileController extends Controller
{
    public function index() {
        $data1 = json_decode(file_get_contents(
            public_path() . '\\first_response.json'
        ), true); 

        $data2 = json_decode(file_get_contents(
            public_path() . '\\second_response.json'
        ), true); 

        $data = array_merge($data1, $data2);

        //dd($data);
        return $data;
    }
}
