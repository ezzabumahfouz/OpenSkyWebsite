<?php
include "db_conn.php";
$News_ID = $_GET["News_ID"];
$sql = "DELETE FROM `news` WHERE News_ID = $News_ID";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: index.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}