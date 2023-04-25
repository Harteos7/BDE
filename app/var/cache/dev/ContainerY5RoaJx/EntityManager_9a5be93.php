<?php

namespace ContainerY5RoaJx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderecf03 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer09152 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb9020 = [
        
    ];

    public function getConnection()
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'getConnection', array(), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'getMetadataFactory', array(), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'getExpressionBuilder', array(), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'beginTransaction', array(), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'getCache', array(), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->getCache();
    }

    public function transactional($func)
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'transactional', array('func' => $func), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'wrapInTransaction', array('func' => $func), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'commit', array(), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->commit();
    }

    public function rollback()
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'rollback', array(), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'getClassMetadata', array('className' => $className), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'createQuery', array('dql' => $dql), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'createNamedQuery', array('name' => $name), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'createQueryBuilder', array(), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'flush', array('entity' => $entity), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'clear', array('entityName' => $entityName), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->clear($entityName);
    }

    public function close()
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'close', array(), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->close();
    }

    public function persist($entity)
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'persist', array('entity' => $entity), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'remove', array('entity' => $entity), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'refresh', array('entity' => $entity), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'detach', array('entity' => $entity), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'merge', array('entity' => $entity), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'getRepository', array('entityName' => $entityName), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'contains', array('entity' => $entity), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'getEventManager', array(), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'getConfiguration', array(), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'isOpen', array(), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'getUnitOfWork', array(), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'getProxyFactory', array(), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'initializeObject', array('obj' => $obj), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'getFilters', array(), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'isFiltersStateClean', array(), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'hasFilters', array(), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return $this->valueHolderecf03->hasFilters();
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

        $instance->initializer09152 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderecf03) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderecf03 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderecf03->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, '__get', ['name' => $name], $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        if (isset(self::$publicPropertiesb9020[$name])) {
            return $this->valueHolderecf03->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderecf03;

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

        $targetObject = $this->valueHolderecf03;
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
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderecf03;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderecf03;
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
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, '__isset', array('name' => $name), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderecf03;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderecf03;
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
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, '__unset', array('name' => $name), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderecf03;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderecf03;
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
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, '__clone', array(), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        $this->valueHolderecf03 = clone $this->valueHolderecf03;
    }

    public function __sleep()
    {
        $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, '__sleep', array(), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;

        return array('valueHolderecf03');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer09152 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer09152;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer09152 && ($this->initializer09152->__invoke($valueHolderecf03, $this, 'initializeProxy', array(), $this->initializer09152) || 1) && $this->valueHolderecf03 = $valueHolderecf03;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderecf03;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderecf03;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
