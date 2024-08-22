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
        '/contributeur' => [[['_route' => 'liste_contributeur', '_controller' => 'App\\Controller\\ContributeurController::index'], null, null, null, true, false, null]],
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
        '/paiement/new' => [[['_route' => 'paiement_new', '_controller' => 'App\\Controller\\PaiementController::new'], null, null, null, false, false, null]],
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
                        .'|([^/]++)/collecte(*:287)'
                    .')'
                    .'|lls(?:/([^/]++)(?:/([^/]++))?)?(*:327)'
                .')'
                .'|/c(?'
                    .'|abinet/(?'
                        .'|cabinet/edit(?:([^/]++))?(*:376)'
                        .'|delete/([^/]++)(*:399)'
                    .')'
                    .'|ontributeur/(?'
                        .'|edit(?:([^/]++))?(*:440)'
                        .'|([^/]++)(*:456)'
                        .'|delete/([^/]++)(*:479)'
                    .')'
                .')'
                .'|/e(?'
                    .'|xcedents/(?'
                        .'|alls(?:/([^/]++)(?:/([^/]++))?)?(*:538)'
                        .'|edit(?:([^/]++))?(*:563)'
                        .'|delete/([^/]++)(*:586)'
                    .')'
                    .'|dit(?:([^/]++))?(*:611)'
                .')'
                .'|/impot(?'
                    .'|CF(?'
                        .'|NPB/(?'
                            .'|impot/cfnpb/edit(?:([^/]++))?(*:670)'
                            .'|delete/([^/]++)(*:693)'
                        .')'
                        .'|PB/(?'
                            .'|impot/cfpb/edit(?:([^/]++))?(*:736)'
                            .'|delete/([^/]++)(*:759)'
                        .')'
                    .')'
                    .'|/mini/fiscal/(?'
                        .'|edit(?:([^/]++))?(*:802)'
                        .'|delete/([^/]++)(*:825)'
                    .')'
                    .'|TOM/(?'
                        .'|impot/tom/edit(?:([^/]++))?(*:868)'
                        .'|delete/([^/]++)(*:891)'
                    .')'
                .')'
                .'|/p(?'
                    .'|atente/(?'
                        .'|patente/edit(?:([^/]++))?(*:941)'
                        .'|delete/([^/]++)(*:964)'
                    .')'
                    .'|ropriete/(?'
                        .'|alls(?:/([^/]++)(?:/([^/]++))?)?(*:1017)'
                        .'|edit(?:([^/]++))?(*:1043)'
                        .'|delete/([^/]++)(*:1067)'
                    .')'
                .')'
                .'|/re(?'
                    .'|cette/(?'
                        .'|alls(?:/([^/]++)(?:/([^/]++))?)?(*:1125)'
                        .'|edit(?:([^/]++))?(*:1151)'
                        .'|delete/([^/]++)(*:1175)'
                    .')'
                    .'|set\\-password/reset(?:/([^/]++))?(*:1218)'
                .')'
                .'|/delete/([^/]++)(*:1244)'
                .'|/site/(?'
                    .'|alls(?:/([^/]++)(?:/([^/]++))?)?(*:1294)'
                    .'|edit(?:([^/]++))?(*:1320)'
                    .'|delete/([^/]++)(*:1344)'
                    .'|site\\-collecte/([^/]++)(*:1376)'
                .')'
                .'|/tax(?'
                    .'|Indirecte/(?'
                        .'|taxIndirecte/edit(?:([^/]++))?(*:1436)'
                        .'|de(?'
                            .'|lete/([^/]++)(*:1463)'
                            .'|tait/([^/]++)(*:1485)'
                        .')'
                    .')'
                    .'|e/rurale/(?'
                        .'|edit(?:([^/]++))?(*:1525)'
                        .'|delete/([^/]++)(*:1549)'
                    .')'
                .')'
                .'|/(\\d+)(*:1566)'
                .'|/detail(?'
                    .'|/(\\d+)(*:1591)'
                    .'|Cfpb/(\\d+)(*:1610)'
                    .'|T(?'
                        .'|om/(\\d+)(*:1631)'
                        .'|axeRurale/(\\d+)(*:1655)'
                    .')'
                    .'|ImpotMiniFiscal/(\\d+)(*:1686)'
                    .'|R(?'
                        .'|ecette/(\\d+)(*:1711)'
                        .'|istournes/(\\d+)(*:1735)'
                    .')'
                    .'|Patente/(\\d+)(*:1758)'
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
        287 => [[['_route' => 'app_agent_contributeurs', '_controller' => 'App\\Controller\\AgentCollecteController::listContributeurs'], ['id'], null, null, false, false, null]],
        327 => [[['_route' => 'list_ristournes', 'page' => '1', 'nbre' => '5', '_controller' => 'App\\Controller\\RistournesController::index'], ['page', 'nbre'], null, null, false, true, null]],
        376 => [[['_route' => 'edit_cabinet', 'id' => '0', '_controller' => 'App\\Controller\\CabinetController::editCabinet'], ['id'], null, null, false, true, null]],
        399 => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\CabinetController::deleteImpotTOM'], ['id'], null, null, false, true, null]],
        440 => [[['_route' => 'edit_contributeur', 'id' => '0', '_controller' => 'App\\Controller\\ContributeurController::addContributeur'], ['id'], null, null, false, true, null]],
        456 => [[['_route' => 'contributeur_show', '_controller' => 'App\\Controller\\ContributeurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        479 => [[['_route' => 'delete_contributeur', '_controller' => 'App\\Controller\\ContributeurController::deleteContributeur'], ['id'], null, null, false, true, null]],
        538 => [[['_route' => 'list_excedents', 'page' => '1', 'nbre' => '5', '_controller' => 'App\\Controller\\ExcedentsController::index'], ['page', 'nbre'], null, null, false, true, null]],
        563 => [[['_route' => 'edit_excedents', 'id' => '0', '_controller' => 'App\\Controller\\ExcedentsController::addExcedents'], ['id'], null, null, false, true, null]],
        586 => [[['_route' => 'delete_excedents', '_controller' => 'App\\Controller\\ExcedentsController::deleteExecedent'], ['id'], null, null, false, true, null]],
        611 => [[['_route' => 'edit_ristournes', 'id' => '0', '_controller' => 'App\\Controller\\RistournesController::addRistournes'], ['id'], null, null, false, true, null]],
        670 => [[['_route' => 'edit_impot_cfnpb', 'id' => '0', '_controller' => 'App\\Controller\\ImpotCFNPBController::editImpotCFNPB'], ['id'], null, null, false, true, null]],
        693 => [[['_route' => 'delete_impot_cfnpb', '_controller' => 'App\\Controller\\ImpotCFNPBController::deleteImpotCFNPB'], ['id'], null, null, false, true, null]],
        736 => [[['_route' => 'edit_impot_cfpb', 'id' => '0', '_controller' => 'App\\Controller\\ImpotCFPBController::editImpotCFPB'], ['id'], null, null, false, true, null]],
        759 => [[['_route' => 'delete_impot_cfpb', '_controller' => 'App\\Controller\\ImpotCFPBController::deleteImpotCFPB'], ['id'], null, null, false, true, null]],
        802 => [[['_route' => 'edit_impot_mini_fiscal', 'id' => '0', '_controller' => 'App\\Controller\\ImpotMiniFiscalController::editImpotMiniFiscale'], ['id'], null, null, false, true, null]],
        825 => [[['_route' => 'delete_impot_mini_fiscale', '_controller' => 'App\\Controller\\ImpotMiniFiscalController::deleteImpotMiniFiscale'], ['id'], null, null, false, true, null]],
        868 => [[['_route' => 'edit_impot_tom', 'id' => '0', '_controller' => 'App\\Controller\\ImpotTOMController::new'], ['id'], null, null, false, true, null]],
        891 => [[['_route' => 'delete_impot_tom', '_controller' => 'App\\Controller\\ImpotTOMController::deleteImpotTOM'], ['id'], null, null, false, true, null]],
        941 => [[['_route' => 'edit_patente', 'id' => '0', '_controller' => 'App\\Controller\\PatenteController::editPatente'], ['id'], null, null, false, true, null]],
        964 => [[['_route' => 'delete_patente', '_controller' => 'App\\Controller\\PatenteController::deletePatente'], ['id'], null, null, false, true, null]],
        1017 => [[['_route' => 'list_propriete', 'page' => '1', 'nbre' => '5', '_controller' => 'App\\Controller\\ProprieteController::index'], ['page', 'nbre'], null, null, false, true, null]],
        1043 => [[['_route' => 'edit_propriete', 'id' => null, '_controller' => 'App\\Controller\\ProprieteController::addPropriete'], ['id'], null, null, false, true, null]],
        1067 => [[['_route' => 'delete_propriete', '_controller' => 'App\\Controller\\ProprieteController::deletePropriete'], ['id'], null, null, false, true, null]],
        1125 => [[['_route' => 'liste_recette', 'page' => '1', 'nbre' => '5', '_controller' => 'App\\Controller\\RecetteController::index'], ['page', 'nbre'], null, null, false, true, null]],
        1151 => [[['_route' => 'edit_recette', 'id' => '0', '_controller' => 'App\\Controller\\RecetteController::addRecette'], ['id'], null, null, false, true, null]],
        1175 => [[['_route' => 'delete_recette', '_controller' => 'App\\Controller\\RecetteController::deleteRecetteNon'], ['id'], null, null, false, true, null]],
        1218 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1244 => [[['_route' => 'delete_ristournes', '_controller' => 'App\\Controller\\RistournesController::deleteRistournes'], ['id'], null, null, false, true, null]],
        1294 => [[['_route' => 'liste_site_collecte', 'page' => '1', 'nbre' => '5', '_controller' => 'App\\Controller\\SiteCollecteController::index'], ['page', 'nbre'], null, null, false, true, null]],
        1320 => [[['_route' => 'edit_site_collecte', 'id' => '0', '_controller' => 'App\\Controller\\SiteCollecteController::addSite'], ['id'], null, null, false, true, null]],
        1344 => [[['_route' => 'delete_site', '_controller' => 'App\\Controller\\SiteCollecteController::deleteSite'], ['id'], null, null, false, true, null]],
        1376 => [[['_route' => 'site_collecte_contributeurs', '_controller' => 'App\\Controller\\SiteCollecteController::siteCollecteContributeurs'], ['id'], null, null, false, true, null]],
        1436 => [[['_route' => 'edit_impot_indirecte', 'id' => '0', '_controller' => 'App\\Controller\\TaxIndirecteController::editImpotIndirecte'], ['id'], null, null, false, true, null]],
        1463 => [[['_route' => 'delete_impot_indirecte', '_controller' => 'App\\Controller\\TaxIndirecteController::deleteImpotIndirecte'], ['id'], null, null, false, true, null]],
        1485 => [[['_route' => 'detail_taxe_indirecte', '_controller' => 'App\\Controller\\TaxIndirecteController::detailTaxIndirecte'], ['propriete_id'], null, null, false, true, null]],
        1525 => [[['_route' => 'edit_taxe_rurale', 'id' => '0', '_controller' => 'App\\Controller\\TaxeRuraleController::editTaxeRurale'], ['id'], null, null, false, true, null]],
        1549 => [[['_route' => 'delete_taxe_rurale', '_controller' => 'App\\Controller\\TaxeRuraleController::deleteTaxeRurale'], ['id'], null, null, false, true, null]],
        1566 => [[['_route' => 'detail_excedents', '_controller' => 'App\\Controller\\ExcedentsController::detailExcedent'], ['propriete_id'], null, null, false, true, null]],
        1591 => [[['_route' => 'detail_impot_cfnpb', '_controller' => 'App\\Controller\\ImpotCFNPBController::detailImpotCFNPB'], ['propriete_id'], null, null, false, true, null]],
        1610 => [[['_route' => 'detail_impot_cfpb', '_controller' => 'App\\Controller\\ImpotCFPBController::detailImpotCFPB'], ['propriete_id'], null, null, false, true, null]],
        1631 => [[['_route' => 'detail_impot_tom', '_controller' => 'App\\Controller\\ImpotTOMController::detailImpotTOM'], ['propriete_id'], null, null, false, true, null]],
        1655 => [[['_route' => 'detail_taxe_rurale', '_controller' => 'App\\Controller\\TaxeRuraleController::detailTaxeRurale'], ['propriete_id'], null, null, false, true, null]],
        1686 => [[['_route' => 'detail_impot_mini_fiscal', '_controller' => 'App\\Controller\\ImpotMiniFiscalController::detailImpotMiniFiscal'], ['propriete_id'], null, null, false, true, null]],
        1711 => [[['_route' => 'detail_recette', '_controller' => 'App\\Controller\\RecetteController::detailRecette'], ['propriete_id'], null, null, false, true, null]],
        1735 => [[['_route' => 'detail_ristournes', '_controller' => 'App\\Controller\\RistournesController::detailRistournes'], ['propriete_id'], null, null, false, true, null]],
        1758 => [
            [['_route' => 'detail_patente', '_controller' => 'App\\Controller\\PatenteController::detailPatente'], ['propriete_id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
