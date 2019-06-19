<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderc9ea4 = null;
    private $initializer90101 = null;
    private static $publicProperties9377e = [
        
    ];
    public function getConnection()
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'getConnection', array(), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'getMetadataFactory', array(), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'getExpressionBuilder', array(), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'beginTransaction', array(), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'getCache', array(), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->getCache();
    }
    public function transactional($func)
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'transactional', array('func' => $func), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->transactional($func);
    }
    public function commit()
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'commit', array(), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->commit();
    }
    public function rollback()
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'rollback', array(), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'getClassMetadata', array('className' => $className), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'createQuery', array('dql' => $dql), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'createNamedQuery', array('name' => $name), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'createQueryBuilder', array(), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'flush', array('entity' => $entity), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->flush($entity);
    }
    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->find($entityName, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'clear', array('entityName' => $entityName), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->clear($entityName);
    }
    public function close()
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'close', array(), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->close();
    }
    public function persist($entity)
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'persist', array('entity' => $entity), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'remove', array('entity' => $entity), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'refresh', array('entity' => $entity), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'detach', array('entity' => $entity), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'merge', array('entity' => $entity), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'getRepository', array('entityName' => $entityName), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'contains', array('entity' => $entity), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'getEventManager', array(), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'getConfiguration', array(), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'isOpen', array(), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'getUnitOfWork', array(), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'getProxyFactory', array(), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'initializeObject', array('obj' => $obj), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'getFilters', array(), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'isFiltersStateClean', array(), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'hasFilters', array(), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return $this->valueHolderc9ea4->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? $reflection = new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer90101 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderc9ea4) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc9ea4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderc9ea4->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, '__get', ['name' => $name], $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        if (isset(self::$publicProperties9377e[$name])) {
            return $this->valueHolderc9ea4->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc9ea4;
            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }
        $targetObject = $this->valueHolderc9ea4;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc9ea4;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolderc9ea4;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, '__isset', array('name' => $name), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc9ea4;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderc9ea4;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, '__unset', array('name' => $name), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc9ea4;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderc9ea4;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, '__clone', array(), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        $this->valueHolderc9ea4 = clone $this->valueHolderc9ea4;
    }
    public function __sleep()
    {
        $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, '__sleep', array(), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
        return array('valueHolderc9ea4');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer90101 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer90101;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer90101 && ($this->initializer90101->__invoke($valueHolderc9ea4, $this, 'initializeProxy', array(), $this->initializer90101) || 1) && $this->valueHolderc9ea4 = $valueHolderc9ea4;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc9ea4;
    }
    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolderc9ea4;
    }
}
