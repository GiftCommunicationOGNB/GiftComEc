<?php

namespace Proxies\__CG__\Plugin\CMBlog\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Blog extends \Plugin\CMBlog\Entity\Blog implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'id', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'title', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'BlogCategories', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'BlogImage', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'body', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'author', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'description', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'keyword', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'robot', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'metatag', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'release_date', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'create_date', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'update_date', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'Creator', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'Status'];
        }

        return ['__isInitialized__', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'id', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'title', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'BlogCategories', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'BlogImage', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'body', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'author', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'description', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'keyword', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'robot', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'metatag', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'release_date', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'create_date', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'update_date', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'Creator', '' . "\0" . 'Plugin\\CMBlog\\Entity\\Blog' . "\0" . 'Status'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Blog $proxy) {
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
    public function isEnable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEnable', []);

        return parent::isEnable();
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
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function addBlogCategory(\Plugin\CMBlog\Entity\BlogCategory $blogCategory)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addBlogCategory', [$blogCategory]);

        return parent::addBlogCategory($blogCategory);
    }

    /**
     * {@inheritDoc}
     */
    public function removeBlogCategory(\Plugin\CMBlog\Entity\BlogCategory $blogCategory)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeBlogCategory', [$blogCategory]);

        return parent::removeBlogCategory($blogCategory);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlogCategories()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBlogCategories', []);

        return parent::getBlogCategories();
    }

    /**
     * {@inheritDoc}
     */
    public function addBlogImage(\Plugin\CMBlog\Entity\BlogImage $blogImage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addBlogImage', [$blogImage]);

        return parent::addBlogImage($blogImage);
    }

    /**
     * {@inheritDoc}
     */
    public function removeBlogImage(\Plugin\CMBlog\Entity\BlogImage $blogImage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeBlogImage', [$blogImage]);

        return parent::removeBlogImage($blogImage);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlogImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBlogImage', []);

        return parent::getBlogImage();
    }

    /**
     * {@inheritDoc}
     */
    public function getBody()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBody', []);

        return parent::getBody();
    }

    /**
     * {@inheritDoc}
     */
    public function setBody($body)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBody', [$body]);

        return parent::setBody($body);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthor', []);

        return parent::getAuthor();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthor($author)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthor', [$author]);

        return parent::setAuthor($author);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getKeyword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKeyword', []);

        return parent::getKeyword();
    }

    /**
     * {@inheritDoc}
     */
    public function setKeyword($keyword)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKeyword', [$keyword]);

        return parent::setKeyword($keyword);
    }

    /**
     * {@inheritDoc}
     */
    public function getRobot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRobot', []);

        return parent::getRobot();
    }

    /**
     * {@inheritDoc}
     */
    public function setRobot($robot)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRobot', [$robot]);

        return parent::setRobot($robot);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetatag()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetatag', []);

        return parent::getMetatag();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetatag($metatag)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetatag', [$metatag]);

        return parent::setMetatag($metatag);
    }

    /**
     * {@inheritDoc}
     */
    public function setReleaseDate($releaseDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReleaseDate', [$releaseDate]);

        return parent::setReleaseDate($releaseDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getReleaseDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReleaseDate', []);

        return parent::getReleaseDate();
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
    public function setStatus(\Plugin\CMBlog\Entity\BlogStatus $status = NULL)
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

}