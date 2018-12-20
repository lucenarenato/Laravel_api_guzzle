<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;

class AlunosController extends Controller
{
    public function home()
    {
        return "alunos public home";
    }
    public function getAluno()
    {
        $client = new Client(['base_uri' => 'https://dados.ifrn.edu.br/']);  
        $response = $client->request('GET', 'dataset/3a1dee1c-a359-4435-8f69-facab670cb4b/resource/e2659ab4-9c81-441e-90cd-12db070595de/download/dados_extraidos_recursos_setores.json'); 
        $body = $response->getBody();
        $content =$body->getContents();
        $arr = json_decode($content,TRUE);
        
        return $arr;
    }
}