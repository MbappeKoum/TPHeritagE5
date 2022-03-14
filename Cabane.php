<?php
include 'Batiment.php';
class Cabane extends batiment{

private String $nom;
private int $superficie;
private String $type;
private int $etage;

public function __construct(String $nom, int $superficie, String $type, int $etage){
  
    $this->nom = $nom;
    $this->superficie = $superficie;
    $this->type = $type;
    $this->nbEtage = $etage;


}

}

?>