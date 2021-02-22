<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class StudentInfo extends Controller
{

    public $id_name = 1;
    public $id_last = 1;
   
    public function student_name()
    {
        static $students=array(0=>"Dauren", 1=>"Talgat", 2=>"Maksat");
        return $students;
    }
    public function student_last_name()
    {
        static $students=array(0=>"Dauren", 1=>"Talgat", 2=>"Maksat");
        return $students;
    }
    public function show_name($id_name)
    {
        __construct();
        include $view; 
        $name = $this->student_name();
        return Route::view("Student Name", ["name"=>$name[$id_name]]);
    }
    public function show_last_name($id_last)
    {
        __construct();
        $last = $this->student_last_name();
        return Route::view("Student Surname", ["age"=>$last[$id_last]]);
    }
}


use App\Http\Controllers\UserController;
Route::get('/user/{id}', [StudentInfo::class, 'show_name']);
Route::get('/user/{id}', [StudentInfo::class, 'show_last_name']);


?>

