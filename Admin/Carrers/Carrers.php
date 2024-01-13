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

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #11999e; color:white;">
    Carrers Panel
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
    <a href="add-new.php" class="btn btn-dark mb-3" style="background-color: #443cf4" >Add Job</a>

    <table class="table table-hover text-center" style="width=100%;">
      <thead class="table-dark">
        <tr>
          <th scope="col"  style="text-align: start;"> #</th>
          <th scope="col"  style="text-align: start;"> Title</th>
          <th scope="col"  style="text-align: start;"> Description</th>
          <th scope="col"  style="text-align: start;"> Experienced</th>
          <th scope="col"  style="text-align: start;"> Link</th>


          <th scope="col"  style="text-align: start;"> Edit/Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `jobs`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <tr>
            <td  style="text-align: start;">
              <?php echo $row["Job_ID"] ?>
            </td>
            <td style="text-align: start;">
              <?php echo $row["Job_Title"] ?>
            </td>
            <td style="text-align: start;">
              <?php echo $row["Job_Description"] ?>
            </td>
            <td style="text-align: start;">
              <?php echo $row["Job_Experienced"] ?>
            </td>
            <td style="text-align: start;">
              <?php echo $row["Job_Link"] ?>
            </td>
            <td>
              <a href="edit.php?Job_ID=<?php echo $row["Job_ID"] ?>   " class="link-dark"  ><i
                  class="fa-solid fa-pen-to-square fs-5 me-3 blue" style="color: #443cf4;"></i></a>
              <a href="delete.php?Job_ID=<?php echo $row["Job_ID"] ?>" class="link-dark"><i
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