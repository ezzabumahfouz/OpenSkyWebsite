<!-- <?php

require_once 'DB/connection.php';

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

?> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="style/indexStyle.css">
  <link rel="icon" type="x-icon" href="assets/images/Untitled_design__2_-removebg-preview.png" sizes="16x16">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://smtpjs.com/v3/smtp.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Open Sky | Home</title>

  <!-- Cookies -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Popup Cookie Consent Box</title>
  <link rel="stylesheet" href="style.css" />
  <!-- Boxicons CSS -->
  <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
  <script src="script.js" defer></script>

</head>

<body id="body">
  

  <!-- Cookies -->
  <div class="wrapper">
    <header>
      <i class="bx bx-cookie"></i>
      <h2>Cookies Consent</h2>
    </header>
    <div class="data">
      <p>This website use cookies to help you have a superior and more relevant browsing experience on the website.
        <!-- <a href="#"> Read more...</a> -->
      </p>
    </div>
    <div class="buttons">
      <button class="button" id="acceptBtn">Accept</button>
      <button class="button" id="declineBtn">Decline</button>
    </div>
  </div>

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");

    .wrapper {
      position: fixed;
      bottom: 50px;
      left: -400px;
      max-width: 345px;
      width: 100%;
      background: #fff;
      border-radius: 8px;
      border-style: solid;
      border-color: #11999E;

      padding: 15px 25px 22px;
      transition: left 0.3s ease;
      -webkit-box-shadow: 0px 0px 12px 6px rgba(128, 128, 128, 0.6);
      box-shadow: 0px 0px 12px 6px rgba(128, 128, 128, 0.6);
      z-index: 1;
    }

    .wrapper.show {
      left: 20px;
    }

    .wrapper header {
      display: flex;
      align-items: center;
      column-gap: 15px;
    }

    header i {
      color: #11999e;
      font-size: 32px;
    }

    .dropdown-content i {
      color: #ffffff;
      font-size: 18px;
    }

    header h2 {
      color: #11999e;
      font-weight: 500;
    }

    .wrapper .data {
      margin-top: 16px;
    }

    .wrapper .data p {
      color: #333;
      font-size: 16px;
    }

    .data p a {
      color: #11999e;
      text-decoration: none;
    }

    .data p a:hover {
      text-decoration: underline;
    }

    .wrapper .buttons {
      margin-top: 16px;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .buttons .button {
      border: none;
      color: #fff;
      padding: 8px 0;
      border-radius: 4px;
      background: #11999e;
      cursor: pointer;
      width: calc(100% / 2 - 10px);
      transition: all 0.2s ease;
    }

    .buttons #acceptBtn:hover {
      background-color: #11999e;
    }

    #declineBtn {
      border: 2px solid #11999e;
      background-color: #fff;
      color: #11999e;
    }

    #declineBtn:hover {
      background-color: #11999e;
      color: #fff;
    }
  </style>
  <script>
    const cookieBox = document.querySelector(".wrapper"),
      buttons = document.querySelectorAll(".button");
    const executeCodes = () => {
      //if cookie contains codinglab it will be returned and below of this code will not run
      if (document.cookie.includes("codinglab")) return;
      cookieBox.classList.add("show");
      buttons.forEach((button) => {
        button.addEventListener("click", () => {
          cookieBox.classList.remove("show");
          //if button has acceptBtn id
          if (button.id == "acceptBtn") {
            //set cookies for 1 month. 60 = 1 min, 60 = 1 hours, 24 = 1 day, 30 = 30 days
            document.cookie = "cookieBy= codinglab; max-age=" + 60 * 60 * 24 * 30;
          }
        });
      });
    };
    //executeCodes function will be called on webpage load
    window.addEventListener("load", executeCodes);
  </script>
  <!-- Cookies -->

  <div class="navbar">
    <a href="index.html"><img class="logo" src="assets/images/opanSkySoftware.png"></a>
    <p>....................................................................</p>

    <div class="dropdown">

      <button class="dropbtn">About
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">

        <div class="row">
          <div class="column">
            <h3>Who we are</h3>
            <a href="screens/knowMore.html">Know More</a>
            <a href="screens/businessProcess.html">The Way We Work</a>
            <a href="">Values & Ethics</a>
          </div>
          <div class="column">
            <h3>Management</h3>
            <!-- <a href="screens/management.html#section1"> Board of Directors</a> -->
            <!-- <a href="screens/management.html#section2">Management Team</a> -->
          </div>
          <div class="column">
            <h3>Contact Us</h3>
            <a href="screens/contactus.html">Get In Touch</a>
            <a href="screens/contactus.html#section2">Location</a>
            <a href="screens/carrers.php">Join Our Team</a>

          </div>
        </div>

      </div>
    </div>
    <a href="screens/service.html">Services</a>
    <a href="screens/partner.html">Partners</a>
    <a href="screens/news.php">News</a>


  </div>
  <style>
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
      color: #11999E;
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










  <!-------------- WELCOME SCREEN --------------->









  <style>
    .navbar a img {
      height: 93px;
      width: 156px;
      background-size: contain;
    }

    @media screen and (min-width: 501px) {}

    @keyframes zoomin {
      0% {
        /* -webkit-transform: scaleY(1.3);
                -webkit-transform: scaleX(1.1); */
        transform: scale(1.1);
        filter: blur(2px);

      }

      100% {
        /* -webkit-transform: scaleY(1.0);
                -webkit-transform: scaleX(1.0); */
        transform: scale(1.0);

      }
    }

    /*  */






    /* (B) HIDE */
    #collapse.hide {
      height: 0px;
      opacity: 0.1;
      transform: scaleX(0.0);
      overflow: hidden;
      background-color: black;



    }
  </style>
  <script>
    if (performance.navigation.type == performance.navigation.TYPE_RELOAD) {
      document.getElementById("collapse").classList.toggle("hide");
    }
    else if (performance.navigation.type == performance.navigation.TYPE_BACK_FORWARD) {
      document.getElementById("collapse").classList.toggle("hide");
    }


    function toggle() {
      document.getElementById("collapse").classList.toggle("hide");

    }

  </script>

  <!-- nav bar -->
  <div class="slideshow-container">
  
    <div class="mySlides fade">
      <div class="numbertext">1 / 6</div>
      <img src="assets/cover photos/a.png" style="width:100%">
      <!-- <div class="text">Caption Two</div> -->
    </div>
   
    
    <div class="mySlides fade">
      <div class="numbertext">2 / 6</div>
      <img src="assets/cover photos/b.png" style="width:100%;">
      <!-- <div class="text">Caption Two</div> -->
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">3 / 6</div>
      <img src="assets/cover photos/c.jpg" style="width:100%;">
      <!-- <div class="text">Caption Three</div> -->
    </div>
    <div class="mySlides fade">
      <div class="numbertext">4 / 6</div>
      <img src="assets/cover photos/d.png" style="width:50%; margin-left: 25%;">
      <!-- <div class="text">Caption Three</div> -->
    </div>
    <div class="mySlides fade">
      <div class="numbertext">5 / 6</div>
      <img src="assets/cover photos/e.jpg" style="width:100%;">
      <!-- <div class="text">Caption Three</div> -->
    </div>
  
    
    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>
    
    </div>
    <br>
    
    <!-- <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 

      <span class="dot" onclick="currentSlide(3)"></span> 
      <span class="dot" onclick="currentSlide(4)"></span> 
      <span class="dot" onclick="currentSlide(5)"></span> 
      <span class="dot" onclick="currentSlide(6)"></span> 
    </div> -->
    
    <script>
    let slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
    </script>
    <style>
        * {box-sizing: border-box}
        body {font-family: Verdana, sans-serif; margin:0}
        .mySlides {display: none}
        img {
          /* vertical-align: middle; */
          height: 60vh;background-size: cover;
        }
        
        /* Slideshow container */
        .slideshow-container {
          /* max-width: 1000px; */
          width: 94%;
          position: relative;
          margin: auto;
          padding-top: 3vw;
        }
        
        /* Next & previous buttons */
        .prev, .next {
          cursor: pointer;
          position: absolute;
          top: 50%;
          width: auto;
          padding: 16px;
          margin-top: -22px;
          color: #11999E;
          background-color: #d2d2d2;
          font-weight: bold;
          font-size: 18px;
          transition: 0.6s ease;
          border-radius: 0 3px 3px 0;
          user-select: none;
        }
        
        /* Position the "next button" to the right */
        .next {
          right: 0;
          border-radius: 3px 0 0 3px;
        }
        
        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
          background-color: rgba(0,0,0,0.8);
        }
        
        /* Caption text */
        .text {
          color: #f2f2f2;
          font-size: 15px;
          padding: 8px 12px;
          position: absolute;
          bottom: 8px;
          width: 100%;
          text-align: center;
        }
        
        /* Number text (1/3 etc) */
        .numbertext {
          color: #f2f2f2;
          font-size: 12px;
          padding: 8px 12px;
          position: absolute;
          top: 0;
        }
        
        /* The dots/bullets/indicators */
        .dot {
          cursor: pointer;
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbb;
          border-radius: 50%;
          display: inline-block;
          transition: background-color 0.6s ease;
        }
        
        .active, .dot:hover {
          background-color: #717171;
        }
        
        /* Fading animation */
        .fade {
          animation-name: fade;
          animation-duration: 1.5s;
        }
        
        @keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
        }
        
        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
          .prev, .next,.text {font-size: 11px}
        }
        </style>
  <!-- end nav bar -->
  <!-- ---------        About Us            ------------ -->
  <br>
  <br>     
  <br>     

  <div class="divider"></div>
  <h4>
      02
    </h4>
    <h5>
      Welcome Message
    </h5>
    <div class="welcomText">
      <span>Welcome to OpenSky Technologies!</span> <br> <br>
Embark on a journey of technological excellence where innovation meets precision. At OpenSky, we are excited to welcome you to our digital home, a space where challenges are transformed into opportunities through our diverse and impactful services, powered by strategic partnerships. <br> <br> <br>
<span>Outsourcing Services (ITO and BPO):</span> <br> <br>
Elevate your operational efficiency with our Information Technology Outsourcing (ITO) and Business Process Outsourcing (BPO) services. Our dedicated teams are ready to optimize your IT infrastructure and streamline business processes, enabling you to focus on your core strengths. <br> <br> <br>
<span>Telecom Technologies:</span> <br> <br>
Stay ahead in the dynamic landscape of communication with our cutting-edge telecom technologies. In collaboration with our esteemed partners, VOX Solutions and Sky Peak Technologies (CORA Mobile Edge), we bring you solutions that not only enhance ROI but redefine communication efficiency in the digital age. <br> <br> <br>
<span>IT Services and RPA (Robotic Process Automation):</span> <br> <br>
Experience the future of automation with our RPA services, delivered in collaboration with our partner AutoSphere, a trailblazer in RPA solutions. Unleash the power of automation to streamline processes, increase efficiency, and empower your team to focus on strategic initiatives, all backed by AutoSphere's cutting-edge RPA solution. <br> <br>
At OpenSky, we go beyond providing services, we forge partnerships to deliver tailor-made solutions that propel your business forward. <br> <br>
Thank you for choosing OpenSky Technologies. Explore the possibilities, engage with our expertise, and let's embark on a transformative journey together. <br> <br> <br>
 <span> <h1>Welcome Aboard!</h1></span> <br> <br> <br>

    </div>
    <style>
      .welcomText{
        width: 90%;
        margin: auto;
        font-size: 16px;
        color: #555;
      }
      .welcomText span {
        font-weight: bold;
        font-size: 18px;
        color: black;
      }
      .welcomText span h1{
        font-weight: bold;
        font-size: 18px;
        color: black;
        letter-spacing: 1px;
      }
    </style>
    <div class="divider"></div>

    <h4>
      03
    </h4>
    <h5>
      Why Open Sky Technology
    </h5>
    <div class="why">
“use the images as information cards where an image is there and when the mouse comes over it, it will flip and show the description” <br><br>
Welcome to Open Sky Technologies – where innovation, partnership, and excellence converge to shape the future of your business. Explore the possibilities, engage with our expertise, and let's embark on a journey of limitless potential together. <br><br>
At Open Sky Technologies, our commitment to excellence sets us apart, making us your ideal partner in navigating the ever-evolving landscape of technology and innovation. Here's why OpenSky stands out: <br><br>
<br><span>Innovative Solutions:</span> <br><br>
Open Sky is at the forefront of technological innovation. We don't just offer solutions; we craft innovative answers to your unique challenges. Our dynamic approach ensures that your business is equipped with the latest advancements, driving success in a rapidly changing digital world. <br><br>
<br><span>Strategic Partnerships:</span> <br><br>
Collaborative success is ingrained in our DNA. Open Sky forms strategic partnerships with industry leaders like VOX Solutions, Sky Peak Technologies, CHI and AutoSphere. These alliances empower us to deliver specialized services and cutting-edge solutions, ensuring that your business remains ahead of the curve. <br><br>
<br><span>Comprehensive Service Portfolio:</span> <br><br>
Our diverse service portfolio spans Information Technology Outsourcing (ITO), Business Process Outsourcing (BPO), Telecom Technologies, Information Technology services and Robotic Process Automation (RPA). From streamlining operations to revolutionizing communication and automating processes, Open Sky is your one-stop destination for comprehensive and integrated solutions. <br><br>
<br><span>Client-Centric Approach:</span> <br><br>
Your success is our priority. At Open Sky, we adopt a client-centric approach, customizing our services to suit your specific needs. We listen, understand, and collaborate closely with you to deliver solutions that align with your goals and aspirations. <br><br>
<br><span>Unwavering Quality Assurance:</span> <br><br>
Quality is non-negotiable at Open Sky. Our teams are dedicated to delivering solutions that not only meet but exceed industry standards. Expect nothing less than excellence in every aspect of our service offerings. <br><br>
<br><span>Future-Focused Vision:</span> <br><br>
As technology advances, so do we. OpenSky embraces a future-focused vision, ensuring that your business is prepared for the challenges and opportunities that lie ahead. Our proactive approach positions you to thrive in an ever-changing digital landscape. <br><br>

    </div>
        <style>
      .why{
        width: 90%;
        margin: auto;
        font-size: 16px;
        color: #555;
      }
      .why span {
        font-weight: bold;
        font-size: 18px;
        color: black;
      }
     
    </style>
    <div class="divider"></div>

  <div class="our-client">
    <h4>
      04
    </h4>
    <h5>
      News
    </h5>
    <div class="news">
    <ol>

    <?php
    $x = 0;
        while ($row = mysqli_fetch_assoc($all_product)) {
          if ($x <2) {

          
            ?>

      <li><span> <?php echo($x+1) ?> </span><p><?php echo $row["News_Title"]; ?> <br> <h6><?php echo $row["News_Description"]; ?></h6></p></li>
      

 
            <?php
            $x++;
          }

        }
        ?>


        <!-- <li><span>01</span><p> This is news title <br> <h6> Here will be all news</h6></p></li>
        <li><span>02</span><p> This is news title <br> <h6> Here will be all news</h6></p></li> -->


   </ol>
   </div>



  </div>
  <div class="divider"></div>



  <!-- Our partners -->
  <div class="our-partners">
    <h4>
      05
    </h4>
    <h5>
      Our Partners
    </h5>
    <div class="partners">
      <div class="partner-images">
        <img src="assets/images/naitel.png">
        <img src="assets/images/inovar.png">
        <img src="assets/images/1621846158523.jpg">
        <img src="assets/images/Final-SKY-PEAK-Logo (1).png">
        <img src="assets/images/Logo-VOX-Solutions1-4 (1).png">


      </div>

    </div>

  </div>




<style>
  /* browser reset */


.news {
  width: 600px;
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
  /* border-bottom: solid; */
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
  padding-left: 60px ;
  color: #555;
  padding-top: 10px;
  margin-bottom: 30px;
  text-align: justify;
}
.divider{
  border-bottom: solid;
  width: 90%;
  margin: auto;
}
</style>


  <!-- Footer -->
  <footer class="footer">
    <!-- <div class="line"></div> -->
    <!-- <h1>
            open sky
        </h1> -->
   

    <button onclick="topFunction()" id="myBtn" title="Go to top">Go Back To Top </button>






    <div class="line"></div>
    <div class="list">
      <li class="list1">
        <ul> <a href="">Terms of Conditions</a></ul>
        <ul> <a href="">Privacy Policy </a></ul>
        <ul> <a href="">Cookie Preferences</a></ul>
        <ul> <a href="">Get In Touch</a></ul>
      </li>
      <li class="list3">
        <ul> <a href=mailto:info@opensky.jo.com>join with our company to see the future</a></ul>
        <!-- <form action="post">
                    <input type="text" name="email" id="email" placeholder="E-mail">

                </form>





                <form method="post">
                    <input type="button" value="Send Email" onclick="sendEmail()"/>
                </form>   -->

        <script>
          function sendEmail() {
            Email.send({
              Host: "smtp.gmail.com",
              Username: "<sender’s email address>",
              Password: "<email password>",
              To: 'ezoahmed5@gmail.com',
              From: "salah@gmail.com",
              Subject: "Test email",
              Body: "<email body>",
            }).then(
              message => alert("mail sent successfully")
            );
          }

        </script>


      </li>

    </div>

  </footer>


























  <!--  -->

  
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

  <script src="https://smtpjs.com/v3/smtp.js">
  </script>
  <input type="button" value="Send Email" onclick="sendEmail()">

  <script>
    function sendEmail() {
      Email.send({
        Host: "smtp.mailtrap.io",
        Username: "<Mailtrap username>",
        Password: "<Mailtrap password>",
        To: 'ezoahmed5@gmail.com',
        From: "sender@example.com",
        Subject: "Test email",
        Body: "<html><h2>Header</h2><strong>Bold text</strong><br></br><em>Italic</em></html>"
      }).then(
        message => alert(message)
      );
    }

  </script>
</body>

</html>