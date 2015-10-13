<?php
namespace controller;
require_once("Model/DogDAL.php");
class MasterController
{
    private $mysqli;

    function __construct()
    {
        $this->mysqli = new \mysqli("localhost", "test", "123456", "202794-aussiegalleri");
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
    }

    public function doTests()
    {
        $testDog = new \model\DogDAL($this->mysqli);
        $testDog->_test();
    }
}