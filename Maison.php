<?php
include 'Batiment.php';
include 'BatiHome.php';
class Immeuble {
  
    public function getgarage ()
    {
    }
    public function getcheminee()
    {
    }
    
    public function __construct(bool $garage, bool $cheminee){
  
        $this->ascenseur = $garage;
        $this->nbAppartement = $cheminee;
       
    
      }
    }










?>