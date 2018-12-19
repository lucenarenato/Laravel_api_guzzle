<?php

//use GuzzleHttp\Client;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/', 'PostsController@index');
Route::get('posts/{id}', 'PostsController@show');

/*Route::get('/', function () {
	

	$client = new Client([
	    // Base URI is used with relative requests
	    'base_uri' => 'https://jsonplaceholder.typicode.com',
	    // tempo de espera
	    'timeout'  => 2.0,
	]);

	$response = $client->request('GET', 'posts'); // https://jsonplaceholder.typicode.com/posts
	//dd($response->getBody()->getContents());
	//return json_decode($response->getBody()->getContents());
	$posts = json_decode($response->getBody()->getContents());

    return view('posts.index', compact('posts'));
});*/

/*Route::get('posts/{id}', function($id){


});*/