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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/autorisation' => [[['_route' => 'autorisation', '_controller' => 'App\\Controller\\AutorisationController::index'], null, null, null, false, false, null]],
        '/bon' => [[['_route' => 'bon', '_controller' => 'App\\Controller\\BonController::index'], null, null, null, false, false, null]],
        '/bon/new' => [[['_route' => 'bon_add', '_controller' => 'App\\Controller\\BonController::addEdit'], null, null, null, false, false, null]],
        '/medicItem' => [[['_route' => 'bon_medicItem', '_controller' => 'App\\Controller\\BonController::medicItem'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DashBoardController::index'], null, null, null, false, false, null]],
        '/bestActive' => [[['_route' => 'app_dashboard_bestactive', '_controller' => 'App\\Controller\\DashBoardController::bestActive'], null, null, null, false, false, null]],
        '/bycategory' => [[['_route' => 'app_dashboard_usagebycategory', '_controller' => 'App\\Controller\\DashBoardController::usageByCategory'], null, null, null, false, false, null]],
        '/facture/pdf' => [[['_route' => 'facture_print', '_controller' => 'App\\Controller\\FactureController::pdfPrint'], null, null, null, false, false, null]],
        '/facture' => [[['_route' => 'facture', '_controller' => 'App\\Controller\\FactureController::index'], null, null, null, false, false, null]],
        '/providers' => [[['_route' => 'fournisseurs', '_controller' => 'App\\Controller\\FournisseurController::index'], null, null, null, false, false, null]],
        '/provider/new' => [[['_route' => 'provider_add', '_controller' => 'App\\Controller\\FournisseurController::addEdit'], null, null, null, false, false, null]],
        '/mouvement/stock' => [[['_route' => 'mouvement_stock', '_controller' => 'App\\Controller\\MouvementStockController::index'], null, null, null, false, false, null]],
        '/mouvement/removals' => [[['_route' => 'stock_removals', '_controller' => 'App\\Controller\\MouvementStockController::list_sortie_item'], null, null, null, false, false, null]],
        '/mouvement/removals/new' => [[['_route' => 'stock_removals_new', '_controller' => 'App\\Controller\\MouvementStockController::new_removals'], null, null, null, false, false, null]],
        '/mouvement/entries' => [[['_route' => 'stock_entries', '_controller' => 'App\\Controller\\MouvementStockController::list_entree'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/stock/home' => [[['_route' => 'stock0', 'id' => null, '_controller' => 'App\\Controller\\StockController::index'], null, null, null, false, false, null]],
        '/stock/removal/new' => [[['_route' => 'stock_removal_on_modal', '_controller' => 'App\\Controller\\StockController::index'], null, null, null, false, false, null]],
        '/stock/export' => [[['_route' => 'stock_export', '_controller' => 'App\\Controller\\StockController::export'], null, null, null, false, false, null]],
        '/stock/csv' => [[['_route' => 'stock_test_csv', '_controller' => 'App\\Controller\\StockController::testCsv'], null, null, null, false, false, null]],
        '/stock/new' => [[['_route' => 'stock_add', '_controller' => 'App\\Controller\\StockController::addEdit'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/allow/([^/]++)/Commande(*:193)'
                .'|/reject/([^/]++)/Commande(*:226)'
                .'|/bon/(?'
                    .'|([^/]++)/(?'
                        .'|edit(*:258)'
                        .'|remove(*:272)'
                    .')'
                    .'|show(?:/(\\d+))?(*:296)'
                    .'|([^/]++)/facture(*:320)'
                .')'
                .'|/facture/show(?:/(\\d+))?(*:353)'
                .'|/providers/([^/]++)/(?'
                    .'|edit(*:388)'
                    .'|show(*:400)'
                    .'|remove(*:414)'
                .')'
                .'|/stock/(?'
                    .'|edit/(\\d+)(*:443)'
                    .'|show/([^/]++)(*:464)'
                    .'|([^/]++)/(?'
                        .'|remov(?'
                            .'|e(*:493)'
                            .'|al(*:503)'
                        .')'
                        .'|archive(*:519)'
                        .'|edit(*:531)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        193 => [[['_route' => 'bon_allow', '_controller' => 'App\\Controller\\AutorisationController::autoriser'], ['id'], null, null, false, false, null]],
        226 => [[['_route' => 'bon_reject', '_controller' => 'App\\Controller\\AutorisationController::rejeter'], ['id'], null, null, false, false, null]],
        258 => [[['_route' => 'bon_edit', '_controller' => 'App\\Controller\\BonController::addEdit'], ['id'], null, null, false, false, null]],
        272 => [[['_route' => 'bon_remove', '_controller' => 'App\\Controller\\BonController::remove'], ['id'], null, null, false, false, null]],
        296 => [[['_route' => 'bon_show', 'id' => null, '_controller' => 'App\\Controller\\BonController::show'], ['id'], null, null, false, true, null]],
        320 => [[['_route' => 'bon_join', '_controller' => 'App\\Controller\\BonController::join'], ['id'], null, null, false, false, null]],
        353 => [[['_route' => 'facture_show', 'id' => null, '_controller' => 'App\\Controller\\FactureController::show'], ['id'], null, null, false, true, null]],
        388 => [[['_route' => 'provider_edit', '_controller' => 'App\\Controller\\FournisseurController::addEdit'], ['id'], null, null, false, false, null]],
        400 => [[['_route' => 'provider_show', 'id' => null, '_controller' => 'App\\Controller\\FournisseurController::show'], ['id'], null, null, false, false, null]],
        414 => [[['_route' => 'provider_remove', '_controller' => 'App\\Controller\\FournisseurController::remove'], ['id'], null, null, false, false, null]],
        443 => [[['_route' => 'stock', '_controller' => 'App\\Controller\\StockController::index'], ['id'], null, null, false, true, null]],
        464 => [[['_route' => 'stock_show', '_controller' => 'App\\Controller\\StockController::show'], ['id'], null, null, false, true, null]],
        493 => [[['_route' => 'stock_remove', '_controller' => 'App\\Controller\\StockController::remove'], ['id'], null, null, false, false, null]],
        503 => [[['_route' => 'sr', '_controller' => 'App\\Controller\\StockController::removal'], ['id'], null, null, false, false, null]],
        519 => [[['_route' => 'stock_archive', '_controller' => 'App\\Controller\\StockController::archiver'], ['id'], null, null, false, false, null]],
        531 => [
            [['_route' => 'stock_edit', '_controller' => 'App\\Controller\\StockController::addEdit'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
