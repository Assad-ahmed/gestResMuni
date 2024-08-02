<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Tax extends \App\Entity\Tax implements \Doctrine\ORM\Proxy\Proxy
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
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Tax' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Tax' . "\0" . 'montant', '' . "\0" . 'App\\Entity\\Tax' . "\0" . 'date', '' . "\0" . 'App\\Entity\\Tax' . "\0" . 'category', '' . "\0" . 'App\\Entity\\Tax' . "\0" . 'valeurVenale', '' . "\0" . 'App\\Entity\\Tax' . "\0" . 'valeurLocative', '' . "\0" . 'App\\Entity\\Tax' . "\0" . 'typeBatiment', '' . "\0" . 'App\\Entity\\Tax' . "\0" . 'region', '' . "\0" . 'App\\Entity\\Tax' . "\0" . 'revenuNet'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Tax' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Tax' . "\0" . 'montant', '' . "\0" . 'App\\Entity\\Tax' . "\0" . 'date', '' . "\0" . 'App\\Entity\\Tax' . "\0" . 'category', '' . "\0" . 'App\\Entity\\Tax' . "\0" . 'valeurVenale', '' . "\0" . 'App\\Entity\\Tax' . "\0" . 'valeurLocative', '' . "\0" . 'App\\Entity\\Tax' . "\0" . 'typeBatiment', '' . "\0" . 'App\\Entity\\Tax' . "\0" . 'region', '' . "\0" . 'App\\Entity\\Tax' . "\0" . 'revenuNet'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Tax $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
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
    public function getMontant(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontant', []);

        return parent::getMontant();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontant(string $montant): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontant', [$montant]);

        return parent::setMontant($montant);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', []);

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate(\DateTimeInterface $date): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', [$date]);

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', []);

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory(string $category): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', [$category]);

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getValeurVenale(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValeurVenale', []);

        return parent::getValeurVenale();
    }

    /**
     * {@inheritDoc}
     */
    public function setValeurVenale(string $valeurVenale): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValeurVenale', [$valeurVenale]);

        return parent::setValeurVenale($valeurVenale);
    }

    /**
     * {@inheritDoc}
     */
    public function getValeurLocative(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValeurLocative', []);

        return parent::getValeurLocative();
    }

    /**
     * {@inheritDoc}
     */
    public function setValeurLocative(string $valeurLocative): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValeurLocative', [$valeurLocative]);

        return parent::setValeurLocative($valeurLocative);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeBatiment(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeBatiment', []);

        return parent::getTypeBatiment();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeBatiment(string $typeBatiment): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeBatiment', [$typeBatiment]);

        return parent::setTypeBatiment($typeBatiment);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegion(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegion', []);

        return parent::getRegion();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegion(string $region): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegion', [$region]);

        return parent::setRegion($region);
    }

    /**
     * {@inheritDoc}
     */
    public function getRevenuNet(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRevenuNet', []);

        return parent::getRevenuNet();
    }

    /**
     * {@inheritDoc}
     */
    public function setRevenuNet(string $revenuNet): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRevenuNet', [$revenuNet]);

        return parent::setRevenuNet($revenuNet);
    }

    /**
     * {@inheritDoc}
     */
    public function calculerCFPB()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'calculerCFPB', []);

        return parent::calculerCFPB();
    }

    /**
     * {@inheritDoc}
     */
    public function calculerCFPNB()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'calculerCFPNB', []);

        return parent::calculerCFPNB();
    }

    /**
     * {@inheritDoc}
     */
    public function calculerTOM()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'calculerTOM', []);

        return parent::calculerTOM();
    }

}
