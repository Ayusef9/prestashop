<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderac48f = null;
    private $initializer98e9f = null;
    private static $publicPropertiesdb6a4 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'getList', array(), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'getInstalledModules', array(), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'getMustBeConfiguredModules', array(), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'getUpgradableModules', array(), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'setActionUrls', array('collection' => $collection), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        return $this->valueHolderac48f->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer98e9f = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolderac48f) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolderac48f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolderac48f->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer98e9f && ($this->initializer98e9f->__invoke($valueHolderac48f, $this, '__get', ['name' => $name], $this->initializer98e9f) || 1) && $this->valueHolderac48f = $valueHolderac48f;
        if (isset(self::$publicPropertiesdb6a4[$name])) {
            return $this->valueHolderac48f->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
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
