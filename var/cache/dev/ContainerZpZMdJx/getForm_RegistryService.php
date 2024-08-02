<?php

namespace ContainerZpZMdJx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_RegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRegistryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRegistry.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'DependencyInjectionExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ResolvedFormTypeFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'ResolvedTypeFactoryDataCollectorProxy.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ResolvedFormTypeFactory.php';

        return $container->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Form\\AgentCollecteType' => ['privates', 'App\\Form\\AgentCollecteType', 'getAgentCollecteTypeService', true],
            'App\\Form\\CabinetType' => ['privates', 'App\\Form\\CabinetType', 'getCabinetTypeService', true],
            'App\\Form\\ChangePasswordFormType' => ['privates', 'App\\Form\\ChangePasswordFormType', 'getChangePasswordFormTypeService', true],
            'App\\Form\\ContributeursType' => ['privates', 'App\\Form\\ContributeursType', 'getContributeursTypeService', true],
            'App\\Form\\ExcedentsType' => ['privates', 'App\\Form\\ExcedentsType', 'getExcedentsTypeService', true],
            'App\\Form\\ImpotAssiValeurType' => ['privates', 'App\\Form\\ImpotAssiValeurType', 'getImpotAssiValeurTypeService', true],
            'App\\Form\\ImpotCFNPBType' => ['privates', 'App\\Form\\ImpotCFNPBType', 'getImpotCFNPBTypeService', true],
            'App\\Form\\ImpotCFPBType' => ['privates', 'App\\Form\\ImpotCFPBType', 'getImpotCFPBTypeService', true],
            'App\\Form\\ImpotMiniFiscalType' => ['privates', 'App\\Form\\ImpotMiniFiscalType', 'getImpotMiniFiscalTypeService', true],
            'App\\Form\\ImpotTOMType' => ['privates', 'App\\Form\\ImpotTOMType', 'getImpotTOMTypeService', true],
            'App\\Form\\ImpotType' => ['privates', 'App\\Form\\ImpotType', 'getImpotTypeService', true],
            'App\\Form\\PatenteType' => ['privates', 'App\\Form\\PatenteType', 'getPatenteTypeService', true],
            'App\\Form\\PersonneType' => ['privates', 'App\\Form\\PersonneType', 'getPersonneTypeService', true],
            'App\\Form\\ProprieteType' => ['privates', 'App\\Form\\ProprieteType', 'getProprieteTypeService', true],
            'App\\Form\\RecetteType' => ['privates', 'App\\Form\\RecetteType', 'getRecetteTypeService', true],
            'App\\Form\\RegistrationFormType' => ['privates', 'App\\Form\\RegistrationFormType', 'getRegistrationFormTypeService', true],
            'App\\Form\\ResetPasswordRequestFormType' => ['privates', 'App\\Form\\ResetPasswordRequestFormType', 'getResetPasswordRequestFormTypeService', true],
            'App\\Form\\RistournesType' => ['privates', 'App\\Form\\RistournesType', 'getRistournesTypeService', true],
            'App\\Form\\SiteCollecteType' => ['privates', 'App\\Form\\SiteCollecteType', 'getSiteCollecteTypeService', true],
            'App\\Form\\TaxDetailType' => ['privates', 'App\\Form\\TaxDetailType', 'getTaxDetailTypeService', true],
            'App\\Form\\TaxIndirecteType' => ['privates', 'App\\Form\\TaxIndirecteType', 'getTaxIndirecteTypeService', true],
            'App\\Form\\TaxType' => ['privates', 'App\\Form\\TaxType', 'getTaxTypeService', true],
            'App\\Form\\TaxeRuraleType' => ['privates', 'App\\Form\\TaxeRuraleType', 'getTaxeRuraleTypeService', true],
            'App\\Form\\TypeImpotType' => ['privates', 'App\\Form\\TypeImpotType', 'getTypeImpotTypeService', true],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => ['privates', 'form.type.color', 'getForm_Type_ColorService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['privates', 'form.type.file', 'getForm_Type_FileService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', true],
        ], [
            'App\\Form\\AgentCollecteType' => '?',
            'App\\Form\\CabinetType' => '?',
            'App\\Form\\ChangePasswordFormType' => '?',
            'App\\Form\\ContributeursType' => '?',
            'App\\Form\\ExcedentsType' => '?',
            'App\\Form\\ImpotAssiValeurType' => '?',
            'App\\Form\\ImpotCFNPBType' => '?',
            'App\\Form\\ImpotCFPBType' => '?',
            'App\\Form\\ImpotMiniFiscalType' => '?',
            'App\\Form\\ImpotTOMType' => '?',
            'App\\Form\\ImpotType' => '?',
            'App\\Form\\PatenteType' => '?',
            'App\\Form\\PersonneType' => '?',
            'App\\Form\\ProprieteType' => '?',
            'App\\Form\\RecetteType' => '?',
            'App\\Form\\RegistrationFormType' => '?',
            'App\\Form\\ResetPasswordRequestFormType' => '?',
            'App\\Form\\RistournesType' => '?',
            'App\\Form\\SiteCollecteType' => '?',
            'App\\Form\\TaxDetailType' => '?',
            'App\\Form\\TaxIndirecteType' => '?',
            'App\\Form\\TaxType' => '?',
            'App\\Form\\TaxeRuraleType' => '?',
            'App\\Form\\TypeImpotType' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.form.transformation_failure_handling'] ?? $container->load('getForm_TypeExtension_Form_TransformationFailureHandlingService'));
            yield 1 => ($container->privates['form.type_extension.form.http_foundation'] ?? $container->load('getForm_TypeExtension_Form_HttpFoundationService'));
            yield 2 => ($container->privates['form.type_extension.form.validator'] ?? $container->load('getForm_TypeExtension_Form_ValidatorService'));
            yield 3 => ($container->privates['form.type_extension.upload.validator'] ?? $container->load('getForm_TypeExtension_Upload_ValidatorService'));
            yield 4 => ($container->privates['form.type_extension.csrf'] ?? $container->load('getForm_TypeExtension_CsrfService'));
            yield 5 => ($container->privates['form.type_extension.form.data_collector'] ?? $container->load('getForm_TypeExtension_Form_DataCollectorService'));
        }, 6), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.repeated.validator'] ?? ($container->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.submit.validator'] ?? ($container->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
        }, 1)], new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_guesser.validator'] ?? $container->load('getForm_TypeGuesser_ValidatorService'));
            yield 1 => ($container->privates['form.type_guesser.doctrine'] ?? $container->load('getForm_TypeGuesser_DoctrineService'));
        }, 2))], new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ($container->privates['data_collector.form'] ?? $container->getDataCollector_FormService())));
    }
}