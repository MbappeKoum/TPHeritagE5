<?php
include 'Maison.php';
include 'Immeuble.php';
include 'Cabane.php';
include 'BatiStructure.php';
class Batiment extends BatiStructure {
    private String $nom;
    private int $superficie;
    private String $type;
    private int $nbEtage;

    public function __construct(String $nom, int $superficie, String $type, int $nbEtage){
  
      $this->nom = $nom;
      $this->superficie = $superficie;
      $this->type = $type;
      $this->nbEtage = $nbEtage;

    }

    public function getnom ()
{
    return $this->nom;
}

public function getsuperficie ()
{
    return $this->superficie;
}


public function gettype ()
{
    return $this->type;
}


public function getnbEtage ()
{
    return $this->nbEtage;
}



}













?>