<?php
class Character
{
    /**
     * Exercice 1
     * Créer un fichier Character.php, dans ce fichier créer une classe Character ayant pour attributs health et rage.
     * Les attributs ne doivent être accessibles pour personne !
     */
    private $health;
    private $rage;

    /**
     * Exercice 2
     * Créer les méthodes permettant d'accéder aux attributs de la classe Character et permettant également de les définir.
     */
    public function getHealth() // getter
    {
        return $this->health;
    }
    public function setHealth($value) // setter
    {
        $this->health = $value;
    }

    public function getRage() // getter
    {
        return $this->rage;
    }
    public function setRage($value) // setter
    {
        $this->rage = $value;
    }

    /**
     * Exercice 3
     * Créer la méthode magique construct de la classe Character.
     * Celle-ci doit permettre la création d'un nouveau personnage et doit donc définir les valeurs de health et de rage.
     */
    public function __construct($healthValue, $rageValue)
    {
        $this->setHealth($healthValue);
        $this->setRage($rageValue);
    }
}

// class R2D2
// {
//     private $color;

//     public function __construct($value)
//     {
//         $this->changeColor($value);
//     }
//     public function changeColor($value)
//     {
//         $this->color = $value;
//     }

//     public function showColor()
//     {
//         return $this->color;
//     }
// }
// $R2D2 = new R2D2('white');
// echo $R2D2->showColor();
