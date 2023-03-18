<?php


return function (RoutingConfigurator $routes) {
     
    
    $routes->add('user', '/')
    ->controller([DashboardController::class, 'show'])
    ->prefix('/user')
    ->function('show')->methods(['GET', 'HEAD'])
    ->function('show')->methods(['GET', 'HEAD'])
        ;
        $routes->add('api_post_edit', '/api/posts/{id}')
            ->controller([BlogApiController::class, 'edit'])
            ->methods(['PUT'])
        ;
    };