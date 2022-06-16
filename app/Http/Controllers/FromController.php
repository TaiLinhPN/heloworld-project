<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FromController extends Controller

{
    public function display(){
        return view('formRequest');
        
    }
    public function displayInfor(FormRequest $Request){
        $user=[
            'name' => $name = $Request-> input("name"),
            'age' => $age = $Request-> input('age'),
            'date' => $date = $Request-> input('date'),
            'adress' => $adress = $Request-> input('adress')
        ];
        return view('FormRequest') -> with('user', $user);
    }
}

?>