<?php
/**
 * Created by PhpStorm.
 * User: 凡
 * Date: 2017/4/21
 * Time: 23:48
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    public function test1(){
//        $student=DB::select('select * from student');
//        var_dump($student);
       $bool= DB::insert('insert into student(username,sex) VALUES (?,?)',
            ['fuck','男']);
       var_dump($bool);
    }

}