<?php
    require "includes/common.php";
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $contact = mysqli_real_escape_string($conn, $_POST["contact"]);
    $city = mysqli_real_escape_string($conn, $_POST["city"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);
    $password = md5($password);
    $query = "SELECT id FROM users WHERE email = '$email' AND password = '$password'";

    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){

        echo "Email id already exists. Please try another id.";
    }else{
        $query = "INSERT INTO epiz_30090771_Shop.users (name, email, password, contact, city, address) VALUES ('$name', '$email', '$password', '$contact', '$city', '$address')";
        $result = mysqli_query($conn, $query);
        $_SESSION["email"] = $email;
        $_SESSION["id"] = mysqli_insert_id($conn);
        header("location: shop.php");
    }
?>