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
        '/cabinet' => [[['_route' => 'app_cabinet', '_controller' => 'App\\Controller\\CabinetController::index'], null, null, null, true, false, null]],
        '/controleur/centrale' => [[['_route' => 'app_controleur_centrale', '_controller' => 'App\\Controller\\ControleurCentraleController::index'], null, null, null, true, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/liste-impots' => [[['_route' => 'liste_impots', '_controller' => 'App\\Controller\\ImpotAssiValeurController::listTaxes'], null, null, null, false, false, null]],
        '/liste-taxindirecte' => [[['_route' => 'liste_taxindirecte', '_controller' => 'App\\Controller\\ImpotAssiValeurController::listTaxIndirect'], null, null, null, false, false, null]],
        '/liste-recettenonfiscale' => [[['_route' => 'liste_recettenonfiscale', '_controller' => 'App\\Controller\\ImpotAssiValeurController::listRecettenonfiscalet'], null, null, null, false, false, null]],
        '/liste-ristourne' => [[['_route' => 'liste_ristournes', '_controller' => 'App\\Controller\\ImpotAssiValeurController::listRistourne'], null, null, null, false, false, null]],
        '/liste-excedent' => [[['_route' => 'liste_excedents', '_controller' => 'App\\Controller\\ImpotAssiValeurController::listExcedent'], null, null, null, false, false, null]],
        '/list-patente' => [[['_route' => 'liste_patentes', '_controller' => 'App\\Controller\\ImpotAssiValeurController::listPatente'], null, null, null, false, false, null]],
        '/list-impotCapitation' => [[['_route' => 'liste_impot_capitation', '_controller' => 'App\\Controller\\ImpotAssiValeurController::listImpotCapitation'], null, null, null, false, false, null]],
        '/impotCFNPB' => [[['_route' => 'liste_impot_cfnpb', '_controller' => 'App\\Controller\\ImpotCFNPBController::index'], null, null, null, true, false, null]],
        '/impotCFPB' => [[['_route' => 'liste_impot_cfpb', '_controller' => 'App\\Controller\\ImpotCFPBController::index'], null, null, null, true, false, null]],
        '/impot/mini/fiscal' => [[['_route' => 'liste_impot_mini_fiscal', '_controller' => 'App\\Controller\\ImpotMiniFiscalController::index'], null, null, null, true, false, null]],
        '/impotTOM' => [[['_route' => 'liste_impot_tom', '_controller' => 'App\\Controller\\ImpotTOMController::index'], null, null, null, true, false, null]],
        '/patente' => [[['_route' => 'liste_patente', '_controller' => 'App\\Controller\\PatenteController::index'], null, null, null, true, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/taxIndirecte' => [[['_route' => 'liste_impot_indirecte', '_controller' => 'App\\Controller\\TaxIndirecteController::index'], null, null, null, true, false, null]],
        '/taxe/rurale' => [[['_route' => 'liste_taxe_rurale', '_controller' => 'App\\Controller\\TaxeRuraleController::index'], null, null, null, true, false, null]],
        '/total-impots' => [[['_route' => 'total_impots', '_controller' => 'App\\Controller\\TypeImpotsController::totalTaxes'], null, null, null, false, false, null]],
        '/total-recettenonFiscale' => [[['_route' => 'total_recettenonFiscale', '_controller' => 'App\\Controller\\TypeImpotsController::totalRecettenonFiscale'], null, null, null, false, false, null]],
        '/total-ristournes' => [[['_route' => 'total_ristournes', '_controller' => 'App\\Controller\\TypeImpotsController::totalRistournes'], null, null, null, false, false, null]],
        '/total-excedents' => [[['_route' => 'total_excedents', '_controller' => 'App\\Controller\\TypeImpotsController::totalExcedents'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|gent/(?'
                        .'|alls(?:/([^/]++)(?:/([^/]++))?)?(*:214)'
                        .'|edit(?:([^/]++))?(*:239)'
                        .'|delete/([^/]++)(*:262)'
                    .')'
                    .'|lls(?:/([^/]++)(?:/([^/]++))?)?(*:302)'
                .')'
                .'|/c(?'
                    .'|abinet/(?'
                        .'|cabinet/edit(?:([^/]++))?(*:351)'
                        .'|delete/([^/]++)(*:374)'
                    .')'
                    .'|ontributeur/(?'
                        .'|alls(?:/([^/]++)(?:/([^/]++))?)?(*:430)'
                        .'|edit(?:([^/]++))?(*:455)'
                        .'|delete/([^/]++)(*:478)'
                    .')'
                .')'
                .'|/e(?'
                    .'|xcedents/(?'
                        .'|alls(?:/([^/]++)(?:/([^/]++))?)?(*:537)'
                        .'|edit(?:([^/]++))?(*:562)'
                        .'|delete/([^/]++)(*:585)'
                    .')'
                    .'|dit(?:([^/]++))?(*:610)'
                .')'
                .'|/impot(?'
                    .'|CF(?'
                        .'|NPB/(?'
                            .'|impot/cfnpb/edit(?:([^/]++))?(*:669)'
                            .'|delete/([^/]++)(*:692)'
                        .')'
                        .'|PB/(?'
                            .'|impot/cfpb/edit(?:([^/]++))?(*:735)'
                            .'|delete/([^/]++)(*:758)'
                        .')'
                    .')'
                    .'|/mini/fiscal/(?'
                        .'|edit(?:([^/]++))?(*:801)'
                        .'|delete/([^/]++)(*:824)'
                    .')'
                    .'|TOM/(?'
                        .'|impot/tom/edit(?:([^/]++))?(*:867)'
                        .'|delete/([^/]++)(*:890)'
                    .')'
                .')'
                .'|/p(?'
                    .'|atente/(?'
                        .'|patente/edit(?:([^/]++))?(*:940)'
                        .'|delete/([^/]++)(*:963)'
                    .')'
                    .'|ropriete/(?'
                        .'|alls(?:/([^/]++)(?:/([^/]++))?)?(*:1016)'
                        .'|edit(?:([^/]++))?(*:1042)'
                        .'|delete/([^/]++)(*:1066)'
                    .')'
                .')'
                .'|/re(?'
                    .'|cette/(?'
                        .'|alls(?:/([^/]++)(?:/([^/]++))?)?(*:1124)'
                        .'|edit(?:([^/]++))?(*:1150)'
                        .'|delete/([^/]++)(*:1174)'
                    .')'
                    .'|set\\-password/reset(?:/([^/]++))?(*:1217)'
                .')'
                .'|/delete/([^/]++)(*:1243)'
                .'|/site/(?'
                    .'|alls(?:/([^/]++)(?:/([^/]++))?)?(*:1293)'
                    .'|edit(?:([^/]++))?(*:1319)'
                    .'|delete/([^/]++)(*:1343)'
                .')'
                .'|/tax(?'
                    .'|Indirecte/(?'
                        .'|taxIndirecte/edit(?:([^/]++))?(*:1403)'
                        .'|de(?'
                            .'|lete/([^/]++)(*:1430)'
                            .'|tait/([^/]++)(*:1452)'
                        .')'
                    .')'
                    .'|e/rurale/(?'
                        .'|edit(?:([^/]++))?(*:1492)'
                        .'|delete/([^/]++)(*:1516)'
                    .')'
                .')'
                .'|/(\\d+)(*:1533)'
                .'|/detail(?'
                    .'|/(\\d+)(*:1558)'
                    .'|Cfpb/(\\d+)(*:1577)'
                    .'|T(?'
                        .'|om/(\\d+)(*:1598)'
                        .'|axeRurale/(\\d+)(*:1622)'
                    .')'
                    .'|ImpotMiniFiscal/(\\d+)(*:1653)'
                    .'|R(?'
                        .'|ecette/(\\d+)(*:1678)'
                        .'|istournes/(\\d+)(*:1702)'
                    .')'
                    .'|Patente/(\\d+)(*:1725)'
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
        214 => [[['_route' => 'list_agent', 'page' => '1', 'nbre' => '5', '_controller' => 'App\\Controller\\AgentCollecteController::index'], ['page', 'nbre'], null, null, false, true, null]],
        239 => [[['_route' => 'edit_agent', 'id' => '0', '_controller' => 'App\\Controller\\AgentCollecteController::addAgent'], ['id'], null, null, false, true, null]],
        262 => [[['_route' => 'delete_agent', '_controller' => 'App\\Controller\\AgentCollecteController::deleteAgent'], ['id'], null, null, false, true, null]],
        302 => [[['_route' => 'list_ristournes', 'page' => '1', 'nbre' => '5', '_controller' => 'App\\Controller\\RistournesController::index'], ['page', 'nbre'], null, null, false, true, null]],
        351 => [[['_route' => 'edit_cabinet', 'id' => '0', '_controller' => 'App\\Controller\\CabinetController::editCabinet'], ['id'], null, null, false, true, null]],
        374 => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\CabinetController::deleteImpotTOM'], ['id'], null, null, false, true, null]],
        430 => [[['_route' => 'liste_contributeur', 'page' => '1', 'nbre' => '5', '_controller' => 'App\\Controller\\ContributeurController::index'], ['page', 'nbre'], null, null, false, true, null]],
        455 => [[['_route' => 'edit_contributeur', 'id' => '0', '_controller' => 'App\\Controller\\ContributeurController::addContributeur'], ['id'], null, null, false, true, null]],
        478 => [[['_route' => 'delete_contributeur', '_controller' => 'App\\Controller\\ContributeurController::deleteAgent'], ['id'], null, null, false, true, null]],
        537 => [[['_route' => 'list_excedents', 'page' => '1', 'nbre' => '5', '_controller' => 'App\\Controller\\ExcedentsController::index'], ['page', 'nbre'], null, null, false, true, null]],
        562 => [[['_route' => 'edit_excedents', 'id' => '0', '_controller' => 'App\\Controller\\ExcedentsController::addExcedents'], ['id'], null, null, false, true, null]],
        585 => [[['_route' => 'delete_excedents', '_controller' => 'App\\Controller\\ExcedentsController::deleteExecedent'], ['id'], null, null, false, true, null]],
        610 => [[['_route' => 'edit_ristournes', 'id' => '0', '_controller' => 'App\\Controller\\RistournesController::addRistournes'], ['id'], null, null, false, true, null]],
        669 => [[['_route' => 'edit_impot_cfnpb', 'id' => '0', '_controller' => 'App\\Controller\\ImpotCFNPBController::editImpotCFNPB'], ['id'], null, null, false, true, null]],
        692 => [[['_route' => 'delete_impot_cfnpb', '_controller' => 'App\\Controller\\ImpotCFNPBController::deleteImpotCFNPB'], ['id'], null, null, false, true, null]],
        735 => [[['_route' => 'edit_impot_cfpb', 'id' => '0', '_controller' => 'App\\Controller\\ImpotCFPBController::editImpotCFPB'], ['id'], null, null, false, true, null]],
        758 => [[['_route' => 'delete_impot_cfpb', '_controller' => 'App\\Controller\\ImpotCFPBController::deleteImpotCFPB'], ['id'], null, null, false, true, null]],
        801 => [[['_route' => 'edit_impot_mini_fiscal', 'id' => '0', '_controller' => 'App\\Controller\\ImpotMiniFiscalController::editImpotMiniFiscale'], ['id'], null, null, false, true, null]],
        824 => [[['_route' => 'delete_impot_mini_fiscale', '_controller' => 'App\\Controller\\ImpotMiniFiscalController::deleteImpotMiniFiscale'], ['id'], null, null, false, true, null]],
        867 => [[['_route' => 'edit_impot_tom', 'id' => '0', '_controller' => 'App\\Controller\\ImpotTOMController::new'], ['id'], null, null, false, true, null]],
        890 => [[['_route' => 'delete_impot_tom', '_controller' => 'App\\Controller\\ImpotTOMController::deleteImpotTOM'], ['id'], null, null, false, true, null]],
        940 => [[['_route' => 'edit_patente', 'id' => '0', '_controller' => 'App\\Controller\\PatenteController::editPatente'], ['id'], null, null, false, true, null]],
        963 => [[['_route' => 'delete_patente', '_controller' => 'App\\Controller\\PatenteController::deletePatente'], ['id'], null, null, false, true, null]],
        1016 => [[['_route' => 'list_propriete', 'page' => '1', 'nbre' => '5', '_controller' => 'App\\Controller\\ProprieteController::index'], ['page', 'nbre'], null, null, false, true, null]],
        1042 => [[['_route' => 'edit_propriete', 'id' => null, '_controller' => 'App\\Controller\\ProprieteController::addPropriete'], ['id'], null, null, false, true, null]],
        1066 => [[['_route' => 'delete_propriete', '_controller' => 'App\\Controller\\ProprieteController::deletePropriete'], ['id'], null, null, false, true, null]],
        1124 => [[['_route' => 'liste_recette', 'page' => '1', 'nbre' => '5', '_controller' => 'App\\Controller\\RecetteController::index'], ['page', 'nbre'], null, null, false, true, null]],
        1150 => [[['_route' => 'edit_recette', 'id' => '0', '_controller' => 'App\\Controller\\RecetteController::addRecette'], ['id'], null, null, false, true, null]],
        1174 => [[['_route' => 'delete_recette', '_controller' => 'App\\Controller\\RecetteController::deleteRecetteNon'], ['id'], null, null, false, true, null]],
        1217 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1243 => [[['_route' => 'delete_ristournes', '_controller' => 'App\\Controller\\RistournesController::deleteRistournes'], ['id'], null, null, false, true, null]],
        1293 => [[['_route' => 'liste_site_collecte', 'page' => '1', 'nbre' => '5', '_controller' => 'App\\Controller\\SiteCollecteController::index'], ['page', 'nbre'], null, null, false, true, null]],
        1319 => [[['_route' => 'edit_site_collecte', 'id' => '0', '_controller' => 'App\\Controller\\SiteCollecteController::addSite'], ['id'], null, null, false, true, null]],
        1343 => [[['_route' => 'delete_site', '_controller' => 'App\\Controller\\SiteCollecteController::deleteSite'], ['id'], null, null, false, true, null]],
        1403 => [[['_route' => 'edit_impot_indirecte', 'id' => '0', '_controller' => 'App\\Controller\\TaxIndirecteController::editImpotIndirecte'], ['id'], null, null, false, true, null]],
        1430 => [[['_route' => 'delete_impot_indirecte', '_controller' => 'App\\Controller\\TaxIndirecteController::deleteImpotIndirecte'], ['id'], null, null, false, true, null]],
        1452 => [[['_route' => 'detail_taxe_indirecte', '_controller' => 'App\\Controller\\TaxIndirecteController::detailTaxIndirecte'], ['propriete_id'], null, null, false, true, null]],
        1492 => [[['_route' => 'edit_taxe_rurale', 'id' => '0', '_controller' => 'App\\Controller\\TaxeRuraleController::editTaxeRurale'], ['id'], null, null, false, true, null]],
        1516 => [[['_route' => 'delete_taxe_rurale', '_controller' => 'App\\Controller\\TaxeRuraleController::deleteTaxeRurale'], ['id'], null, null, false, true, null]],
        1533 => [[['_route' => 'detail_excedents', '_controller' => 'App\\Controller\\ExcedentsController::detailExcedent'], ['propriete_id'], null, null, false, true, null]],
        1558 => [[['_route' => 'detail_impot_cfnpb', '_controller' => 'App\\Controller\\ImpotCFNPBController::detailImpotCFNPB'], ['propriete_id'], null, null, false, true, null]],
        1577 => [[['_route' => 'detail_impot_cfpb', '_controller' => 'App\\Controller\\ImpotCFPBController::detailImpotCFPB'], ['propriete_id'], null, null, false, true, null]],
        1598 => [[['_route' => 'detail_impot_tom', '_controller' => 'App\\Controller\\ImpotTOMController::detailImpotTOM'], ['propriete_id'], null, null, false, true, null]],
        1622 => [[['_route' => 'detail_taxe_rurale', '_controller' => 'App\\Controller\\TaxeRuraleController::detailTaxeRurale'], ['propriete_id'], null, null, false, true, null]],
        1653 => [[['_route' => 'detail_impot_mini_fiscal', '_controller' => 'App\\Controller\\ImpotMiniFiscalController::detailImpotMiniFiscal'], ['propriete_id'], null, null, false, true, null]],
        1678 => [[['_route' => 'detail_recette', '_controller' => 'App\\Controller\\RecetteController::detailRecette'], ['propriete_id'], null, null, false, true, null]],
        1702 => [[['_route' => 'detail_ristournes', '_controller' => 'App\\Controller\\RistournesController::detailRistournes'], ['propriete_id'], null, null, false, true, null]],
        1725 => [
            [['_route' => 'detail_patente', '_controller' => 'App\\Controller\\PatenteController::detailPatente'], ['propriete_id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
