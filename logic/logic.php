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

/* ******************************************************** POST *************************************************************/

    function addAppointment($conn){
        $sql = "INSERT INTO appointment(idservice, idclient, idstylist, idreceptionist, startdatetime, enddatetime, previousapt, previousservice) VALUES ('$idservice', '$idclient', '$idstylist', '$idreceptionist', '$startdatetime', '$enddatetime', '$previousapt', '$previousservice')";
        $result = mysqli_query($conn,$sql);
        return $result;
    }

    function addClient($conn){
        $sql = "INSERT INTO client(salonno, phone, firstname, lastname, email, address, postalcode, city, stateorprovince, country, discount) VALUES ('$salonno', '$phone', '$firstname', '$lastname', '$email', '$address', '$postalcode', '$city', '$stateorprovince', '$country', '$discount')";
        $result = mysqli_query($conn,$sql);
        return $result;
    }

    function addEmployee($conn){
        $sql = "INSERT INTO employee(idsalon, firstname, lastname, phone, email, address, postalcode, city, stateorprovince, country) VALUES ('$idsalon', '$firstname', '$lastname', '$phone', '$email', '$address', '$postalcode', '$city', '$stateorprovince', '$country')";
        $result = mysqli_query($conn,$sql);
        return $result;
    }

    function addEquipment($conn){
        $sql = "INSERT INTO equipment(employeeno, name) VALUES ('$employeeno', '$name')";
        $result = mysqli_query($conn,$sql);
        return $result;
    }

    function addHairCharacteristics($conn){
        $sql = "INSERT INTO haircharacteristics(clientno, colorformula, length, texture, style, notes) VALUES ('$clientno', '$colorformula', '$length', '$texture', '$style', '$notes')";
        $result = mysqli_query($conn,$sql);
        return $result;
    }

    function addReceptionist($conn){
        $sql = "INSERT INTO receptionist(employeeid) VALUES ('$employeeid')";
        $result = mysqli_query($conn,$sql);
        return $result;
    }

    function addService($conn){
        $sql = "INSERT INTO service(serviceid, haircut, updo, perm, shampoo, styling, color, cost, equipmentno) VALUES ('$serviceid', '$haircut', '$updo, '$perm', '$shampoo', '$styling', '$color', '$cost', '$equipmentno')";
        $result = mysqli_query($conn,$sql);
        return $result;
    }

    function addStylist($conn){
        $sql = "INSERT INTO stylist(idhairstylist) VALUES ('$idhairstylist')";
        $result = mysqli_query($conn,$sql);
        return $result;
    }


/* ******************************************************** DELETE ***********************************************************/

function deleteAppointment($conn){
    $sql = "DELETE FROM appointment WHERE idservice = '$idservice'";
    $result = mysqli_query($conn,$sql);
    return $result;
}

function deleteClient($conn){
    $sql = "DELETE FROM client WHERE clientid = '$clientid'";
    $result = mysqli_query($conn,$sql);
    return $result;
}

function deleteEmployee($conn){
    $sql = "DELETE FROM employee WHERE employeeid = '$employeeid'";
    $result = mysqli_query($conn,$sql);
    return $result;
}

function deleteEquipment($conn){
    $sql = "DELETE FROM equipment WHERE equipmentid = '$equipmentid'";
    $result = mysqli_query($conn,$sql);
    return $result;
}

function deleteHairCharacteristics($conn){
    $sql = "DELETE FROM haircharacteristics WHERE clientno = '$clientno'";
    $result = mysqli_query($conn,$sql);
    return $result;
}

function deleteReceptionist($conn){
    $sql = "DELETE FROM receptionist WHERE receptionistid = '$receptionistid'";
    $result = mysqli_query($conn,$sql);
    return $result;
}

function deleteSalon($conn){
    $sql = "DELETE FROM salon WHERE salonid = '$salonid'";
    $result = mysqli_query($conn,$sql);
    return $result;
}

function deleteService($conn){
    $sql = "DELETE FROM service WHERE serviceid = '$serviceid'";
    $result = mysqli_query($conn,$sql);
    return $result;
}

function deleteStylist($conn){
    $sql = "DELETE FROM stylist WHERE idhairstylist = '$idhairstylist'";
    $result = mysqli_query($conn,$sql);
    return $result;
}

/* *********************************************************** PUT ***********************************************************/

// Maybe not needed.. last priority

?>