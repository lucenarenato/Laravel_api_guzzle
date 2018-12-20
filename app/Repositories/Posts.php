<?php 

	namespace App\Repositories;

	use GuzzleHttp\Client;

	class Posts extends GuzzleHttpRequest
	{		

		public function all()
		{
			//$response = $this->client->request('GET', 'posts');
			//dd($response->getBody()->getContents());			
			//return json_decode($response->getBody()->getContents());
			return $this->get('posts');
		}

		public function find($id)
		{
			/*$response = $this->client->request('GET', "posts/{$id}"); 
			
			return json_decode($response->getBody()->getContents());*/
			return $this->get("posts/{$id}");
		}
		
	}

 