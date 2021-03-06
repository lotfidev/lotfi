<?php

namespace Proxies\__CG__\Client\ClientBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Client extends \Client\ClientBundle\Entity\Client implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'image', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'dateAjoutClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'navigateurClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'osClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'nomClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'prenomClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'adresseClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'sexeClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'dateNaissanceClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'descriptionClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'paysClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'villeClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'mobileClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'fixeClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'faxClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'siteClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'situationClient', 'username', 'usernameCanonical', 'email', 'emailCanonical', 'enabled', 'salt', 'password', 'plainPassword', 'lastLogin', 'confirmationToken', 'passwordRequestedAt', 'groups', 'locked', 'expired', 'expiresAt', 'roles', 'credentialsExpired', 'credentialsExpireAt'];
        }

        return ['__isInitialized__', 'id', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'image', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'dateAjoutClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'navigateurClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'osClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'nomClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'prenomClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'adresseClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'sexeClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'dateNaissanceClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'descriptionClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'paysClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'villeClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'mobileClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'fixeClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'faxClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'siteClient', '' . "\0" . 'Client\\ClientBundle\\Entity\\Client' . "\0" . 'situationClient', 'username', 'usernameCanonical', 'email', 'emailCanonical', 'enabled', 'salt', 'password', 'plainPassword', 'lastLogin', 'confirmationToken', 'passwordRequestedAt', 'groups', 'locked', 'expired', 'expiresAt', 'roles', 'credentialsExpired', 'credentialsExpireAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Client $proxy) {
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
    public function setDateAjoutClient($dateAjoutClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateAjoutClient', [$dateAjoutClient]);

        return parent::setDateAjoutClient($dateAjoutClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateAjoutClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAjoutClient', []);

        return parent::getDateAjoutClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setNavigateurClient($navigateurClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNavigateurClient', [$navigateurClient]);

        return parent::setNavigateurClient($navigateurClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getNavigateurClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNavigateurClient', []);

        return parent::getNavigateurClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomClient($nomClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomClient', [$nomClient]);

        return parent::setNomClient($nomClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomClient', []);

        return parent::getNomClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenomClient($prenomClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenomClient', [$prenomClient]);

        return parent::setPrenomClient($prenomClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenomClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenomClient', []);

        return parent::getPrenomClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresseClient($adresseClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresseClient', [$adresseClient]);

        return parent::setAdresseClient($adresseClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresseClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresseClient', []);

        return parent::getAdresseClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setSexeClient($sexeClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSexeClient', [$sexeClient]);

        return parent::setSexeClient($sexeClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getSexeClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSexeClient', []);

        return parent::getSexeClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateNaissanceClient($dateNaissanceClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateNaissanceClient', [$dateNaissanceClient]);

        return parent::setDateNaissanceClient($dateNaissanceClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateNaissanceClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateNaissanceClient', []);

        return parent::getDateNaissanceClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptionClient($descriptionClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescriptionClient', [$descriptionClient]);

        return parent::setDescriptionClient($descriptionClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptionClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptionClient', []);

        return parent::getDescriptionClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setPaysClient($paysClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPaysClient', [$paysClient]);

        return parent::setPaysClient($paysClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaysClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaysClient', []);

        return parent::getPaysClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setVilleClient($villeClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVilleClient', [$villeClient]);

        return parent::setVilleClient($villeClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getVilleClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVilleClient', []);

        return parent::getVilleClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setMobileClient($mobileClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMobileClient', [$mobileClient]);

        return parent::setMobileClient($mobileClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getMobileClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMobileClient', []);

        return parent::getMobileClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setFixeClient($fixeClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFixeClient', [$fixeClient]);

        return parent::setFixeClient($fixeClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getFixeClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFixeClient', []);

        return parent::getFixeClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setFaxClient($faxClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFaxClient', [$faxClient]);

        return parent::setFaxClient($faxClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getFaxClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFaxClient', []);

        return parent::getFaxClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiteClient($siteClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiteClient', [$siteClient]);

        return parent::setSiteClient($siteClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteClient', []);

        return parent::getSiteClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setSituationClient($situationClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSituationClient', [$situationClient]);

        return parent::setSituationClient($situationClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getSituationClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSituationClient', []);

        return parent::getSituationClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setOsClient($osClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOsClient', [$osClient]);

        return parent::setOsClient($osClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getOsClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOsClient', []);

        return parent::getOsClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(\Administration\AdministrationBundle\Entity\Media $image = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function addRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRole', [$role]);

        return parent::addRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function serialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'serialize', []);

        return parent::serialize();
    }

    /**
     * {@inheritDoc}
     */
    public function unserialize($serialized)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'unserialize', [$serialized]);

        return parent::unserialize($serialized);
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
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
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsernameCanonical()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsernameCanonical', []);

        return parent::getUsernameCanonical();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailCanonical()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailCanonical', []);

        return parent::getEmailCanonical();
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getPlainPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlainPassword', []);

        return parent::getPlainPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastLogin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastLogin', []);

        return parent::getLastLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function getConfirmationToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfirmationToken', []);

        return parent::getConfirmationToken();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function hasRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasRole', [$role]);

        return parent::hasRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonExpired', []);

        return parent::isAccountNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonLocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonLocked', []);

        return parent::isAccountNonLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function isCredentialsNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCredentialsNonExpired', []);

        return parent::isCredentialsNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isCredentialsExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCredentialsExpired', []);

        return parent::isCredentialsExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEnabled', []);

        return parent::isEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function isExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isExpired', []);

        return parent::isExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isLocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isLocked', []);

        return parent::isLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function isSuperAdmin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isSuperAdmin', []);

        return parent::isSuperAdmin();
    }

    /**
     * {@inheritDoc}
     */
    public function removeRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRole', [$role]);

        return parent::removeRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function setUsernameCanonical($usernameCanonical)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsernameCanonical', [$usernameCanonical]);

        return parent::setUsernameCanonical($usernameCanonical);
    }

    /**
     * {@inheritDoc}
     */
    public function setCredentialsExpireAt(\DateTime $date = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCredentialsExpireAt', [$date]);

        return parent::setCredentialsExpireAt($date);
    }

    /**
     * {@inheritDoc}
     */
    public function setCredentialsExpired($boolean)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCredentialsExpired', [$boolean]);

        return parent::setCredentialsExpired($boolean);
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailCanonical($emailCanonical)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailCanonical', [$emailCanonical]);

        return parent::setEmailCanonical($emailCanonical);
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabled($boolean)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', [$boolean]);

        return parent::setEnabled($boolean);
    }

    /**
     * {@inheritDoc}
     */
    public function setExpired($boolean)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpired', [$boolean]);

        return parent::setExpired($boolean);
    }

    /**
     * {@inheritDoc}
     */
    public function setExpiresAt(\DateTime $date = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpiresAt', [$date]);

        return parent::setExpiresAt($date);
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function setSuperAdmin($boolean)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSuperAdmin', [$boolean]);

        return parent::setSuperAdmin($boolean);
    }

    /**
     * {@inheritDoc}
     */
    public function setPlainPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlainPassword', [$password]);

        return parent::setPlainPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function setLastLogin(\DateTime $time = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastLogin', [$time]);

        return parent::setLastLogin($time);
    }

    /**
     * {@inheritDoc}
     */
    public function setLocked($boolean)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocked', [$boolean]);

        return parent::setLocked($boolean);
    }

    /**
     * {@inheritDoc}
     */
    public function setConfirmationToken($confirmationToken)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConfirmationToken', [$confirmationToken]);

        return parent::setConfirmationToken($confirmationToken);
    }

    /**
     * {@inheritDoc}
     */
    public function setPasswordRequestedAt(\DateTime $date = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPasswordRequestedAt', [$date]);

        return parent::setPasswordRequestedAt($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getPasswordRequestedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPasswordRequestedAt', []);

        return parent::getPasswordRequestedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function isPasswordRequestNonExpired($ttl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPasswordRequestNonExpired', [$ttl]);

        return parent::isPasswordRequestNonExpired($ttl);
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroups()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroups', []);

        return parent::getGroups();
    }

    /**
     * {@inheritDoc}
     */
    public function getGroupNames()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroupNames', []);

        return parent::getGroupNames();
    }

    /**
     * {@inheritDoc}
     */
    public function hasGroup($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasGroup', [$name]);

        return parent::hasGroup($name);
    }

    /**
     * {@inheritDoc}
     */
    public function addGroup(\FOS\UserBundle\Model\GroupInterface $group)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGroup', [$group]);

        return parent::addGroup($group);
    }

    /**
     * {@inheritDoc}
     */
    public function removeGroup(\FOS\UserBundle\Model\GroupInterface $group)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeGroup', [$group]);

        return parent::removeGroup($group);
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
