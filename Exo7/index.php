<?php

/**
 * Exercice 7 :
 * Ajouter dans la classe character un attribut stuff de type STUFF.
 */
class Stuff
{
    public string $_head;
    public string $_body;
    public string $_weapon;

    public function __construct(string $head, string $body, string $weapon)
    {
        $this->_head = $head;
        $this->_body = $body;
        $this->_weapon = $weapon;
    }

    public function __destruct()
    {
        $this->_head = null;
        $this->_body = null;
        $this->_weapon = null;
    }

    public function view(string $param): string
    {
        return $param;
    }
}
class Character extends Stuff
{
    protected int $_health;
    protected $_mana;

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
        return 'Fuck ' . $charac;
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
