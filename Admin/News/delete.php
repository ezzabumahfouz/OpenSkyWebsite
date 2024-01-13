<?php
include "../../DB/db_conn.php";
$News_ID = $_GET["News_ID"];
$sql = "DELETE FROM `news` WHERE News_ID = $News_ID";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: News.php?msg=News deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
