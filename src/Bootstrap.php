<?php declare(strict_types=1);
namespace Example;

require __DIR__ . '/../vendor/autoload.php';
error_reporting(E_ALL);
$environment = 'development';

/**
 * Register the error handler
 */

$whoops = new \Whoops\Run;
if ($environment !== 'production') {
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
} else {
    $whoops->pushHandler(function($e) {
        echo 'Todo : Friendly error page';
    });         
}

$request = new \Http\HttpRequest($_GET, $_POST, $_COOKIE, $_FILES, $_SERVER);
$response = new \Http\HttpResponse;
$whoops->register();
$content = '<h1>hello bos</h1>';
$response->setContent('404 - page not found');
$response->setStatusCode(404);
foreach ($response->getHeaders() as $header) {
    header($header, false);
}
echo $response->getContent();


//throw new \Exception;



echo 'hello_world';

