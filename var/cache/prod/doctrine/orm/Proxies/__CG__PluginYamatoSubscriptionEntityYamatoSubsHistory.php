<?php

namespace Proxies\__CG__\Plugin\YamatoSubscription\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class YamatoSubsHistory extends \Plugin\YamatoSubscription\Entity\YamatoSubsHistory implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsHistory' . "\0" . 'id', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsHistory' . "\0" . 'YamatoSubs', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsHistory' . "\0" . 'Order', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsHistory' . "\0" . 'subs_month_period', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsHistory' . "\0" . 'delivery_count', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsHistory' . "\0" . 'create_date', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsHistory' . "\0" . 'update_date', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsHistory' . "\0" . 'visible'];
        }

        return ['__isInitialized__', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsHistory' . "\0" . 'id', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsHistory' . "\0" . 'YamatoSubs', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsHistory' . "\0" . 'Order', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsHistory' . "\0" . 'subs_month_period', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsHistory' . "\0" . 'delivery_count', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsHistory' . "\0" . 'create_date', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsHistory' . "\0" . 'update_date', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsHistory' . "\0" . 'visible'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (YamatoSubsHistory $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getYamatoSubs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getYamatoSubs', []);

        return parent::getYamatoSubs();
    }

    /**
     * {@inheritDoc}
     */
    public function setYamatoSubs($YamatoSubs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setYamatoSubs', [$YamatoSubs]);

        return parent::setYamatoSubs($YamatoSubs);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrder', []);

        return parent::getOrder();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrder($Order)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrder', [$Order]);

        return parent::setOrder($Order);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubsMonthPeriod()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubsMonthPeriod', []);

        return parent::getSubsMonthPeriod();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubsMonthPeriod($subs_month_period)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubsMonthPeriod', [$subs_month_period]);

        return parent::setSubsMonthPeriod($subs_month_period);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeliveryCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeliveryCount', []);

        return parent::getDeliveryCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeliveryCount($delivery_count)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeliveryCount', [$delivery_count]);

        return parent::setDeliveryCount($delivery_count);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreateDate', []);

        return parent::getCreateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreateDate($create_date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreateDate', [$create_date]);

        return parent::setCreateDate($create_date);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdateDate', []);

        return parent::getUpdateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdateDate($update_date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateDate', [$update_date]);

        return parent::setUpdateDate($update_date);
    }

    /**
     * {@inheritDoc}
     */
    public function isVisible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isVisible', []);

        return parent::isVisible();
    }

    /**
     * {@inheritDoc}
     */
    public function setVisible($visible)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVisible', [$visible]);

        return parent::setVisible($visible);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetExists($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetExists', [$offset]);

        return parent::offsetExists($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetSet($offset, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetSet', [$offset, $value]);

        return parent::offsetSet($offset, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetGet($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetGet', [$offset]);

        return parent::offsetGet($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetUnset($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetUnset', [$offset]);

        return parent::offsetUnset($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function setPropertiesFromArray(array $arrProps, array $excludeAttribute = array (
), \ReflectionClass $parentClass = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPropertiesFromArray', [$arrProps, $excludeAttribute, $parentClass]);

        return parent::setPropertiesFromArray($arrProps, $excludeAttribute, $parentClass);
    }

    /**
     * {@inheritDoc}
     */
    public function toArray(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
  3 => 'AnnotationReader',
), \ReflectionClass $parentClass = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', [$excludeAttribute, $parentClass]);

        return parent::toArray($excludeAttribute, $parentClass);
    }

    /**
     * {@inheritDoc}
     */
    public function toNormalizedArray(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
  3 => 'AnnotationReader',
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toNormalizedArray', [$excludeAttribute]);

        return parent::toNormalizedArray($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function toJSON(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
  3 => 'AnnotationReader',
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toJSON', [$excludeAttribute]);

        return parent::toJSON($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function toXML(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
  3 => 'AnnotationReader',
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toXML', [$excludeAttribute]);

        return parent::toXML($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function copyProperties($srcObject, array $excludeAttribute = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'copyProperties', [$srcObject, $excludeAttribute]);

        return parent::copyProperties($srcObject, $excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function setAnnotationReader(\Doctrine\Common\Annotations\Reader $Reader)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnnotationReader', [$Reader]);

        return parent::setAnnotationReader($Reader);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnnotationReader()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnnotationReader', []);

        return parent::getAnnotationReader();
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityIdentifierAsArray(\Eccube\Entity\AbstractEntity $Entity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntityIdentifierAsArray', [$Entity]);

        return parent::getEntityIdentifierAsArray($Entity);
    }

}