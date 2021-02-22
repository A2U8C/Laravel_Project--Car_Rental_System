<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Post;

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


/*
Route::get('/world', function () {
    return '<h1>Hello world</h1>';
});


Route::get('/user/{id}', function ($id) {
    return 'This is user '.$id;
});

*/

Route::get('/','PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');



//Route::get('/adminPage', 'PagesController@adminPage');
///////////////////////////////////////Admin and regular user check//////////////////////////////////
Route::get('/check', function () {
    switch(\Illuminate\Support\Facades\Auth::user()->name){
        case 'admin':
            return redirect(route('home.admin.posts'));
            break;
        default:
            return redirect(route('home'));;
            break;
    }
});

Route::get('/home/admin/posts', 'PagesController@adminPage')->name('home.admin.posts');


////////////////////////////////Admin and regular user check ends here////////////////////////////////

////////////////////////////////////////////////////////
Route::any('/search',function(){
    $q = \Request::get ( 'searchCars' );
    $posts = Post::where('posts.Vehicle_name','LIKE','%'.$q.'%')->get();
    return view('posts.index')->with('posts',$posts);
    
});
/////////////////////////////////////////////////

Route::resource('posts','PostsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
