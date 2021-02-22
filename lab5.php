 <?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class StudentController extends Controller
{
    public $view;
    public $id_name = 1;
    public $id_age = 1;
    public $id_date = 1;
    
    public function __construct()
    {
        $this->view = new View;
    }
    
    public function student_name()
    {
        static $students=array(0=>"Dauren", 1=>"Talgat", 2=>"Maksat");
        return $students;
    }
    public function date_of_birth()
    {
        static $age=array(0=>"18.02.2001", 1=>"21.02.1999", 2=>"20.07.1998");
        return $age;
    }
    public function age()
    {
        static $age=array(0=>"18", 1=>"21", 2=>"20");
        return $age;
    }
    public function show_name($id_name)
    {
        __construct();
        include $view; 
        $name = $this->student_name();
        return Route::view("Student Name", ["name"=>$name[$id_name]]);
    }
    public function show_age($id_age)
    {
        __construct();
        $age = $this->age();
        return view("Student Age", ["age"=>$name[$id_age]]);
    }
    public function show_date($id_date)
    {
        __construct();
        $date = $this->date_of_birth();
        return view("Student Date of Birth", ["date of birth"=>$date[$id_date]]);
    }
    
}


use App\Http\Controllers\UserController;
Route::get('/user/{id}', [StudentController::class, 'show_name']);
Route::get('/user/{id}', [StudentController::class, 'show_age']);
Route::get('/user/{id}', [StudentController::class, 'show_date']);

?>
