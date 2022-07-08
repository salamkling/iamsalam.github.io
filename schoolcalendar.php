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

    .card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
    }

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
      text-align: left;
      background-color: #1b573d;
      color: white;
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
    <div class="container-fluid">

      <div class="row p-5">

        <div class="col-md-8 p-3" align="center">
           <div class="row mb-3">
              <img src="images/school-calendarr.png">
            </div>

            <div class="row mb-3" style="overflow-x: auto;">
              <table id="customers">
              <thead class="text-white border">
                <tr class="border">
                  <th scope="col">PARTICULARS</th>
                  <th scope="col">FIRST SEMESTER</th>
                  <th scope="col">SECOND SEMESTER</th>
                  <th scope="col">MID-YEAR</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td colspan="4"><b>Admission (New Entrants)</b></td>
                </tr>
                <tr>
                  <td>* Foreign Students</td>
                  <td>May 3-31, 2021</td>
                  <td>November , 2021 - December 17, 2021</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>* Senior High School</td>
                  <td>May 15,2021 - July 30, 2021</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                 <tr>
                  <td>* Undergraduate Students</td>
                  <td>May 15, 2021 – July 30, 2021</td>
                  <td>December 6, 2021-January 14, 2022</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>* Medical Students</td>
                  <td>May 15, 2021 – July 30, 2021</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                 <tr>
                  <td>* Law Students</td>
                  <td>April 5-16, 2021</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="4"><b>Enrollment (New Entrants)</b></td>
                </tr>
                 <tr>
                  <td>* Undergradute/ Senior High School, College of Medicine and Foreign Students</td>
                  <td>August 16, 2021 – September 3, 2021</td>
                  <td>January 28, 2022 – February 7, 2022</td>
                  <td>July 4-8, 2022</td>
                </tr>
                 <tr>
                  <td>* Graduate School</td>
                  <td>August 23, 2021 – September 4, 2021</td>
                  <td>January 31, 2022 – February 12, 2022</td>
                  <td>&nbsp;</td>
                </tr>
                  <tr>
                  <td>* College of Law</td>
                  <td>May 3, 2021 – June 4, 2021</td>
                  <td>October 18 – 22, 2021</td>
                  <td>&nbsp;</td>
                </tr>
                  <tr>
                  <td>Foundation Day</td>
                  <td>June 10, 2021</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                   <tr>
                  <td colspan="4"><b>Enrollment for Old/Returning Students</b></td>
                </tr>
                <tr>
                  <td>* Undergraduate</td>
                  <td>August 16, 2021 – September 3, 2021</td>
                  <td>January 31, 2022 – February 11, 2022</td>
                  <td>&nbsp;</td>
                </tr>
                 <tr>
                  <td>* Graduate School</td>
                  <td>August 23, 2021 – September 4, 2021</td>
                  <td>January 31, 2022 – February 12, 2022</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="4"><b>Start of Classes</b></td>
                </tr>
                <tr>
                  <td>* Senior High School</td>
                  <td>September 6, 2021</td>
                  <td>February 14, 2022</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>* Undergraduate / College of Medicine</td>
                  <td>September 6, 2021</td>
                  <td>February 14, 2022</td>
                  <td>July 11, 2022</td>
                </tr>
                <tr>
                  <td>* Graduate</td>
                  <td>September 11, 2021</td>
                  <td>February 19, 2022</td>
                  <td>July 16, 2022</td>
                </tr>
                  <tr>
                  <td>* College of Law</td>
                  <td>June 7, 2021</td>
                  <td>October 25, 2021</td>
                  <td>April 11, 2022</td>
                </tr>
                <tr>
                  <td colspan="4"><b>Orientation</b></td>
                </tr>
                <tr>
                  <td>* Senior High School</td>
                  <td>September 22, 2021</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>* Undergraduate (New Students)</td>
                  <td>September 22, 2021</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>* Undergraduate (Old Students by College)</td>
                  <td>September 23, 2021</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                  <tr>
                  <td>* Graduate</td>
                  <td>September 25, 2021</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                 <tr>
                  <td>* College of Medicine</td>
                  <td>September 24, 2021</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                 <tr>
                  <td>* College of Law</td>
                  <td>June 14, 2021</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                 <tr>
                  <td><b>Last Day for Filing Application for Graduation</b></td>
                  <td>October 6, 2021</td>
                  <td>March 14, 2022</td>
                  <td>July 25, 2022</td>
                </tr>
                 <tr>
                  <td><b>Adding/Changing of subjects</b></td>
                  <td>September 8-10, 2021</td>
                  <td>February 17-18, 2022</td>
                  <td>July 14, 2022</td>
                </tr>
                 <tr>
                  <td><b>Dropping of subjects</b></td>
                  <td>October 11-12, 2021</td>
                  <td>March 21, 2022</td>
                  <td>July 21, 2022</td>
                </tr>
                  <tr>
                  <td colspan="4"><b>Preliminary Examination</b></td>
                </tr>
                <tr>
                  <td>* Undergraduate/College of Medicine</td>
                  <td>October 13-15, 2021</td>
                  <td>March 23 – 25, 2022</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>* Graduate</td>
                  <td>October 16-17, 2021</td>
                  <td>March 26-27, 2022</td>
                  <td>&nbsp;</td>
                </tr>
                  <tr>
                  <td>* College of Law</td>
                  <td>July 14-16, 2021</td>
                  <td>December 1-3, 2021</td>
                  <td>&nbsp;</td>
                </tr>
                 <tr>
                  <td><b>Cluster/Campus Intramurals</b></td>
                  <td>3rd Week of September</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                 <tr>
                  <td>&nbsp;</td>
                  <td>( 2 days only by campus)</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                 <tr>
                  <td colspan="4"><b>Mid-Term Examination</b></td>
                </tr>
                 <tr>
                  <td>* Undergraduate/College of Medicine</td>
                  <td>November 24-26, 2021</td>
                  <td>May 4-6, 2022</td>
                  <td>July 28-29, 2022</td>
                </tr>
                 <tr>
                  <td>* Graduate</td>
                  <td>November 27 – 28, 2021</td>
                  <td>May 7 – 8, 2022</td>
                  <td>July 30 – 31, 2022</td>
                </tr>
                 <tr>
                  <td>* College of Law</td>
                  <td>August 25-27, 2021</td>
                  <td>February 9 – 11, 2022</td>
                  <td>August 28-29, 2022</td>
                </tr>
                 <tr>
                  <td><b>University Games</b></td>
                  <td>November 29-30,  2021</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                 <tr>
                  <td><b>Start of Christmas Vacation (For Faculty on Teaching Leave)</b></td>
                  <td>December 20, 2021 – January 2, 2022</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><b>Final Examination for Graduating Students</b></td>
                  <td>January 12 – 14, 2022</td>
                  <td>June 8 – 10, 2022</td>
                  <td>August 11 – 12, 2022</td>
                </tr>
                  <tr>
                  <td colspan="4"><b>Final Examination for Non-Graduating Students</b></td>
                </tr>
                  <tr>
                  <td>* Undergraduate/College of Medicine</td>
                  <td>January 19 – 21, 2022</td>
                  <td>June 15 – 17, 2022</td>
                  <td>August 18 – 19, 2022</td>
                </tr>
                  <tr>
                  <td>* Graduate</td>
                  <td>January 22 – 23, 2022</td>
                  <td>June 18 – 19, 2022</td>
                  <td>August 20 – 21, 2022</td>
                </tr>
               <tr>
                  <td>* College of Law</td>
                  <td>October 6 – 8, 2021</td>
                  <td>March 23 – 25, 2022</td>
                  <td>May 19 – 20, 2022</td>
                </tr>
                 <tr>
                  <td colspan="4"><b>Last Day for Submission of Bound Manuscript</b></td>
                </tr>
                   <tr>
                  <td>* Undergraduate</td>
                  <td>January 19, 2022</td>
                  <td>June 15, 2022</td>
                  <td>August 18, 2022</td>
                </tr>
                 <tr>
                  <td>* Graduate</td>
                  <td>January 19, 2022</td>
                  <td>June 15, 2022</td>
                  <td>August 18, 2022</td>
                </tr>
                 <tr>
                  <td><b>Start of Midyear Vacation</b> (For Faculty on Teachers Leave)</td>
                  <td>&nbsp;</td>
                  <td>June 25, 2022 – September 2, 2022</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="4"><b>Deadline for Submission of Grades</b></td>
                </tr>
                 <tr>
                  <td>* Graduating</td>
                  <td>January 21, 2022</td>
                  <td>June 17, 2022</td>
                  <td>August 19, 2022</td>
                </tr>
                 <tr>
                  <td>* Non-Graduating</td>
                  <td>January 28, 2022</td>
                  <td>June 24, 2022</td>
                  <td>August 26, 2022</td>
                </tr>
                 <tr>
                  <td>* College of Law</td>
                  <td>October 15, 2021</td>
                  <td>April 1, 2022</td>
                  <td>May 27, 2022</td>
                </tr>
                <tr>
                  <td colspan="4"><b>Academic Council Meeting</b></td>
                </tr>
                  <tr>
                  <td>* College</td>
                  <td>January 26 – 28, 2022</td>
                  <td>June 24, 2022</td>
                  <td>August 25 – 26, 2022</td>
                </tr>
                <tr>
                  <td>* Campus</td>
                  <td>February 3, 2022</td>
                  <td>July 1, 2022</td>
                  <td>September 1, 2022</td>
                </tr>
                <tr>
                  <td>* University</td>
                  <td>February 10, 2022</td>
                  <td>July 8, 2022</td>
                  <td>September 9, 2022</td>
                </tr>
                 <tr>
                  <td><b>College of Law (Tentative dates of graduation)</b></td>
                  <td>&nbsp;</td>
                  <td>April 11 – 15, 2022</td>
                  <td>&nbsp;</td>
                </tr>
                 <tr>
                  <td><b>Graduation/Commencement Exercises</b></td>
                  <td>&nbsp;</td>
                  <td>July 18 – 28, 2022</td>
                  <td>&nbsp;</td>
                </tr>
                 <tr>
                  <td colspan="4">* to be submitted seven (7) days from the last day of the officially scheduled final examination.</td>
                </tr>
              </tbody>
            </table>
            </div>

        </div>
        
        <div class="col-md-4 p-3" align="center">
          <div class="row mb-2 p-2">
            <a href=""><img class="img-thumbnail shadow-lg p-3 bg-white rounded" src="images/CA.png"></a>
          </div>
          <div class="row mb-2 p-2">
            <a href=""><img class="img-thumbnail shadow-lg p-3 bg-white rounded" src="images/citizens-charter.png"></a>
          </div>
          <div class="row mb-2 p-2">
            <a href=""><img class="img-thumbnail shadow-lg p-3 bg-white rounded" src="images/GAD-Banner-1.png"></a>
          </div>
          <div class="row mb-2 p-2">
            <a href=""><img class="img-thumbnail shadow-lg p-3 bg-white rounded" src="images/ISU-Email-V2.0.png"></a>
          </div>
          <div class="row mb-2 p-2">
            <a href=""><img class="img-thumbnail shadow-lg p-3 bg-white rounded" src="images/ISO-Certified.png"></a>
          </div>
        </div>

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