<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en" class="no-js">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ACCESS  |  Profile Settings</title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo-access.ico">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  
    <!-- CSS -->
    <link href ="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/navbardark.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/profile-settings.css">

    <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>    

  </head>

<body>

<div class="profile-header-header">
    <div class="row">
        <div class="col-md-12">
            
        </div>
    </div>
</div>
  

<?php 

foreach($profile as $row):

$tempImage = "";
if ($row->gender == 'Male') $tempImage = "assets/img/user-boy.png"; 
if ($row->gender == 'Female') $tempImage = "assets/img/user-girl.png"; 

$tempDate = new DateTime($row->birthdate);
$birthday = $tempDate->format("Y-m-d");

$suffixes = array(
            '' => 'None',
            'Jr' => 'Jr.',
            'I' => 'I',
            'II' => 'II',
            'III' => 'III',
            'IV' => 'IV',
            'V' => 'V',
            'VI' => 'VI',
            'VII' => 'VII',
            'VIII' => 'VIII',
            'IX' => 'IX'
          );

$years = array(
            '1' => 'First Year',
            '2' => 'Second Year',
            '3' => 'Third Year',
            '4' => 'Fourth Year',
            '5' => 'Fifth Year'
          );

$sections = array(
            '1' => 'Section 1',
            '2' => 'Section 2',
            '3' => 'Section 3',
            '4' => 'Section 4',
            '5' => 'Section 5',
            '6' => 'Section 6'
          );

$genders = array(
            'Male' => 'Male',
            'Female' => 'Female'
          );

$hsTypes = array(
            'Public' => 'Public',
            'Private' => 'Private',
            'Science' => 'Science',
            'National' => 'National'
          );

$scholarTypes = array(
            '' => 'None',
            'City Scholarship' => 'City Scholarship',
            'DOST' => 'DOST',
            'University Scholarship' => 'University Scholarship',
            'Private Company Scholarship' => 'Private Company Scholarship'
          );

?>
<div class="profile-container">
  <div class="container-fluid">
    <div class="row personal">
      <div class="col-sm-4 col-md-4 personal-info" align="center">
        <div class="big-icon" style='background:url(<?php echo base_url() . $tempImage; ?>) center no-repeat; width: 180px; height: 180px; background-size: 100%; border-radius: 50%; border: 2px solid white;'></div>

        <h3><?php echo $row->firstName . " " . substr($row->middleName, 0, 1) . ". " . $row->lastName . ' ' . $row->suffix; ?></h3>
        <hr>
        <h5>Student No: <?php echo $row->studentNumber; ?></h5>
        <h5>Member Id: <?php echo $row->memberID; ?></h5>
        <h5>Member Status: <?php echo $row->MembershipStatus; ?></h5>
        <h5>Year & Section: BsCpE <?php echo $row->yearLevel . "-" . $row->section; ?></h5>
      </div>

      <div class="col-sm-7 col-md-7 name-info">
        <h3 class="personal-header">Personal Information</h3>
         <form id="editProfile" method="post" action="<?php base_url(); ?>edit_profile">
            <div class="row">
              <div class="col-md-3 name-info-details">
                <span class="err" id="firstNameError"></span>
                <div class="form-group">
                  <label><h4><span class="orange">First Name:</span></h4></label>
                  <input type="text" id="firstName" name="firstName" value="<?php echo $row->firstName; ?>"/>
                </div>
              </div>

              <div class="col-md-3 name-info-details">
                <span class="err" id="middleNameError"></span>           
                <div class="form-group">
                  <label><h4><span class="orange">Middle Name:</span></h4></label>
                  <input type="text" id="middleName" name="middleName" value="<?php echo $row->middleName; ?>"/>
                </div>
              </div>

              <div class="col-md-3 name-info-details">
                <span class="err" id="lastNameError"></span>
                <div class="form-group">
                  <label><h4><span class="orange">Last Name:</span></h4></label>
                  <input type="text" id="lastName" name="lastName" value="<?php echo $row->lastName; ?>"/>
                </div>
              </div>

              <div class="col-md-3 name-info-details">
                <span class="err" id="suffixError"></span>
                <div class="form-group">
                  <h4 class="orange select-suffix">Suffix:</h4>
                  <select id="suffix" name="suffix" class="form-control select-form">
                    <?php foreach($suffixes as $val => $text): ?>
                    <option value="<?php echo $val; ?>"<?php if($val == $row->suffix) echo 'selected'; ?>><?php echo $text; ?></option>
                    <?php endforeach; ?>
                  </select> 
                </div>
              </div>
            </div>

          <div class="next-row">
            <div class="row">
              <div class="col-md-6 name-info-details">
                <span class="err" id="yearError"></span>
                <div class="form-group">
                  <label><h4><span class="orange">Year:</span></h4></label>
                  <select id="year" name="year" value="" class="form-control select-form">
                    <?php foreach($years as $val => $text): ?>
                    <option value="<?php echo $val; ?>"<?php if($val == $row->yearLevel) echo 'selected'; ?>><?php echo $text; ?></option>
                    <?php endforeach; ?>
                  </select> 
                </div>
              </div>

              <div class="col-md-6 name-info-details">
                <span class="err" id="sectionError"></span>
                <div class="form-group">
                  <label><h4><span class="orange">Section:</span></h4></label>
                  <select id="section" name="section" value="" class="form-control select-form">
                    <?php foreach($sections as $val => $text): ?>
                    <option value="<?php echo $val; ?>"<?php if($val == $row->section) echo 'selected'; ?>><?php echo $text; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 name-info-details gender-info">
                <span class="genderError"></span>
                <div class="form-group">
                  <label><h4><span class="orange">Gender:</span></h4></label>
                  <select id="gender" name="gender" value="" class="form-control select-form">
                    <?php foreach($genders as $val => $text): ?>
                    <option value="<?php echo $val; ?>"<?php if($val == $row->section) echo 'selected'; ?>><?php echo $text; ?></option>
                    <?php endforeach; ?>
                  </select>  
                </div>
              </div>

              <div class="col-md-6 name-info-details">
                <span class="birthdayError"></span>
                <div class="form-group">
                  <label><h4><span class="orange">Birthday:</span></h4></label>
                  <input type="date" id="birthday" placeholder="" name="birthday" value="<?php echo $birthday; ?>"/>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 name-info-details">
                <span class="err" id="fatherError"></span>
                <div class="form-group">
                  <label><h4><span class="orange">Contact Number:</span></h4></label>
                  <input type="text" id="contactNumber" name="contactNumber" value="<?php echo $row->contactNumber; ?>"/>
                </div>
              </div>

              <div class="col-md-6 name-info-details">
                <span class="err" id="emailAddressError"></span>
                <div class="form-group">
                  <label><h4><span class="orange">Email Address:</span></h4></label>
                  <input type="text" id="emailAddress" name="emailAddress"  value="<?php echo $row->emailAddress; ?>"/>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 name-info-details">
                <span class="err" id="residentialAddressError"></span>
                <div class="form-group">
                  <label><h4><span class="orange">Residential Address:</span></h4></label>
                  <input type="text" id="residentialAddress" name="residentialAddress" value="<?php echo $row->residentialAddress; ?>"/>
                </div>
              </div>

              <div class="col-md-6 name-info-details">
                <span class="err" id="provincialAddressError"></span>
                <div class="form-group">
                  <label><h4><span class="orange">Provincial Address:</span></h4></label>
                  <input type="text" id="provincialAddress" name="provincialAddress" value="<?php echo $row->provincialAddress; ?>"/>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-6 name-info-details">
                <span class="err" id="motherError"></span>
                <div class="form-group">
                  <label><h4><span class="orange">Mother's Name:</span></h4></label>
                  <input type="text" id="mother" name="mother" value="<?php echo $row->mother; ?>" />
                </div>
              </div>

              <div class="col-md-6 name-info-details">
                <span class="err" id="fatherError"></span>
                <div class="form-group">
                  <label><h4><span class="orange">Father's Name:</span></h4></label>
                  <input type="text" id="father" name="father" value="<?php echo $row->father; ?>"/>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-6 name-info-details">
                <span class="err" id="guardianError"></span>
                <div class="form-group">
                  <label><h4><span class="orange">Guardian's Name:</span></h4></label>
                  <input type="text" id="guardian" name="guardian" value="<?php echo $row->guardian; ?>"/>
                </div>
              </div>

               <div class="col-md-6 name-info-details">
                <span class="err" id="contactGuardianErr"></span>
                <div class="form-group">
                  <label><h4><span class="orange">Guardian's Contact Number:</span></h4></label>
                  <input type="text" id="contactGuardian" name="contactGuardian" value="<?php echo $row->guardianContact; ?>" />
                </div>
              </div>
            </div> 
          </div>
      </div>

      <div class="col-sm-7 col-md-7 educational-info">
        <h3 class="educational-header">Educational Background & Affliations</h3>
          <div class="row">
            <div class="col-md-6 educational-details-col">
              <span class="err" id="highSchoolError"></span>
              <div class="form-group">
                <label><h4><span class="orange">High School Graduated: </span></h4></label>
                <input type="text" id="highSchool" name="highSchool" value="<?php echo $row->highSchoolGraduated; ?>"/>
              </div>
            </div>

            <div class="col-md-6 educational-details-col">
              <span class="err" id="hsTypeError"></span>
              <div class="form-group">
                <label><h4><span class="orange">High School Type: </span></h4></label>
                <select id="hsType" name="hsType" value="" class="form-control select-form">
                  <?php foreach($hsTypes as $val => $text): ?>
                  <option value="<?php echo $val; ?>"<?php if($val == $row->section) echo 'selected'; ?>><?php echo $text; ?></option>
                  <?php endforeach; ?>
                </select>           
              </div>
            </div>

            <div class=" col-md-6 educational-details-col">
              <span class="err" id="scholarError"></span>
              <div class="form-group">
                <label><h4><span class="orange">Scholarship: </span></h4></label>
                <input type="text" id="scholar" name="scholar" value="<?php echo $row->scholarship; ?>"/>
              </div>
            </div>

            <div class=" col-md-6 educational-details">
              <span class="err" id="scholarTypeError"></span>
              <div class="form-group">
                <label><h4><span class="orange">Scholarship Type: </span></h4></label>
                  <select id="scholarType" name="scholarType" class="form-control select-form">
                    <?php foreach($scholarTypes as $val => $text): ?>
                    <option value="<?php echo $val; ?>"<?php if($val == $row->section) echo 'selected'; ?>><?php echo $text; ?></option>
                    <?php endforeach; ?>
                  </select> 
              </div>
            </div>

            <div class="col-md-12 educational-details">
              <span class="err" id="awardsHSError"></span>
              <div class="form-group">
                <label><h4><span class="orange">Awards Received: </span></h4></label>
                <input type="text" id="awardsHS" name="awardsHS" value="<?php echo $row->awardsReceived; ?>"/>
              </div>
            </div>

            <div class="col-sm-12 col-md-12 educational-details">
              <span class="err" id="skillsError"></span>
              <div class="form-group">
                <label><h4><span class="orange">Skills: </span></h4></label>
                <input type="text" id="skills" name="skills" value="<?php echo $row->skills; ?>"/>
              </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 educational-two">
                <span class="err" id="organizationOneError"></span>
                <div class="form-group">
                  <label><h4><span class="orange">Organization: </span></h4></label>
                  <input type="text" id="organizationOne" name="organizationOne" value="<?php echo $row->organization_one; ?>"/>
                </div>
              </div>

              <div class="col-sm-6 col-md-6 educational-two">
                <span class="err" id="positionOneError"></span>
                <div class="form-group">
                  <label><h4><span class="orange">Position: </span></h4></label>
                  <input type="text" id="positionOne" name="positionOne" value="<?php echo $row->position_one; ?>"/>
                </div> 
              </div>
              
              <div class="col-sm-6 col-md-6 educational-two">
                <span class="err" id="organizationTwoError"></span>
                <div class="form-group">
                  <label><h4><span class="orange">Organization: </span></h4></label>
                  <input type="text" id="organizationTwo" name="organizationTwo" value="<?php echo $row->organization_two; ?>"/>                 
                </div>
              </div>

              <div class="col-sm-6 col-md-6 educational-two">
                <span class="err" id="positionTwoError"></span>
                <div class="form-group">
                  <label><h4><span class="orange">Position: </span></h4></label>
                  <input type="text" id="positionTwo" name="positionTwo" value="<?php echo $row->position_two; ?>"/>               
                </div>
               </div>

              <div class="col-sm-6 col-md-6 educational-two">
                <span class="err" id="organizationThreeError"></span>
                <div class="form-group">
                  <label><h4><span class="orange">Organization: </span></h4></label>
                  <input type="text" id="organizationThree" name="organizationThree" value="<?php echo $row->organization_three; ?>"/>
                </div>            
              </div>

              <div class="col-sm-6 col-md-6 educational-two">
                <span class="err" id="positionThreeError"></span>
                <div class="form-group">
                  <label><h4><span class="orange">Position: </span></h4></label>
                  <input type="text" id="positionThree" name="positionThree" value="<?php echo $row->position_three; ?>"/>                 
                </div>             
              </div>
          </div>
        </div>    
    </div>
<?php endforeach; ?>
      <div class="row">
        <div class="col-sm-3 col-md-3 button" align="center">
          <button id="update-account-profile" type="submit">Save Profile</button> 
        </div>

        <!-- <div class="col-sm-3 col-md-3 button" align="center">
          <input type="file" name="file-1[]" id="file-1" accept="image/*" class="inputfile inputfile-1" />
          <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Choose image&hellip;</span></label>
        </div> -->
      </div>
      </form>

    </div>
  </div>
</div>

