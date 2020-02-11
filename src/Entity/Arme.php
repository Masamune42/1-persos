<?php


namespace App\Entity;


class Arme
{
    public $nom;
    public $description;
    public $degat;

    public static $armes = [];

    public function __construct($nom, $description, $degat)
    {
        $this->nom = $nom;
        $this->description = $description;
        $this->degat = $degat;

        self::$armes[] = $this;
    }

    public static function creerArme()
    {
        $a1 = new Arme('épée', 'Une superbe épée tranchante', 10);

        $a2 = new Arme('hache', 'Une arme ou un outil',15);

        $a3 = new Arme('arc','Une arme à distance',7);
    }

    public static function getArmeParNom($nom)
    {
        foreach (self::$armes as $arme) {
            if (strtolower(str_replace("é","e",$arme->nom)) === $nom) {
                return $arme;
            }
        }
    }

}