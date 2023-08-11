<?php

class Etudiant {

    public string $promotion = "L2 CSI";
    protected ?string $nom;
    public function __construct(?string $nom = NULL)
    {
        $this->nom = $nom;
    }

    protected function etudier() : string
    {
        return "Projet PHP";
    }


}