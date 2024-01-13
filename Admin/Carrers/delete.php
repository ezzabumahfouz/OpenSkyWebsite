<?php
include "../../DB/db_conn.php";
$Job_ID = $_GET["Job_ID"];
$sql = "DELETE FROM `jobs` WHERE Job_ID = $Job_ID";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: Carrers.php?msg=News deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
