<?php
include "../../DB/db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Admin | Open Sky Technology</title>
</head>

<!-- Nav Bar -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:0;}

.icon-bar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.icon-bar a {
  float: left;
  width: 20%;
  text-align: center;
  padding: 12px 0;
  transition: all 0.3s ease;
  color: white;
  font-size: 36px;
}

.icon-bar a:hover {
  background-color: #000;
}

.active {
  background-color: #11999e;
}
</style>
<body>

<div class="icon-bar">
  <a  href="../../index.html"><i class="fa fa-home"></i></a> 
  <a class="active" href="#"><i class="fa fa-newspaper-o"></i></a> 
  <a  href="../Carrers/Carrers.php"><i class="fa fa-building-o"></i></a> 
  <!-- <a href="#"><i class="fa fa-globe"></i></a> -->
</div>
<!-- End Nav Bar -->

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #11999e; color:white;">
    News Panel
  </nav>

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <a href="add-new.php" class="btn btn-dark mb-3" style="background-color: #443cf4" >Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col"  style="text-align: start;"> #</th>
          <th scope="col"  style="text-align: start;"> Title</th>
          <th scope="col"  style="text-align: start;"> Description</th>

          <th scope="col"  style="text-align: start;"> Edit/Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `news`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <tr>
            <td  style="text-align: start;">
              <?php echo $row["News_ID"] ?>
            </td>
            <td style="text-align: start;">
              <?php echo $row["News_Title"] ?>
            </td>
            <td style="text-align: start;">
              <?php echo $row["News_Description"] ?>
            </td>
            <td>
              <a href="edit.php?News_ID=<?php echo $row["News_ID"] ?>   " class="link-dark"  ><i
                  class="fa-solid fa-pen-to-square fs-5 me-3 blue" style="color: #443cf4;"></i></a>
              <a href="delete.php?News_ID=<?php echo $row["News_ID"] ?>" class="link-dark"><i
                  class="fa-solid fa-trash fs-5" style="color: #ff0021;"></i></a>
            </td>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

</body>

</html>