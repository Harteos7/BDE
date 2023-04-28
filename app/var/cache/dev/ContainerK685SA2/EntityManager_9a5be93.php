<?php

namespace ContainerK685SA2;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldereb492 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0779b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties24aa4 = [
        
    ];

    public function getConnection()
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'getConnection', array(), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'getMetadataFactory', array(), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'getExpressionBuilder', array(), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'beginTransaction', array(), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'getCache', array(), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'transactional', array('func' => $func), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'commit', array(), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->commit();
    }

    public function rollback()
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'rollback', array(), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'getClassMetadata', array('className' => $className), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'createQuery', array('dql' => $dql), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'createNamedQuery', array('name' => $name), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'createQueryBuilder', array(), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'flush', array('entity' => $entity), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'clear', array('entityName' => $entityName), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->clear($entityName);
    }

    public function close()
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'close', array(), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->close();
    }

    public function persist($entity)
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'persist', array('entity' => $entity), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'remove', array('entity' => $entity), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'detach', array('entity' => $entity), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'merge', array('entity' => $entity), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'contains', array('entity' => $entity), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'getEventManager', array(), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'getConfiguration', array(), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'isOpen', array(), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'getUnitOfWork', array(), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'getProxyFactory', array(), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'initializeObject', array('obj' => $obj), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'getFilters', array(), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'isFiltersStateClean', array(), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'hasFilters', array(), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return $this->valueHoldereb492->hasFilters();
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

        $instance->initializer0779b = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHoldereb492) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldereb492 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldereb492->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, '__get', ['name' => $name], $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        if (isset(self::$publicProperties24aa4[$name])) {
            return $this->valueHoldereb492->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb492;

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

        $targetObject = $this->valueHoldereb492;
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
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb492;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldereb492;
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
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, '__isset', array('name' => $name), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb492;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldereb492;
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
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, '__unset', array('name' => $name), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb492;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldereb492;
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
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, '__clone', array(), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        $this->valueHoldereb492 = clone $this->valueHoldereb492;
    }

    public function __sleep()
    {
        $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, '__sleep', array(), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;

        return array('valueHoldereb492');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0779b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0779b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0779b && ($this->initializer0779b->__invoke($valueHoldereb492, $this, 'initializeProxy', array(), $this->initializer0779b) || 1) && $this->valueHoldereb492 = $valueHoldereb492;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldereb492;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldereb492;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
