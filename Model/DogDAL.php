<?php
namespace model;
class DogDAL{
    private $db;

    //Static database column names
    private static $name = "name";
    private static $regnr = "regnr";

    public function __construct(\mysqli $db){
        $this->db = $db;
}
    private function getSingleValueFromDB($neededValue, $dogID){
        $temp ="";
        $stmt = $this->db->prepare("select ".$neededValue." from dog where dogID ='$dogID'");
        if ($stmt === FALSE) {
            throw new \Exception($this->db->error);
        }
        $stmt->execute();
        $stmt->bind_result($password);
        while ($stmt->fetch()) {
            $temp = $password;
        }
        return $temp;
    }
    public function getDogNameFromDB(){
        $name = $this->getSingleValueFromDB(self::$name, 2);
        return $name;
    }
    public function getRegnrFromDB(){
        $name = $this->getSingleValueFromDB(self::$regnr, 2);
        return $name;
    }
}