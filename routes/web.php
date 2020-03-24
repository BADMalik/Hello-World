<?php

use Illuminate\Support\Facades\Route;
use App\Article;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',function ()
{
	return view('welcome');
});

Route::get('/articles/create','ArticleController@create');
Route::get('/articles','ArticleController@index');
Route::post('/articles','ArticleController@store');
Route::get('/articles/{articleid}','ArticleController@show')->name('articles.show');
Route::get('/articles/{articleid}/edit','ArticleController@edit');
Route::put('/articles/{articleid}','ArticleController@update');
Route::get('/about',function()
{
	$article = App\Article::take(3)->latest()->get();
	//return $article;
	return view('about',['articles'=>$article]);
});
Route::get('/clients',function()
{
	return view('clients');
});
Route::get('/contact',function()
{
	return view('/contact');
});
Route::get('/name',function ()
{
	$name = request('name');
	return view('test',
		[
			'Bilal'=>$name
		]);
});
Route::get("/posts/{post}",'PostController@show');
