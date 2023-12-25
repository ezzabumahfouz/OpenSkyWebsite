<?php

require_once '../DB/connection.php';

$sql = "SELECT * FROM news";
$all_product = $conn->query($sql);
// 
if (isset($_GET["News_ID"])) {
    $product_News_ID = $_GET["News_ID"];
    $sql = "SELECT * FROM news";
    $result = $conn->query($sql);
    $total_news = "SELECT * FROM news";
    $total_news_result = $conn->query($total_news);
    $news_num = mysqli_num_rows($total_news_result);

    if (mysqli_num_rows($result) > 0) {
        $in_news = "already In news";

        echo json_encode(["num_news" => $news_num, "in_news" => $in_news]);
    } else {
        // $insert = "INSERT INTO news(product_News_ID) VALUES($product_News_ID)";
        // if($conn->query($insert) === true){
        //     $in_news = "added into news";
        //     echo json_encode(["num_news"=>$news_num,"in_news"=>$in_news]);
        // }else{
        //     echo "<script>alert(It doesn't insert)</script>";
        // }
    }
}

?>

<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../style/newsStyle.css" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <title>News | Open Sky</title>

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
                        <a href="../screens/carrers.php">Join Our Team</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="../screens/service.html">Services</a>
        <a href="../screens/partner.html">Partners</a>
        <a href="#">News</a>
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
        <h1>News </h1>
    </div>


    <!-- boddd -->




    <div class="wrapper">

        <div class="scroll-cards">
            <!-- <h1>Some Sticky-Stacked Cards</h1> -->
            <?php
            while ($row = mysqli_fetch_assoc($all_product)) {
                ?>

                <article class="scroll-cards__item" aria-label="Wie - 1">
                    <h2>
                        <?php echo $row["News_Title"]; ?>
                    </h2>
                    <p>
                        <?php echo $row["News_Description"]; ?>
                    </p>
                </article>
                <?php

            }
            ?>

        </div>

    </div>





    <!-- Section 2 -->

    <style>
        .wrapper,
        .wrapper:before,
        .wrapper:after {
            box-sizing: border-box;
        }

        .wrapper {
            padding: 2em;
            background: white;
            color: white;
        }

        .wrapper {
            max-width: 90%;
            margin: 0 auto;
        }

        .scroll-cards {
            counter-reset: card;
            position: relative;
            display: block;
            padding-bottom: 30vh;
        }

        .scroll-cards>.scroll-cards__item+.scroll-cards__item {
            margin-top: 40vh;
        }

        .scroll-cards h1 {
            position: sticky;
            top: 2rem;
            font-size: 2em;
            margin: 0 0 0.5em;
        }

        .scroll-cards__item {
            --offset: 0.5em;
            color: #000;
            position: sticky;
            top: max(16vh, 10em);
            padding: 2em 1.5em;
            min-height: 19em;
            background: #fff;
            box-shadow: 0 2px 40px rgba(0, 0, 0, 0.1);
            width: calc(100% - 5 * var(--offset));
        }

        h2 {
            font-size: 26px;
            text-transform: uppercase;
            margin-bottom: 20px;
            font-weight: bold;
        }

        p {
            font-size: 1.25em;
            line-height: 1.5;
            margin: auto;
        }

        /*
If you use SASS you can shorten this one here like this:

@for $i from 0 through 5 {
  &:nth-of-type(#{$i}) {
    transform: translate(calc((#{$i} - 1) * var(--offset)), calc((#{$i} - 1) * var(--offset)));
  }
}
*/
        .scroll-cards__item:nth-of-type(0) {
            transform: translate(calc((0 - 1) * var(--offset)), calc((0 - 1) * var(--offset)));
        }

        .scroll-cards__item:nth-of-type(1) {
            transform: translate(calc((1 - 1) * var(--offset)), calc((1 - 1) * var(--offset)));
        }

        .scroll-cards__item:nth-of-type(2) {
            transform: translate(calc((2 - 1) * var(--offset)), calc((2 - 1) * var(--offset)));
        }

        .scroll-cards__item:nth-of-type(3) {
            transform: translate(calc((3 - 1) * var(--offset)), calc((3 - 1) * var(--offset)));
        }

        .scroll-cards__item:nth-of-type(4) {
            transform: translate(calc((4 - 1) * var(--offset)), calc((4 - 1) * var(--offset)));
        }

        .scroll-cards__item:nth-of-type(5) {
            transform: translate(calc((5 - 1) * var(--offset)), calc((5 - 1) * var(--offset)));
        }

        .scroll-cards__item:nth-of-type(6) {
            transform: translate(calc((6 - 1) * var(--offset)), calc((6 - 1) * var(--offset)));
        }

        .scroll-cards__item:nth-of-type(7) {
            transform: translate(calc((7 - 1) * var(--offset)), calc((7 - 1) * var(--offset)));
        }

        .scroll-cards__item:nth-of-type(8) {
            transform: translate(calc((8 - 1) * var(--offset)), calc((8 - 1) * var(--offset)));
        }

        .scroll-cards__item:nth-of-type(9) {
            transform: translate(calc((9 - 1) * var(--offset)), calc((9 - 1) * var(--offset)));
        }

        .scroll-cards__item:nth-of-type(10) {
            transform: translate(calc((10 - 1) * var(--offset)), calc((10 - 1) * var(--offset)));
        }

        @media screen and (min-width: 37em) {
            h1 {
                font-size: 3em;
            }

            .scroll-cards__item {
                --offset: 1em;
                padding-left: 5em;
            }

            .scroll-cards__item:before {
                counter-increment: card;
                content: "0" counter(card);
                display: flex;
                align-items: center;
                justify-content: center;
                width: 2.75em;
                height: 2.75em;
                background: #11999e;
                color: #fff;
                text-align: center;
                border-radius: 50%;
                position: absolute;
                left: 1.25em;
                top: 1.25em;
                font-weight: bold;
            }
        }

        @media screen and (min-width: 62em) {
            .scroll-cards h1 {
                font-size: 3em;
            }

            .scroll-cards__item {
                --offset: 1.25em;
                max-width: 42em;
            }
        }
    </style>

    <!-- Table -->

    <!-- Table style -->

    <!-- End Table Style -->
    </div>
    <div class="topScroll">
        <button onclick="topFunction()" id="myBtn" title="Go to top">Go Back To Top </button>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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