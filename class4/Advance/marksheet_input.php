<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Marksheet</title>
    <style>
    .Red_alert {
        color: red;
    }
    </style>
</head>

<body>
    <?php
          #Info insert variable
          $scl_name = "";
          $scl_address = "";
          $exam_year = "0";
          $name = "";
          $father_name = "";
          $mother_name = "";
          $roll = "";
          $registration = "";
          $department = "";
          $seasion = "";
          
          #Mark insert variable
          $bangla_1st = "";
          $bangla_2nd = "";
          $english_1st = "";
          $english_2nd = "";
          $math = "";
          $hair_math = "";
          $physics = "";
          $chemistry = "";
          $biology = "";
          $social_science = "";
          $ict = "";
          $islam = "";

          
          
        //#Mark length required variable
        //$len_bangla_1st = strlen($bangla_1st);
        //$len_bangla_2nd = strlen($bangla_2nd);
        //$len_english_1st = strlen($english_1st);
        //$len_english_2nd = strlen($english_2nd);
        //$len_math = strlen($math);
        //$len_hair_math = strlen($hair_math);
        //$len_physics = strlen($physics);
        //$len_chemistry = strlen($chemistry);
        //$len_biology = strlen($biology);
        //$len_social_science = strlen($social_science);
        //$len_ict = strlen($ict);
        //$len_islam = strlen($islam);

          #Info required variable
          $err_scl_name = "";
          $err_scl_address = "";
          $err_exam_year = "";
          $err_name = "";
          $err_father_name = "";
          $err_mother_name = "";
          $err_roll = "";
          $err_registration = "";
          $err_department = "";
          $err_seasion = "";
          
          #Mark required variable
          $err_bangla_1st = "";
          $err_bangla_2nd = "";
          $err_english_1st = "";
          $err_english_2nd = "";
          $err_math = "";
          $err_hair_math = "";
          $err_physics = "";
          $err_chemistry = "";
          $err_biology = "";
          $err_social_science = "";
          $err_ict = "";
          $err_islam = "";

      if(isset($_POST['submit'])){

          $scl_name = $_POST['scl_name'];
          $scl_address = $_POST['scl_address'];
          $exam_year = $_POST['exam_year'];
          $name = $_POST['name'];
          $father_name = $_POST['father_name'];
          $mother_name = $_POST['mother_name'];
          $roll = $_POST['roll'];
          $registration = $_POST['registration'];
          $department = $_POST['department'];
          $seasion = $_POST['seasion'];


          $bangla_1st = $_POST['bangla_1st'];
          $bangla_2nd = $_POST['bangla_2nd'];
          $english_1st = $_POST['english_1st'];
          $english_2nd = $_POST['english_2nd'];
          $math = $_POST['math'];
          $hair_math = $_POST['hair_math'];
          $physics = $_POST['physics'];
          $chemistry = $_POST['chemistry'];
          $biology = $_POST['biology'];
          $social_science = $_POST['social_science'];
          $ict = $_POST['ict'];
          $islam = $_POST['islam'];

          #Info length required variable
          $len_scl_name = strlen($scl_name);
          $len_scl_address = strlen($scl_address);
        //$len_exam_year = strlen((string)$exam_year);
          $len_name = strlen($name);
          $len_father_name = strlen($father_name);
          $len_mother_name = strlen($mother_name);
        //$len_roll = strlen((string)$roll);
        //$len_registration = strlen($registration);
          $len_department = strlen($department);
        $len_seasion = strlen($seasion);

        $e = 0;
          if(empty($scl_name) || $len_scl_name<14){
            $e++;
            $err_scl_name ="Please Enter Your School Name Min 15 Character!";
          }
          if(empty($scl_address) || $len_scl_address<14){
            $e++;
            $err_scl_address = "Please Enter Your School Address Min 15 Character!";
          }
          if($exam_year == "0"){
            $e++;
            $err_exam_year = "Please Select Your Exam Year!";
          }
          if(empty($name) || $len_name<5){
            $e++;
            $err_name = "Please Enter Your Name Min 6 Character!";
          }
          if(empty($father_name) || $len_father_name<5){
            $e++;
            $err_father_name = "Please Enter Your Father Name Min 6 Character!";
          }
          if(empty($mother_name) || $len_mother_name<5){
            $e++;
            $err_mother_name = "Please Enter Your Mother Name Min 6 Character!";
          }
          if(empty($roll)){
            $e++;
            $err_roll = "Please Enter Your Roll!";
          }
          if(empty($registration)){
            $e++;
            $err_registration = "Please Enter Your Registration No!";
          }
          if(empty($department) || $len_department<3){
            $e++;
            $err_department = "Please Enter Your Department Name Min 4 Character!";
          }
          if(empty($seasion) || $len_seasion<5){
            $e++; 
            $err_seasion = "Please Enter Your Session (Ex: 21-22)!";
          }
          if(empty($bangla_1st) || $bangla_1st>100){
            $e++;
            $err_bangla_1st = "Please Enter Your Subject Mark Only 2 Digit!";
          }
          if(empty($bangla_2nd) || $bangla_2nd>100){
            $e++;
            $err_bangla_2nd = "Please Enter Your Subject Mark Only 2 Digit!";
          }
          if(empty($english_1st) || $english_1st>100){
            $e++;
            $err_english_1st = "Please Enter Your Subject Mark Only 2 Digit!";
          }
          if(empty($english_2nd) || $english_2nd>100){
            $e++;
            $err_english_2nd = "Please Enter Your Subject Mark Only 2 Digit!";
          }
          if(empty($math) || $math>100){
            $e++;
            $err_math = "Please Enter Your Subject Mark Only 2 Digit!";
          }
          if(empty($hair_math) || $hair_math>100){
            $e++;
            $err_hair_math = "Please Enter Your Subject Mark Only 2 Digit!";
          }
          if(empty($physics) || $physics>100){
            $e++;
            $err_physics = "Please Enter Your Subject Mark Only 2 Digit!";
          }
          if(empty($chemistry) || $chemistry>100){
            $e++;
            $err_chemistry = "Please Enter Your Subject Mark Only 2 Digit!";
          }
          if(empty($biology) || $biology>100){
            $e++;
            $err_biology = "Please Enter Your Subject Mark Only 2 Digit!";
          }
          if(empty($social_science) || $social_science>100){
            $e++;
            $err_social_science = "Please Enter Your Subject Mark Only 2 Digit!";
          }
          if(empty($ict) || $ict>100){
            $e++;
            $err_ict = "Please Enter Your Subject Mark Only 2 Digit!";
          }
          if(empty($islam) || $islam>100){
            $e++;
            $err_islam = "Please Enter Your Subject Mark Only 2 Digit!";
          }

          if($e==0){
            include "index_adv.php";
            $scl_name = "";
            $scl_address = "";
            $exam_year = "0";
            $name = "";
            $father_name = "";
            $mother_name = "";
            $roll = "";
            $registration = "";
            $department = "";
            $seasion = "";
            $bangla_1st = "";
            $bangla_2nd = "";
            $english_1st = "";
            $english_2nd = "";
            $math = "";
            $hair_math = "";
            $physics = "";
            $chemistry = "";
            $biology = "";
            $social_science = "";
            $ict = "";
            $islam = "";
            
          }
          
      }
      
?>
    <section class="form_wrap w-100">
        <div class="container">

            <form class="p-5" method="POST" action="">
                <div class="form_header text-center mb-5">
                    <h1>Marksheet Generator</h1>
                    <h3>Make your won marksheet just for fun</h3>
                </div>
                <div class="row">
                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="col-6">
                                <div class="">
                                    <label for="scl_name" class="form-label">School Name</label>
                                    <input type="text" name="scl_name" value="<?php echo $scl_name;?>"
                                        class="form-control" placeholder="Enter your school name"
                                        aria-describedby="emailHelp">
                                    <span class="Red_alert"><?php echo $err_scl_name;?></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="">
                                    <label for="scl_address" class="form-label">School Address</label>
                                    <input type="text" name="scl_address" value="<?php echo $scl_address;?>"
                                        class="form-control" placeholder="Enter your school address">
                                    <span class="Red_alert"><?php echo $err_scl_address;?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="col-6">
                                <div class="">
                                    <label for="exam_year" class="form-label">Exam Year</label>
                                    <!-- <input type="number" name="exam_year" value="<?php echo $exam_year;?>"
                                        class="form-control" placeholder="Enter your exam year"
                                        aria-describedby="emailHelp"> -->

                                    <select class="form-select" aria-label="Default select example" name="exam_year"
                                        value="<?php echo $exam_year; ?>">
                                        <option value="0">Select your exam year</option>
                                        <option value="1990">1990</option>
                                        <option value="1991">1991</option>
                                        <option value="1992">1992</option>
                                        <option value="1993">1993</option>
                                        <option value="1994">1994</option>
                                        <option value="1995">1995</option>
                                        <option value="1996">1996</option>
                                        <option value="1997">1997</option>
                                        <option value="1998">1998</option>
                                        <option value="1999">1999</option>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                    </select>
                                    <span class="Red_alert"><?php echo $err_exam_year;?></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="">
                                    <label for="name" class="form-label">Student Name</label>
                                    <input type="text" name="name" value="<?php echo $name;?>" class="form-control"
                                        placeholder="Enter your full name">
                                    <span class="Red_alert"><?php echo $err_name;?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="col-6">
                                <div class="">
                                    <label for="father_name" class="form-label">Father Name</label>
                                    <input type="text" name="father_name" value="<?php echo $father_name;?>"
                                        class="form-control" placeholder="Enter your father full name"
                                        aria-describedby="emailHelp">
                                    <span class="Red_alert"><?php echo $err_father_name;?></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="">
                                    <label for="mother_name" class="form-label">Mother Name</label>
                                    <input type="text" name="mother_name" value="<?php echo $mother_name;?>"
                                        class="form-control" placeholder="Enter your mother full name">
                                    <span class="Red_alert"><?php echo $err_mother_name;?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="col-6">
                                <div class="">
                                    <label for="roll" class="form-label">Roll</label>
                                    <input type="number" name="roll" value="<?php echo $roll;?>" class="form-control"
                                        placeholder="Enter your roll" aria-describedby="emailHelp">
                                    <span class="Red_alert"><?php echo $err_roll;?></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="">
                                    <label for="registration" class="form-label">Registration No</label>
                                    <input type="number" name="registration" value="<?php echo $registration;?>"
                                        class="form-control" placeholder="Enter your registration no">
                                    <span class="Red_alert"><?php echo $err_registration;?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="col-6">
                                <div class="">
                                    <label for="department" class="form-label">Department</label>
                                    <input type="text" name="department" value="<?php echo $department;?>"
                                        class="form-control" placeholder="Enter your department name"
                                        aria-describedby="emailHelp">
                                    <span class="Red_alert"><?php echo $err_department;?></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="">
                                    <label for="seasion" class="form-label">Session</label>
                                    <input type="text" name="seasion" value="<?php echo $seasion;?>"
                                        class="form-control" placeholder="Enter your session (ex: 21-22 )">
                                    <span class="Red_alert"><?php echo $err_seasion;?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="col-6">
                                <div class="">
                                    <label for="bangla_1st" class="form-label">Bangla 1st Paper Mark</label>
                                    <input type="number" name="bangla_1st" value="<?php echo $bangla_1st;?>"
                                        class="form-control" placeholder="Enter your subject mark"
                                        aria-describedby="emailHelp">
                                    <span class="Red_alert"><?php echo $err_bangla_1st;?></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="">
                                    <label for="bangla_2nd" class="form-label">Bangla 2nd Paper Mark</label>
                                    <input type="number" name="bangla_2nd" value="<?php echo $bangla_2nd;?>"
                                        class="form-control" placeholder="Enter your subject mark">
                                    <span class="Red_alert"><?php echo $err_bangla_2nd;?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="col-6">
                                <div class="">
                                    <label for="english_1st" class="form-label">English 1st Paper Mark</label>
                                    <input type="number" name="english_1st" value="<?php echo $english_1st;?>"
                                        class="form-control" placeholder="Enter your subject mark"
                                        aria-describedby="emailHelp">
                                    <span class="Red_alert"><?php echo $err_english_1st;?></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="">
                                    <label for="english_2nd" class="form-label">English 2nd Paper Mark</label>
                                    <input type="number" name="english_2nd" value="<?php echo $english_2nd;?>"
                                        class="form-control" placeholder="Enter your subject mark">
                                    <span class="Red_alert"><?php echo $err_english_2nd;?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="col-6">
                                <div class="">
                                    <label for="math" class="form-label">Math Mark</label>
                                    <input type="number" name="math" value="<?php echo $math;?>" class="form-control"
                                        placeholder="Enter your subject mark" aria-describedby="emailHelp">
                                    <span class="Red_alert"><?php echo $err_math;?></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="">
                                    <label for="hair_math" class="form-label">Hair Math Mark</label>
                                    <input type="number" name="hair_math" value="<?php echo $hair_math;?>"
                                        class="form-control" placeholder="Enter your subject mark">
                                    <span class="Red_alert"><?php echo $err_hair_math;?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="col-6">
                                <div class="">
                                    <label for="physics" class="form-label">Physics Mark</label>
                                    <input type="number" name="physics" value="<?php echo $physics;?>"
                                        class="form-control" placeholder="Enter your subject mark"
                                        aria-describedby="emailHelp">
                                    <span class="Red_alert"><?php echo $err_physics;?></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="">
                                    <label for="chemistry" class="form-label">Chemistry Mark</label>
                                    <input type="number" name="chemistry" value="<?php echo $chemistry;?>"
                                        class="form-control" placeholder="Enter your subject mark">
                                    <span class="Red_alert"><?php echo $err_chemistry;?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="col-6">
                                <div class="">
                                    <label for="biology" class="form-label">Biology Mark</label>
                                    <input type="number" name="biology" value="<?php echo $biology;?>"
                                        class="form-control" placeholder="Enter your subject mark"
                                        aria-describedby="emailHelp">
                                    <span class="Red_alert"><?php echo $err_biology;?></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="">
                                    <label for="social_science" class="form-label">Social Science Mark</label>
                                    <input type="number" name="social_science" value="<?php echo $social_science;?>"
                                        class="form-control" placeholder="Enter your subject mark">
                                    <span class="Red_alert"><?php echo $err_social_science;?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="col-6">
                                <div class="">
                                    <label for="ict" class="form-label">I.C.T Mark</label>
                                    <input type="number" name="ict" value="<?php echo $ict;?>" class="form-control"
                                        placeholder="Enter your subject mark" aria-describedby="emailHelp">
                                    <span class="Red_alert"><?php echo $err_ict;?></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="">
                                    <label for="islam" class="form-label">Islam Mark</label>
                                    <input type="number" name="islam" value="<?php echo $islam;?>" class="form-control"
                                        placeholder="Enter your subject mark">
                                    <span class="Red_alert"><?php echo $err_islam;?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100" name="submit">Submit</button>
            </form>
        </div>
    </section>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>