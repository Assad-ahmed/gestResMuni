<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/impotAssiValeur' => [[['_route' => 'impotAssiValeur_index', '_controller' => 'App\\Controller\\ImpotAssiValeurController::index'], null, null, null, false, false, null]],
        '/add-impotAssiValeur' => [[['_route' => 'add_impotAssiValeur', '_controller' => 'App\\Controller\\ImpotAssiValeurController::addImpotAssiValeur'], null, null, null, false, false, null]],
        '/impotCFNPB' => [[['_route' => 'liste_impot_cfnpb', '_controller' => 'App\\Controller\\ImpotCFNPBController::index'], null, null, null, true, false, null]],
        '/impotCFNPB/impot/cfnpb/calculer' => [[['_route' => 'impot_cfnpb_calculer', '_controller' => 'App\\Controller\\ImpotCFNPBController::new'], null, null, null, false, false, null]],
        '/impotCFPB' => [[['_route' => 'liste_impot_cfpb', '_controller' => 'App\\Controller\\ImpotCFPBController::index'], null, null, null, true, false, null]],
        '/impotCFPB/impot/cfpb/calculer' => [[['_route' => 'impot_cfpb_calculer', '_controller' => 'App\\Controller\\ImpotCFPBController::calculerImpot'], null, null, null, false, false, null]],
        '/impotCFPB/impots' => [[['_route' => 'liste_impotcfpb', '_controller' => 'App\\Controller\\ImpotCFPBController::listeImpots'], null, null, null, false, false, null]],
        '/impotCFPB/calculer-somme-impots-cfpb' => [[['_route' => 'calculer_somme_impots_cfpb', '_controller' => 'App\\Controller\\ImpotCFPBController::calculerSommeImpotsCFPB'], null, null, null, false, false, null]],
        '/impotTOM' => [[['_route' => 'liste_impot_tom', '_controller' => 'App\\Controller\\ImpotTOMController::index'], null, null, null, true, false, null]],
        '/impotTOM/impot/tom/calculer' => [[['_route' => 'impot_tom_calculer', '_controller' => 'App\\Controller\\ImpotTOMController::new'], null, null, null, false, false, null]],
        '/propriete' => [[['_route' => 'liste_propriete', '_controller' => 'App\\Controller\\ProprieteController::index'], null, null, null, true, false, null]],
        '/propriete/add' => [[['_route' => 'add_propriete', '_controller' => 'App\\Controller\\ProprieteController::addType'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/ressources' => [[['_route' => 'ressource_index', '_controller' => 'App\\Controller\\ResourceController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/tax' => [[['_route' => 'liste_tax', '_controller' => 'App\\Controller\\TaxController::index'], null, null, null, true, false, null]],
        '/tax/calculer_taxes' => [[['_route' => 'calculer_taxes', '_controller' => 'App\\Controller\\TaxController::calculerTaxes'], null, null, null, false, false, null]],
        '/tax/detail' => [[['_route' => 'app_tax_detail', '_controller' => 'App\\Controller\\TaxDetailController::index'], null, null, null, false, false, null]],
        '/tax/type' => [[['_route' => 'app_tax_type', '_controller' => 'App\\Controller\\TaxTypeController::index'], null, null, null, false, false, null]],
        '/type' => [[['_route' => 'liste_type_impot', '_controller' => 'App\\Controller\\TypeImpotController::index'], null, null, null, true, false, null]],
        '/type/add' => [[['_route' => 'add_type_impot', '_controller' => 'App\\Controller\\TypeImpotController::addType'], null, null, null, false, false, null]],
        '/typeImpots' => [[['_route' => 'typeImpots_index', '_controller' => 'App\\Controller\\TypeImpotsController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/agent/(?'
                    .'|alls(?:/([^/]++)(?:/([^/]++))?)?(*:49)'
                    .'|edit(?:([^/]++))?(*:73)'
                    .'|delete/([^/]++)(*:95)'
                .')'
                .'|/contributeur/(?'
                    .'|alls(?:/([^/]++)(?:/([^/]++))?)?(*:152)'
                    .'|edit(?:([^/]++))?(*:177)'
                    .'|delete/([^/]++)(*:200)'
                .')'
                .'|/excedent/(?'
                    .'|alls(?:/([^/]++)(?:/([^/]++))?)?(*:254)'
                    .'|edit(?:([^/]++))?(*:279)'
                    .'|delete/([^/]++)(*:302)'
                .')'
                .'|/r(?'
                    .'|e(?'
                        .'|cette/non/(?'
                            .'|alls(?:/([^/]++)(?:/([^/]++))?)?(*:365)'
                            .'|edit(?:([^/]++))?(*:390)'
                            .'|delete/([^/]++)(*:413)'
                        .')'
                        .'|s(?'
                            .'|et\\-password/reset(?:/([^/]++))?(*:458)'
                            .'|source/([^/]++)(*:481)'
                        .')'
                    .')'
                    .'|istourne/(?'
                        .'|alls(?:/([^/]++)(?:/([^/]++))?)?(*:535)'
                        .'|edit(?:([^/]++))?(*:560)'
                        .'|delete/([^/]++)(*:583)'
                    .')'
                .')'
                .'|/impotAssiValeur/([^/]++)(*:618)'
                .'|/site/(?'
                    .'|alls(?:/([^/]++)(?:/([^/]++))?)?(*:667)'
                    .'|edit(?:([^/]++))?(*:692)'
                    .'|delete/([^/]++)(*:715)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        49 => [[['_route' => 'list_agent', 'page' => '1', 'nbre' => '5', '_controller' => 'App\\Controller\\AgentCollecteController::index'], ['page', 'nbre'], null, null, false, true, null]],
        73 => [[['_route' => 'edit_agent', 'id' => '0', '_controller' => 'App\\Controller\\AgentCollecteController::addAgent'], ['id'], null, null, false, true, null]],
        95 => [[['_route' => 'delete_agent', '_controller' => 'App\\Controller\\AgentCollecteController::deleteAgent'], ['id'], null, null, false, true, null]],
        152 => [[['_route' => 'liste_contributeur', 'page' => '1', 'nbre' => '5', '_controller' => 'App\\Controller\\ContributeurController::index'], ['page', 'nbre'], null, null, false, true, null]],
        177 => [[['_route' => 'edit_contributeur', 'id' => '0', '_controller' => 'App\\Controller\\ContributeurController::addContributeur'], ['id'], null, null, false, true, null]],
        200 => [[['_route' => 'delete_contributeur', '_controller' => 'App\\Controller\\ContributeurController::deleteAgent'], ['id'], null, null, false, true, null]],
        254 => [[['_route' => 'liste_excedent', 'page' => '1', 'nbre' => '5', '_controller' => 'App\\Controller\\ControllerRessources\\ExcedentController::index'], ['page', 'nbre'], null, null, false, true, null]],
        279 => [[['_route' => 'edit_excedent', 'id' => '0', '_controller' => 'App\\Controller\\ControllerRessources\\ExcedentController::addExcedent'], ['id'], null, null, false, true, null]],
        302 => [[['_route' => 'delete_excedent', '_controller' => 'App\\Controller\\ControllerRessources\\ExcedentController::deleteRistourne'], ['id'], null, null, false, true, null]],
        365 => [[['_route' => 'liste_recette_non_fiscale', 'page' => '1', 'nbre' => '5', '_controller' => 'App\\Controller\\ControllerRessources\\RecetteNonFiscaleController::index'], ['page', 'nbre'], null, null, false, true, null]],
        390 => [[['_route' => 'edit_recette_non_fiscale', 'id' => '0', '_controller' => 'App\\Controller\\ControllerRessources\\RecetteNonFiscaleController::addRecetteNonFiscale'], ['id'], null, null, false, true, null]],
        413 => [[['_route' => 'delete_recettenonfiscale', '_controller' => 'App\\Controller\\ControllerRessources\\RecetteNonFiscaleController::deleteRecetteNon'], ['id'], null, null, false, true, null]],
        458 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        481 => [[['_route' => 'ressource_show', '_controller' => 'App\\Controller\\ResourceController::show'], ['id'], null, null, false, true, null]],
        535 => [[['_route' => 'liste_ristourne', 'page' => '1', 'nbre' => '5', '_controller' => 'App\\Controller\\ControllerRessources\\RistourneController::index'], ['page', 'nbre'], null, null, false, true, null]],
        560 => [[['_route' => 'edit_ristourne', 'id' => '0', '_controller' => 'App\\Controller\\ControllerRessources\\RistourneController::editRistourne'], ['id'], null, null, false, true, null]],
        583 => [[['_route' => 'delete_ristourne', '_controller' => 'App\\Controller\\ControllerRessources\\RistourneController::deleteRistourne'], ['id'], null, null, false, true, null]],
        618 => [[['_route' => 'impotAssiValeur_show', '_controller' => 'App\\Controller\\ImpotAssiValeurController::show'], ['id'], null, null, false, true, null]],
        667 => [[['_route' => 'liste_site_collecte', 'page' => '1', 'nbre' => '5', '_controller' => 'App\\Controller\\SiteCollecteController::index'], ['page', 'nbre'], null, null, false, true, null]],
        692 => [[['_route' => 'edit_site_collecte', 'id' => '0', '_controller' => 'App\\Controller\\SiteCollecteController::addSite'], ['id'], null, null, false, true, null]],
        715 => [
            [['_route' => 'delete_site', '_controller' => 'App\\Controller\\SiteCollecteController::deleteSite'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
