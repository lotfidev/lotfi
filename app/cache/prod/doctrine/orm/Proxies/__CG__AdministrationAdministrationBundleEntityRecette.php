<?php

namespace Proxies\__CG__\Administration\AdministrationBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Recette extends \Administration\AdministrationBundle\Entity\Recette implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'id', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'auteur', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'image', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'ingredient', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'difficulte', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'menu', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'prix', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'nationalite', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'theme', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'typecuisson', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'saison', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'subcategorie', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'preparationRecette', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'descriptionRecette', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'descriptionIngredientRecette', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'dateRecette', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'nomRecette', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'statutRecette', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'cuissonRecette'];
        }

        return ['__isInitialized__', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'id', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'auteur', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'image', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'ingredient', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'difficulte', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'menu', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'prix', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'nationalite', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'theme', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'typecuisson', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'saison', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'subcategorie', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'preparationRecette', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'descriptionRecette', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'descriptionIngredientRecette', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'dateRecette', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'nomRecette', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'statutRecette', '' . "\0" . 'Administration\\AdministrationBundle\\Entity\\Recette' . "\0" . 'cuissonRecette'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Recette $proxy) {
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
    public function setDescriptionRecette($descriptionRecette)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescriptionRecette', [$descriptionRecette]);

        return parent::setDescriptionRecette($descriptionRecette);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptionRecette()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptionRecette', []);

        return parent::getDescriptionRecette();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateRecette($dateRecette)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateRecette', [$dateRecette]);

        return parent::setDateRecette($dateRecette);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateRecette()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateRecette', []);

        return parent::getDateRecette();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatutRecette($statutRecette)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatutRecette', [$statutRecette]);

        return parent::setStatutRecette($statutRecette);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatutRecette()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatutRecette', []);

        return parent::getStatutRecette();
    }

    /**
     * {@inheritDoc}
     */
    public function setCuissonRecette($cuissonRecette)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCuissonRecette', [$cuissonRecette]);

        return parent::setCuissonRecette($cuissonRecette);
    }

    /**
     * {@inheritDoc}
     */
    public function getCuissonRecette()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCuissonRecette', []);

        return parent::getCuissonRecette();
    }

    /**
     * {@inheritDoc}
     */
    public function addIngredient(\Administration\AdministrationBundle\Entity\Ingredient $ingredient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addIngredient', [$ingredient]);

        return parent::addIngredient($ingredient);
    }

    /**
     * {@inheritDoc}
     */
    public function removeIngredient(\Administration\AdministrationBundle\Entity\Ingredient $ingredient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeIngredient', [$ingredient]);

        return parent::removeIngredient($ingredient);
    }

    /**
     * {@inheritDoc}
     */
    public function getIngredient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIngredient', []);

        return parent::getIngredient();
    }

    /**
     * {@inheritDoc}
     */
    public function setDifficulte(\Administration\AdministrationBundle\Entity\Difficulte $difficulte)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDifficulte', [$difficulte]);

        return parent::setDifficulte($difficulte);
    }

    /**
     * {@inheritDoc}
     */
    public function getDifficulte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDifficulte', []);

        return parent::getDifficulte();
    }

    /**
     * {@inheritDoc}
     */
    public function setNationalite(\Administration\AdministrationBundle\Entity\Nationalite $nationalite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNationalite', [$nationalite]);

        return parent::setNationalite($nationalite);
    }

    /**
     * {@inheritDoc}
     */
    public function getNationalite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNationalite', []);

        return parent::getNationalite();
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
    public function setNomRecette($nomRecette)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomRecette', [$nomRecette]);

        return parent::setNomRecette($nomRecette);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomRecette()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomRecette', []);

        return parent::getNomRecette();
    }

    /**
     * {@inheritDoc}
     */
    public function setPreparationRecette($preparationRecette)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreparationRecette', [$preparationRecette]);

        return parent::setPreparationRecette($preparationRecette);
    }

    /**
     * {@inheritDoc}
     */
    public function getPreparationRecette()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreparationRecette', []);

        return parent::getPreparationRecette();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuteur(\Client\ClientBundle\Entity\Client $auteur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuteur', [$auteur]);

        return parent::setAuteur($auteur);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuteur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuteur', []);

        return parent::getAuteur();
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
    public function addTheme(\Administration\AdministrationBundle\Entity\Theme $theme)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTheme', [$theme]);

        return parent::addTheme($theme);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTheme(\Administration\AdministrationBundle\Entity\Theme $theme)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTheme', [$theme]);

        return parent::removeTheme($theme);
    }

    /**
     * {@inheritDoc}
     */
    public function getTheme()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTheme', []);

        return parent::getTheme();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrix(\Administration\AdministrationBundle\Entity\Prix $prix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', [$prix]);

        return parent::setPrix($prix);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrix', []);

        return parent::getPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function addTypecuisson(\Administration\AdministrationBundle\Entity\TypeCuisson $typecuisson)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTypecuisson', [$typecuisson]);

        return parent::addTypecuisson($typecuisson);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTypecuisson(\Administration\AdministrationBundle\Entity\TypeCuisson $typecuisson)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTypecuisson', [$typecuisson]);

        return parent::removeTypecuisson($typecuisson);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypecuisson()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypecuisson', []);

        return parent::getTypecuisson();
    }

    /**
     * {@inheritDoc}
     */
    public function addSaison(\Administration\AdministrationBundle\Entity\Saison $saison)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSaison', [$saison]);

        return parent::addSaison($saison);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSaison(\Administration\AdministrationBundle\Entity\Saison $saison)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSaison', [$saison]);

        return parent::removeSaison($saison);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaison()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaison', []);

        return parent::getSaison();
    }

    /**
     * {@inheritDoc}
     */
    public function addSubcategorie(\Administration\AdministrationBundle\Entity\SubCategorie $subcategorie)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSubcategorie', [$subcategorie]);

        return parent::addSubcategorie($subcategorie);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSubcategorie(\Administration\AdministrationBundle\Entity\SubCategorie $subcategorie)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSubcategorie', [$subcategorie]);

        return parent::removeSubcategorie($subcategorie);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubcategorie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubcategorie', []);

        return parent::getSubcategorie();
    }

    /**
     * {@inheritDoc}
     */
    public function setMenu(\Administration\AdministrationBundle\Entity\Menu $menu)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMenu', [$menu]);

        return parent::setMenu($menu);
    }

    /**
     * {@inheritDoc}
     */
    public function getMenu()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMenu', []);

        return parent::getMenu();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptionIngredientRecette($descriptionIngredientRecette)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescriptionIngredientRecette', [$descriptionIngredientRecette]);

        return parent::setDescriptionIngredientRecette($descriptionIngredientRecette);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptionIngredientRecette()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptionIngredientRecette', []);

        return parent::getDescriptionIngredientRecette();
    }

}
