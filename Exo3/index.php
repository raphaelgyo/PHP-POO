<?php

/**
 * Exercice 3 :
 * Créer la méthode chat qui prend en paramètre une variable charac de type STRING dans la classe character. Cette méthode renvoie un STRING.
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
