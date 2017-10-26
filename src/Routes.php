<?php declare(strict_types = 1);


return [
    ['GET', '/', ['Example\Controllers\Homepage', 'show']],
    ['GET', '/{slug}', ['Example\Controllers\Page', 'show']],
];

/*return [
    ['GET', '/hello-world', function () {
        echo 'Hello World';
    }],
    ['GET', '/another-route', function () {
        echo 'This works too';
    }],
];*/

