<?php
include 'Batiment.php';
class Immeuble extends Batiment{
  
public function getascenseur ()
{
}
public function getnbAppartement ()
{
}


public function getgarage ()
{
}

public function __construct(bool $ascenseur, int $nbAppartement, bool $garage){
  
    $this->ascenseur = $ascenseur;
    $this->nbAppartement = $nbAppartement;
    $this->garage = $garage;

  }

}

public function getascenseur ()
{
    return $this->ascenseur;
}

public function getnbAppartement ()
{
    return $this->nbAppartement;
}


public function getgarage()
{
    return $this->garage;
}







?>