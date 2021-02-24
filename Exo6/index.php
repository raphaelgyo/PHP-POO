<?php

/**
 * Exercice 6 :
 * Créer une classe stuff. Faire les attributs suivants qui sont tous de type string :
 * - head
 * - body
 * - weapon
 * Faire dans les méthodes suivantes :
 * - construct
 * - view de type STRING
 * - destruct
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

    public function useHammer(): bool
    {
        return true;
    }

    public function useSword(): bool
    {
        return false;
    }
}
