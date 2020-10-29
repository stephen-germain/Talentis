<?php

namespace ContainerSLq2w2L;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSoftSkillsRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\SoftSkillsRepository' shared autowired service.
     *
     * @return \App\Repository\SoftSkillsRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/SoftSkillsRepository.php';

        return $container->privates['App\\Repository\\SoftSkillsRepository'] = new \App\Repository\SoftSkillsRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
