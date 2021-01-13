<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function laravel($name='Haq',$age=40){
		   echo "Hello laravel $name $age";
    }
    
    public function dataSend()
    {
       Student::create([
	      'name'      => 'Nazmul',
		  'age'       => 1200,
          'cell'      => 10,
          'amount'    => 200,
          'email'     =>'naz@gmail.com'
	   ]);
    }	
}
