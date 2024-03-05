<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/avis' => [[['_route' => 'app_avis_index', '_controller' => 'App\\Controller\\AvisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/avis/avis/statistiques' => [[['_route' => 'avis_statistiques', '_controller' => 'App\\Controller\\AvisController::statistiques'], null, null, null, false, false, null]],
        '/billet/newfront' => [[['_route' => 'app_billet_newfront', '_controller' => 'App\\Controller\\BilletController::newfront'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/billet' => [[['_route' => 'app_billet_index', '_controller' => 'App\\Controller\\BilletController::index'], null, ['GET' => 0], null, true, false, null]],
        '/billet/new' => [[['_route' => 'app_billet_new', '_controller' => 'App\\Controller\\BilletController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/chat' => [[['_route' => 'app_chat', '_controller' => 'App\\Controller\\ChatController::index'], null, null, null, false, false, null]],
        '/sendchat' => [[['_route' => 'send_chat', '_controller' => 'App\\Controller\\ChatController::chat'], null, ['POST' => 0], null, false, false, null]],
        '/evenement/statmohamed' => [[['_route' => 'statmohamed', '_controller' => 'App\\Controller\\EvenementController::stat'], null, ['GET' => 0], null, false, false, null]],
        '/evenement/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\EvenementController::search'], null, ['GET' => 0], null, false, false, null]],
        '/evenement' => [[['_route' => 'app_evenement_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evenement/new' => [[['_route' => 'app_evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evenement/front/office' => [[['_route' => 'app_evenement_eventfront', '_controller' => 'App\\Controller\\EvenementController::eventfront'], null, ['GET' => 0], null, false, false, null]],
        '/excursion' => [[['_route' => 'app_excursion_index', '_controller' => 'App\\Controller\\ExcursionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/excursion/new' => [[['_route' => 'app_excursion_new', '_controller' => 'App\\Controller\\ExcursionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/a/front/h' => [[['_route' => 'app_front_h', '_controller' => 'App\\Controller\\FrontHController::index'], null, ['GET' => 0], null, false, false, null]],
        '/a/Hebergement_avis' => [[['_route' => 'Hebergement_avis', '_controller' => 'App\\Controller\\FrontHController::Hebergementavis'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/guide' => [[['_route' => 'app_guide_index', '_controller' => 'App\\Controller\\GuideController::index'], null, ['GET' => 0], null, true, false, null]],
        '/guide/guides' => [[['_route' => 'app_guide_indexFront', '_controller' => 'App\\Controller\\GuideController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/guide/OrderByDisLikes' => [[['_route' => 'app_guide_OrderByDisLikes', '_controller' => 'App\\Controller\\GuideController::OrderByDisLikes'], null, null, null, false, false, null]],
        '/guide/OrderByLikes' => [[['_route' => 'app_guide_OrderByLikes', '_controller' => 'App\\Controller\\GuideController::OrderByLikes'], null, null, null, false, false, null]],
        '/guide/dash' => [[['_route' => 'app_guide_indexdash', '_controller' => 'App\\Controller\\GuideController::indexdash'], null, null, null, false, false, null]],
        '/guide/new' => [[['_route' => 'app_guide_new', '_controller' => 'App\\Controller\\GuideController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/hebergement/index' => [[['_route' => 'app_Hebergement_index', '_controller' => 'App\\Controller\\HebergementController::index'], null, ['GET' => 0], null, false, false, null]],
        '/hebergement/search' => [[['_route' => 'Hebergement_search', '_controller' => 'App\\Controller\\HebergementController::search'], null, null, null, false, false, null]],
        '/hebergement/new' => [[['_route' => 'app_Hebergement_new', '_controller' => 'App\\Controller\\HebergementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/status' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/random-fact' => [[['_route' => 'random_fact', '_controller' => 'App\\Controller\\HomeController::randomFact'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/forgetPasswordEmail' => [[['_route' => 'app_forgetPasswordEmail', '_controller' => 'App\\Controller\\LoginController::forgetPasswordEmail'], null, null, null, false, false, null]],
        '/verify' => [[['_route' => 'verify_code', '_controller' => 'App\\Controller\\LoginController::verifyCode'], null, null, null, false, false, null]],
        '/verifyPasswordCode' => [[['_route' => 'app_verifyPasswordCode', '_controller' => 'App\\Controller\\LoginController::verifyPasswordCode'], null, null, null, false, false, null]],
        '/claimEmail' => [[['_route' => 'app_claimEmail', '_controller' => 'App\\Controller\\LoginController::claimEmail'], null, null, null, false, false, null]],
        '/ForgetPassword' => [[['_route' => 'app_ForgetPassword', '_controller' => 'App\\Controller\\LoginController::ForgetPassword'], null, null, null, false, false, null]],
        '/programme' => [[['_route' => 'app_programme_index', '_controller' => 'App\\Controller\\ProgrammeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/programme/new' => [[['_route' => 'app_programme_new', '_controller' => 'App\\Controller\\ProgrammeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/res' => [[['_route' => 'app_res_index', '_controller' => 'App\\Controller\\ResController::index'], null, ['GET' => 0], null, true, false, null]],
        '/res/msg' => [[['_route' => 'app_res_msg', '_controller' => 'App\\Controller\\ResController::showMsg'], null, ['GET' => 0], null, false, false, null]],
        '/res/new' => [[['_route' => 'app_res_new', '_controller' => 'App\\Controller\\ResController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/signup' => [[['_route' => 'app_sign_up', '_controller' => 'App\\Controller\\SignUpController::index'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::show1'], null, ['GET' => 0], null, false, false, null]],
        '/tickets' => [[['_route' => 'app_tickets_index', '_controller' => 'App\\Controller\\TicketsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/tickets/new' => [[['_route' => 'app_tickets_new', '_controller' => 'App\\Controller\\TicketsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front/tickets' => [[['_route' => 'app_tickets_front_index', '_controller' => 'App\\Controller\\TicketsFrontController::index'], null, ['GET' => 0], null, true, false, null]],
        '/front/tickets/new' => [[['_route' => 'app_tickets_front_new', '_controller' => 'App\\Controller\\TicketsFrontController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front/tickets/test/mail' => [[['_route' => 'test_mail', '_controller' => 'App\\Controller\\TicketsFrontController::tst'], null, null, null, false, false, null]],
        '/transport' => [[['_route' => 'app_transport_index', '_controller' => 'App\\Controller\\TransportController::index'], null, ['GET' => 0], null, true, false, null]],
        '/transport/statistics' => [[['_route' => 'app_transport_front_statistics', '_controller' => 'App\\Controller\\TransportController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/transport/new' => [[['_route' => 'app_transport_new', '_controller' => 'App\\Controller\\TransportController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front/transport' => [[['_route' => 'app_transport_front_index', '_controller' => 'App\\Controller\\TransportFrontController::index'], null, ['GET' => 0], null, true, false, null]],
        '/front/transport/new' => [[['_route' => 'app_transport_front_new', '_controller' => 'App\\Controller\\TransportFrontController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/voyage' => [[['_route' => 'app_voyage_index', '_controller' => 'App\\Controller\\VoyageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/voyage/new' => [[['_route' => 'app_voyage_new', '_controller' => 'App\\Controller\\VoyageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/voyagevoyage/pdf' => [[['_route' => 'app_voyage_pdf', '_controller' => 'App\\Controller\\VoyageController::pdf'], null, null, null, false, false, null]],
        '/voypersonalise' => [[['_route' => 'app_voypersonalise_index', '_controller' => 'App\\Controller\\VoypersonaliseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/voypersonalise/new' => [[['_route' => 'app_voypersonalise_new', '_controller' => 'App\\Controller\\VoypersonaliseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/a(?'
                    .'|vis/(?'
                        .'|new/([^/]++)(*:66)'
                        .'|([^/]++)(?'
                            .'|(*:84)'
                            .'|/edit(*:96)'
                            .'|(*:103)'
                        .')'
                    .')'
                    .'|/([^/]++)(*:122)'
                .')'
                .'|/billet/(?'
                    .'|([^/]++)(?'
                        .'|(*:153)'
                        .'|/edit(*:166)'
                        .'|(*:174)'
                    .')'
                    .'|searchbillet(*:195)'
                .')'
                .'|/e(?'
                    .'|venement/(?'
                        .'|([^/]++)(?'
                            .'|(*:232)'
                            .'|/edit(*:245)'
                            .'|(*:253)'
                        .')'
                        .'|detailfront/([^/]++)(*:282)'
                    .')'
                    .'|xcursion/(?'
                        .'|guideVideo/([^/]++)(*:322)'
                        .'|([^/]++)(?'
                            .'|(*:341)'
                            .'|/edit(*:354)'
                            .'|(*:362)'
                        .')'
                    .')'
                .')'
                .'|/guide/(?'
                    .'|([^/]++)(*:391)'
                    .'|guide/([^/]++)(*:413)'
                    .'|([^/]++)(?'
                        .'|/edit(*:437)'
                        .'|(*:445)'
                    .')'
                    .'|Thumbs_(?'
                        .'|up/([^/]++)(*:475)'
                        .'|Down/([^/]++)(*:496)'
                    .')'
                .')'
                .'|/hebergement/(?'
                    .'|([^/]++)(*:530)'
                    .'|generate_qr_code(*:554)'
                    .'|([^/]++)(?'
                        .'|/edit(*:578)'
                        .'|(*:586)'
                    .')'
                .')'
                .'|/prog(?'
                    .'|/([^/]++)(*:613)'
                    .'|ramme/([^/]++)(?'
                        .'|(*:638)'
                        .'|/edit(*:651)'
                        .'|(*:659)'
                    .')'
                .')'
                .'|/res(?'
                    .'|/([^/]++)(?'
                        .'|(*:688)'
                        .'|/(?'
                            .'|edit(*:704)'
                            .'|c(?'
                                .'|onfirm(*:722)'
                                .'|ancel(*:735)'
                            .')'
                        .')'
                        .'|(*:745)'
                    .')'
                    .'|ervation/(?'
                        .'|new/([^/]++)(*:778)'
                        .'|([^/]++)(?'
                            .'|(*:797)'
                            .'|/edit(*:810)'
                            .'|(*:818)'
                        .')'
                    .')'
                .')'
                .'|/t(?'
                    .'|ickets/([^/]++)(?'
                        .'|(*:852)'
                        .'|/edit(*:865)'
                        .'|(*:873)'
                    .')'
                    .'|ransport/([^/]++)(?'
                        .'|(*:902)'
                        .'|/edit(*:915)'
                        .'|(*:923)'
                    .')'
                .')'
                .'|/front/t(?'
                    .'|ickets/([^/]++)(?'
                        .'|(*:962)'
                        .'|/edit(*:975)'
                        .'|(*:983)'
                    .')'
                    .'|ransport/([^/]++)(?'
                        .'|(*:1012)'
                        .'|/edit(*:1026)'
                        .'|(*:1035)'
                    .')'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:1063)'
                    .'|/(?'
                        .'|ban(*:1079)'
                        .'|unban(*:1093)'
                    .')'
                .')'
                .'|/voy(?'
                    .'|age/([^/]++)(?'
                        .'|(*:1126)'
                        .'|/edit(*:1140)'
                        .'|(*:1149)'
                    .')'
                    .'|personalise/([^/]++)(?'
                        .'|/edit(*:1187)'
                        .'|(*:1196)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        66 => [[['_route' => 'app_avis_new', '_controller' => 'App\\Controller\\AvisController::new'], ['HebergementId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        84 => [[['_route' => 'app_avis_show', '_controller' => 'App\\Controller\\AvisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        96 => [[['_route' => 'app_avis_edit', '_controller' => 'App\\Controller\\AvisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        103 => [[['_route' => 'app_avis_delete', '_controller' => 'App\\Controller\\AvisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        122 => [[['_route' => 'app_front_h_show', '_controller' => 'App\\Controller\\FrontHController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        153 => [[['_route' => 'app_billet_show', '_controller' => 'App\\Controller\\BilletController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        166 => [[['_route' => 'app_billet_edit', '_controller' => 'App\\Controller\\BilletController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        174 => [[['_route' => 'app_billet_delete', '_controller' => 'App\\Controller\\BilletController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        195 => [[['_route' => 'searchbillet', '_controller' => 'App\\Controller\\BilletController::searchbillet'], [], ['GET' => 0], null, false, false, null]],
        232 => [[['_route' => 'app_evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        245 => [[['_route' => 'app_evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        253 => [[['_route' => 'app_evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        282 => [[['_route' => 'eventfrontdetail', '_controller' => 'App\\Controller\\EvenementController::detailfront'], ['id'], ['GET' => 0], null, false, true, null]],
        322 => [[['_route' => 'app_excursion_guideVideo', '_controller' => 'App\\Controller\\ExcursionController::guideVideo'], ['id'], ['GET' => 0], null, false, true, null]],
        341 => [[['_route' => 'app_excursion_show', '_controller' => 'App\\Controller\\ExcursionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        354 => [[['_route' => 'app_excursion_edit', '_controller' => 'App\\Controller\\ExcursionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        362 => [[['_route' => 'app_excursion_delete', '_controller' => 'App\\Controller\\ExcursionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        391 => [[['_route' => 'app_guide_show', '_controller' => 'App\\Controller\\GuideController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        413 => [[['_route' => 'app_guide_showFront', '_controller' => 'App\\Controller\\GuideController::showFront'], ['id'], ['GET' => 0], null, false, true, null]],
        437 => [[['_route' => 'app_guide_edit', '_controller' => 'App\\Controller\\GuideController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        445 => [[['_route' => 'app_guide_delete', '_controller' => 'App\\Controller\\GuideController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        475 => [[['_route' => 'Thumbs_up', '_controller' => 'App\\Controller\\GuideController::Thumbs_Up'], ['id'], null, null, false, true, null]],
        496 => [[['_route' => 'Thumbs_Down', '_controller' => 'App\\Controller\\GuideController::Thumbs_Down'], ['id'], null, null, false, true, null]],
        530 => [[['_route' => 'app_Hebergement_show', '_controller' => 'App\\Controller\\HebergementController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        554 => [[['_route' => 'generate_qr_code', '_controller' => 'App\\Controller\\HebergementController::generateQrCode'], [], ['POST' => 0], null, false, false, null]],
        578 => [[['_route' => 'app_Hebergement_edit', '_controller' => 'App\\Controller\\HebergementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        586 => [[['_route' => 'app_Hebergement_delete', '_controller' => 'App\\Controller\\HebergementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        613 => [[['_route' => 'app_prog', '_controller' => 'App\\Controller\\ProgController::index'], ['id'], null, null, false, true, null]],
        638 => [[['_route' => 'app_programme_show', '_controller' => 'App\\Controller\\ProgrammeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        651 => [[['_route' => 'app_programme_edit', '_controller' => 'App\\Controller\\ProgrammeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        659 => [[['_route' => 'app_programme_delete', '_controller' => 'App\\Controller\\ProgrammeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        688 => [[['_route' => 'app_res_show', '_controller' => 'App\\Controller\\ResController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        704 => [[['_route' => 'app_res_edit', '_controller' => 'App\\Controller\\ResController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        722 => [[['_route' => 'confirm_reservation', '_controller' => 'App\\Controller\\ResController::confirmReservation'], ['id'], ['GET' => 0], null, false, false, null]],
        735 => [[['_route' => 'cancel_reservation', '_controller' => 'App\\Controller\\ResController::cancelReservation'], ['id'], ['GET' => 0], null, false, false, null]],
        745 => [[['_route' => 'app_res_delete', '_controller' => 'App\\Controller\\ResController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        778 => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], ['HebergementId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        797 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        810 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        818 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        852 => [[['_route' => 'app_tickets_show', '_controller' => 'App\\Controller\\TicketsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        865 => [[['_route' => 'app_tickets_edit', '_controller' => 'App\\Controller\\TicketsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        873 => [[['_route' => 'app_tickets_delete', '_controller' => 'App\\Controller\\TicketsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        902 => [[['_route' => 'app_transport_show', '_controller' => 'App\\Controller\\TransportController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        915 => [[['_route' => 'app_transport_edit', '_controller' => 'App\\Controller\\TransportController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        923 => [[['_route' => 'app_transport_delete', '_controller' => 'App\\Controller\\TransportController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        962 => [[['_route' => 'app_tickets_front_show', '_controller' => 'App\\Controller\\TicketsFrontController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        975 => [[['_route' => 'app_tickets_front_edit', '_controller' => 'App\\Controller\\TicketsFrontController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        983 => [[['_route' => 'app_tickets_front_delete', '_controller' => 'App\\Controller\\TicketsFrontController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1012 => [[['_route' => 'app_transport_front_show', '_controller' => 'App\\Controller\\TransportFrontController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1026 => [[['_route' => 'app_transport_front_edit', '_controller' => 'App\\Controller\\TransportFrontController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1035 => [[['_route' => 'app_transport_front_delete', '_controller' => 'App\\Controller\\TransportFrontController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1063 => [
            [['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        1079 => [[['_route' => 'app_user_ban', '_controller' => 'App\\Controller\\UserController::banUser'], ['id'], ['POST' => 0], null, false, false, null]],
        1093 => [[['_route' => 'app_user_unban', '_controller' => 'App\\Controller\\UserController::unbanUser'], ['id'], ['POST' => 0], null, false, false, null]],
        1126 => [[['_route' => 'app_voyage_show', '_controller' => 'App\\Controller\\VoyageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1140 => [[['_route' => 'app_voyage_edit', '_controller' => 'App\\Controller\\VoyageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1149 => [[['_route' => 'app_voyage_delete', '_controller' => 'App\\Controller\\VoyageController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1187 => [[['_route' => 'app_voypersonalise_edit', '_controller' => 'App\\Controller\\VoypersonaliseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1196 => [
            [['_route' => 'app_voypersonalise_delete', '_controller' => 'App\\Controller\\VoypersonaliseController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
