<?php

$app->get('/[{name}]', function ($request, $response, $args) {
    $this->flash->addMessage('success', 'Slim Skeleton ready to Go!');
    $msg = $this->flash->getMessages();
    return $this->view->render($response, 'home.twig', ['message' => $msg]);
})->add($testMiddleware);
