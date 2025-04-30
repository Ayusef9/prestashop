<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderac48f = null;
    private $initializer98e9f = null;
    private static $publicPropertiesdb6a4 = [
        
    ];
    public function getConnection()
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'getConnection', array(), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'getMetadataFactory', array(), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'getExpressionBuilder', array(), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'beginTransaction', array(), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'getCache', array(), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->getCache();
    }
    public function transactional($func)
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'transactional', array('func' => $func), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'commit', array(), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->commit();
    }
    public function rollback()
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'rollback', array(), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'getClassMetadata', array('className' => $className), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'createQuery', array('dql' => $dql), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'createNamedQuery', array('name' => $name), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'createQueryBuilder', array(), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'flush', array('entity' => $entity), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'clear', array('entityName' => $entityName), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->clear($entityName);
    }
    public function close()
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'close', array(), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->close();
    }
    public function persist($entity)
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'persist', array('entity' => $entity), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'remove', array('entity' => $entity), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'refresh', array('entity' => $entity), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'detach', array('entity' => $entity), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'merge', array('entity' => $entity), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'contains', array('entity' => $entity), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'getEventManager', array(), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'getConfiguration', array(), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'isOpen', array(), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'getUnitOfWork', array(), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'getProxyFactory', array(), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'initializeObject', array('obj' => $obj), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'getFilters', array(), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'isFiltersStateClean', array(), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'hasFilters', array(), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer98e9f = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderac48f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderac48f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderac48f->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, '__get', ['name' => $name], $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        if (isset(self::$publicPropertiesdb6a4[$name])) {
            return $this->valueHolderac48f->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac48f;
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
        $targetObject = $this->valueHolderac48f;
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
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac48f;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderac48f;
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
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, '__isset', array('name' => $name), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac48f;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderac48f;
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
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, '__unset', array('name' => $name), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac48f;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderac48f;
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
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, '__clone', array(), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        $this->valueHolderac48f = clone $this->valueHolderac48f;
    }
    public function __sleep()
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, '__sleep', array(), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return array('valueHolderac48f');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer98e9f = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer98e9f;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'initializeProxy', array(), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderac48f;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderac48f;
    }
}
