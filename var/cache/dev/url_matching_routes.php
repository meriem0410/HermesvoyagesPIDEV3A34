<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/avis' => [[['_route' => 'app_avis_index', '_controller' => 'App\\Controller\\AvisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/avis/avis/statistiques' => [[['_route' => 'avis_statistiques', '_controller' => 'App\\Controller\\AvisController::statistiques'], null, null, null, false, false, null]],
        '/front/h' => [[['_route' => 'app_front_h', '_controller' => 'App\\Controller\\FrontHController::index'], null, ['GET' => 0], null, false, false, null]],
        '/hebergement_avis' => [[['_route' => 'hebergement_avis', '_controller' => 'App\\Controller\\FrontHController::hebergementavis'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/hebergement/index' => [[['_route' => 'app_hebergement_index', '_controller' => 'App\\Controller\\HebergementController::index'], null, ['GET' => 0], null, false, false, null]],
        '/hebergement/search' => [[['_route' => 'hebergement_search', '_controller' => 'App\\Controller\\HebergementController::search'], null, null, null, false, false, null]],
        '/hebergement/new' => [[['_route' => 'app_hebergement_new', '_controller' => 'App\\Controller\\HebergementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/user_reservations' => [[['_route' => 'user_reservations', '_controller' => 'App\\Controller\\ReservationController::userReservations'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/avis/(?'
                    .'|new/([^/]++)(*:223)'
                    .'|([^/]++)(?'
                        .'|(*:242)'
                        .'|/edit(*:255)'
                        .'|(*:263)'
                    .')'
                .')'
                .'|/([^/]++)(*:282)'
                .'|/hebergement/([^/]++)(?'
                    .'|(*:314)'
                    .'|/edit(*:327)'
                    .'|(*:335)'
                .')'
                .'|/reservation(?'
                    .'|(*:359)'
                    .'|/(?'
                        .'|new/([^/]++)(*:383)'
                        .'|([^/]++)(?'
                            .'|(*:402)'
                            .'|/edit(*:415)'
                            .'|(*:423)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        223 => [[['_route' => 'app_avis_new', '_controller' => 'App\\Controller\\AvisController::new'], ['hebergementId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        242 => [[['_route' => 'app_avis_show', '_controller' => 'App\\Controller\\AvisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        255 => [[['_route' => 'app_avis_edit', '_controller' => 'App\\Controller\\AvisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        263 => [[['_route' => 'app_avis_delete', '_controller' => 'App\\Controller\\AvisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        282 => [[['_route' => 'app_front_h_show', '_controller' => 'App\\Controller\\FrontHController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        314 => [[['_route' => 'app_hebergement_show', '_controller' => 'App\\Controller\\HebergementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        327 => [[['_route' => 'app_hebergement_edit', '_controller' => 'App\\Controller\\HebergementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        335 => [[['_route' => 'app_hebergement_delete', '_controller' => 'App\\Controller\\HebergementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        359 => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], [], ['GET' => 0], null, true, false, null]],
        383 => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], ['hebergementId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        402 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        415 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        423 => [
            [['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
