<?php

namespace classes;

class Shop
{
    public function __construct()
    {
        if(isset($_SESSION["step"])){
            $_SESSION["step"] = 1;
        }

        if(isset($_SESSION["step"])){
            $_SESSION["reservation"] = [];
        }
    }

    public function getStep() : int
    {
        return $_SESSION["step"];
    }

    public function saveStep1(array $data) : void
    {
        $_SESSION['reservation']['phase'] = $data['phase'] ?? '';
        $_SESSION['reservation']['email'] = $data['email'] ?? '';
        $_SESSION['step'] = 2;
    }

    public function getReservationData() : array
    {
        return $_SESSION['reservation'];
    }

}