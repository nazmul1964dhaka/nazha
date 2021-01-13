Lesson 1
-------------------------------------

create project
composer create-project --prefer-dist
   laravel/laravel naha

run - 
http://localhost:8081/naha/public/

run server
php artisan serve
   127.0.0.1:8000

M - app->Models
V - resources->views
C - app->Http->Controllers

routes->web.php
	
	Route::get('rootName',function(){echo "Hello";});
	Route::get('rootName',function(){ return view('welcome');});
	
Route::get('h/',function(){ echo "Hello"; });
Route::get('/', function(){ return view('welcome'); });
Route::get('hello', function(){ return view('hello'); });

resources->views->hello.blade.php

Lesson 2  Route
-----------------------------------
//9. Parameterized Route
   Route::get('student/{param}/{gender?}',function($age,$gender='Male'){
     echo "I am a student and age is $age and $gender";
   });

http://127.0.0.1:8000/student/8/male

//10. Naming Root
Route::get('student/{param}/{gender?}',function($age,$gender='Male'){
        echo "I am a student and age is $age and $gender";
})-> name('student.info'); 

http://127.0.0.1:8000/student/8

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

http://127.0.0.1:8000/student/add

Route::get();	
Route::post();
Route::put();
Route::patch();
Route::delete();
Route::resource();
Route::namespace();
Route::middleware();
Route::prefix();
Route::group(['namespace' =>'', 'middleware' =>'',
                  'prefix'=> '']);

13. Controller
php artisan make:controller StudentController                  

-App\Http\Controllers\StudentController

14. Resource Controller
php artisan make:controller StaffController --resource

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

   public function store(Request $request)  {  }
   public function show($id) {  }
   public function edit($id) {  }
   public function update(Request $request, $id) { }
   public function destroy($id) {  }
}

class StudentController extends Controller
{
    public function laravel($name='Haq',$age=40){
		   echo "Hello laravel $name $age";
	}
}

//15. Route with Controller
//Route::get('laravel','App\Http\Controllers\laravelcontroller@methodName')->name('laravel');		
	Route::get('laravel',function(){
	 echo "My name is lara";
    })->name('laravel');
    
    
   Route::get('student1','App\Http\Controllers\StudentController@laravel')->name('stud1');		
     
//Alternate:
    Route::group(['namespace'=>'App\Http\Controllers'],function(){
       Route::get('student2','StudentController@laravel')->name('stud2');		
    });    

//Lesson 3  Database Part:16
--------------------------
//Goto Browser
http://localhost:8081/dashboard/
http://localhost:8081/phpmyadmin/

//Create a Database File > nahadb
click on database tab
type database name nahadb
click on create

Open .env file -> 
	  DB_CONNECTION = mysql
	  DB_HOST = 127.0.0.1
	  DB_PORT = 3306
	  DB_DATABASE=nahadb      
	  DB_USERNAME= root
	  DB_PASSWORD=

17. Creating Migration (Table)
-------------------------------
    php artisan make:migration create_students_table
    Goto Migrations Folder> database>migrations>

    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

   public function up()
	{
	   Schema::create('students',function(Blueprint $table){
		   $table->id();
		   $table->string('name',100) -> nullable();
		   $table->string('age',12)-> nullable();
		   $table->string('cell',15)->default('01818618123');
		   $table->integer('amount');
		   $table->string('email',100)->unique();
		   $table->timestamps();
	   });
	}


php artisan migrate
php artisan migrate:fresh

20/21. Model
php artisan make:model Student [ModelName] 

goto app/Models/Student.php

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
	 //protected $fillable = ['name','age','cell'];
	 protected $guarded = [];
}

23. Controller
   php artisan make:controller ProductController
	php artisan make:model Product -m
	php artisan migrate

Student Controller
--------------------------------
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

Lesson 4
---------------------------------

Blade Syntax
-------------------
{{ $name }}

php artisan make:controller StudentController
php artisan make:model Student -m               //with migrations


