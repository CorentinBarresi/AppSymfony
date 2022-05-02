<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'app_admin_trip_index' => [[], ['_controller' => 'App\\Controller\\AdminTripController::index'], [], [['text', '/admin/trip/']], [], []],
    'app_admin_trip_new' => [[], ['_controller' => 'App\\Controller\\AdminTripController::new'], [], [['text', '/admin/trip/new']], [], []],
    'app_admin_trip_show' => [['id'], ['_controller' => 'App\\Controller\\AdminTripController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/trip']], [], []],
    'app_admin_trip_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminTripController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/trip']], [], []],
    'app_admin_trip_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminTripController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/trip']], [], []],
    'app_mailler' => [[], ['_controller' => 'App\\Controller\\MaillerController::index'], [], [['text', '/mailler']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'trip_index' => [[], ['_controller' => 'App\\Controller\\TripController::index'], [], [['text', '/']], [], []],
    'trip_snow' => [['id'], ['_controller' => 'App\\Controller\\TripController::showOne'], [], [['variable', '/', '[^/]++', 'id']], [], []],
];