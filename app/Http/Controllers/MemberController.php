<?php
/**
 * Created by PhpStorm.
 * User: 凡
 * Date: 2017/4/20
 * Time: 23:10
 */
namespace App\Http\Controllers;
class MemberController extends Controller
{
    public function info()
    {
       return 'member-info';
       //return view('member-info');
    }
}