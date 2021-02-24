<?php

/**
 * Exercice 2 :
 * Créer les deux méthodes magiques construct et destruct dans la classe character.
 */
class Character
{
    public int $_health;
    public int $_mana;

    public function __construct($health, $mana)
    {
        $this->_health = $health;
        $this->_mana = $mana;
    }

    public function __destruct()
    {
        $this->_health = null;
        $this->_mana = null;
    }
}
