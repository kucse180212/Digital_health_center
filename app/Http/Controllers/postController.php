<?php

namespace App\Http\Controllers;

use App\student_info;
use App\teacher_info;
use App\Doctor_info;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
use App\User;

class postController extends Controller
{
    //
    public function index($id)
    {
        return "hellow i number".$id;
    }

    public function sview()
    {
        $people = ['Edwin','jose','james','maria'];
        return view('show_my_view',compact('people'));
    }
    public function show_post($id,$name)
    {
        return view('spost',compact('id','name'));
    }
    public function login()
    {
        $user = User::find(180212);
        return view('learning/student',compact('user'));

    }
    public function verify(Request $r)
    {
        $user = student_info::where('email', $r->username)->where('password', $r->password)->first();
        if(!empty($user)){
           return view('learning/student',compact('user'));
        }
        $user = teacher_info::where('email', $r->username)->where('password', $r->password)->first();
        if(!empty($user)){
            return view('learning/teacher2',compact('user'));
         }
         $user = Doctor_info::where('email', $r->username)->where('password', $r->password)->first();
         if(!empty($user)){
            return view('learning/Doctor_page',compact('user'));
         }

        return view('spost');

    }
    public function data (Request $p)
    {
        $mah=new teacher_info();
        $mah->first_name=$p->firstName;
        $mah->last_name=$p->lastName;
        $mah->email=$p->email;
        $mah->password=$p->password;
        $mah->save();
        return view('learning/login_page');

    }
    public function Mahbub ()
    {
        return view('spost');
    }
    public function teacher(Request $r)
    {

        $user = DB::table('student_infos')->where('email', $r->email)
                       ->where('password', $r->password);



         return view('learning/teacher_page',compact('user'));
         return view('spot');

    }
    public function emon(Request $r)
    {
        $user = student_info::where('email', $r->username);
        if(!empty($user)){
            return view('learning/studentteacher',compact('user'));
         }

    }
    public function insertstudent(Request $r)
    {


        $student=new student_info();

        $student->first_name=$r->firstName;
        $student->last_name=$r->lastName;
        $student->password=$r->password;
        $student->phone_number=$r->phone_NUMBER;
        $student->height=$r->height;
        $student->weight=$r->weight;
        $student->health_history=$r->he_his;
        $student->current_health=$r->current;
        $student->email=$r->email;
        $student->picture=$r->pic;
        $student->save();
        $user=$student;

        return view('learning/student',compact('user'));


    }
    public function studentshow(Request $r)
    {
        $user = student_info::where('email', $r->email);
        if(!empty($user)){
           return view('learning/student',compact('user'));
        }


        return view('spost');

    }
}

