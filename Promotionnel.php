<?php

class Promotionnel extends Etudiant
{
    public function __construct(?string $nom = NULL)
    {
        parent::__construct('Promo : ' . $nom);
    }

    public function volerArgent()
    {
        return "Ozil est un voleur";
    }

    protected function etudier(): string
    {
        return "MCPI"; // TODO: Change the autogenerated stub
    }

}