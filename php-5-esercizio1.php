<?php

class Continent{
    public $nameContinent;

     public function __construct($nameContinent) {
        $this->nameContinent = $nameContinent;
    }

    public function getMyCurrentLocation(){
        return "Mi trovo in" . " " . $this->nameContinent;
    }
}


class Country extends Continent{
  public $nameCountry;

  public function __construct($nameContinent,$nameCountry){
    parent::__construct($nameContinent);
    $this->nameCountry = $nameCountry;
  }

  public function getMyCurrentLocation(){
    return parent:: getMyCurrentLocation() . "," . $this->nameCountry;
  }
}


class Region extends Country{
    public $nameRegion;

    public function __construct($nameContinent,$nameCountry,$nameRegion){
        parent::__construct($nameContinent,$nameCountry);
        $this->nameRegion = $nameRegion;
    }


    public function getMyCurrentLocation(){
        return parent:: getMyCurrentLocation() . "," . $this->nameRegion;
    }
}




class Province extends Region{
    public $nameProvince;

    public function __construct($nameContinent,$nameCountry,$nameRegion,$nameProvince){
        parent::__construct($nameContinent,$nameCountry,$nameRegion);
        $this->nameProvince = $nameProvince;
    }

    public function getMyCurrentLocation(){
        return parent:: getMyCurrentLocation() . "," . $this->nameProvince;
    }
}


class City extends Province{
    public $nameCity;


    public function __construct($nameContinent,$nameCountry,$nameRegion,$nameProvince,$nameCity){
        parent::__construct($nameContinent,$nameCountry,$nameRegion,$nameProvince);
        $this->nameCity = $nameCity;
    }

    public function getMyCurrentLocation(){
        return parent:: getMyCurrentLocation() . "," . $this->nameCity;
    }
}



class Street extends City{
    public $nameStreet;


    public function __construct($nameContinent,$nameCountry,$nameRegion,$nameProvince,$nameCity,$nameStreet){
        parent::__construct($nameContinent,$nameCountry,$nameRegion,$nameProvince,$nameCity);
        $this->nameStreet = $nameStreet;
    }


    public function getMyCurrentLocation(){
        return parent:: getMyCurrentLocation() . "," . $this->nameStreet;
    }
}

$myLocation = New Continent("Europa,Italia,Puglia,BA,Bari,Strada San Giorgio Martire 2D");

echo $myLocation->getMyCurrentLocation();