<?php

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
use  Auth\VerificationController;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;

use App\Http\Controllers\postController;
use App\Mail\Welcomemail;
use Illuminate\Support\Facades\Route;
use App\Post;
use Illuminate\Support\Facades\Mail;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

//Route::get('/post/{id}','postController@index');
Route::resource('posts', 'postController');

Route::get('/firstview','postController@sview');

Route::get('/','postController@login');

Route::get('/hello', 'HelloController@show')->name("hello");




Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/posts/example', array('as' =>'admin.home',function () {


$url = route('admin.home');
return  "this url is ".$url;

}));
/*Route::get('post/{id}/{name}', 'postController@show_post');

Route::get('/find', function () {

    $posts= post::all();
    foreach($posts as $p)
    {
        return $p->title;
    }

});*/

Route::get('find', function () {
    $post=post::find(180231);
    return $post->content;


});
//Update any data through laravel
/*Route::get('/update',function()
{

    post::where('id',180212)->where('is_admin',12)->update(['title'=>'Mahbub','content'=>'try harder']);
}

);*/


//Delete from a Table
Route::get('/delete', function () {
    $post =post::find(180213);
    $post->delete();

});




Route::resource('/admin/user', 'Admin\UserController',['except'=>['show','store','create']]);



///project
Route::get('/Digital_health_center','postController@mahbub');
Route::get('/student_page','postController@login');
Route::get('/teacher_page','postController@teacher');
Route::post('/Digital_health_center1','postController@verify');
Route::post('/Studentteacher','postController@emon');
Route::Post('/LOGGEDIN','postController@data');


Route::Post('/DoctorSignedUp','postController@add_doctor');

Route::Post('/insert','postController@insertstudent');

Route::post('/student','postController@studentshow');


Route::get('/createpost1/{post_id}',[
          'uses'=>'postController@CreatePost1',
          'as'=>'create'
]);


Route::get('/teacherpost/{post_id}',[
    'uses'=>'postController@teacherpost',
    'as'=>'post1'
]);

Route::get('/studentpage/{post_id}',[
    'uses'=>'postController@check',
    'as'=>'returnpage'
]);
Route::get('/deleteuserpost/{post_id}',[

    'uses'=>'postController@deletepost',
    'as'=>'deletepost'

]);

Route::get('/updatestudentinfo/{post_id}',[

    'uses'=>'postController@updatestudent',
    'as'=>'updatestudent'

]);

Route::get('/postpage/{post_id}',[

    'uses'=>'postController@editpost',
    'as'=>'editpost'

]);
Route::get('/updatepage/{post_id}',[

    'uses'=>'postController@updatepost',
    'as'=>'updatepost'

]);





Route::get('/deletestudent/{post_id}',[

    'uses'=>'postController@deletestudent',
    'as'=>'deletestudent'

]);

Route::get('/searchforstudent/{post_id}',[

    'uses'=>'postController@searchstudent',
    'as'=>'searchstudent1'

]);
Route::get('/searchforcomment/{post_id}/{p2}',[

    'uses'=>'postController@createcoment',
    'as'=>'createcomment'

]);

Route::get('/googlemap/{post_id}',[

    'uses'=>'postController@map',
    'as'=>'map'

]);




Route::post('/dash_board','postController@dashboard');



Route::get('/login',function(){

    return view('learning/login_page');
});
Route::get('/signup',function(){

    return view('learning/sign_up');
});

Route::get('/student',function ()
{
    return view('learning/student');
});
Route::get('/teacher2',function ()
{
    return view('learning/teacher2');
});

Route::get('/signup2',function ()
{
    return view('learning/student_insert');
});

Route::get('/search',function ()
{
    return view('learning/search');
});
Route::get('/loader',function ()
{
    return view('learning/loader');
});
Route::get('/post',function(){

    return view('learning/post');
});

Route::get('users', function () {
    return App\User::paginate(4);
});

Route::get('email','postController@mailsend');
