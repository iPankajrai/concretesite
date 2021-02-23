<?php

namespace DoctrineProxies\__CG__\Concrete\Core\Entity\File\Image\Thumbnail\Type;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Type extends \Concrete\Core\Entity\File\Image\Thumbnail\Type\Type implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
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
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
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
            return ['__isInitialized__', 'ftTypeID', 'ftTypeHandle', 'ftTypeName', 'ftTypeWidth', 'ftTypeHeight', 'ftTypeIsRequired', 'ftTypeSizingMode', 'ftUpscalingEnabled', 'ftLimitedToFileSets', 'ftAssociatedFileSets', 'ftKeepAnimations', 'ftSaveAreaBackgroundColor'];
        }

        return ['__isInitialized__', 'ftTypeID', 'ftTypeHandle', 'ftTypeName', 'ftTypeWidth', 'ftTypeHeight', 'ftTypeIsRequired', 'ftTypeSizingMode', 'ftUpscalingEnabled', 'ftLimitedToFileSets', 'ftAssociatedFileSets', 'ftKeepAnimations', 'ftSaveAreaBackgroundColor'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Type $proxy) {
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
    public function getID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getID', []);

        return parent::getID();
    }

    /**
     * {@inheritDoc}
     */
    public function setHandle($ftTypeHandle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHandle', [$ftTypeHandle]);

        return parent::setHandle($ftTypeHandle);
    }

    /**
     * {@inheritDoc}
     */
    public function getHandle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHandle', []);

        return parent::getHandle();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($ftTypeName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$ftTypeName]);

        return parent::setName($ftTypeName);
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
    public function getDisplayName($format = 'html')
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisplayName', [$format]);

        return parent::getDisplayName($format);
    }

    /**
     * {@inheritDoc}
     */
    public function setWidth($ftTypeWidth)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWidth', [$ftTypeWidth]);

        return parent::setWidth($ftTypeWidth);
    }

    /**
     * {@inheritDoc}
     */
    public function getWidth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWidth', []);

        return parent::getWidth();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeight($ftTypeHeight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeight', [$ftTypeHeight]);

        return parent::setHeight($ftTypeHeight);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeight', []);

        return parent::getHeight();
    }

    /**
     * {@inheritDoc}
     */
    public function requireType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'requireType', []);

        return parent::requireType();
    }

    /**
     * {@inheritDoc}
     */
    public function isRequired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isRequired', []);

        return parent::isRequired();
    }

    /**
     * {@inheritDoc}
     */
    public function setSizingMode($ftTypeSizingMode = 'proportional')
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSizingMode', [$ftTypeSizingMode]);

        return parent::setSizingMode($ftTypeSizingMode);
    }

    /**
     * {@inheritDoc}
     */
    public function getSizingMode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSizingMode', []);

        return parent::getSizingMode();
    }

    /**
     * {@inheritDoc}
     */
    public function isUpscalingEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isUpscalingEnabled', []);

        return parent::isUpscalingEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsUpscalingEnabled($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsUpscalingEnabled', [$value]);

        return parent::setIsUpscalingEnabled($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getSizingModeDisplayName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSizingModeDisplayName', []);

        return parent::getSizingModeDisplayName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLimitedToFileSets($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLimitedToFileSets', [$value]);

        return parent::setLimitedToFileSets($value);
    }

    /**
     * {@inheritDoc}
     */
    public function isLimitedToFileSets()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isLimitedToFileSets', []);

        return parent::isLimitedToFileSets();
    }

    /**
     * {@inheritDoc}
     */
    public function getAssociatedFileSets()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssociatedFileSets', []);

        return parent::getAssociatedFileSets();
    }

    /**
     * {@inheritDoc}
     */
    public function setKeepAnimations($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKeepAnimations', [$value]);

        return parent::setKeepAnimations($value);
    }

    /**
     * {@inheritDoc}
     */
    public function isKeepAnimations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isKeepAnimations', []);

        return parent::isKeepAnimations();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaveAreaBackgroundColor($color)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaveAreaBackgroundColor', [$color]);

        return parent::setSaveAreaBackgroundColor($color);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaveAreaBackgroundColor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaveAreaBackgroundColor', []);

        return parent::getSaveAreaBackgroundColor();
    }

    /**
     * {@inheritDoc}
     */
    public function save()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'save', []);

        return parent::save();
    }

    /**
     * {@inheritDoc}
     */
    public function delete()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'delete', []);

        return parent::delete();
    }

    /**
     * {@inheritDoc}
     */
    public function getBaseVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBaseVersion', []);

        return parent::getBaseVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function getDoubledVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDoubledVersion', []);

        return parent::getDoubledVersion();
    }

}
