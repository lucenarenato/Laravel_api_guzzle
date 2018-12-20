<?php 

namespace App\Repositories;

use GuzzleHttp\Client;

class GuzzleHttpRequest

{
	protected $client;

		public function __construct(Client $client)
		{
			$this->client = $client;
		}

		protected function get($url)
		{

			$response = $this->client->request('GET', $url);
			//dd($response->getBody()->getContents());			
			return json_decode($response->getBody()->getContents());

		}

		public function post()
		{
			
		}

}