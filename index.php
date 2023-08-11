<?php

require "autoload.php";

$moses = new Etudiant("Moses");

$ozil = new Promotionnel("Ozil");

$deo = new Etudiant("Déo");

$gabin = new Doyen("Gabin");


echo $ozil->volerArgent();
