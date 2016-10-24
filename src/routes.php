<?php
// Routes

$app->get('/[{name}]', function ($request, $response, $args) {
    $this->logger->info("Slim-Skeleton '/' route");
    // Render index view
    return $this->view->render($response, 'index.twig');
});
