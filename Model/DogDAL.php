<?php
namespace model;
class DogDAL{
    private $dogID;
    private $name;
    private $regnr;
    private $sex;
    private $color;
    private $sire;
    private $dam;
    private $dayOfBirth;

    public function __construct(){
        $this->dogID = 1;
        $this->name ="Kalle";
        $this->regnr="1235";
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