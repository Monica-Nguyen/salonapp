<?php

/* ******************************************************** GETS ***********************************************************/

    function getSalons($conn){

        $sql = "SELECT * FROM salon";
        $result = mysqli_query($conn,$sql);

        return $result;
    }

    function getEmployees($conn){
        $sql = "SELECT * FROM employee";
        $result = mysqli_query($conn, $sql);
        
        return $result;
    }

    function getClients($conn){

        $sql = "SELECT * FROM client";
        $result = mysqli_query($conn,$sql);

        return $result;
    }

    function getStylists($conn){

        $sql = "SELECT * FROM stylist";
        $result = mysqli_query($conn,$sql);

        return $result;
    }

    function getReceptionists($conn){

        $sql = "SELECT * FROM receptionist";
        $result = mysqli_query($conn,$sql);

        return $result;
    }

    function getAppointments($conn){

        $sql = "SELECT * FROM appointment";
        $result = mysqli_query($conn,$sql);

        return $result;
    }

    function getHairCharacteristics($conn){

        $sql = "SELECT * FROM haircharacteristics";
        $result = mysqli_query($conn,$sql);

        return $result;
    }

    function getEquipment($conn){

        $sql = "SELECT * FROM equipment";
        $result = mysqli_query($conn,$sql);

        return $result;
    }

    function getServices($conn){
        $sql = "SELECT * FROM service";
        $result = mysqli_query($conn,$sql);

        return $result;
    }

/* *********************************************************** PUT ***********************************************************/



/* ******************************************************** POST *************************************************************/




/* ******************************************************** DELETE ***********************************************************/


?>