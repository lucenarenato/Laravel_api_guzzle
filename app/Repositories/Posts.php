<?php 

	namespace App\Repositories;

	class Posts
	{
		public function all()
		{
			$client = new Client([
			    // Base URI is used with relative requests
			    'base_uri' => 'https://jsonplaceholder.typicode.com',
			    // tempo de espera
			    'timeout'  => 2.0,
			]);

			$response = $client->request('GET', 'posts'); // https://jsonplaceholder.typicode.com/posts
			//dd($response->getBody()->getContents());
			//return json_decode($response->getBody()->getContents());
			return json_decode($response->getBody()->getContents());
		}

		public function find($id)
		{
			$client = new Client([
			    
			    'base_uri' => 'https://jsonplaceholder.typicode.com',
			    
			    'timeout'  => 2.0,
			]);

			$response = $client->request('GET', "posts/{$id}"); 
			
			return json_decode($response->getBody()->getContents());
		}
	}

 ?>