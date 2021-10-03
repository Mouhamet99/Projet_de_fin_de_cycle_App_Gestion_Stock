<?php

namespace ContainerR9eHRSW;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder03b46 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer67e9e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties75b68 = [
        
    ];

    public function getConnection()
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'getConnection', array(), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'getMetadataFactory', array(), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'getExpressionBuilder', array(), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'beginTransaction', array(), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'getCache', array(), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->getCache();
    }

    public function transactional($func)
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'transactional', array('func' => $func), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->transactional($func);
    }

    public function commit()
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'commit', array(), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->commit();
    }

    public function rollback()
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'rollback', array(), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'getClassMetadata', array('className' => $className), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'createQuery', array('dql' => $dql), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'createNamedQuery', array('name' => $name), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'createQueryBuilder', array(), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'flush', array('entity' => $entity), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'clear', array('entityName' => $entityName), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->clear($entityName);
    }

    public function close()
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'close', array(), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->close();
    }

    public function persist($entity)
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'persist', array('entity' => $entity), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'remove', array('entity' => $entity), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'refresh', array('entity' => $entity), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'detach', array('entity' => $entity), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'merge', array('entity' => $entity), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'getRepository', array('entityName' => $entityName), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'contains', array('entity' => $entity), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'getEventManager', array(), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'getConfiguration', array(), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'isOpen', array(), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'getUnitOfWork', array(), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'getProxyFactory', array(), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'initializeObject', array('obj' => $obj), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'getFilters', array(), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'isFiltersStateClean', array(), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'hasFilters', array(), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return $this->valueHolder03b46->hasFilters();
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

        $instance->initializer67e9e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder03b46) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder03b46 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder03b46->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, '__get', ['name' => $name], $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        if (isset(self::$publicProperties75b68[$name])) {
            return $this->valueHolder03b46->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder03b46;

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

        $targetObject = $this->valueHolder03b46;
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
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder03b46;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder03b46;
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
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, '__isset', array('name' => $name), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder03b46;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder03b46;
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
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, '__unset', array('name' => $name), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder03b46;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder03b46;
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
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, '__clone', array(), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        $this->valueHolder03b46 = clone $this->valueHolder03b46;
    }

    public function __sleep()
    {
        $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, '__sleep', array(), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;

        return array('valueHolder03b46');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer67e9e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer67e9e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer67e9e && ($this->initializer67e9e->__invoke($valueHolder03b46, $this, 'initializeProxy', array(), $this->initializer67e9e) || 1) && $this->valueHolder03b46 = $valueHolder03b46;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder03b46;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder03b46;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
