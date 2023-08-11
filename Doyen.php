<?php

class Doyen {

    public string $bureau = "Décanat Informatique";
    protected ?string $nom;
    public function __construct(?string $nom = NULL)
    {
        $this->nom = $nom;
    }

}