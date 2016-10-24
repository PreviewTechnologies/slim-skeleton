<?php
// Application middleware

// e.g: $app->add(new \Slim\Csrf\Guard);

$testMiddleware = function ($request, $response, $next) {
    return $next($request, $response);
};