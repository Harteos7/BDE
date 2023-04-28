<?php

namespace ContainerQCWYrCa;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder75af8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer48bae = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf4d5e = [
        
    ];

    public function getConnection()
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'getConnection', array(), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'getMetadataFactory', array(), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'getExpressionBuilder', array(), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'beginTransaction', array(), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'getCache', array(), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->getCache();
    }

    public function transactional($func)
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'transactional', array('func' => $func), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'wrapInTransaction', array('func' => $func), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'commit', array(), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->commit();
    }

    public function rollback()
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'rollback', array(), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'getClassMetadata', array('className' => $className), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'createQuery', array('dql' => $dql), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'createNamedQuery', array('name' => $name), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'createQueryBuilder', array(), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'flush', array('entity' => $entity), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'clear', array('entityName' => $entityName), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->clear($entityName);
    }

    public function close()
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'close', array(), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->close();
    }

    public function persist($entity)
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'persist', array('entity' => $entity), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'remove', array('entity' => $entity), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'detach', array('entity' => $entity), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'merge', array('entity' => $entity), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'getRepository', array('entityName' => $entityName), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'contains', array('entity' => $entity), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'getEventManager', array(), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'getConfiguration', array(), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'isOpen', array(), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'getUnitOfWork', array(), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'getProxyFactory', array(), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'initializeObject', array('obj' => $obj), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'getFilters', array(), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'isFiltersStateClean', array(), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'hasFilters', array(), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return $this->valueHolder75af8->hasFilters();
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

        $instance->initializer48bae = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder75af8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder75af8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder75af8->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, '__get', ['name' => $name], $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        if (isset(self::$publicPropertiesf4d5e[$name])) {
            return $this->valueHolder75af8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder75af8;

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

        $targetObject = $this->valueHolder75af8;
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
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder75af8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder75af8;
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
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, '__isset', array('name' => $name), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder75af8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder75af8;
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
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, '__unset', array('name' => $name), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder75af8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder75af8;
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
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, '__clone', array(), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        $this->valueHolder75af8 = clone $this->valueHolder75af8;
    }

    public function __sleep()
    {
        $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, '__sleep', array(), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;

        return array('valueHolder75af8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer48bae = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer48bae;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer48bae && ($this->initializer48bae->__invoke($valueHolder75af8, $this, 'initializeProxy', array(), $this->initializer48bae) || 1) && $this->valueHolder75af8 = $valueHolder75af8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder75af8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder75af8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
