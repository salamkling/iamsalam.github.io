<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ISU SAN MATEO</title>
  <link rel="icon" href="images/isu.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="css/nav.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap');



    .my-flex-card > div > div.card {
    height: calc(100% - 15px);
    margin-bottom: 15px;
    }

     #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;

    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}

    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: center;
      background-color: #1b573d;
      color: white;
    }

    .mySlides {
      width: 480px;
      height: 468px;
 }

 .head {
      position: relative;
    }

    .head a {
      position: absolute;
        top: 25px;
        right: 10px;
    }

    .head a img {
      width: 100px;
      height: 100px;
    }

    @media screen and (max-width: 600px) {

   .head a img {
      width: 40px;
      height: 40px;
    }

     .head a {
      position: absolute;
        top: 0px;
        right: 0px;
    }

}





  </style>

</head>
<body>

     <div class="head">
    <img src="images/banner.png" class="img-fluid" alt="Responsive image">
     <a href="https://isu.edu.ph/transparency-seal/" target="_blank"><img class="logo" src="images/seal.png"></a>
  </div>

  <div class="topnavs" id="myTopnavs">
    <a href="index.php">Home</a>
    <div class="dropdowns">
      <button class="dropbtn">About Us <i class="fa fa-caret-down"></i></button>
      <div class="dropdowns-content">
        <a href="sanmateocampus.php">The Campus History</a>
        <a href="visionmission.php">University Mandate, Vision and Mission</a>
        <a href="qualitypolicy.php">University Quality Policy</a>
         <a href="core.php">University Core Values</a>
         <a href="isuhymn.php">University Hymn</a>
      </div>
    </div>
    <div class="dropdowns">
      <button class="dropbtn">Administration
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdowns-content">
        <a href="orggen.php">Organizational Structures</a>
        <a href="campusregistrar.php">Office of the Campus Registrar</a>
        <a href="PAM.php">Planning & MIS</a>
        <a href="sports.php">Sports and Socio Cultural</a>
        <a href="nstp.php">NSTP</a>
      </div>
    </div>
    <div class="dropdowns">
      <button class="dropbtn">Academics
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdowns-content">
        <a href="departments.php">Departments</a>
        <a href="programofferings.php">Program Offerings</a>
        <a href="admission.php">Admissions</a>
        <a href="schoolcalendar.php">School Calendar</a>
      </div>
    </div>
       <a href="instructions.php">Instructions</a>
    <div class="dropdowns">
      <button class="dropbtn">Research
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdowns-content">
          <a href="researchchart.php">Organizational Chart</a>
        <a href="researchlists.php">Research Lists</a>
      </div>
    </div>
    <div class="dropdowns">
      <button class="dropbtn">Extension
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdowns-content">
        <a href="extensionchart.php">Organizational Chart</a>
     <a href="extension.php">Extension Projects</a>
      </div>
    </div>
     <div class="dropdowns">
      <button class="dropbtn">OSAS
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdowns-content">
        <a href="sbo.php">SBO</a>
      <a href="scholarship.php">Scholarship</a>
        <a href="library.php">Library</a>
         <a href="guidance.php">Guidance</a>
        <a href="health.php">Health</a>

      </div>
    </div>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
  </div>


  <div>
     <!---bookmark--->
            <div class="slide mb-2" align="center" style="background: #12613d;">
              <div class="w3-content w3-section">
                <img src="slide/EXt1.jpg" class="mySlides" alt="Responsive image" >
                <img src="slide/EXt2.jpg" class="mySlides" alt="Responsive image" >
                <img src="slide/EXt3.jpg" class="mySlides" alt="Responsive image" >
                <img src="slide/EXt4.jpg" class="mySlides" alt="Responsive image" >
                <img src="slide/EXt5.jpg" class="mySlides" alt="Responsive image" >
              </div>
            </div>
            <!---bookmark--->

            <!---bookmark--->
              <script>
              var myIndex = 0;
              carousel();

              function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                  x[i].style.display = "none";  
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}    
                x[myIndex-1].style.display = "block";  
                setTimeout(carousel, 2000); // Change image every 2 seconds
              }
              </script>
            <!---bookmark--->


            <div class="container-fluid p-5">
              <div class="row text-white p-3 mb-3" style="background: #093b24; font-family: 'Roboto', sans-serif;">
               <h1>EXENTSION PROJECTS</h1>
            </div>
              <div class="row mb-2  p-5"  style="overflow-x: auto;">
                <table id="customers" class="bg-white shadow-lg">
              <thead class="text-white border">
                <tr class="border">
                  <th scope="col">Proponent</th>
                  <th scope="col">Title of Project</th>
                  <th scope="col">Date</th>
                  <th scope="col">Number of Participants</th>
                  <th scope="col">Collaborating Agency</th>
                </tr>
              </thead>
                 <tbody>
                 <?php  

          $conn = mysqli_connect('localhost', 'root', '');  

          if (! $conn) {  
           die("Connection failed" . mysqli_connect_error());  
          }  
          else {  
           mysqli_select_db($conn, 'isuweb'); 
          }

          $limit = 10;  

          $getQuery = "SELECT * FROM extension ORDER BY id DESC";    

          $result = mysqli_query($conn, $getQuery);  

          $total_rows = mysqli_num_rows($result);    

          $total_pages = ceil ($total_rows / $limit);    

          if (!isset ($_GET['page']) ) {
              $page_number = 1;  
          } else {
              $page_number = $_GET['page'];  
          }

          $initial_page = ($page_number-1) * $limit;      

          $getQuery = "SELECT * FROM extension LIMIT " . $initial_page . ',' . $limit;  

          $result = mysqli_query($conn, $getQuery);       


          while ($row = mysqli_fetch_array($result)) {  
      ?>
                

             
           
            
                <tr>
                  <td><?php echo "" . $row["proponent"] . "" ?></td>
                  <td><?php echo "" . $row["title"] . "" ?></td>
                  <td><?php echo "" . $row["date"] . "" ?></td>
                  <td><?php echo "" . $row["num_participant"] . "" ?></td>
                  <td><?php echo "" . $row["colla_agency"] . "" ?></td>
                </tr>
             

                <?php

              }

          ?>
           </tbody>
              </table>
          <?php    
              echo "</div>";
              for($page_number = 1; $page_number<= $total_pages; $page_number++) {  
                  echo '<a class="btn mt-3 mb-5 text-white" href = "researchlists.php?page=' . $page_number . '"  style="margin-right: 4px; background: black;">' . $page_number . ' </a>';  
              }    

          ?> 
                
              </div>
          </div>

</div>

   <footer class="text-center text-lg-start text-white" style="background-color: #144d33">

    <!-- Section: Social media -->
    <section  class="d-flex justify-content-between p-4 text-white" style="background-color: #093b24">
            <!-- Left -->
            <div class="me-5">
              <span  style="font-size: 25px; font-family: 'Roboto', sans-serif; font-weight: 700;">ISABELA STATE UNIVERSITY</span>
            </div>
            <!-- Left -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold">SAN MATEO CAMPUS</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: green; height: 2px"
                />
            <p>
              Although it is not big campus as its mother campus, it houses a family of teachers and students, who have brilliant minds and creative hands in achieving excellence in Instruction, production, research and extension. ISU San Mateo campus has gone long in its effort to work for the betterment of the students.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
           
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">SOCIAL LINKS</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px"/>
            <p>
               <a class="text-white" target="_blank" href="https://www.facebook.com/ISUsmSSC/" style="text-decoration: none;"><i class="fa fa-facebook"></i> Supreme Student Council</a>
            </p>
            <p>
            <a class="text-white" style="text-decoration: none;" target="_blank" href="https://www.facebook.com/ISU-San-Mateo-Campus-Alumni-Association-Inc-424640831399901/"><i class="fa fa-facebook"></i> Alumni Association,Inc.</a>
            </p>
            <p>
            <a class="text-white" style="text-decoration: none;" target="_blank" href="https://www.facebook.com/ISU-SAN-MATEO-Infirmary-103374555333950/"><i class="fa fa-facebook"></i> Infirmary</a>
            </p>
            <p>
             <a class="text-white" style="text-decoration: none;" target="_blank" href="https://www.facebook.com/isusanmatregistrar/"><i class="fa fa-facebook"></i> Office of the Registrar</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 100px; background-color: white; height: 2px"/>
            <p><i class="fa fa-map-marker"></i><a class="text-white" href="https://www.google.com/maps/dir/16.8984576,121.6151552/isu+san+mateo/@16.9009657,121.611823,17z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x338fffac073444bf:0xe6e22666fb0c42b7!2m2!1d121.6134484!2d16.9034738" style="text-decoration: none;">  Macatal - San Andres ARC Road, San Mateo, Isabela</a></p>
            <p><i class="fa fa-envelope"></i><a class="text-white" style="text-decoration: none;" target="_blank" href="mailto:isusanmateo@isu.edu.ph"> isusanmateo@isu.edu.ph</a></p>
            <p><i class="fa fa-phone"></i> (078) 664 0422</p>
            <p><i class="fa fa-phone"></i> 0935 963 3756</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © 2020 Copyright - BSG&SDK
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->


  <script>
  function myFunction() {
    var x = document.getElementById("myTopnavs");
    if (x.className === "topnavs") {
      x.className += " responsive";
    } else {
      x.className = "topnavs";
    }
  }
  </script>
  <script src="js/bootstrap.js"></script>

</body>
</html>