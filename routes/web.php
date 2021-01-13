<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('h/',function(){ echo "Hello"; });
Route::get('/', function(){ return view('welcome'); });
Route::get('hello', function(){ return view('hello'); });

//9. Parameterized Route
// Route::get('student/{param}/{gender?}',function($age,$gender='Male'){
//     echo "I am a student and age is $age and $gender";
// });

// //10. Naming Root
// Route::get('student/{param}/{gender?}',function($age,$gender='Male'){
//         echo "I am a student and age is $age and $gender";
// })-> name('student.info'); 

//11. Prefix Root

//Route::prefix('student')->group(function(){
//Or
Route::group(['prefix'=>'student'],function(){			
    Route::get('add',function(){
        echo "Add Student Information";
    })-> name('student.add'); 

    Route::get('show',function(){
        echo "Show Student Information";
    })-> name('student.show');      
    
    Route::get('delete',function(){
        echo "Delete Student Information";
    })-> name('student.delete');    

    Route::get('edit',function(){
        echo "Edit Student Information";
    })-> name('student.edit');  	
});    

//Route::get('laravel','App\Http\Controllers\laravelcontroller@methodName')->name('laravel');		
	Route::get('laravel',function(){
	 echo "My name is lara";
    })->name('laravel');
    
    
    Route::get('student1','App\Http\Controllers\StudentController@laravel')->name('stud1');		
     
//Alternate:
    Route::group(['namespace'=>'App\Http\Controllers'],function(){
       Route::get('student2','StudentController@laravel')->name('stud2');	
       Route::get('student/create','StudentController@dataSend')->name('stud2.add');	
    });    