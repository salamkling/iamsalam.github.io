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
        <div class="col-md-8 p-3">

          <div class="row">
            <div class="row p-3 mb-2">
              <img class="img-fluid" src="images/admis.png">
            </div>

          </div>

          <div class="row" style="font-size: 25px;">
            <div class="row text-dark p-3" style=" font-family: 'Roboto', sans-serif;">
               <h5>Admission Requirements:</h5>
            </div>
          </div>
          <div class="row">
            <div class="card text-dark mb-3" style="max-width: 100rem;">
            <div class="card-header text-white" style="background: #1c3b22;"><h4>FRESHMAN</h4></div>
            <div class="card-body">
                  <ol class="card-text" style="padding-left: 20px; padding-bottom: 8px;">
                  <li>Report Card (Form 138) or Permanent Record (Form 137A)</li>
                  <li>Certificate of Good Moral Character</li>
                  <li>Photocopy of Diploma</li>
                  <li>Two (2) copies of 2&#215;2 ID Picture with while background and name tag</li>
                  <li>Philippine Statistic Authority Authenticated copy of Birth Certificate</li>
                  <li>Other requirements prescribed by the College or Department, CHED, PRC as deemed necesssary</li>
                  <li>Long Brown Folder</li>
                </ol>
            </div>
          </div>
          </div>


            <div class="row">
            <div class="card text-dark mb-3" style="max-width: 100rem;">
            <div class="card-header text-white" style="background: #1c3b22;"><h4>TRANFEREES</h4></div>
            <div class="card-body">
              <ol class="card-text" style="padding-left: 20px; padding-bottom: 8px;">
              <li>Certification of Grades showing all the subjects taken from the school attended;</li>
              <li>Honorable Dismissal;</li>
              <li>Certificate of Good Moral Character;</li>
              <li>Four (4) copies of 2&#215;2 ID picture with white background and name tag (scanned picture or digital copy not accepted);</li>
              <li>Authenticated PSA copy of Birth Certificate;</li>
              <li>Accomplished Substitution Form of subjects taken from other SUCs as deemed necessary; and</li>
              <li>Accomplished Validation Form of subjects taken from non-SUCs.</li>
            </ol>
            </div>
          </div>
          </div>

           <div class="row">
            <div class="card text-dark mb-3" style="max-width: 100rem;">
            <div class="card-header text-white" style="background: #1c3b22;"><h4>FOREIGN STUDENTS</h4></div>
            <div class="card-body">
              <ol class="card-text" style="padding-left: 20px; padding-bottom: 8px;">
              <li>University Admission Test/College Admission Test;</li>
              <li>Passport/ Valid Student Visa/ Student Study Permit/ Student Visa Conversion;</li>
              <li>Four (4) copies of 2&#215;2 colored ID picture;</li>
              <li>Student permit &#8211; certification from the embassy of the country of origin of the    student’s eligibility to study in the Philippines;</li>
              <li>Two (2) copies of affidavit of support or certification from a reputable bank in the applicant’s country of origin about his/her capability to finance travel, educational, personal and other expenses that are expected to be incurred while staying in the Philippines;</li>
              <li>Authenticated copy of birth certificate;</li>
              <li>Certificate of completion of a secondary curriculum or its equivalent (Authenticated TOR from the school/university graduated in the home country);</li>
              <li>Certificate of degree equivalency (as applicable) issued by the ministry of education in the applicant’s country;</li>
              <li>Certificate of good moral character issued by the last school attended;</li>
              <li>Security clearance from the Philippine Embassy;</li>
              <li>Alien Certification of Registration (ARC);</li>
              <li>Statement of Personal History;</li>
              <li>English Proficiency Test score. For test of English as a foreign language (TOFEL) is equivalent to at least a score of 80 or a band score of at least 5.0 in an International English Language Testing System (IELTS);</li>
              <li>Medical certificate and drug test result;</li>
              <li>Application fee (non-refundable);</li>
              <li>Certifications from the Department of Foreign Affairs (DFA) and Bureau of Immigration (BI).</li>
            </ol>
            </div>
          </div>
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