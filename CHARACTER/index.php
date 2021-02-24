<?php

/**
 * Exercice 13
 * Créer un fichier index.php sur lequel devront être appelés les fichiers Character.php, Hero.php et Orc.php.
 * Sur ce fichier, créer 2 objets :

 * - hero, faisant appel à la classe Hero, celui-ci doit avoir 2000 points de vie, 0 points de rage, 600 points d'armure, 250 points de dégâts pour l'arme, les noms de l'arme et de l'armure vous revient,

 * - orc, faisant appel à la classe Orc, celui-ci doit avoir 500 points de vie et 0 points de rage.
 */
require 'Character.php';
require 'Hero.php';
require 'Orc.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EXTREME FIGHTING TOURNAMENT</title>
</head>

<body>
    <?php
    $hero = new Hero(2000, 0, "La faiseuse de Veuves", 250, "Cristal Pur", 600);
    $orc = new Orc(500, 0);
    ?>

    <h1>Let's Fight !</h1>
    <?php
    /**
     * Exercice 14
     * Faites attaquer l'Orc jusqu'à ce que le Héros tombe à court de points de vie. (Pour l'instant seul l'orc attaque)
     * Pour chaque attaque de l'Orc, une phrase contenant toutes les informations de l'assaut doit être affichée (dégâts de l'Orc, dégâts absorbés par le bouclier, dégâts non absorbés, rage actuelle du Héros et santé restante du Héros)
     */
    while ($hero->getHealth() > 0) {
        $damage = $orc->attack();
        $realDamage = $hero->attacked($damage);
    ?>
        <p>L'orc vous inflige <?= $damage ?> dégâts, mais grâce à votre armure vous ne perdez que <?= $realDamage ?> points de vie</p>
        <?php
        if ($hero->getHealth() < 0) {
        ?>
            <p>Vous êtes mort !</p>
            <a href="index.php">Essayez à nouveau !</a>
        <?php
        } else {
        ?>
            <p>Il vous reste donc <?= $hero->getHealth() ?> points de vie</p>

            <p>Vous avez <?= $hero->getRage() ?> points de rage</p>
    <?php
        }
    }
    ?>
</body>

</html>