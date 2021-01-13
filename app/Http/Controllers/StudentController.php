<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function laravel($name='Haq',$age=40){
		   echo "Hello laravel $name $age";
	}
}
