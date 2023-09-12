<?php

namespace Proxies\__CG__\Plugin\YamatoPayment4\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class YamatoPaymentMethod extends \Plugin\YamatoPayment4\Entity\YamatoPaymentMethod implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'Payment', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'id', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'payment_method', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'create_date', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'update_date', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'memo01', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'memo02', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'memo03', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'memo04', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'memo05', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'memo06', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'memo07', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'memo08', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'memo09', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'memo10'];
        }

        return ['__isInitialized__', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'Payment', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'id', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'payment_method', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'create_date', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'update_date', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'memo01', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'memo02', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'memo03', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'memo04', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'memo05', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'memo06', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'memo07', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'memo08', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'memo09', '' . "\0" . 'Plugin\\YamatoPayment4\\Entity\\YamatoPaymentMethod' . "\0" . 'memo10'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (YamatoPaymentMethod $proxy) {
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
    public function setPayment(\Eccube\Entity\Payment $payment = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPayment', [$payment]);

        return parent::setPayment($payment);
    }

    /**
     * {@inheritDoc}
     */
    public function getPayment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPayment', []);

        return parent::getPayment();
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
    public function setPaymentMethod($payment_method)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPaymentMethod', [$payment_method]);

        return parent::setPaymentMethod($payment_method);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaymentMethod()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaymentMethod', []);

        return parent::getPaymentMethod();
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
    public function setCreateDate($createDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreateDate', [$createDate]);

        return parent::setCreateDate($createDate);
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
    public function setUpdateDate($updateDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateDate', [$updateDate]);

        return parent::setUpdateDate($updateDate);
    }

    /**
     * {@inheritDoc}
     */
    public function setMemo01($memo01)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMemo01', [$memo01]);

        return parent::setMemo01($memo01);
    }

    /**
     * {@inheritDoc}
     */
    public function getMemo01()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMemo01', []);

        return parent::getMemo01();
    }

    /**
     * {@inheritDoc}
     */
    public function setMemo02($memo02)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMemo02', [$memo02]);

        return parent::setMemo02($memo02);
    }

    /**
     * {@inheritDoc}
     */
    public function getMemo02()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMemo02', []);

        return parent::getMemo02();
    }

    /**
     * {@inheritDoc}
     */
    public function setMemo03($memo03)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMemo03', [$memo03]);

        return parent::setMemo03($memo03);
    }

    /**
     * {@inheritDoc}
     */
    public function getMemo03()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMemo03', []);

        return parent::getMemo03();
    }

    /**
     * {@inheritDoc}
     */
    public function setMemo04($memo04)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMemo04', [$memo04]);

        return parent::setMemo04($memo04);
    }

    /**
     * {@inheritDoc}
     */
    public function getMemo04()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMemo04', []);

        return parent::getMemo04();
    }

    /**
     * {@inheritDoc}
     */
    public function setMemo05($data)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMemo05', [$data]);

        return parent::setMemo05($data);
    }

    /**
     * {@inheritDoc}
     */
    public function getMemo05()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMemo05', []);

        return parent::getMemo05();
    }

    /**
     * {@inheritDoc}
     */
    public function setMemo06($memo06)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMemo06', [$memo06]);

        return parent::setMemo06($memo06);
    }

    /**
     * {@inheritDoc}
     */
    public function getMemo06()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMemo06', []);

        return parent::getMemo06();
    }

    /**
     * {@inheritDoc}
     */
    public function setMemo07($memo07)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMemo07', [$memo07]);

        return parent::setMemo07($memo07);
    }

    /**
     * {@inheritDoc}
     */
    public function getMemo07()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMemo07', []);

        return parent::getMemo07();
    }

    /**
     * {@inheritDoc}
     */
    public function setMemo08($memo08)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMemo08', [$memo08]);

        return parent::setMemo08($memo08);
    }

    /**
     * {@inheritDoc}
     */
    public function getMemo08()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMemo08', []);

        return parent::getMemo08();
    }

    /**
     * {@inheritDoc}
     */
    public function setMemo09($memo09)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMemo09', [$memo09]);

        return parent::setMemo09($memo09);
    }

    /**
     * {@inheritDoc}
     */
    public function getMemo09()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMemo09', []);

        return parent::getMemo09();
    }

    /**
     * {@inheritDoc}
     */
    public function setMemo10($memo10)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMemo10', [$memo10]);

        return parent::setMemo10($memo10);
    }

    /**
     * {@inheritDoc}
     */
    public function getMemo10()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMemo10', []);

        return parent::getMemo10();
    }

}
