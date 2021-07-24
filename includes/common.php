<?php
    $conn = mysqli_connect("localhost", "root", "") or die(mysqli_error($conn));
    
    if(!isset($_SESSION)){
        session_start();
    }
 $sql="CREATE DATABASE IF NOT EXISTS store";
 mysqli_query($conn, $sql);


$sql="CREATE TABLE store.users(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    contact VARCHAR(255) NOT NULL,
    city VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL)";

    mysqli_query($conn,$sql);


    
   $sql="CREATE TABLE store.shop(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    url VARCHAR(255) NOT NULL,
    details VARCHAR(255) NOT NULL,
    price INT(11) NOT NULL)";

mysqli_query($conn,$sql);
    //value..

    $sql="INSERT INTO store.shop(id,url,details,price) VALUES  (1,'images_s/shoes1.jpg','Nike shoes1',3000),
    (2,'images_s/shoes2.jpg','Nike shoes2',3000),
    (3,'images_s/shoes3.jpg','Nike shoes3',3000),
    (4,'images_s/shoes4.jpg','Nike shoes4',3000),
    (5,'images_d/dress1.jpg','traditional dress1',2500),
    (6,'images_s/shoes5.jpg','Nike shoes5',3000),
    (7,'images_w/watch1.jpg','Fossil watch1',2000),
    (8,'images_d/dress2.jpg','traditional dress2',2500),
            (9,'images_d/dress3.jpg','traditional dress3',2500),
            (10,'images_d/dress4.jpg','traditional dress4',2500),
            (11,'images_d/dress5.jpg','traditional dress5',2500),
            (12,'images_d/dress6.jpg','traditional dress6',2500),
            (13,'images_d/dress7.jpg','traditional dress7',2500),
            (14,'images_d/dress8.jpg','traditional dress8',2500),
    (15,'images_s/shoes6.jpg','Nike shoes6',3000),
    (16,'images_s/shoes7.jpg','Nike shoes7',3000),
    (17,'images_w/watch2.jpg','Fossil watch2',2000),
        (18,'images_w/watch3.jpg','Fossil watch3',2000),
        (19,'images_w/watch4.jpg','Fossil watch4',2000),
        (20,'images_w/watch5.jpg','Fossil watch5',2000),
        (21,'images_w/watch6.jpg','Fossil watch6',2000),
        (22,'images_w/watch7.jpg','Fossil watch7',2000),
        (23,'images_w/watch8.jpg','Fossil watch8',2000),
    (24,'images_s/shoes8.jpg','Nike shoes8',3000),
    (25,'images_s/shoes9.jpg','Nike shoes9',3000),
    (26,'images_s/shoes10.jpg','Nike shoes10',3000),
    (27,'images_s/shoes11.jpg','Nike shoes11',3000),
    (28,'images_s/shoes12.jpg','Nike shoes12',3000)";

mysqli_query($conn,$sql);


    


$sql="CREATE TABLE store.users_shop(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    user_id INT(11) NOT NULL,
    item_id INT(11) NOT NULL,
    quantity INT(11) NOT NULL,
    status enum('Added to cart', 'Confirmed') NOT NULL,
    timeoforder TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
   
    FOREIGN KEY(user_id) REFERENCES users(id) ,/*for reflecting the changes of primary key where it is foreign key. ON UPDATE CASCADE*/
   	FOREIGN KEY(item_id) REFERENCES shop(id) )";

        mysqli_query($conn,$sql);




   $sql="CREATE TABLE store.shoes(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    url VARCHAR(255) NOT NULL,
    details VARCHAR(255) NOT NULL,
    price INT(11) NOT NULL)";

    mysqli_query($conn, $sql);

    $sql="INSERT INTO store.shoes(id,url,details,price) VALUES  (1,'images_s/shoes1.jpg','Nike shoes1',3000),
    (2,'images_s/shoes2.jpg','Nike shoes2',3000),
    (3,'images_s/shoes3.jpg','Nike shoes3',3000),
    (4,'images_s/shoes4.jpg','Nike shoes4',3000),
    (6,'images_s/shoes5.jpg','Nike shoes5',3000),
    (15,'images_s/shoes6.jpg','Nike shoes6',3000),
    (16,'images_s/shoes7.jpg','Nike shoes7',3000),
    (24,'images_s/shoes8.jpg','Nike shoes8',3000),
    (25,'images_s/shoes9.jpg','Nike shoes9',3000),
    (26,'images_s/shoes10.jpg','Nike shoes10',3000),
    (27,'images_s/shoes11.jpg','Nike shoes11',3000),
    (28,'images_s/shoes12.jpg','Nike shoes12',3000)";

     mysqli_query($conn, $sql);

     $sql="CREATE TABLE store.watches(
        id INT(11) PRIMARY KEY AUTO_INCREMENT,
        url VARCHAR(255) NOT NULL,
        details VARCHAR(255) NOT NULL,
        price INT(11) NOT NULL)";
    
        mysqli_query($conn, $sql);
        $sql="INSERT INTO store.watches(id,url,details,price) VALUES  (7,'images_w/watch1.jpg','Fossil watch1',2000),
         (17,'images_w/watch2.jpg','Fossil watch2',2000),
         (18,'images_w/watch3.jpg','Fossil watch3',2000),
         (19,'images_w/watch4.jpg','Fossil watch4',2000),
         (20,'images_w/watch5.jpg','Fossil watch5',2000),
         (21,'images_w/watch6.jpg','Fossil watch6',2000),
         (22,'images_w/watch7.jpg','Fossil watch7',2000),
         (23,'images_w/watch8.jpg','Fossil watch8',2000)";
    
         mysqli_query($conn, $sql);
         $sql="CREATE TABLE store.dresses(
            id INT(11) PRIMARY KEY AUTO_INCREMENT,
            url VARCHAR(255) NOT NULL,
            details VARCHAR(255) NOT NULL,
            price INT(11) NOT NULL)";
        
            mysqli_query($conn, $sql);
            $sql="INSERT INTO store.dresses(id,url,details,price) VALUES  (5,'images_d/dress1.jpg','traditional dress1',2500),
             (8,'images_d/dress2.jpg','traditional dress2',2500),
             (9,'images_d/dress3.jpg','traditional dress3',2500),
             (10,'images_d/dress4.jpg','traditional dress4',2500),
             (11,'images_d/dress5.jpg','traditional dress5',2500),
             (12,'images_d/dress6.jpg','traditional dress6',2500),
             (13,'images_d/dress7.jpg','traditional dress7',2500),
             (14,'images_d/dress8.jpg','traditional dress8',2500)";
        
             mysqli_query($conn, $sql);
        


    ?>