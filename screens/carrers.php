<?php

require_once '../DB/connection.php';

$sql = "SELECT * FROM jobs";
$all_product = $conn->query($sql);
// 
if (isset($_GET["Job_ID"])) {
    $product_Job_ID = $_GET["Job_ID"];
    $sql = "SELECT * FROM jobs";
    $result = $conn->query($sql);
    $total_jobs = "SELECT * FROM jobs";
    $total_jobs_result = $conn->query($total_jobs);
    $jobs_num = mysqli_num_rows($total_jobs_result);

    if (mysqli_num_rows($result) > 0) {
        $in_jobs = "already In jobs";

        echo json_encode(["num_jobs" => $jobs_num, "in_jobs" => $in_jobs]);
    } else {

    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../style/carrersStyle.css" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <title>Carrers | Open Sky</title>

    <!-- Additional things -->


    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Additional CSS Files -->

    <!-- End -->
</head>

<body>
    <div class="navbar">
        <a href="../index.html"><img class="logo" src="../assets/images/opanSkySoftware.png" /></a>
        <p>
            ....................................................................
        </p>

        <div class="dropdown">
            <button class="dropbtn">
                About
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <div class="row">
                    <div class="column">
                        <h3>Who we are</h3>
                        <a href="../screens/knowMore.html">Know More</a>
                        <a href="../screens/businessProcess.html">The Way We Work</a>
                        <a href="../screens/knowMore.html#ve">Values & Ethics</a>
                    </div>
                    <div class="column">
                        <h3>Management</h3>
                        <a href="../screens/management.html"> Board of Directors</a>
                        <a href="../screens/management.html">Management Team</a>
                    </div>
                    <div class="column">
                        <h3>Contact Us</h3>
                        <a href="../screens/contactus.html">Get In Touch</a>
                        <a href="../screens/contactus.html">Location</a>
                        <a href="#">Join Our Team</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="../screens/service.html">Services</a>
        <a href="../screens/partner.html">Partners</a>
        <a href="../screens/news.php">News</a>
    </div>
    <style>
        .navbar a img {
            height: 93px;
            width: 156px;
            background-size: contain;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
        }

        .navbar {
            overflow: hidden;
            background-color: #11999e;
            font-family: Arial, Helvetica, sans-serif;
            justify-content: start;

            position: sticky;
            top: 0;
            z-index: 1;
        }

        .navbar p {
            color: #11999e;
        }

        .navbar a {
            float: left;
            font-size: 18px;
            color: white;
            text-align: center;
            padding: 10px 18px;
            text-decoration: none;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 18px;
            border: none;
            outline: none;
            color: white;
            padding: 10px 18px;
            background-color: inherit;
            /* font: inherit; */
            margin: 0;
            font-weight: 500;
        }

        .navbar a:hover,
        .dropdown:hover .dropbtn {
            background-color: #ddd;
            color: #11999e;
            border-radius: 3px;
            transition: 0.3s;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #22cccfc6;
            width: 50%;
            left: 25%;
            box-shadow: 1px 8px 16px 1px rgba(0, 0, 0, 0.2);

            /* box-shadow: 1px 4px 9px 3px rgba(17, 153, 158, 0.64);
          -webkit-box-shadow: 1px 4px 9px 3px rgba(17, 153, 158, 0.64);
          -moz-box-shadow: 1px 4px 9px 3px rgba(17, 153, 158, 0.64); */
            border-radius: 30px;
            /* z-index: 9999; */
            position: fixed;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Create three equal columns that floats next to each other */
        .column {
            float: left;
            width: 33.33%;
            padding: 10px;

            background-color: #ccc;
            height: 200px;
        }

        .column h3 {
            padding-bottom: 20px;
            padding-top: 10px;
        }

        .column a {
            float: none;
            color: black;
            padding: 10px;
            text-decoration: none;
            display: block;
            text-align: left;
            font-size: 15px;
        }

        .column a:hover {
            background-color: #ddd;
        }

        /* Clear floats after the columns */

        .row:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
    <div class="title">
        <h1>Carrers </h1>
    </div>








    <!-- new cards -->
    <div class="NewCarrers">


        <ol style="--length: 5" role="list">

            <section class="dl-blurbs">
                <dl>
                    <?php
                    while ($row = mysqli_fetch_assoc($all_product)) {
                        ?>
                        <div class="container">
                            <h1 class="center">
                                <?php echo $row["Job_Title"]; ?>
                            </h1>



                            <article class="episode">
                                <div class="episode__number">
                                    <?php echo $row["Job_ID"]; ?>
                                </div>
                                <div class="episode__content">
                                    <div class="title">
                                        <?php echo $row["Job_Experienced"]; ?>
                                    </div>
                                    <div class="story">
                                        <p>
                                            <?php echo $row["Job_Description"]; ?>
                                        </p>
                                        <div class="colored">
                                            <p> <a target="_blank" href="<?php echo $row["Job_Link"]; ?> ">View In Linkedin</a>
                                            </p>

                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <?php

                    }
                    ?>


            </section>

        </ol>



    </div>

    <!-- Style -->
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        body {
            background: white;
            color: black;
            font-family: 'Poppins', sans-serif;
            margin: 0;
        }

        p {
            margin: 0 0 13px 0;
        }

        .colored a {
            color: #11999e;

        }

        a {
            color: black;
        }

        .center {
            text-align: center;
        }

        .container {
            width: 95%;
            max-width: 1220px;
            margin: 0 auto;
        }

        .episode {
            display: grid;
            grid-template-columns: 1fr 3fr;
            position: relative;
        }

        .episode__number {
            font-size: 5vw;
            font-weight: 600;
            padding: 10px 0;
            position: sticky;
            top: 17vh;
            text-align: center;
            height: calc(10vw + 20px);
            transition: all 0.2s ease-in;
        }

        .episode__content {
            border-top: 2px solid #11999e;
            display: grid;
            grid-template-columns: 1fr 4fr;
            grid-gap: 5px;
            padding: 15px 0;
        }

        .episode__content .title {
            font-weight: 600;
            display: block;
            color: #696969;
        }

        .episode__content .story {
            line-height: 26px;
        }

        @media (max-width: 600px) {
            .episode__content {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .episode__content .story {
                font-size: 15px;
            }
        }
    </style> <!-- End Style -->
    <!-- End New Cards -->
    <script type="text/javascript">
        $(document).ready(function () {
            $(".body-container .accordion-box .accordion-header").click(
                function () {
                    var curent_click = $(this)
                        .parents(".accordion-box")
                        .find(".accordion-body");
                    $(curent_click).slideToggle();
                    $(".accordion-container .accordion-box .accordion-body")
                        .not(curent_click)
                        .slideUp();
                }
            );
        });
    </script>
    <script>
        // Get the button
        let mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html>