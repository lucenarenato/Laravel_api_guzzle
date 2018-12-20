<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
    Laravel 5.7 - GuzzleHttp
</p>

## Caminhos
```
$ composer require guzzlehttp/guzzle
```

### exemplo:
- use GuzzleHttp\Client;
```
$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'http://httpbin.org',
    // tempo de espera.
    'timeout'  => 2.0,
]);
```
- http://docs.guzzlephp.org/en/stable/
- https://jsonplaceholder.typicode.com/
- https://dados.ifrn.edu.br
- http://api.geonames.org/
- https://aprendible.com/
- https://www.youtube.com/watch?v=13i6V3r3K34
- Renato Lucena 2018
