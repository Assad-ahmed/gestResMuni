<?php

namespace Container0xtqmpP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_ServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AgentCollecteController::addAgent' => ['privates', '.service_locator.osaQ_sm', 'get_ServiceLocator_OsaQSmService', true],
            'App\\Controller\\AgentCollecteController::deleteAgent' => ['privates', '.service_locator.osaQ_sm', 'get_ServiceLocator_OsaQSmService', true],
            'App\\Controller\\AgentCollecteController::index' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\ContributeurController::addContributeur' => ['privates', '.service_locator.8rg3r7Z', 'get_ServiceLocator_8rg3r7ZService', true],
            'App\\Controller\\ContributeurController::deleteAgent' => ['privates', '.service_locator.8rg3r7Z', 'get_ServiceLocator_8rg3r7ZService', true],
            'App\\Controller\\ContributeurController::index' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\ControllerRessources\\ExcedentController::addExcedent' => ['privates', '.service_locator.q0IMGTL', 'get_ServiceLocator_Q0IMGTLService', true],
            'App\\Controller\\ControllerRessources\\ExcedentController::deleteRistourne' => ['privates', '.service_locator.q0IMGTL', 'get_ServiceLocator_Q0IMGTLService', true],
            'App\\Controller\\ControllerRessources\\ExcedentController::index' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\ControllerRessources\\RecetteNonFiscaleController::addRecetteNonFiscale' => ['privates', '.service_locator.wbGejII', 'get_ServiceLocator_WbGejIIService', true],
            'App\\Controller\\ControllerRessources\\RecetteNonFiscaleController::deleteRecetteNon' => ['privates', '.service_locator.wbGejII', 'get_ServiceLocator_WbGejIIService', true],
            'App\\Controller\\ControllerRessources\\RecetteNonFiscaleController::index' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\ControllerRessources\\RistourneController::deleteRistourne' => ['privates', '.service_locator.N9dJ0uI', 'get_ServiceLocator_N9dJ0uIService', true],
            'App\\Controller\\ControllerRessources\\RistourneController::editRistourne' => ['privates', '.service_locator.N9dJ0uI', 'get_ServiceLocator_N9dJ0uIService', true],
            'App\\Controller\\ControllerRessources\\RistourneController::index' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\ImpotAssiValeurController::addImpotAssiValeur' => ['privates', '.service_locator.t6i3vFk', 'get_ServiceLocator_T6i3vFkService', true],
            'App\\Controller\\ImpotAssiValeurController::index' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\ImpotAssiValeurController::show' => ['privates', '.service_locator.BF2iGx7', 'get_ServiceLocator_BF2iGx7Service', true],
            'App\\Controller\\ImpotCFNPBController::index' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\ImpotCFNPBController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ImpotCFPBController::calculerImpot' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ImpotCFPBController::index' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\ImpotTOMController::index' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\ImpotTOMController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ProprieteController::addType' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\ProprieteController::index' => ['privates', '.service_locator.cg5DUby', 'get_ServiceLocator_Cg5DUbyService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.KSu8z3Z', 'get_ServiceLocator_KSu8z3ZService', true],
            'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.pXhSQsU', 'get_ServiceLocator_PXhSQsUService', true],
            'App\\Controller\\ResetPasswordController::reset' => ['privates', '.service_locator.kdKsWx5', 'get_ServiceLocator_KdKsWx5Service', true],
            'App\\Controller\\ResourceController::index' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\ResourceController::show' => ['privates', '.service_locator.vxqkg42', 'get_ServiceLocator_Vxqkg42Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\SiteCollecteController::addSite' => ['privates', '.service_locator.PGTRxNN', 'get_ServiceLocator_PGTRxNNService', true],
            'App\\Controller\\SiteCollecteController::deleteSite' => ['privates', '.service_locator.PGTRxNN', 'get_ServiceLocator_PGTRxNNService', true],
            'App\\Controller\\SiteCollecteController::index' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\TaxController::calculerTaxes' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\TaxController::index' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\TypeImpotController::addType' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\TypeImpotController::index' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\TypeImpotsController::index' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\AgentCollecteController:addAgent' => ['privates', '.service_locator.osaQ_sm', 'get_ServiceLocator_OsaQSmService', true],
            'App\\Controller\\AgentCollecteController:deleteAgent' => ['privates', '.service_locator.osaQ_sm', 'get_ServiceLocator_OsaQSmService', true],
            'App\\Controller\\AgentCollecteController:index' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\ContributeurController:addContributeur' => ['privates', '.service_locator.8rg3r7Z', 'get_ServiceLocator_8rg3r7ZService', true],
            'App\\Controller\\ContributeurController:deleteAgent' => ['privates', '.service_locator.8rg3r7Z', 'get_ServiceLocator_8rg3r7ZService', true],
            'App\\Controller\\ContributeurController:index' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\ControllerRessources\\ExcedentController:addExcedent' => ['privates', '.service_locator.q0IMGTL', 'get_ServiceLocator_Q0IMGTLService', true],
            'App\\Controller\\ControllerRessources\\ExcedentController:deleteRistourne' => ['privates', '.service_locator.q0IMGTL', 'get_ServiceLocator_Q0IMGTLService', true],
            'App\\Controller\\ControllerRessources\\ExcedentController:index' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\ControllerRessources\\RecetteNonFiscaleController:addRecetteNonFiscale' => ['privates', '.service_locator.wbGejII', 'get_ServiceLocator_WbGejIIService', true],
            'App\\Controller\\ControllerRessources\\RecetteNonFiscaleController:deleteRecetteNon' => ['privates', '.service_locator.wbGejII', 'get_ServiceLocator_WbGejIIService', true],
            'App\\Controller\\ControllerRessources\\RecetteNonFiscaleController:index' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\ControllerRessources\\RistourneController:deleteRistourne' => ['privates', '.service_locator.N9dJ0uI', 'get_ServiceLocator_N9dJ0uIService', true],
            'App\\Controller\\ControllerRessources\\RistourneController:editRistourne' => ['privates', '.service_locator.N9dJ0uI', 'get_ServiceLocator_N9dJ0uIService', true],
            'App\\Controller\\ControllerRessources\\RistourneController:index' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\ImpotAssiValeurController:addImpotAssiValeur' => ['privates', '.service_locator.t6i3vFk', 'get_ServiceLocator_T6i3vFkService', true],
            'App\\Controller\\ImpotAssiValeurController:index' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\ImpotAssiValeurController:show' => ['privates', '.service_locator.BF2iGx7', 'get_ServiceLocator_BF2iGx7Service', true],
            'App\\Controller\\ImpotCFNPBController:index' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\ImpotCFNPBController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ImpotCFPBController:calculerImpot' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ImpotCFPBController:index' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\ImpotTOMController:index' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\ImpotTOMController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ProprieteController:addType' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\ProprieteController:index' => ['privates', '.service_locator.cg5DUby', 'get_ServiceLocator_Cg5DUbyService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.KSu8z3Z', 'get_ServiceLocator_KSu8z3ZService', true],
            'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.pXhSQsU', 'get_ServiceLocator_PXhSQsUService', true],
            'App\\Controller\\ResetPasswordController:reset' => ['privates', '.service_locator.kdKsWx5', 'get_ServiceLocator_KdKsWx5Service', true],
            'App\\Controller\\ResourceController:index' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\ResourceController:show' => ['privates', '.service_locator.vxqkg42', 'get_ServiceLocator_Vxqkg42Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\SiteCollecteController:addSite' => ['privates', '.service_locator.PGTRxNN', 'get_ServiceLocator_PGTRxNNService', true],
            'App\\Controller\\SiteCollecteController:deleteSite' => ['privates', '.service_locator.PGTRxNN', 'get_ServiceLocator_PGTRxNNService', true],
            'App\\Controller\\SiteCollecteController:index' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\TaxController:calculerTaxes' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\TaxController:index' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\TypeImpotController:addType' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\TypeImpotController:index' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'App\\Controller\\TypeImpotsController:index' => ['privates', '.service_locator.D1oHzKR', 'get_ServiceLocator_D1oHzKRService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\AgentCollecteController::addAgent' => '?',
            'App\\Controller\\AgentCollecteController::deleteAgent' => '?',
            'App\\Controller\\AgentCollecteController::index' => '?',
            'App\\Controller\\ContributeurController::addContributeur' => '?',
            'App\\Controller\\ContributeurController::deleteAgent' => '?',
            'App\\Controller\\ContributeurController::index' => '?',
            'App\\Controller\\ControllerRessources\\ExcedentController::addExcedent' => '?',
            'App\\Controller\\ControllerRessources\\ExcedentController::deleteRistourne' => '?',
            'App\\Controller\\ControllerRessources\\ExcedentController::index' => '?',
            'App\\Controller\\ControllerRessources\\RecetteNonFiscaleController::addRecetteNonFiscale' => '?',
            'App\\Controller\\ControllerRessources\\RecetteNonFiscaleController::deleteRecetteNon' => '?',
            'App\\Controller\\ControllerRessources\\RecetteNonFiscaleController::index' => '?',
            'App\\Controller\\ControllerRessources\\RistourneController::deleteRistourne' => '?',
            'App\\Controller\\ControllerRessources\\RistourneController::editRistourne' => '?',
            'App\\Controller\\ControllerRessources\\RistourneController::index' => '?',
            'App\\Controller\\ImpotAssiValeurController::addImpotAssiValeur' => '?',
            'App\\Controller\\ImpotAssiValeurController::index' => '?',
            'App\\Controller\\ImpotAssiValeurController::show' => '?',
            'App\\Controller\\ImpotCFNPBController::index' => '?',
            'App\\Controller\\ImpotCFNPBController::new' => '?',
            'App\\Controller\\ImpotCFPBController::calculerImpot' => '?',
            'App\\Controller\\ImpotCFPBController::index' => '?',
            'App\\Controller\\ImpotTOMController::index' => '?',
            'App\\Controller\\ImpotTOMController::new' => '?',
            'App\\Controller\\ProprieteController::addType' => '?',
            'App\\Controller\\ProprieteController::index' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\ResetPasswordController::request' => '?',
            'App\\Controller\\ResetPasswordController::reset' => '?',
            'App\\Controller\\ResourceController::index' => '?',
            'App\\Controller\\ResourceController::show' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SiteCollecteController::addSite' => '?',
            'App\\Controller\\SiteCollecteController::deleteSite' => '?',
            'App\\Controller\\SiteCollecteController::index' => '?',
            'App\\Controller\\TaxController::calculerTaxes' => '?',
            'App\\Controller\\TaxController::index' => '?',
            'App\\Controller\\TypeImpotController::addType' => '?',
            'App\\Controller\\TypeImpotController::index' => '?',
            'App\\Controller\\TypeImpotsController::index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AgentCollecteController:addAgent' => '?',
            'App\\Controller\\AgentCollecteController:deleteAgent' => '?',
            'App\\Controller\\AgentCollecteController:index' => '?',
            'App\\Controller\\ContributeurController:addContributeur' => '?',
            'App\\Controller\\ContributeurController:deleteAgent' => '?',
            'App\\Controller\\ContributeurController:index' => '?',
            'App\\Controller\\ControllerRessources\\ExcedentController:addExcedent' => '?',
            'App\\Controller\\ControllerRessources\\ExcedentController:deleteRistourne' => '?',
            'App\\Controller\\ControllerRessources\\ExcedentController:index' => '?',
            'App\\Controller\\ControllerRessources\\RecetteNonFiscaleController:addRecetteNonFiscale' => '?',
            'App\\Controller\\ControllerRessources\\RecetteNonFiscaleController:deleteRecetteNon' => '?',
            'App\\Controller\\ControllerRessources\\RecetteNonFiscaleController:index' => '?',
            'App\\Controller\\ControllerRessources\\RistourneController:deleteRistourne' => '?',
            'App\\Controller\\ControllerRessources\\RistourneController:editRistourne' => '?',
            'App\\Controller\\ControllerRessources\\RistourneController:index' => '?',
            'App\\Controller\\ImpotAssiValeurController:addImpotAssiValeur' => '?',
            'App\\Controller\\ImpotAssiValeurController:index' => '?',
            'App\\Controller\\ImpotAssiValeurController:show' => '?',
            'App\\Controller\\ImpotCFNPBController:index' => '?',
            'App\\Controller\\ImpotCFNPBController:new' => '?',
            'App\\Controller\\ImpotCFPBController:calculerImpot' => '?',
            'App\\Controller\\ImpotCFPBController:index' => '?',
            'App\\Controller\\ImpotTOMController:index' => '?',
            'App\\Controller\\ImpotTOMController:new' => '?',
            'App\\Controller\\ProprieteController:addType' => '?',
            'App\\Controller\\ProprieteController:index' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\ResetPasswordController:request' => '?',
            'App\\Controller\\ResetPasswordController:reset' => '?',
            'App\\Controller\\ResourceController:index' => '?',
            'App\\Controller\\ResourceController:show' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SiteCollecteController:addSite' => '?',
            'App\\Controller\\SiteCollecteController:deleteSite' => '?',
            'App\\Controller\\SiteCollecteController:index' => '?',
            'App\\Controller\\TaxController:calculerTaxes' => '?',
            'App\\Controller\\TaxController:index' => '?',
            'App\\Controller\\TypeImpotController:addType' => '?',
            'App\\Controller\\TypeImpotController:index' => '?',
            'App\\Controller\\TypeImpotsController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]));
    }
}
