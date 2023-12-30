<?php

require_once '../DB/connection.php';

$sql = "SELECT * FROM news ORDER BY News_ID DESC";
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
            z-index: 2;
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




    <ol class="olcards">

        <?php
        $x =1;
        while ($row = mysqli_fetch_assoc($all_product)) {
            ?>

            <!-- <li style="--cardColor:#fc374e">
                <div class="content">
                    <div class="icon"></div>
                    <div class="title"><?php echo $row["News_Title"]; ?></div>
                    <div class="text"><?php echo $row["News_Description"]; ?>
                    </div>
                </div>
            </li> -->
            <li><span>
                    <?php echo ($x) ?>
                </span>
                <p>
                    <?php echo $row["News_Title"]; ?> <br>
                <h6>
                    <?php echo $row["News_Description"]; ?>
                </h6>
                </p>
            </li>

            <?php
             $x++;

        }
  
        ?>
    </ol>




    </div>






    <!-- Section 2 -->
    <style>
        .olcards {
            width: 70%;

            margin: 20px auto;
        }

        /* list styles */

        ol {
            list-style: none;
            color: #ccc;
        }

        ol li {
            font: bold 24pt helvetica, arial, sans-serif;
            position: relative;
            margin-bottom: 20px;
            border-bottom: solid;
        }

        li p {
            font: 19px helvetica, arial, sans-serif;
            color: black;
            padding-left: 60px;
            text-align: justify;

        }

        span {
            position: absolute;
            line-height: 25px;
        }

        h6 {
            font-size: 15px;
            padding-left: 60px;
            color: #555;
            padding-top: 10px;
            margin-bottom: 30px;
            text-align: justify;
            
        }
    </style>
    <!-- <style>
        .olcards {
            background: white;
            padding: 2rem;
        }

        h1 {
            font-family: sans-serif;
        }

        .olcards,
        .olcards * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .olcards {
            list-style: none;
            counter-reset: cardCount;
            font-family: sans-serif;
            display: flex;
            flex-direction: column;
            --cardsGap: 1rem;
            gap: var(--cardsGap);
            padding-bottom: var(--cardsGap);
        }

        .olcards li {
            counter-increment: cardCount;
            display: flex;
            color: white;
            --labelOffset: 1rem;
            --arrowClipSize: 1.5rem;
            margin-top: var(--labelOffset);
        }

        .olcards li::before {
            content: counter(cardCount, decimal-leading-zero);
            background: white;
            color: #11999e;
            font-size: 2em;
            font-weight: 700;
            transform: translateY(calc(-1 * var(--labelOffset)));
            margin-right: calc(-1 * var(--labelOffset));
            z-index: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-inline: 0.5em;
        }

        .olcards li .content {
            background-color: #11999e;
            --inlinePadding: 1em;
            --boxPadding: 0.5em;
            display: grid;
            padding: var(--boxPadding) calc(var(--inlinePadding) + var(--arrowClipSize)) var(--boxPadding) calc(var(--inlinePadding) + var(--labelOffset));
            grid-template-areas:
                "icon title"
                "icon text";
            gap: 0.25em 1em;
            clip-path: polygon(0 0,
                    calc(100% - var(--arrowClipSize)) 0,
                    100% 50%,
                    calc(100% - var(--arrowClipSize)) 100%,
                    calc(100% - var(--arrowClipSize)) calc(100% + var(--cardsGap)),
                    0 calc(100% + var(--cardsGap)));
            position: relative;
            max-width: 95%;
            margin-right: 5%;
        }

        .olcards li .content::before {
            content: "";
            position: absolute;
            width: var(--labelOffset);
            height: var(--labelOffset);
            background: #11999e;
            left: 0;
            bottom: 0;
            clip-path: polygon(0 0, 100% 0, 0 100%);
            filter: brightness(0.75);
        }

        .olcards li .content::after {
            content: "";
            position: absolute;
            height: var(--cardsGap);
            width: var(--cardsGap);
            background: linear-gradient(to right, rgba(0, 0, 0, 0.25), transparent 50%);
            left: 0;
            top: 100%;
        }

        .olcards li .icon {
            grid-area: icon;
            align-self: center;
            font-size: 2em;
        }

        .olcards li .content .title {
            grid-area: title;
            font-size: 1.25em;
            font-weight: 700;
            padding:10px 0px ;
        }

        .olcards li .content .text {
            grid-area: text;
        }
    </style> -->

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