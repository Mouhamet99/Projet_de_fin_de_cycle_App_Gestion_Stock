<?php

namespace Container0FQFD5I;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder61325 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera5065 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb3ca7 = [
        
    ];

    public function getConnection()
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'getConnection', array(), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'getMetadataFactory', array(), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'getExpressionBuilder', array(), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'beginTransaction', array(), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'getCache', array(), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->getCache();
    }

    public function transactional($func)
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'transactional', array('func' => $func), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->transactional($func);
    }

    public function commit()
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'commit', array(), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->commit();
    }

    public function rollback()
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'rollback', array(), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'getClassMetadata', array('className' => $className), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'createQuery', array('dql' => $dql), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'createNamedQuery', array('name' => $name), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'createQueryBuilder', array(), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'flush', array('entity' => $entity), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'clear', array('entityName' => $entityName), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->clear($entityName);
    }

    public function close()
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'close', array(), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->close();
    }

    public function persist($entity)
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'persist', array('entity' => $entity), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'remove', array('entity' => $entity), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'refresh', array('entity' => $entity), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'detach', array('entity' => $entity), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'merge', array('entity' => $entity), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'getRepository', array('entityName' => $entityName), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'contains', array('entity' => $entity), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'getEventManager', array(), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'getConfiguration', array(), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'isOpen', array(), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'getUnitOfWork', array(), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'getProxyFactory', array(), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'initializeObject', array('obj' => $obj), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'getFilters', array(), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'isFiltersStateClean', array(), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'hasFilters', array(), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return $this->valueHolder61325->hasFilters();
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

        $instance->initializera5065 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder61325) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder61325 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder61325->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, '__get', ['name' => $name], $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        if (isset(self::$publicPropertiesb3ca7[$name])) {
            return $this->valueHolder61325->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder61325;

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

        $targetObject = $this->valueHolder61325;
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
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder61325;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder61325;
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
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, '__isset', array('name' => $name), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder61325;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder61325;
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
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, '__unset', array('name' => $name), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder61325;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder61325;
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
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, '__clone', array(), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        $this->valueHolder61325 = clone $this->valueHolder61325;
    }

    public function __sleep()
    {
        $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, '__sleep', array(), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;

        return array('valueHolder61325');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera5065 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera5065;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera5065 && ($this->initializera5065->__invoke($valueHolder61325, $this, 'initializeProxy', array(), $this->initializera5065) || 1) && $this->valueHolder61325 = $valueHolder61325;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder61325;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder61325;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
