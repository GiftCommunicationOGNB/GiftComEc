<?php

namespace Proxies\__CG__\Eccube\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Product extends \Eccube\Entity\Product implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . '_calc', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'stockFinds', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'stocks', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'stockUnlimiteds', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'price01', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'price02', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'price01IncTaxs', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'price02IncTaxs', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'codes', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'classCategories1', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'classCategories2', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'className1', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'className2', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'id', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'name', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'note', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'description_list', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'description_detail', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'search_word', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'free_area', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'create_date', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'update_date', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'ProductCategories', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'ProductClasses', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'ProductImage', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'ProductTag', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'CustomerFavoriteProducts', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'Creator', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'Status', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'message', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . '_calc_deliveryplus', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'deliveryplus_weight', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'deliveryplus_size', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'deliveryplus_weight_min', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'deliveryplus_weight_max', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'deliveryplus_size_min', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'deliveryplus_size_max', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'RelatedProducts', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'reserve_date'];
        }

        return ['__isInitialized__', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . '_calc', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'stockFinds', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'stocks', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'stockUnlimiteds', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'price01', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'price02', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'price01IncTaxs', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'price02IncTaxs', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'codes', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'classCategories1', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'classCategories2', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'className1', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'className2', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'id', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'name', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'note', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'description_list', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'description_detail', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'search_word', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'free_area', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'create_date', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'update_date', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'ProductCategories', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'ProductClasses', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'ProductImage', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'ProductTag', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'CustomerFavoriteProducts', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'Creator', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'Status', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'message', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . '_calc_deliveryplus', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'deliveryplus_weight', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'deliveryplus_size', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'deliveryplus_weight_min', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'deliveryplus_weight_max', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'deliveryplus_size_min', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'deliveryplus_size_max', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'RelatedProducts', '' . "\0" . 'Eccube\\Entity\\Product' . "\0" . 'reserve_date'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Product $proxy) {
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
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);

        parent::__clone();
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
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function _calc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '_calc', []);

        return parent::_calc();
    }

    /**
     * {@inheritDoc}
     */
    public function isEnable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEnable', []);

        return parent::isEnable();
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClassName1', []);

        return parent::getClassName1();
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClassName2', []);

        return parent::getClassName2();
    }

    /**
     * {@inheritDoc}
     */
    public function getClassCategories1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClassCategories1', []);

        return parent::getClassCategories1();
    }

    /**
     * {@inheritDoc}
     */
    public function getClassCategories1AsFlip()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClassCategories1AsFlip', []);

        return parent::getClassCategories1AsFlip();
    }

    /**
     * {@inheritDoc}
     */
    public function getClassCategories2($class_category1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClassCategories2', [$class_category1]);

        return parent::getClassCategories2($class_category1);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassCategories2AsFlip($class_category1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClassCategories2AsFlip', [$class_category1]);

        return parent::getClassCategories2AsFlip($class_category1);
    }

    /**
     * {@inheritDoc}
     */
    public function getStockFind()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStockFind', []);

        return parent::getStockFind();
    }

    /**
     * {@inheritDoc}
     */
    public function getStockMin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStockMin', []);

        return parent::getStockMin();
    }

    /**
     * {@inheritDoc}
     */
    public function getStockMax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStockMax', []);

        return parent::getStockMax();
    }

    /**
     * {@inheritDoc}
     */
    public function getStockUnlimitedMin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStockUnlimitedMin', []);

        return parent::getStockUnlimitedMin();
    }

    /**
     * {@inheritDoc}
     */
    public function getStockUnlimitedMax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStockUnlimitedMax', []);

        return parent::getStockUnlimitedMax();
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice01Min()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice01Min', []);

        return parent::getPrice01Min();
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice01Max()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice01Max', []);

        return parent::getPrice01Max();
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice02Min()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice02Min', []);

        return parent::getPrice02Min();
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice02Max()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice02Max', []);

        return parent::getPrice02Max();
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice01IncTaxMin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice01IncTaxMin', []);

        return parent::getPrice01IncTaxMin();
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice01IncTaxMax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice01IncTaxMax', []);

        return parent::getPrice01IncTaxMax();
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice02IncTaxMin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice02IncTaxMin', []);

        return parent::getPrice02IncTaxMin();
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice02IncTaxMax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice02IncTaxMax', []);

        return parent::getPrice02IncTaxMax();
    }

    /**
     * {@inheritDoc}
     */
    public function getCodeMin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodeMin', []);

        return parent::getCodeMin();
    }

    /**
     * {@inheritDoc}
     */
    public function getCodeMax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodeMax', []);

        return parent::getCodeMax();
    }

    /**
     * {@inheritDoc}
     */
    public function getMainListImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMainListImage', []);

        return parent::getMainListImage();
    }

    /**
     * {@inheritDoc}
     */
    public function getMainFileName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMainFileName', []);

        return parent::getMainFileName();
    }

    /**
     * {@inheritDoc}
     */
    public function hasProductClass()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasProductClass', []);

        return parent::hasProductClass();
    }

    /**
     * {@inheritDoc}
     */
    public function copy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'copy', []);

        return parent::copy();
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
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setNote($note = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNote', [$note]);

        return parent::setNote($note);
    }

    /**
     * {@inheritDoc}
     */
    public function getNote()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNote', []);

        return parent::getNote();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptionList($descriptionList = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescriptionList', [$descriptionList]);

        return parent::setDescriptionList($descriptionList);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptionList()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptionList', []);

        return parent::getDescriptionList();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptionDetail($descriptionDetail = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescriptionDetail', [$descriptionDetail]);

        return parent::setDescriptionDetail($descriptionDetail);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptionDetail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptionDetail', []);

        return parent::getDescriptionDetail();
    }

    /**
     * {@inheritDoc}
     */
    public function setSearchWord($searchWord = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSearchWord', [$searchWord]);

        return parent::setSearchWord($searchWord);
    }

    /**
     * {@inheritDoc}
     */
    public function getSearchWord()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSearchWord', []);

        return parent::getSearchWord();
    }

    /**
     * {@inheritDoc}
     */
    public function setFreeArea($freeArea = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFreeArea', [$freeArea]);

        return parent::setFreeArea($freeArea);
    }

    /**
     * {@inheritDoc}
     */
    public function getFreeArea()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFreeArea', []);

        return parent::getFreeArea();
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
    public function getCreateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreateDate', []);

        return parent::getCreateDate();
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
    public function getUpdateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdateDate', []);

        return parent::getUpdateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function addProductCategory(\Eccube\Entity\ProductCategory $productCategory)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProductCategory', [$productCategory]);

        return parent::addProductCategory($productCategory);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProductCategory(\Eccube\Entity\ProductCategory $productCategory)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProductCategory', [$productCategory]);

        return parent::removeProductCategory($productCategory);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductCategories()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductCategories', []);

        return parent::getProductCategories();
    }

    /**
     * {@inheritDoc}
     */
    public function addProductClass(\Eccube\Entity\ProductClass $productClass)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProductClass', [$productClass]);

        return parent::addProductClass($productClass);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProductClass(\Eccube\Entity\ProductClass $productClass)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProductClass', [$productClass]);

        return parent::removeProductClass($productClass);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductClasses()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductClasses', []);

        return parent::getProductClasses();
    }

    /**
     * {@inheritDoc}
     */
    public function addProductImage(\Eccube\Entity\ProductImage $productImage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProductImage', [$productImage]);

        return parent::addProductImage($productImage);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProductImage(\Eccube\Entity\ProductImage $productImage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProductImage', [$productImage]);

        return parent::removeProductImage($productImage);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductImage', []);

        return parent::getProductImage();
    }

    /**
     * {@inheritDoc}
     */
    public function addProductTag(\Eccube\Entity\ProductTag $productTag)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProductTag', [$productTag]);

        return parent::addProductTag($productTag);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProductTag(\Eccube\Entity\ProductTag $productTag)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProductTag', [$productTag]);

        return parent::removeProductTag($productTag);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductTag()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductTag', []);

        return parent::getProductTag();
    }

    /**
     * {@inheritDoc}
     */
    public function getTags()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTags', []);

        return parent::getTags();
    }

    /**
     * {@inheritDoc}
     */
    public function addCustomerFavoriteProduct(\Eccube\Entity\CustomerFavoriteProduct $customerFavoriteProduct)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCustomerFavoriteProduct', [$customerFavoriteProduct]);

        return parent::addCustomerFavoriteProduct($customerFavoriteProduct);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCustomerFavoriteProduct(\Eccube\Entity\CustomerFavoriteProduct $customerFavoriteProduct)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCustomerFavoriteProduct', [$customerFavoriteProduct]);

        return parent::removeCustomerFavoriteProduct($customerFavoriteProduct);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomerFavoriteProducts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomerFavoriteProducts', []);

        return parent::getCustomerFavoriteProducts();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreator(\Eccube\Entity\Member $creator = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreator', [$creator]);

        return parent::setCreator($creator);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreator()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreator', []);

        return parent::getCreator();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(\Eccube\Entity\Master\ProductStatus $status = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
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

    /**
     * {@inheritDoc}
     */
    public function getMessage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMessage', []);

        return parent::getMessage();
    }

    /**
     * {@inheritDoc}
     */
    public function setMessage($message)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMessage', [$message]);

        return parent::setMessage($message);
    }

    /**
     * {@inheritDoc}
     */
    public function _calc_deliveryplus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '_calc_deliveryplus', []);

        return parent::_calc_deliveryplus();
    }

    /**
     * {@inheritDoc}
     */
    public function getDeliveryplusWeightMin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeliveryplusWeightMin', []);

        return parent::getDeliveryplusWeightMin();
    }

    /**
     * {@inheritDoc}
     */
    public function getDeliveryplusWeightMax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeliveryplusWeightMax', []);

        return parent::getDeliveryplusWeightMax();
    }

    /**
     * {@inheritDoc}
     */
    public function getDeliveryplusSizeMin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeliveryplusSizeMin', []);

        return parent::getDeliveryplusSizeMin();
    }

    /**
     * {@inheritDoc}
     */
    public function getDeliveryplusSizeMax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeliveryplusSizeMax', []);

        return parent::getDeliveryplusSizeMax();
    }

    /**
     * {@inheritDoc}
     */
    public function getRelatedProducts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRelatedProducts', []);

        return parent::getRelatedProducts();
    }

    /**
     * {@inheritDoc}
     */
    public function addRelatedProduct(\Plugin\RelatedProduct4\Entity\RelatedProduct $RelatedProduct)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRelatedProduct', [$RelatedProduct]);

        return parent::addRelatedProduct($RelatedProduct);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRelatedProduct(\Plugin\RelatedProduct4\Entity\RelatedProduct $RelatedProduct)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRelatedProduct', [$RelatedProduct]);

        return parent::removeRelatedProduct($RelatedProduct);
    }

    /**
     * {@inheritDoc}
     */
    public function setReserveDate($reserve_date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReserveDate', [$reserve_date]);

        return parent::setReserveDate($reserve_date);
    }

    /**
     * {@inheritDoc}
     */
    public function getReserveDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReserveDate', []);

        return parent::getReserveDate();
    }

}
