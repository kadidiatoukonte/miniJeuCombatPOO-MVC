<?php

class Person
{
    private $_id,
            $_name,
            $_damage;

    const MOI = 1; 
    const DAMAGE = 2;
    const DAMAGE_WON = 3;

    public function __construct(array $array)
    {
        $this->hydrate($array);
    }
        
    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set'.ucfirst($key);
                       
            // Si le setter correspondant existe.
                if (method_exists($this, $method))
                {
                    // On appelle le setter.
                    $this->$method($value);
                }
        }
    }

    public function frapper(Person $person)
    {
        if ($person->id() == $this->_id)
        {
            return self::MOI;
        }

        return $person->wonDamage();   
    }
    
    public function wonDamage()
    {
        $person->_damage += 5;

        if($this->_damage >= 100)
        {
            return self::DAMAGE;
        }

            return self::DAMAGE_WON;
  
    }

        
    /**
     * Get the value of _id
     */ 
    public function getId()
    {
        return $this->_id;
    }

    /**
     * Get the value of _name
     */ 
    public function getName()
    {
        return $this->_name;
    }

    /**
     * Get the value of _damage
     */ 
    public function getDamage()
    {
        return $this->_damage;
    }

    /**
     * Set the value of _id
     *
     * @return  self
     */ 
    public function setId($_id)
    {
        $this->_id = $_id;

        return $this;
    }

    /**
     * Set the value of _name
     *
     * @return  self
     */ 
    public function setName($_name)
    {
        $this->_name = $_name;
        return $this;
    }

    /**
     * Set the value of _damage
     *
     * @return  self
     */ 
    public function setDamage($_damage)
    {
        $this->_damage = $_damage;
        return $this;
    }
}