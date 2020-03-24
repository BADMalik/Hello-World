<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    //
    public function show($slug)
    {
		// $posts=
		// [
		// 	'first-post'=>'My first value',
		// 	'second-post'=>'Second Value'
		// ];
		// 	if(!array_key_exists($post, $posts))
		// {
		// 	abort(404,'Sorry nothing found');
		// }
		//$post=\DB::table('posts')->where('slug',$slug)->first();
    	$post=Post::where('slug',$slug)->first();
		return view('test',
		[
			// 'postvalue'=>$posts[$post] ?? 'Default Answer for wrong index',
			//'Bilal'=>$posts[$post] ?? 'Default Answer for wrong index'
			'post'=>$post
		]);

    }
}
