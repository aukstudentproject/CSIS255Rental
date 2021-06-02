<?php
include("connection.php");



    $name = $_POST['name'];
    $civilid =  $_POST['civilid'];
    $gender =  $_POST['gender'];
    $address =  $_POST['address'];
    $city =  $_POST['city'];
    $phone =  $_POST['phone'];

    $cartype =  $_POST['cartype'];
    $year =  $_POST['year'];

    $rentaltype = $_POST['rentaltype'];


    $unit =  $_POST['unit'];


            $sql = "INSERT INTO customers (name, civil_id, phone_number, gender, address, city) ";
            $sql .= "VALUES ('$name', '$civilid', '$phone', '$gender', '$address', '$city')";
            $insert = mysqli_query($connection, $sql);

            $mid = $connection->insert_id;

            $sql = "INSERT INTO registrations (car_type, year_id, rental_type_id, price, customer_id) ";
            $sql .= "VALUES ('$cartype', '$year', '$rentaltype', '$unit', '$mid')";
            $insert = mysqli_query($connection, $sql);


            if($insert){
                header("Location: thanks.php?success");
            }else{
                die("Query Failed " . mysqli_error($connection));
            }
?>
