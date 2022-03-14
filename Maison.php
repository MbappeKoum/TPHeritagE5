<?php

include './Batiment.php';
include './BatiHome.php';

class Maison extends Batiment {



    public bool $garage;

    public bool $cheminee;



    public function __construct(bool $garage, bool $cheminee ) {

        $this->$garage = $garage;

        $this->$cheminee = $cheminee;




    }

    public function getCheminee()

    {

        return $this->cheminee;

    }

    public function getGarage()

    {

        return $this->garage;

    }

        }




?>