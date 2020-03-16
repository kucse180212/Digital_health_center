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

use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Route;
use App\Post;

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
Route::Post('/insert','postController@insertstudent');

Route::post('/student','postController@studentshow');
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

