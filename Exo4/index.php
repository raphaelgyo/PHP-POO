<?php

/**
 * Exercice 4 :
 * Créer une classe orc qui hérite de la classe character. Faire un attribut health de type INT qui prend la valeur 1000.
 */
class Character
{
    protected int $_health;
    protected int $_mana;

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

    public function chat(string $charac): string
    {
        return 'Beuarg ! ' . $charac;
    }
}
class Orc extends Character
{
    protected int $_health = 1000;
}
