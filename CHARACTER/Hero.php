<?php

/**
 * Exercice 4
 * Dans un nouveau fichier Hero.php, créer la classe Hero héritant de Character et ayant pour attributs weapon, weaponDamage, shield et shieldValue.

 * L'attribut weapon permettra de définir le nom de l'arme équipée,
 * L'attribut weaponDamage indiquera les dégâts basiques de l'arme,
 * L'attribut shield définira le nom du bouclier équipée,
 * L'attribut shieldValue idiquera la nombre de dégâts que le bouclier encaisse à la place du héros.

 *Les attributs ne doivent être accessibles pour personne !
 */
class Hero extends Character
{

    private $weapon;
    private $weaponDamage;
    private $shield;
    private $shieldValue;

    /**
     * Exercice 5
     * Créer les méthodes permettant d'accéder aux attributs de la classe Hero et permettant également de les définir.
     */
    public function getWeapon()
    {
        return $this->weapon;
    }
    public function setWeapon($value)
    {
        $this->weapon = $value;
    }

    public function getWeaponDamage()
    {
        return $this->weaponDamage;
    }
    public function setWeaponDamage($value)
    {
        $this->weaponDamage = $value;
    }

    public function getShield()
    {
        return $this->shield;
    }
    public function setShield($value)
    {
        $this->shield = $value;
    }

    public function getShieldValue()
    {
        return $this->shieldValue;
    }
    public function setShieldValue($value)
    {
        $this->shieldValue = $value;
    }

    /**
     * Exercice 6
     * Créer la méthode magique construct de la classe Hero.
     * Cette méthode devra permettre le déclenchement de la méthode construct de la classe mère (Character) et devra également permettre de défnir les valeurs de weapon, weaponDamage, shield et shieldValue.
     * Pour finir, cette méthode doit retourner une phrase contenant toutes les informations sur le Héros nouvellement créé.
     */
    public function __construct($healthValue, $rageValue, $weapon, $weaponDamage, $shield, $shieldValue)
    {
        parent::__construct($healthValue, $rageValue);
        $this->setWeapon($weapon);
        $this->setWeaponDamage($weaponDamage);
        $this->setShield($shield);
        $this->setShieldValue($shieldValue);
        echo "<p>Vous êtes un super guerrier de l'espace ! Vous avez : " . $this->getHealth() . " points de vie et " . $this->getRage() . " points de rage !</p>" .
            "<p>Vous disposez de l'arme " . $this->getWeapon() . " infligeant " . $this->getWeaponDamage() . " points de dégats et vous disposez de l'armure " . $this->getShield() . " vous donnant " . $this->getShieldValue() . " points d'armure !</p>";
    }

    /**
     * Exercice 7
     * Créer une méthode attacked dans la classe Hero permettant au Héros de prendre des dégâts en considérant la valeur du bouclier.
     */
    public function attacked($valueDamage)
    {
        $realDamage = $valueDamage - $this->getShieldValue();
        $takeDamage = $this->getHealth() - $realDamage;
        $this->setHealth($takeDamage);
        return $realDamage;
    }

    public function addRage()
    {
        $rage = $this->getRage() + 30;
        $this->setRage($rage);
    }
}
