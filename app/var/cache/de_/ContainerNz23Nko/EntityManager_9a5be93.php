<?php

namespace ContainerNz23Nko;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfe20f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2d099 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb4418 = [
        
    ];

    public function getConnection()
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'getConnection', array(), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'getMetadataFactory', array(), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'getExpressionBuilder', array(), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'beginTransaction', array(), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'getCache', array(), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'transactional', array('func' => $func), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'commit', array(), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->commit();
    }

    public function rollback()
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'rollback', array(), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'getClassMetadata', array('className' => $className), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'createQuery', array('dql' => $dql), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'createNamedQuery', array('name' => $name), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'createQueryBuilder', array(), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'flush', array('entity' => $entity), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'clear', array('entityName' => $entityName), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->clear($entityName);
    }

    public function close()
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'close', array(), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->close();
    }

    public function persist($entity)
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'persist', array('entity' => $entity), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'remove', array('entity' => $entity), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'refresh', array('entity' => $entity), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'detach', array('entity' => $entity), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'merge', array('entity' => $entity), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'contains', array('entity' => $entity), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'getEventManager', array(), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'getConfiguration', array(), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'isOpen', array(), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'getUnitOfWork', array(), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'getProxyFactory', array(), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'initializeObject', array('obj' => $obj), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'getFilters', array(), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'isFiltersStateClean', array(), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'hasFilters', array(), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return $this->valueHolderfe20f->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer2d099 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderfe20f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfe20f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfe20f->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, '__get', ['name' => $name], $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        if (isset(self::$publicPropertiesb4418[$name])) {
            return $this->valueHolderfe20f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfe20f;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfe20f;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfe20f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfe20f;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, '__isset', array('name' => $name), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfe20f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfe20f;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, '__unset', array('name' => $name), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfe20f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfe20f;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, '__clone', array(), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        $this->valueHolderfe20f = clone $this->valueHolderfe20f;
    }

    public function __sleep()
    {
        $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, '__sleep', array(), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;

        return array('valueHolderfe20f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2d099 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2d099;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2d099 && ($this->initializer2d099->__invoke($valueHolderfe20f, $this, 'initializeProxy', array(), $this->initializer2d099) || 1) && $this->valueHolderfe20f = $valueHolderfe20f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfe20f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfe20f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
