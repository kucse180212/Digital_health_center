<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Mail;
use App\Mail\Welcomemail;
use App\Comment;
use App\Post;
use App\student_info;
use App\teacher_info;
use App\Doctor_info;
use App\Mail\sendmail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;


use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use App\User;
use Illuminate\Contracts\Session\Session;
use PhpParser\Node\Stmt\Return_;

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
        $user=new teacher_info();
        $user->name=$p->firstName;
        $user->phonenumber=$p->phone_number;
        $user->email=$p->email;
        $user->password=$p->password;

         if($p->hasFile('picture'))
         {
             $file=$p->file('picture');
             $extension=$file->getClientOriginalExtension();
             $filename=time().'.'.$extension;
             $file->move('uploads/highlights/',$filename);
             $user->picture=$filename;
         }

        $user->save();
        // Mail::to($user->email)->send(new Welcomemail() );

        $data=[
            'title'=>'Digital Health Center',
            'content'=>'welcome',
            'body'=>'Thank you very much for joining the website as a teacher hope you have a great journey with us .if you are having
                      any type of problem please contact us.'

        ];
        Mail::to($user->email)->send(new sendmail($data));
        return view('learning/teacher2',compact('user'));

    }

    public function add_doctor(Request $p)
    {
        echo $p->email;
        $user=new Doctor_info();
        $user->name=$p->name;
        $user->phonenumber=$p->phone_number;
        $user->email=$p->email;
        $user->specialist=$p->specialist;
        $user->password=$p->password;
        if($p->hasFile('picture'))
        {
            $file=$p->file('picture');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/highlights/',$filename);
            $user->picture=$filename;
        }
        $user->save();
        $data=[
            'title'=>'Digital Health Center',
            'content'=>'welcome',
            'body'=>'Thank you very much for joining the website as a doctor hope you have a great journey with us .if you are having
                      any type of problem please contact us.'

        ];
        Mail::to($user->email)->send(new sendmail($data));
        return view('learning/Doctor_page',compact('user'));



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
        $user = student_info::where('email', $r->username)->first();
        if(!empty($user)){
            return view('learning/student',compact('user'));
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
        if($r->hasFile('picture'))
        {
            $file=$r->file('picture');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/highlights/',$filename);
            $student->picture=$filename;
        }
        $student->save();
        $user=$student;
        // Mail::to($user->email)->send(new Welcomemail() );
        $data=[
            'title'=>'Digital Health Center',
            'content'=>'welcome',
            'body'=>'Thank you very much for joining the website as a student hope you have a great journey with us .if you are having
                      any type of problem please contact us.'

        ];
        Mail::to($user->email)->send(new sendmail($data));

        return view('learning/student',compact('user'));


    }
    public function studentshow(Request $r)
    {
        $user = student_info::where('email', $r->email);
        if(!empty($user)){
           return view('learning/student',compact('user'));
        }
        $user = teacher_info::where('email', $r->username)->first();
        if(!empty($user)){
            return view('learning/teacher2',compact('user'));
         }
         $user = doctor_info::where('email', $r->username)->first();
        if(!empty($user)){
            return view('learning/doctor',compact('user'));
         }


        return view('spost');

    }

    public function CreatePost1(Request $request,$post_id)
    {
        $user = teacher_info::where('email', $post_id)->first();
        if(!empty($user)){
     $posts =new post();
     $posts->body=$request['newpost'];
    $posts->userid=$user->email;
    $posts->save();
    // $post = post::where('userid', $post_id)->paginate(5);
    $post = post::orderBy('id', 'DESC')->paginate(4);
     return view('learning/post',['post'=>$post,'user'=>$user,'profile'=>$user->name]);
    }

    $user = student_info::where('email', $post_id)->first();
    if(!empty($user)){
 $posts =new post();
 $posts->body=$request['newpost'];
$posts->userid=$user->email;
$posts->save();
$post = post::orderBy('id', 'DESC')->paginate(4);
 return view('learning/post',['post'=>$post,'user'=>$user,'profile'=>$user->name]);
}

$user = doctor_info::where('email', $post_id)->first();
if(!empty($user)){
$posts =new post();
$posts->body=$request['newpost'];
$posts->userid=$user->email;
$posts->save();
$post = post::orderBy('id', 'DESC')->paginate(4);
return view('learning/post',['post'=>$post,'user'=>$user,'profile'=>$user->name]);
}
    }
    public function teacherpost($post_id)
    {

        $user=teacher_info::where('email',$post_id)->first();
        if(!empty($user)){
            $post = post::orderBy('id', 'DESC')->paginate(4);
         return view('learning/post',['post'=>$post,'user'=>$user,'profile'=>$user->name]);
        }
        $user=student_info::where('email',$post_id)->first();
        if(!empty($user)){
            $post = post::orderBy('id', 'DESC')->paginate(4);
         return view('learning/post',['post'=>$post,'user'=>$user,'profile'=>$user->name]);
        }
        $user=doctor_info::where('email',$post_id)->first();
        if(!empty($user)){
            $post = post::orderBy('id', 'DESC')->paginate(4);
         return view('learning/post',['post'=>$post,'user'=>$user,'profile'=>$user->name]);
        }



    }

    public function check($post_id)
    {
        $user = student_info::where('email',$post_id)->first();
        if(!empty($user)){
           return view('learning/student',compact('user'));
        }
        $user = teacher_info::where('email',$post_id)->first();
        if(!empty($user)){
            return view('learning/teacher2',compact('user'));
         }
         $user = doctor_info::where('email', $post_id)->first();
        if(!empty($user)){
            return view('learning/doctor',compact('user'));
         }

         return 'notfound';

    }


    public function deletepost($post_id)
    {
        $post=post::where('id',$post_id)->first();
        $user=teacher_info::where('email',$post->userid)->first();
        if(!empty($user)){
          if(!empty($post)){
            $post->delete();
            $post1 = post::orderBy('id', 'DESC')->paginate(4);
            return view('learning/post',['post'=>$post1,'user'=>$user,'profile'=>$user->name]);
        }
    }
    $user=student_info::where('email',$post->userid)->first();
    if(!empty($user)){
      if(!empty($post)){
        $post->delete();
        $post1 = post::orderBy('id', 'DESC')->paginate(4);
        return view('learning/post',['post'=>$post1,'user'=>$user,'profile'=>$user->name]);
    }
    }
    $user=doctor_info::where('email',$post->userid)->first();
    if(!empty($user)){
      if(!empty($post)){
        $post->delete();
        $post1 = post::orderBy('id', 'DESC')->paginate(4);
        return view('learning/post',['post'=>$post1,'user'=>$user,'profile'=>$user->name]);
    }
}
 }


    public function deletestudent($post_id)
    {
        $student=student_info::where('email',$post_id)->first();
            $student->delete();

        return redirect('returnpage')->with("has been deleted succcesssfully");
    }

    public function searchstudent(Request $request,$post_id)
    {
        $user=teacher_info::where('email',$post_id)->first();
        $student=student_info::where('email',$request->username)->first();
        echo $request->username;
        if(!empty($student)){
        return view('learning/studentteacher',['user'=>$user,'student'=>$student]);
        }
        return "student don't found";
    }
    public function updatestudent(Request $r,$post_id)

    {
        $student=student_info::where('email',$r->email)->first();

        $student->first_name=$r->firstName;
        $student->last_name=$r->lastName;
        $student->password=$r->password;
        $student->phone_number=$r->phone_NUMBER;
        $student->height=$r->height;
        $student->weight=$r->weight;
        $student->health_history=$r->he_his;
        $student->current_health=$r->current;
        $student->email=$r->email;
        if($r->hasFile('picture'))
        {
            $file=$r->file('picture');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/highlights/',$filename);
            $student->picture=$filename;
        }
        $student->save();
        $user=teacher_info::where('email',$post_id)->first();
        return view('learning/studentteacher',['user'=>$user,'student'=>$student]);

    }
    public function editpost($post_id)
    {
       $post=post::where('id',$post_id)->first();
       echo $post_id;
       $user=teacher_info::where('email',$post->userid)->first();
       return view('learning/editpost',['user'=>$user,'post'=>$post]);
    }


    public function updatepost(Request $r,$post_id)
    {
        $post=post::where('id',$post_id)->first();

       $post->body=$r->current;
       $post->save();
       $user=teacher_info::where('email',$post->userid)->first();
       if(!empty($user)){
       $post1 = post::orderBy('id', 'DESC')->paginate(4);
       return view('learning/post',['post'=>$post1,'user'=>$user,'profile'=>$user->name]);
       }
       $user=student_info::where('email',$post->userid)->first();
       if(!empty($user)){
       $post1 = post::orderBy('id', 'DESC')->paginate(4);
       return view('learning/post',['post'=>$post1,'user'=>$user,'profile'=>$user->name]);
       }
       $user=doctor_info::where('email',$post->userid)->first();
       if(!empty($user)){
       $post1 = post::orderBy('id', 'DESC')->paginate(4);
       return view('learning/post',['post'=>$post1,'user'=>$user,'profile'=>$user->name]);
       }

    }
    public function createcoment(Request $r,$post_id,$p2)
    {
     $post=post::find($post_id);
     $comment=new Comment();
     $comment->post_id=$post_id;
     $comment->body=$r['newpost'];
     $comment->email=$p2;
     $comment->post()->associate($post);
     $comment->save();

     $user=teacher_info::where('email',$p2)->first();
     if(!empty($user)){
     $post1 = post::orderBy('id', 'DESC')->paginate(4);
     return view('learning/post',['post'=>$post1,'user'=>$user,'profile'=>$user->name]);
     }
     $user=student_info::where('email',$p2)->first();
     if(!empty($user)){
     $post1 = post::orderBy('id', 'DESC')->paginate(4);
     return view('learning/post',['post'=>$post1,'user'=>$user,'profile'=>$user->name]);
     }
     $user=doctor_info::where('email',$p2)->first();
     if(!empty($user)){
     $post1 = post::orderBy('id', 'DESC')->paginate(4);
     return view('learning/post',['post'=>$post1,'user'=>$user,'profile'=>$user->name]);
     }
    }

    public function mailsend()
    {

        $data=[
            'title'=>'Digital Health Center',
            'content'=>'welcome',
            'body'=>'thank you very much for joining the website'

        ];
        Mail::to('mahbub41869@gmail.com')->send(new sendmail($data));
        return view('spost');
    }

    public function map($post_id)

    {
        $user = student_info::where('email',$post_id)->first();
        if(!empty($user)){
           return view('learning/googlemap',compact('user'));
        }
        $user = teacher_info::where('email',$post_id)->first();
        if(!empty($user)){
            return view('learning/googlemap',compact('user'));
         }
         $user = doctor_info::where('email', $post_id)->first();
        if(!empty($user)){
            return view('learning/googlemap',compact('user'));
         }

    }


}
