<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Repositories\Posts;

class PostsController extends Controller
{
	protected $posts;

	public function __construct(Posts $posts)
	{
		$this->posts = $posts;
	}

    public function index()
    {
    	/*$client = new Client([
		    // Base URI is used with relative requests
		    'base_uri' => 'https://jsonplaceholder.typicode.com',
		    // tempo de espera
		    'timeout'  => 2.0,
		]);

		$response = $client->request('GET', 'posts'); // https://jsonplaceholder.typicode.com/posts
		//dd($response->getBody()->getContents());
		//return json_decode($response->getBody()->getContents());
		$posts = json_decode($response->getBody()->getContents());*/

		$posts = $this->posts->all();

	    return view('posts.index', compact('posts'));

	    }

	    public function show($id)
	    {
	    	
			$post = $this->posts->find($id);

		    return view('posts.show', compact('post'));
	    }
}
