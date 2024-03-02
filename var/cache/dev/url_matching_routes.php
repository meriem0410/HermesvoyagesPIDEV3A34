<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/billet/newfront' => [[['_route' => 'app_billet_newfront', '_controller' => 'App\\Controller\\BilletController::newfront'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/billet' => [[['_route' => 'app_billet_index', '_controller' => 'App\\Controller\\BilletController::index'], null, ['GET' => 0], null, true, false, null]],
        '/billet/new' => [[['_route' => 'app_billet_new', '_controller' => 'App\\Controller\\BilletController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evenement/pdf' => [[['_route' => 'app_pdf', '_controller' => 'App\\Controller\\EvenementController::pdf'], null, null, null, false, false, null]],
        '/evenement/statmohamed' => [[['_route' => 'statmohamed', '_controller' => 'App\\Controller\\EvenementController::stat'], null, ['GET' => 0], null, false, false, null]],
        '/evenement/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\EvenementController::search'], null, ['GET' => 0], null, false, false, null]],
        '/evenement' => [[['_route' => 'app_evenement_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evenement/new' => [[['_route' => 'app_evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evenement/front/office' => [[['_route' => 'app_evenement_eventfront', '_controller' => 'App\\Controller\\EvenementController::eventfront'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/billet/(?'
                    .'|([^/]++)(?'
                        .'|(*:64)'
                        .'|/edit(*:76)'
                        .'|(*:83)'
                    .')'
                    .'|searchbillet(*:103)'
                .')'
                .'|/evenement/(?'
                    .'|([^/]++)(?'
                        .'|(*:137)'
                        .'|/edit(*:150)'
                        .'|(*:158)'
                    .')'
                    .'|detailfront/([^/]++)(*:187)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        64 => [[['_route' => 'app_billet_show', '_controller' => 'App\\Controller\\BilletController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        76 => [[['_route' => 'app_billet_edit', '_controller' => 'App\\Controller\\BilletController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        83 => [[['_route' => 'app_billet_delete', '_controller' => 'App\\Controller\\BilletController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        103 => [[['_route' => 'searchbillet', '_controller' => 'App\\Controller\\BilletController::searchbillet'], [], ['GET' => 0], null, false, false, null]],
        137 => [[['_route' => 'app_evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        150 => [[['_route' => 'app_evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        158 => [[['_route' => 'app_evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        187 => [
            [['_route' => 'eventfrontdetail', '_controller' => 'App\\Controller\\EvenementController::detailfront'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
