<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/programme' => [[['_route' => 'app_programme_index', '_controller' => 'App\\Controller\\ProgrammeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/programme/new' => [[['_route' => 'app_programme_new', '_controller' => 'App\\Controller\\ProgrammeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::show1'], null, ['GET' => 0], null, false, false, null]],
        '/voyage' => [[['_route' => 'app_voyage_index', '_controller' => 'App\\Controller\\VoyageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/voyage/new' => [[['_route' => 'app_voyage_new', '_controller' => 'App\\Controller\\VoyageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/programme/([^/]++)(?'
                    .'|(*:64)'
                    .'|/edit(*:76)'
                    .'|(*:83)'
                .')'
                .'|/voyage/([^/]++)(?'
                    .'|(*:110)'
                    .'|/edit(*:123)'
                    .'|(*:131)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        64 => [[['_route' => 'app_programme_show', '_controller' => 'App\\Controller\\ProgrammeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        76 => [[['_route' => 'app_programme_edit', '_controller' => 'App\\Controller\\ProgrammeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        83 => [[['_route' => 'app_programme_delete', '_controller' => 'App\\Controller\\ProgrammeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        110 => [[['_route' => 'app_voyage_show', '_controller' => 'App\\Controller\\VoyageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        123 => [[['_route' => 'app_voyage_edit', '_controller' => 'App\\Controller\\VoyageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        131 => [
            [['_route' => 'app_voyage_delete', '_controller' => 'App\\Controller\\VoyageController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
