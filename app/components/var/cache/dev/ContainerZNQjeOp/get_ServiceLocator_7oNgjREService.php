<?php

namespace ContainerZNQjeOp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7oNgjREService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7oNgjRE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7oNgjRE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator.st3ASTR', 'get_ServiceLocator_St3ASTRService', true],
            'App\\Controller\\Admin\\StageController::autocomplete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\StageController::batchDelete' => ['privates', '.service_locator.esmk6IF', 'get_ServiceLocator_Esmk6IFService', true],
            'App\\Controller\\Admin\\StageController::configureActions' => ['privates', '.service_locator.R8Qy2_.', 'get_ServiceLocator_R8Qy2_Service', true],
            'App\\Controller\\Admin\\StageController::configureAssets' => ['privates', '.service_locator.XdMPwIJ', 'get_ServiceLocator_XdMPwIJService', true],
            'App\\Controller\\Admin\\StageController::configureCrud' => ['privates', '.service_locator.XpfeRo6', 'get_ServiceLocator_XpfeRo6Service', true],
            'App\\Controller\\Admin\\StageController::configureFilters' => ['privates', '.service_locator.OGjUKCt', 'get_ServiceLocator_OGjUKCtService', true],
            'App\\Controller\\Admin\\StageController::configureResponseParameters' => ['privates', '.service_locator.W.c5h2_', 'get_ServiceLocator_W_C5h2Service', true],
            'App\\Controller\\Admin\\StageController::createEditForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\StageController::createEditFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\StageController::createIndexQueryBuilder' => ['privates', '.service_locator.ENGuM7_', 'get_ServiceLocator_ENGuM7Service', true],
            'App\\Controller\\Admin\\StageController::createNewForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\StageController::createNewFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\StageController::delete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\StageController::deleteEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\StageController::detail' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\StageController::edit' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\StageController::index' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\StageController::new' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\StageController::persistEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\StageController::renderFilters' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\StageController::updateEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\UserController::autocomplete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\UserController::batchDelete' => ['privates', '.service_locator.esmk6IF', 'get_ServiceLocator_Esmk6IFService', true],
            'App\\Controller\\Admin\\UserController::configureActions' => ['privates', '.service_locator.R8Qy2_.', 'get_ServiceLocator_R8Qy2_Service', true],
            'App\\Controller\\Admin\\UserController::configureAssets' => ['privates', '.service_locator.XdMPwIJ', 'get_ServiceLocator_XdMPwIJService', true],
            'App\\Controller\\Admin\\UserController::configureCrud' => ['privates', '.service_locator.XpfeRo6', 'get_ServiceLocator_XpfeRo6Service', true],
            'App\\Controller\\Admin\\UserController::configureFilters' => ['privates', '.service_locator.OGjUKCt', 'get_ServiceLocator_OGjUKCtService', true],
            'App\\Controller\\Admin\\UserController::configureResponseParameters' => ['privates', '.service_locator.W.c5h2_', 'get_ServiceLocator_W_C5h2Service', true],
            'App\\Controller\\Admin\\UserController::createEditForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\UserController::createEditFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\UserController::createIndexQueryBuilder' => ['privates', '.service_locator.ENGuM7_', 'get_ServiceLocator_ENGuM7Service', true],
            'App\\Controller\\Admin\\UserController::createNewForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\UserController::createNewFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\UserController::delete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\UserController::deleteEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\UserController::detail' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\UserController::edit' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\UserController::index' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\UserController::new' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\UserController::persistEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\UserController::renderFilters' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\UserController::updateEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\BaseCController::index4' => ['privates', '.service_locator.lwhU4dN', 'get_ServiceLocator_LwhU4dNService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.spC.Z_T', 'get_ServiceLocator_SpC_ZTService', true],
            'App\\Controller\\RegistrationController::verifyUserEmail' => ['privates', '.service_locator.BxQTQP3', 'get_ServiceLocator_BxQTQP3Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator.st3ASTR', 'get_ServiceLocator_St3ASTRService', true],
            'App\\Controller\\Admin\\StageController:autocomplete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\StageController:batchDelete' => ['privates', '.service_locator.esmk6IF', 'get_ServiceLocator_Esmk6IFService', true],
            'App\\Controller\\Admin\\StageController:configureActions' => ['privates', '.service_locator.R8Qy2_.', 'get_ServiceLocator_R8Qy2_Service', true],
            'App\\Controller\\Admin\\StageController:configureAssets' => ['privates', '.service_locator.XdMPwIJ', 'get_ServiceLocator_XdMPwIJService', true],
            'App\\Controller\\Admin\\StageController:configureCrud' => ['privates', '.service_locator.XpfeRo6', 'get_ServiceLocator_XpfeRo6Service', true],
            'App\\Controller\\Admin\\StageController:configureFilters' => ['privates', '.service_locator.OGjUKCt', 'get_ServiceLocator_OGjUKCtService', true],
            'App\\Controller\\Admin\\StageController:configureResponseParameters' => ['privates', '.service_locator.W.c5h2_', 'get_ServiceLocator_W_C5h2Service', true],
            'App\\Controller\\Admin\\StageController:createEditForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\StageController:createEditFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\StageController:createIndexQueryBuilder' => ['privates', '.service_locator.ENGuM7_', 'get_ServiceLocator_ENGuM7Service', true],
            'App\\Controller\\Admin\\StageController:createNewForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\StageController:createNewFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\StageController:delete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\StageController:deleteEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\StageController:detail' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\StageController:edit' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\StageController:index' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\StageController:new' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\StageController:persistEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\StageController:renderFilters' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\StageController:updateEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\UserController:autocomplete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\UserController:batchDelete' => ['privates', '.service_locator.esmk6IF', 'get_ServiceLocator_Esmk6IFService', true],
            'App\\Controller\\Admin\\UserController:configureActions' => ['privates', '.service_locator.R8Qy2_.', 'get_ServiceLocator_R8Qy2_Service', true],
            'App\\Controller\\Admin\\UserController:configureAssets' => ['privates', '.service_locator.XdMPwIJ', 'get_ServiceLocator_XdMPwIJService', true],
            'App\\Controller\\Admin\\UserController:configureCrud' => ['privates', '.service_locator.XpfeRo6', 'get_ServiceLocator_XpfeRo6Service', true],
            'App\\Controller\\Admin\\UserController:configureFilters' => ['privates', '.service_locator.OGjUKCt', 'get_ServiceLocator_OGjUKCtService', true],
            'App\\Controller\\Admin\\UserController:configureResponseParameters' => ['privates', '.service_locator.W.c5h2_', 'get_ServiceLocator_W_C5h2Service', true],
            'App\\Controller\\Admin\\UserController:createEditForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\UserController:createEditFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\UserController:createIndexQueryBuilder' => ['privates', '.service_locator.ENGuM7_', 'get_ServiceLocator_ENGuM7Service', true],
            'App\\Controller\\Admin\\UserController:createNewForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\UserController:createNewFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\UserController:delete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\UserController:deleteEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\UserController:detail' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\UserController:edit' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\UserController:index' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\UserController:new' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\UserController:persistEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\UserController:renderFilters' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\UserController:updateEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\BaseCController:index4' => ['privates', '.service_locator.lwhU4dN', 'get_ServiceLocator_LwhU4dNService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.spC.Z_T', 'get_ServiceLocator_SpC_ZTService', true],
            'App\\Controller\\RegistrationController:verifyUserEmail' => ['privates', '.service_locator.BxQTQP3', 'get_ServiceLocator_BxQTQP3Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Controller\\Admin\\StageController::autocomplete' => '?',
            'App\\Controller\\Admin\\StageController::batchDelete' => '?',
            'App\\Controller\\Admin\\StageController::configureActions' => '?',
            'App\\Controller\\Admin\\StageController::configureAssets' => '?',
            'App\\Controller\\Admin\\StageController::configureCrud' => '?',
            'App\\Controller\\Admin\\StageController::configureFilters' => '?',
            'App\\Controller\\Admin\\StageController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\StageController::createEditForm' => '?',
            'App\\Controller\\Admin\\StageController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\StageController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\StageController::createNewForm' => '?',
            'App\\Controller\\Admin\\StageController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\StageController::delete' => '?',
            'App\\Controller\\Admin\\StageController::deleteEntity' => '?',
            'App\\Controller\\Admin\\StageController::detail' => '?',
            'App\\Controller\\Admin\\StageController::edit' => '?',
            'App\\Controller\\Admin\\StageController::index' => '?',
            'App\\Controller\\Admin\\StageController::new' => '?',
            'App\\Controller\\Admin\\StageController::persistEntity' => '?',
            'App\\Controller\\Admin\\StageController::renderFilters' => '?',
            'App\\Controller\\Admin\\StageController::updateEntity' => '?',
            'App\\Controller\\Admin\\UserController::autocomplete' => '?',
            'App\\Controller\\Admin\\UserController::batchDelete' => '?',
            'App\\Controller\\Admin\\UserController::configureActions' => '?',
            'App\\Controller\\Admin\\UserController::configureAssets' => '?',
            'App\\Controller\\Admin\\UserController::configureCrud' => '?',
            'App\\Controller\\Admin\\UserController::configureFilters' => '?',
            'App\\Controller\\Admin\\UserController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\UserController::createEditForm' => '?',
            'App\\Controller\\Admin\\UserController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\UserController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\UserController::createNewForm' => '?',
            'App\\Controller\\Admin\\UserController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\UserController::delete' => '?',
            'App\\Controller\\Admin\\UserController::deleteEntity' => '?',
            'App\\Controller\\Admin\\UserController::detail' => '?',
            'App\\Controller\\Admin\\UserController::edit' => '?',
            'App\\Controller\\Admin\\UserController::index' => '?',
            'App\\Controller\\Admin\\UserController::new' => '?',
            'App\\Controller\\Admin\\UserController::persistEntity' => '?',
            'App\\Controller\\Admin\\UserController::renderFilters' => '?',
            'App\\Controller\\Admin\\UserController::updateEntity' => '?',
            'App\\Controller\\BaseCController::index4' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RegistrationController::verifyUserEmail' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'App\\Controller\\Admin\\StageController:autocomplete' => '?',
            'App\\Controller\\Admin\\StageController:batchDelete' => '?',
            'App\\Controller\\Admin\\StageController:configureActions' => '?',
            'App\\Controller\\Admin\\StageController:configureAssets' => '?',
            'App\\Controller\\Admin\\StageController:configureCrud' => '?',
            'App\\Controller\\Admin\\StageController:configureFilters' => '?',
            'App\\Controller\\Admin\\StageController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\StageController:createEditForm' => '?',
            'App\\Controller\\Admin\\StageController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\StageController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\StageController:createNewForm' => '?',
            'App\\Controller\\Admin\\StageController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\StageController:delete' => '?',
            'App\\Controller\\Admin\\StageController:deleteEntity' => '?',
            'App\\Controller\\Admin\\StageController:detail' => '?',
            'App\\Controller\\Admin\\StageController:edit' => '?',
            'App\\Controller\\Admin\\StageController:index' => '?',
            'App\\Controller\\Admin\\StageController:new' => '?',
            'App\\Controller\\Admin\\StageController:persistEntity' => '?',
            'App\\Controller\\Admin\\StageController:renderFilters' => '?',
            'App\\Controller\\Admin\\StageController:updateEntity' => '?',
            'App\\Controller\\Admin\\UserController:autocomplete' => '?',
            'App\\Controller\\Admin\\UserController:batchDelete' => '?',
            'App\\Controller\\Admin\\UserController:configureActions' => '?',
            'App\\Controller\\Admin\\UserController:configureAssets' => '?',
            'App\\Controller\\Admin\\UserController:configureCrud' => '?',
            'App\\Controller\\Admin\\UserController:configureFilters' => '?',
            'App\\Controller\\Admin\\UserController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\UserController:createEditForm' => '?',
            'App\\Controller\\Admin\\UserController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\UserController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\UserController:createNewForm' => '?',
            'App\\Controller\\Admin\\UserController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\UserController:delete' => '?',
            'App\\Controller\\Admin\\UserController:deleteEntity' => '?',
            'App\\Controller\\Admin\\UserController:detail' => '?',
            'App\\Controller\\Admin\\UserController:edit' => '?',
            'App\\Controller\\Admin\\UserController:index' => '?',
            'App\\Controller\\Admin\\UserController:new' => '?',
            'App\\Controller\\Admin\\UserController:persistEntity' => '?',
            'App\\Controller\\Admin\\UserController:renderFilters' => '?',
            'App\\Controller\\Admin\\UserController:updateEntity' => '?',
            'App\\Controller\\BaseCController:index4' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RegistrationController:verifyUserEmail' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
