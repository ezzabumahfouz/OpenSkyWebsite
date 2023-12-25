<?php

//lets make a connection with Addtonews database

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "open_sky_db";

$conn = new mysqli($servername,$username,$password,$db_name);



// if(isset($_GET["news_News_ID"])){
//     $product_News_ID = $_GET["news_News_ID"];
//     $sql = "DELETE FROM news WHERE product_News_ID=".$product_News_ID;

//     if($conn->query($sql) === TRUE){
//         echo "Removed from news";
//     }
// }

?>