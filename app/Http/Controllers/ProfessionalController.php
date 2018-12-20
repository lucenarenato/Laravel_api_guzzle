<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;
class ProfessionalController extends Controller
{
    public function home()
    {
        return "professional public home";
    }
    public function getstate()
    {
        $client = new Client(['base_uri' => 'http://api.geonames.org/']);  
        $response = $client->request('GET', 'citiesJSON?north=44.1&south=-9.9&east=-22.4&west=55.2&lang=de&username=demo'); 
        $body = $response->getBody();
        $content =$body->getContents();
        $arr = json_decode($content,TRUE);
        //echo"<pre>";
        //print_r(get_class_methods($response));
        //print_r(get_class_methods($body));
        //print_r($arr);
        //echo"</pre>";
        //dd(json_decode($content,true));
        return $arr;
    }
}