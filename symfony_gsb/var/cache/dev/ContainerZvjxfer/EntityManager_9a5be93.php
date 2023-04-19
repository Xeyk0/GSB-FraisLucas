<?php

namespace ContainerZvjxfer;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0c2af = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer816f2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties448e4 = [
        
    ];

    public function getConnection()
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'getConnection', array(), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'getMetadataFactory', array(), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'getExpressionBuilder', array(), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'beginTransaction', array(), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'getCache', array(), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->getCache();
    }

    public function transactional($func)
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'transactional', array('func' => $func), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'wrapInTransaction', array('func' => $func), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'commit', array(), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->commit();
    }

    public function rollback()
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'rollback', array(), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'getClassMetadata', array('className' => $className), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'createQuery', array('dql' => $dql), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'createNamedQuery', array('name' => $name), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'createQueryBuilder', array(), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'flush', array('entity' => $entity), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'clear', array('entityName' => $entityName), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->clear($entityName);
    }

    public function close()
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'close', array(), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->close();
    }

    public function persist($entity)
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'persist', array('entity' => $entity), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'remove', array('entity' => $entity), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'refresh', array('entity' => $entity), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'detach', array('entity' => $entity), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'merge', array('entity' => $entity), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'getRepository', array('entityName' => $entityName), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'contains', array('entity' => $entity), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'getEventManager', array(), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'getConfiguration', array(), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'isOpen', array(), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'getUnitOfWork', array(), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'getProxyFactory', array(), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'initializeObject', array('obj' => $obj), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'getFilters', array(), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'isFiltersStateClean', array(), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'hasFilters', array(), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return $this->valueHolder0c2af->hasFilters();
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

        $instance->initializer816f2 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder0c2af) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0c2af = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0c2af->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, '__get', ['name' => $name], $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        if (isset(self::$publicProperties448e4[$name])) {
            return $this->valueHolder0c2af->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0c2af;

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

        $targetObject = $this->valueHolder0c2af;
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
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0c2af;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0c2af;
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
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, '__isset', array('name' => $name), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0c2af;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0c2af;
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
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, '__unset', array('name' => $name), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0c2af;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0c2af;
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
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, '__clone', array(), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        $this->valueHolder0c2af = clone $this->valueHolder0c2af;
    }

    public function __sleep()
    {
        $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, '__sleep', array(), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;

        return array('valueHolder0c2af');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer816f2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer816f2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer816f2 && ($this->initializer816f2->__invoke($valueHolder0c2af, $this, 'initializeProxy', array(), $this->initializer816f2) || 1) && $this->valueHolder0c2af = $valueHolder0c2af;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0c2af;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0c2af;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
