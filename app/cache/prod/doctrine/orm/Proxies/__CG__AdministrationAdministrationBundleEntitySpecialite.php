<?php

namespace Proxies\__CG__\Administration\AdministrationBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Specialite extends \Administration\AdministrationBundle\Entity\Specialite implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Specialite' . "\0" . 'id', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Specialite' . "\0" . 'categorie', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Specialite' . "\0" . 'nomSpecialite', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Specialite' . "\0" . 'statutSpecialite', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Specialite' . "\0" . 'dateSpecialite'];
        }

        return ['__isInitialized__', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Specialite' . "\0" . 'id', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Specialite' . "\0" . 'categorie', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Specialite' . "\0" . 'nomSpecialite', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Specialite' . "\0" . 'statutSpecialite', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Specialite' . "\0" . 'dateSpecialite'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Specialite $proxy) {
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
    public function setNomSpecialite($nomSpecialite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomSpecialite', [$nomSpecialite]);

        return parent::setNomSpecialite($nomSpecialite);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomSpecialite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomSpecialite', []);

        return parent::getNomSpecialite();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatutSpecialite($statutSpecialite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatutSpecialite', [$statutSpecialite]);

        return parent::setStatutSpecialite($statutSpecialite);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatutSpecialite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatutSpecialite', []);

        return parent::getStatutSpecialite();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateSpecialite($dateSpecialite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateSpecialite', [$dateSpecialite]);

        return parent::setDateSpecialite($dateSpecialite);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateSpecialite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateSpecialite', []);

        return parent::getDateSpecialite();
    }

    /**
     * {@inheritDoc}
     */
    public function addCategorie(\Administration\AdministrationBundle\Entity\Categorie $categorie)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCategorie', [$categorie]);

        return parent::addCategorie($categorie);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCategorie(\Administration\AdministrationBundle\Entity\Categorie $categorie)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCategorie', [$categorie]);

        return parent::removeCategorie($categorie);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategorie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategorie', []);

        return parent::getCategorie();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
