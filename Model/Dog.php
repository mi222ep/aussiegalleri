<?php
namespace model;
require_once("model/DogDAL.php");
Class Dog{
    private $dogID;
    private $name;
    private $regnr;
    private $sex;
    private $color;
    private $sire;
    private $dam;
    private $dayOfBirth;

    public function __construct(DogDAL $database){
        $this->dogID = 1;
        $this->name =$database->getDogNameFromDB();
        $this->regnr=$database->getRegnrFromDB();
        $this->sex="male";
        $this->color="blue";
        $this->sire="Johan";
        $this->dam="Lisa";
        $this->dayOfBirth="2015-02-03";
    }
    public function _test(){
        echo $this->dogID, $this->name, $this->regnr, $this->sex, $this->color, $this->sire, $this->dam, $this->dayOfBirth;
    }
}