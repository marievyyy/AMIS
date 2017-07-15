
<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ACCESS | Registration</title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo-access.ico">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  
    <!-- CSS -->
    <link href ="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/register.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">

  </head>

<body>

<!-- NAVIGATION -->

  <nav class="navbar">
    <div class="container">  
      <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo base_url(); ?>">HOME</a></li>
          <li><a href="<?php echo base_url(); ?>login">LOG IN</a></li>
      </ul>
    </div>
  </nav>

<!-- END OF NAVIGATION -->

  <div class="registration-container">

    <img class="access-logo" src="<?php echo base_url(); ?>assets/img/logo-access.png"/>
    <h4 text-align="center">ACCESS MEMBERSHIP REGISTRATION</h4>

    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <form id="registrationForm" class="form" method="post" role="form" action="<?php echo base_url(); ?>register/validate_registration" novalidate="novalidate">

            <!-- LOGIN INFO -->
            <div class="personal"> Log In Information</div>
            <div class="loginInfo">
              <fieldset>
                <div class="form-group col-md-12">
                  <input type="text" class="form-control" id="studentNumber" name="studentNumber" placeholder="Student Number">
                  <span class="studentNumberErr"></span>
                </div>       

                <div class="form-group col-md-12">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <div class="strength">
                
                        <span class="str-box box1">
                            <div></div>
                        </span>
                        <span class="str-box box2">
                            <div></div>
                        </span>
                        <span class="str-box box3">
                            <div></div>
                        </span>
                        <span class="str-box box4">
                            <div></div>
                        </span>
                        <span class="result">
                        </span>     
                    </div>
                  <span class="passwordErr"></span>
                </div>          

                <div class="form-group col-md-12">
                  <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
                  <span class="confirmPasswordErr"></span>
                </div>      
              </fieldset>
            </div>
            <!-- LOGIN INFO -->

            <!-- NAME INFO -->
            <div class="personal"> Personal Information</div>
            <div class="nameInfo">
              <fieldset>
                <div class="form-group col-md-3">
                  <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name">
                  <span class="firstNameErr"></span>
                </div>       

                <div class="form-group col-md-3">
                  <input type="text" class="form-control" id="middleName" name="middleName" placeholder="Middle Name">
                  <span class="middleNameErr"></span>
                </div>          

                <div class="form-group col-md-3">
                  <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name">
                  <span class="lastNameErr"></span>
                </div>

                <div class="col-md-3 form-group">   
                      <select id="suffix" name="suffix" value="" class="form-control select-form">
                        <option value="" disabled selected>Suffix</option>
                        <option value="">None</option>
                        <option value="Jr">Jr.</option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                        <option value="V">V</option>
                        <option value="VI">VI</option>
                        <option value="VII">VII</option>
                        <option value="VIII">VIII</option>
                        <option value="IX">IX</option>
                      </select> 
                      <span class="suffixErr"></span>   
                </div>      
              </fieldset>

              <fieldset>
                <div class="form-group">
                  <div class="col-md-6 gender">
                    <span>Gender</span>
                    <ul>
                    <div class="col-xs-6 col-sm-6 col-md-6 male">
                      <li>
                        <input type="radio" id="m-select" name="gender" value="Male" checked required>
                        <label for="m-select">Male</label>
                        <div class="check"></div>
                      </li>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 female">
                      <li>
                        <input type="radio" id="f-select" name="gender" value="Female">
                        <label for="f-select">Female</label>
                        <div class="check"><div class="inside"></div></div>
                      </li>
                    </div>
                    </ul>
                  </div>              
                </div>      

                <div class="form-group col-md-6">
                  <span>Birthday</span>
                  <input type="date" class="form-control" id="birthday" name="birthday">
                  <span class="birthdayErr"></span>
                </div>                
              </fieldset>

              <!-- YEAR AND SECTION -->
              <fieldset>
                <div class="col-xs-6 col-sm-6 form-group">   
                      <select id="year" name="year" value="" class="form-control select-form">
                        <option value="" disabled selected>-- Year --</option>
                        <option value="1">First Year</option>
                        <option value="2">Second Year</option>
                        <option value="3">Third Year</option>
                        <option value="4">Fourth Year</option>
                        <option value="5">Fifth Year</option>
                      </select> 
                      <span class="yearErr"></span>   
                </div>

                <div class="col-xs-6 col-sm-6 form-group">
                      <select id="section" name="section" value="" class="form-control select-form">
                        <option value="" disabled selected>-- Section --</option>
                        <option value="1">Section 1</option>
                        <option value="2">Section 2</option>
                        <option value="3">Section 3</option>
                        <option value="4">Section 4</option>
                        <option value="5">Section 5</option>
                        <option value="6">Section 6</option>
                      </select>        
                      <span class="sectionErr"></span>
                </div>
              </fieldset>
              <!-- YEAR AND SECTION -->

              <!-- CONTACTS INFO -->
              <fieldset>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="contactNumber" name="contactNumber" placeholder="Contact Number">
                  <span class="contactNumberErr"></span>
                </div>       

                <div class="form-group col-md-6">
                  <input type="email" class="form-control" id="emailAddress" name="emailAddress" placeholder="Email Address">
                  <span class="emailAddressErr"></span>
                </div>       
              </fieldset>
              <!-- CONTACTS INFO -->

              <!-- ADDRESS INFO -->
              <fieldset>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="residentialAddress" name="residentialAddress" placeholder="Residential Address">
                  <span class="residentialAddressErr"></span>
                </div>       

                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="provincialAddress" name="provincialAddress" placeholder="Provincial Address">
                  <span class="provincialAddressErr"></span>
                </div>       
              </fieldset>
              <!-- ADDRESS INFO -->
            </div>
            <!-- NAME INFO -->

            <!-- EDUCATIONAL / AFFILIATIONS INFO -->
            <div class="personal">Educational Background & Affiliations</div>
            <div class="schoolInfo">
              <!-- EDUCATIONAL INFO -->
              <fieldset>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="highSchool" name="highSchool" placeholder="High School Graduated">
                  <span class="highSchoolErr"></span>
                </div>

                <div class="col-md-6 form-group">   
                      <select id="hsType" name="hsType" value="" class="form-control select-form">
                        <option value="" disabled selected>-- High School Type --</option>
                        <option value="Public">Public</option>
                        <option value="Private">Private</option>
                        <option value="Science">Science</option>
                        <option value="National">National</option>
                      </select> 
                      <span class="hsTypeErr"></span>   
                </div>       

                <div class="form-group col-md-12">
                  <input type="text" class="form-control" id="awardsHS" name="awardsHS" placeholder="Awards Received">
                  <span class="awardsHSErr"></span>
                </div>          

                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="scholar" name="scholar" placeholder="Scholarship Name (if any)">
                  <span class="scholarErr"></span>
                </div>

                <div class="col-md-6 form-group">   
                      <select id="scholarType" name="scholarType" value="" class="form-control select-form">
                        <option value="" disabled selected>-- Scholarship Type --</option>
                        <option value="City Scholarship">City Scholarship</option>
                        <option value="DOST">DOST</option>
                        <option value="University Scholarship">University Scholarship</option>
                        <option value="Private Company Scholarship">Private Company Scholarship</option>
                      </select> 
                      <span class="scholarTypeErr"></span>   
                </div>

              </fieldset>
              <!-- EDUCATIONAL INFO -->

              <!-- AFFILIATIONS INFO -->
              <fieldset>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="organizationOne" name="organizationOne" placeholder="Organization">
                  <span class="organizationOneErr"></span>
                </div>

                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="positionOne" name="positionOne" placeholder="Position">
                  <span class="positionOneErr"></span>
                </div>       

                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="organizationTwo" name="organizationTwo" placeholder="Organization">
                  <span class="organizationTwoErr"></span>
                </div>

                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="positionTwo" name="positionTwo" placeholder="Position">
                  <span class="positionTwoErr"></span>
                </div>          

                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="organizationThree" name="organizationThree" placeholder="Organization">
                  <span class="organizationThreeErr"></span>
                </div>

                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="positionThree" name="positionThree" placeholder="Position">
                  <span class="positionThreeErr"></span>
                </div>      
              </fieldset>
              <!-- AFFILIATIONS INFO -->

              <fieldset>
                <div class="form-group col-md-12">
                  <input type="text" class="form-control" id="skills" name="skills" placeholder="Skills">
                  <span class="skillsErr"></span>
                </div> 
              </fieldset>
            </div>
            <!-- EDUCATIONAL / AFFILIATIONS INFO -->            


            <!-- FAMILY INFO -->
            <div class="personal">Family Information</div>
            <div class="familyInfo">
              <fieldset>
                <div class="form-group col-md-12">
                  <input type="text" class="form-control" id="mother" name="mother" placeholder="Mother's Name">
                  <span class="motherErr"></span>
                </div>       

                <div class="form-group col-md-12">
                  <input type="text" class="form-control" id="father" name="father" placeholder="Father's Name">
                  <span class="fatherErr"></span>
                </div>          

                <div class="form-group col-md-12">
                  <input type="text" class="form-control" id="guardian" name="guardian" placeholder="Guardian's Name">
                  <span class="guardianErr"></span>
                </div>   

                <div class="form-group col-md-12">
                  <input type="text" class="form-control" id="contactGuardian" name="contactGuardian" placeholder="Guardian's Contact Number">
                  <span class="contactGuardianErr"></span>
                </div>      
              </fieldset>
            </div>
            <!-- FAMILY INFO -->
            
            <h3 class="success"></h3>
            <h3 class="error"></h3>
            <div align="center">
              <button type="submit" id="btn-verify" class="btn btn-primary btn-lg">
              Submit
              </button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>



  <!-- ========================== SCRIPTS ============================= -->
  
  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/auth.js"></script>

</body>


</html>
