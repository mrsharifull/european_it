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
</head>

<body>


    <?php
    // $scl_name = "";
    // $scl_address = "";
    // $exam_year = "";
    // $name = "";
    // $father_name = "";
    // $mother_name = "";
    // $roll = "";
    // $registration = "";
    // $department = "";
    // $seasion = "";
    // $bangla_1st = "";
    // $bangla_2nd = "";
    // $english_1st = "";
    // $english_2nd = "";
    // $math = "";
    // $hair_math = "";
    // $physics = "";
    // $chemistry = "";
    // $biology = "";
    // $social_science = "";
    // $ict = "";
    // $islam = "";

    // $scl_name = $_POST['scl_name'];
    // $scl_address = $_POST['scl_address'];
    // $exam_year = $_POST['exam_year'];
    // $name = $_POST['name'];
    // $father_name = $_POST['father_name'];
    // $mother_name = $_POST['mother_name'];
    // $roll = $_POST['roll'];
    // $registration = $_POST['registration'];
    // $department = $_POST['department'];
    // $seasion = $_POST['seasion'];


    // $bangla_1st = $_POST['bangla_1st'];
    // $bangla_2nd = $_POST['bangla_2nd'];
    // $english_1st = $_POST['english_1st'];
    // $english_2nd = $_POST['english_2nd'];
    // $math = $_POST['math'];
    // $hair_math = $_POST['hair_math'];
    // $physics = $_POST['physics'];
    // $chemistry = $_POST['chemistry'];
    // $biology = $_POST['biology'];
    // $social_science = $_POST['social_science'];
    // $ict = $_POST['ict'];
    // $islam = $_POST['islam'];

    $bangla_avg = ($bangla_1st + $bangla_2nd) / 2;
    $english_avg = ($english_1st + $english_2nd) / 2;
    $result = ($bangla_avg + $english_avg + $math + $hair_math + $physics + $chemistry
        + $biology + $social_science + $ict + $islam) / 10;

    $bangla_grade = "";
    $english_grade = "";
    $math_grade = "";
    $hair_math_grade = "";
    $physics_grade = "";
    $chemistry_grade = "";
    $biology_grade = "";
    $social_science_grade = "";
    $ict_grade = "";
    $islam_grade = "";
    $gpa_grade = "";
    $gpa = "";

    // 80 - 100 = A+
    // 70 - 79 = A
    // 60 - 69 = A-
    // 50 - 59 = B
    // 40 - 49 = C
    // 33 - 39 = D
    // 0 - 32 = F



    #Bangla Result

    if ($bangla_avg >= 80 && $bangla_avg <= 100) {
        $bangla_grade = "A+";
    } elseif ($bangla_avg >= 70 && $bangla_avg <= 79) {
        $bangla_grade = "A";
    } elseif ($bangla_avg >= 60 && $bangla_avg <= 69) {
        $bangla_grade = "A-";
    } elseif ($bangla_avg >= 50 && $bangla_avg <= 59) {
        $bangla_grade = "B";
    } elseif ($bangla_avg >= 40 && $bangla_avg <= 49) {
        $bangla_grade = "C";
    } elseif ($bangla_avg >= 33 && $bangla_avg <= 39) {
        $bangla_grade = "D";
    } else {
        $bangla_grade = "F";
    }



    #English Result

    if ($english_avg >= 80 && $english_avg <= 100) {
        $english_grade = "A+";
    } elseif ($english_avg >= 70 && $english_avg <= 79) {
        $english_grade = "A";
    } elseif ($english_avg >= 60 && $english_avg <= 69) {
        $english_grade = "A-";
    } elseif ($english_avg >= 50 && $english_avg <= 59) {
        $english_grade = "B";
    } elseif ($english_avg >= 40 && $english_avg <= 49) {
        $english_grade = "C";
    } elseif ($english_avg >= 33 && $english_avg <= 39) {
        $english_grade = "D";
    } else {
        $english_grade = "F";
    }



    #Math Result

    if ($math >= 80 && $math <= 100) {
        $math_grade = "A+";
    } elseif ($math >= 70 && $math <= 79) {
        $math_grade = "A";
    } elseif ($math >= 60 && $math <= 69) {
        $math_grade = "A-";
    } elseif ($math >= 50 && $math <= 59) {
        $math_grade = "B";
    } elseif ($math >= 40 && $math <= 49) {
        $math_grade = "C";
    } elseif ($math >= 33 && $math <= 39) {
        $math_grade = "D";
    } else {
        $math_grade = "F";
    }



    #Hair Math Result

    if ($hair_math >= 80 && $hair_math <= 100) {
        $hair_math_grade = "A+";
    } elseif ($hair_math >= 70 && $hair_math <= 79) {
        $hair_math_grade = "A";
    } elseif ($hair_math >= 60 && $hair_math <= 69) {
        $hair_math_grade = "A-";
    } elseif ($hair_math >= 50 && $hair_math <= 59) {
        $hair_math_grade = "B";
    } elseif ($hair_math >= 40 && $hair_math <= 49) {
        $hair_math_grade = "C";
    } elseif ($hair_math >= 33 && $hair_math <= 39) {
        $hair_math_grade = "D";
    } else {
        $hair_math_grade = "F";
    }



    #Physics Result

    if ($physics >= 80 && $physics <= 100) {
        $physics_grade = "A+";
    } elseif ($physics >= 70 && $physics <= 79) {
        $physics_grade = "A";
    } elseif ($physics >= 60 && $physics <= 69) {
        $physics_grade = "A-";
    } elseif ($physics >= 50 && $physics <= 59) {
        $physics_grade = "B";
    } elseif ($physics >= 40 && $physics <= 49) {
        $physics_grade = "C";
    } elseif ($physics >= 33 && $physics <= 39) {
        $physics_grade = "D";
    } else {
        $physics_grade = "F";
    }



    #Chemistry Result

    if ($chemistry >= 80 && $chemistry <= 100) {
        $chemistry_grade = "A+";
    } elseif ($chemistry >= 70 && $chemistry <= 79) {
        $chemistry_grade = "A";
    } elseif ($chemistry >= 60 && $chemistry <= 69) {
        $chemistry_grade = "A-";
    } elseif ($chemistry >= 50 && $chemistry <= 59) {
        $chemistry_grade = "B";
    } elseif ($chemistry >= 40 && $chemistry <= 49) {
        $chemistry_grade = "C";
    } elseif ($chemistry >= 33 && $chemistry <= 39) {
        $chemistry_grade = "D";
    } else {
        $chemistry_grade = "F";
    }



    #Biology Result

    if ($biology >= 80 && $biology <= 100) {
        $biology_grade = "A+";
    } elseif ($biology >= 70 && $biology <= 79) {
        $biology_grade = "A";
    } elseif ($biology >= 60 && $biology <= 69) {
        $biology_grade = "A-";
    } elseif ($biology >= 50 && $biology <= 59) {
        $biology_grade = "B";
    } elseif ($biology >= 40 && $biology <= 49) {
        $biology_grade = "C";
    } elseif ($biology >= 33 && $biology <= 39) {
        $biology_grade = "D";
    } else {
        $biology_grade = "F";
    }



    #Social Science Result

    if ($social_science >= 80 && $social_science <= 100) {
        $social_science_grade = "A+";
    } elseif ($social_science >= 70 && $social_science <= 79) {
        $social_science_grade = "A";
    } elseif ($social_science >= 60 && $social_science <= 69) {
        $social_science_grade = "A-";
    } elseif ($social_science >= 50 && $social_science <= 59) {
        $social_science_grade = "B";
    } elseif ($social_science >= 40 && $social_science <= 49) {
        $social_science_grade = "C";
    } elseif ($social_science >= 33 && $social_science <= 39) {
        $social_science_grade = "D";
    } else {
        $social_science_grade = "F";
    }



    #I.C.T Result

    if ($ict >= 80 && $ict <= 100) {
        $ict_grade = "A+";
    } elseif ($ict >= 70 && $ict <= 79) {
        $ict_grade = "A";
    } elseif ($ict >= 60 && $ict <= 69) {
        $ict_grade = "A-";
    } elseif ($ict >= 50 && $ict <= 59) {
        $ict_grade = "B";
    } elseif ($ict >= 40 && $ict <= 49) {
        $ict_grade = "C";
    } elseif ($ict >= 33 && $ict <= 39) {
        $ict_grade = "D";
    } else {
        $ict_grade = "F";
    }



    #Islam Result

    if ($islam >= 80 && $islam <= 100) {
        $islam_grade = "A+";
    } elseif ($islam >= 70 && $islam <= 79) {
        $islam_grade = "A+";
    } elseif ($islam >= 60 && $islam <= 69) {
        $islam_grade = "A+";
    } elseif ($islam >= 50 && $islam <= 59) {
        $islam_grade = "A+";
    } elseif ($islam >= 40 && $islam <= 49) {
        $islam_grade = "A+";
    } elseif ($islam >= 33 && $islam <= 39) {
        $islam_grade = "A+";
    } else {
        $islam_grade = "A+";
    }



    #GPA Result

    if ($result >= 80 && $result <= 100) {
        $gpa_grade = "A+";
        $gpa = "5.00";
    } elseif ($result >= 70 && $result <= 79) {
        $gpa_grade = "A";
        $gpa = number_format($result / 16, 2);
    } elseif ($result >= 60 && $result <= 69) {
        $gpa_grade = "A-";
        $gpa = number_format($result / 16, 2);
    } elseif ($result >= 50 && $result <= 59) {
        $gpa_grade = "B";
        $gpa = number_format($result / 16, 2);
    } elseif ($result >= 40 && $result <= 49) {
        $gpa_grade = "C";
        $gpa = number_format($result / 16, 2);
    } elseif ($result >= 33 && $result <= 39) {
        $gpa_grade = "D";
        $gpa = number_format($result / 16, 2);
    } else {
        $gpa_grade = "F";
        $gpa = number_format($result / 16, 2);
    }

    ?>
    <section class="marksheet_wrap my-5">
        <div class="container">
            <div class="marksheet my-0 mx-auto">
                <div class="header_title text-center">
                    <h1><?php echo $scl_name; ?></h1>
                    <h3><?php echo $scl_address; ?></h3>
                    <h3>S S C Examination <?php echo $exam_year; ?></h3>
                    <hr>
                </div>
                <div class="title text-center">
                    <h2>Marksheet</h2>
                </div>
                <div class="name_section my-4">
                    <div class="row">
                        <div class="col-5">
                            <div class="name-section1">
                                <h4>Student Name <span>:</span></h4>
                                <h4>Father Name <span>:</span></h4>
                                <h4>Mother Name <span>:</span></h4>
                                <h4>Roll No <span>:</span></h4>
                                <h4>Registration No <span>:</span></h4>
                                <h4>Department <span>:</span></h4>
                                <h4>Seasion <span>:</span></h4>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="name-section2">
                                <h4><?php echo $name; ?></h4>
                                <h4><?php echo $father_name; ?></h4>
                                <h4><?php echo $mother_name; ?></h4>
                                <h4><?php echo $roll; ?></h4>
                                <h4><?php echo $registration; ?></h4>
                                <h4><?php echo $department; ?></h4>
                                <h4><?php echo $seasion; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="marksheet_table mb-5">
                    <table>
                        <tr>
                            <th>Subject</th>
                            <th>Marks</th>
                            <th>Grade</th>
                            <th>GPA</th>
                        </tr>
                        <tr>
                            <td>Bangla 1st</td>
                            <td><?php echo $bangla_1st; ?></td>
                            <td rowspan="2"><?php echo $bangla_grade; ?></td>
                            <td rowspan="12"><?php echo $gpa; ?></td>
                        </tr>
                        <tr>
                            <td>Bangla 2nd</td>
                            <td><?php echo $bangla_2nd; ?></td>
                        </tr>
                        <tr>
                            <td>English 1st</td>
                            <td><?php echo $english_1st; ?></td>
                            <td rowspan="2"><?php echo $english_grade; ?></td>
                        </tr>
                        <tr>
                            <td>English 2nd</td>
                            <td><?php echo $english_2nd; ?></td>
                        </tr>
                        <tr>
                            <td>Math</td>
                            <td><?php echo $math; ?></td>
                            <td><?php echo $math_grade; ?></td>
                        </tr>
                        <tr>
                            <td>Hair Math</td>
                            <td><?php echo $hair_math; ?></td>
                            <td><?php echo $hair_math_grade; ?></td>
                        </tr>
                        <tr>
                            <td>Physics</td>
                            <td><?php echo $physics; ?></td>
                            <td><?php echo $physics_grade; ?></td>
                        </tr>
                        <tr>
                            <td>Chemistry</td>
                            <td><?php echo $chemistry; ?></td>
                            <td><?php echo $chemistry_grade; ?></td>
                        </tr>
                        <tr>
                            <td>Biology</td>
                            <td><?php echo $biology; ?></td>
                            <td><?php echo $biology_grade; ?></td>
                        </tr>
                        <tr>
                            <td>Social Science</td>
                            <td><?php echo $social_science; ?></td>
                            <td><?php echo $social_science_grade; ?></td>
                        </tr>
                        <tr>
                            <td>I.C.T</td>
                            <td><?php echo $ict; ?></td>
                            <td><?php echo $ict_grade; ?></td>
                        </tr>
                        <tr>
                            <td>Islam</td>
                            <td><?php echo $islam; ?></td>
                            <td><?php echo $islam_grade; ?></td>
                        </tr>
                        <tr>
                            <td colspan="2">GPA</td>
                            <td><?php echo $gpa_grade; ?></td>
                            <td><?php echo $gpa; ?></td>
                        </tr>

                    </table>
                </div>
                <div class="ms_footer pt-3 text-center">
                    <div class="row">
                        <div class="col-4">
                            <h6>Principal Signature</h6>
                        </div>
                        <div class="col-4">
                            <h6>Checked by</h6>
                        </div>
                        <div class="col-4">
                            <h6>Controller of Examination</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>