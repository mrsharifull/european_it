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
    $overall_bangla = ($bangla_1st + $bangla_2nd) / 2;
    $overall_english = ($english_1st + $english_2nd) / 2;
    $hair_math = ($hair_math_th + $hair_math_p);
    $biology = ($biology_th + $biology_p);
    $physics = ($physics_th + $physics_p);
    $chemistry = ($chemistry_th + $chemistry_p);

    $a = ['b1' => $bangla_1st, 'b2' => $bangla_2nd, 'b_avg' => $overall_bangla, 'e1' => $english_1st, 'e2' => $english_2nd, 'e_avg' => $overall_english, 'm' => $math, 'h_m_p' => $hair_math_p, 'h_m_th' => $hair_math_th, 'h_m' => $hair_math, 'phy_p' => $physics_p, 'phy_th' => $physics_th, 'phy' => $physics, 'che_p' => $chemistry_p, 'che_th' => $chemistry_th, 'che' => $chemistry, 'bio_p' => $biology_p, 'bio_th' => $biology_th, 'bio' => $biology, 'islam' => $islam, 's_s' => $social_science];

    $b1_grade = '';
    $b2_grade = '';
    $b_avg_grade = '';
    $e1_grade = '';
    $e2_grade = '';
    $e_avg_grade = '';
    $m_grade = '';
    $h_m_grade = '';
    $phy_grade = '';
    $che_grade = '';
    $bio_grade = '';
    $islam_grade = '';
    $s_s_grade = '';

    $b1_point = '';
    $b2_point = '';
    $b_avg_point = '';
    $e1_point = '';
    $e2_point = '';
    $e_avg_point = '';
    $m_point = '';
    $h_m_point = '';
    $phy_point = '';
    $che_point = '';
    $bio_point = '';
    $islam_point = '';
    $s_s_point = '';

    $p = 8;
    $th = 25;
    $grade = '';
    $point = '';
    for ($i = 1; $i <= 13; $i++) {
        for ($j = 1; $j <= 1; $j++) {
            if ($i == 1) {
                $mark = $a['b1'];
            } elseif ($i == 2) {
                $mark = $a['b2'];
            } elseif ($i == 3) {
                $mark = $a['b_avg'];
            } elseif ($i == 4) {
                $mark = $a['e1'];
            } elseif ($i == 5) {
                $mark = $a['e2'];
            } elseif ($i == 6) {
                $mark = $a['e_avg'];
            } elseif ($i == 7) {
                $mark = $a['m'];
            } elseif ($i == 8) {
                $mark = $a['h_m'];
                $mark_p = $a['h_m_p'];
                $mark_th = $a['h_m_th'];
            } elseif ($i == 9) {
                $mark = $a['phy'];
                $mark_p = $a['phy_p'];
                $mark_th = $a['phy_th'];
            } elseif ($i == 10) {
                $mark = $a['che'];
                $mark_p = $a['che_p'];
                $mark_th = $a['che_th'];
            } elseif ($i == 11) {
                $mark = $a['bio'];
                $mark_p = $a['che_p'];
                $mark_th = $a['che_th'];
            } elseif ($i == 12) {
                $mark = $a['islam'];
            } elseif ($i == 13) {
                $mark = $a['s_s'];
            }
        }
        for ($k = 1; $k <= 1; $k++) {
            if ($i == 8 || $i == 9 || $i == 10 || $i == 11) {
                if ($mark_p > $p && $mark_th > $th && $mark >= 80 && $mark <= 100) {
                    $grade = 'A+';
                    $point = 5.00;
                } elseif ($mark_p > $p && $mark_th > $th && $mark >= 70 && $mark <= 79) {
                    $grade = 'A';
                    $point = 4.00;
                } elseif ($mark_p > $p && $mark_th > $th && $mark >= 60 && $mark <= 69) {
                    $grade = 'A-';
                    $point = 3.50;
                } elseif ($mark_p > $p && $mark_th > $th && $mark >= 50 && $mark <= 59) {
                    $grade = 'B';
                    $point = 3.00;
                } elseif ($mark_p > $p && $mark_th > $th && $mark >= 40 && $mark <= 49) {
                    $grade = 'C';
                    $point = 2.50;
                } elseif ($mark_p > $p && $mark_th > $th && $mark >= 33 && $mark <= 39) {
                    $grade = 'D';
                    $point = 2.00;
                } else {
                    $grade = 'F';
                    $point = 0;
                }
            } else {
                if ($mark >= 80 && $mark <= 100) {
                    $grade = 'A+';
                    $point = 5.00;
                } elseif ($mark >= 70 && $mark <= 79) {
                    $grade = 'A';
                    $point = 4.00;
                } elseif ($mark >= 60 && $mark <= 69) {
                    $grade = 'A-';
                    $point = 3.50;
                } elseif ($mark >= 50 && $mark <= 59) {
                    $grade = 'B';
                    $point = 3.00;
                } elseif ($mark >= 40 && $mark <= 49) {
                    $grade = 'C';
                    $point = 2.50;
                } elseif ($mark >= 33 && $mark <= 39) {
                    $grade = 'D';
                    $point = 2.00;
                } else {
                    $grade = 'F';
                    $point = 0;
                }
            }
        }
        $point = number_format($point, 2);

        for ($l = 1; $l <= 1; $l++) {
            if ($i == 1) {
                $b1_grade = $grade;
                $b1_point = $point;
            } elseif ($i == 2) {
                $b2_grade = $grade;
                $b2_point = $point;
            } elseif ($i == 3) {
                $b_avg_grade = $grade;
                $b_avg_point = $point;
            } elseif ($i == 4) {
                $e1_grade = $grade;
                $e1_point = $point;
            } elseif ($i == 5) {
                $e2_grade = $grade;
                $e2_point = $point;
            } elseif ($i == 6) {
                $e_avg_grade = $grade;
                $e_avg_point = $point;
            } elseif ($i == 7) {
                $m_grade = $grade;
                $m_point = $point;
            } elseif ($i == 8) {
                $h_m_grade = $grade;
                $h_m_point = $point;
            } elseif ($i == 9) {
                $phy_grade = $grade;
                $phy_point = $point;
            } elseif ($i == 10) {
                $che_grade = $grade;
                $che_point = $point;
            } elseif ($i == 11) {
                $bio_grade = $grade;
                $bio_point = $point;
            } elseif ($i == 12) {
                $islam_grade = $grade;
                $islam_point = $point;
            } elseif ($i == 13) {
                $s_s_grade = $grade;
                $s_s_point = $point;
            }
        }
    }
    if ($b1_point == 0 || $b2_point == 0 || $b_avg_point == 0 || $e1_point == 0 || $e2_point == 0 || $e_avg_point == 0 || $m_point == 0 || $h_m_point == 0 || $phy_point == 0 || $che_point == 0 || $bio_point == 0 || $islam_point == 0 || $s_s_point == 0) {
        $overall_point = 0;
        $overall_grade = "F";
    } else {
        $overall_point = number_format((($b1_point + $b2_point + $b_avg_point + $e1_point + $e2_point + $e_avg_point + $m_point + $h_m_point + $phy_point + $che_point + $bio_point + $islam_point + $s_s_point) / 13), 2);

        if ($overall_point == 5.00) {
            $overall_grade = "A+";
        } elseif ($overall_point >= 4.00) {
            $overall_grade = "A";
        } elseif ($overall_point >= 3.50) {
            $overall_grade = "A-";
        } elseif ($overall_point >= 3.00) {
            $overall_grade = "B";
        } elseif ($overall_point >= 2.50) {
            $overall_grade = "C";
        } else {
            $overall_grade = "D";
        }
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
                <div class="marksheet_table mb-4">
                    <table>
                        <tr>
                            <th>Subject</th>
                            <th>Marks</th>
                            <th>Grade</th>
                            <th>GPA</th>
                        </tr>
                        <tr>
                            <td>Bangla 1st Paper</td>
                            <td><?php echo $bangla_1st; ?> </td>
                            <td><?php echo $b1_grade; ?> </td>
                            <td><?php echo $b1_point; ?> </td>
                        </tr>
                        <tr>
                            <td>Bangla 2nd Paper</td>
                            <td><?php echo $bangla_2nd; ?> </td>
                            <td><?php echo $b2_grade; ?></td>
                            <td><?php echo $b2_point; ?> </td>
                        </tr>
                        <tr>
                            <td>Overall Bangla</td>
                            <td><?php echo $overall_bangla; ?> </td>
                            <td><?php echo $b_avg_grade; ?> </td>
                            <td><?php echo $b_avg_point; ?> </td>
                        </tr>
                        <tr>
                            <td>English 1st Paper</td>
                            <td><?php echo $english_1st; ?> </td>
                            <td><?php echo $e1_grade; ?></td>
                            <td><?php echo $e1_point; ?> </td>
                        </tr>
                        <tr>
                            <td>English 2nd Paper</td>
                            <td><?php echo $english_2nd; ?> </td>
                            <td><?php echo $e2_grade; ?></td>
                            <td><?php echo $e2_point; ?> </td>
                        </tr>
                        <tr>
                            <td>Overall English</td>
                            <td><?php echo $overall_english; ?> </td>
                            <td><?php echo $e_avg_grade; ?> </td>
                            <td><?php echo $e_avg_point; ?> </td>
                        </tr>
                        <tr>
                            <td>Math</td>
                            <td><?php echo $math; ?> </td>
                            <td><?php echo $m_grade; ?> </td>
                            <td><?php echo $m_point; ?> </td>
                        </tr>
                        <tr>
                            <td rowspan="3">Hair Math</td>
                            <td><?php echo $hair_math_p; ?></td>
                            <td rowspan="3"><?php echo $h_m_grade; ?></td>
                            <td rowspan="3"><?php echo $h_m_point; ?></td>
                        </tr>
                        <tr>

                            <td><?php echo $hair_math_th; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $hair_math; ?></td>
                        </tr>

                        <tr>
                            <td rowspan="3">Physics</td>
                            <td><?php echo $physics_p; ?></td>
                            <td rowspan="3"><?php echo $phy_grade; ?></td>
                            <td rowspan="3"><?php echo $phy_point; ?></td>
                        </tr>
                        <tr>

                            <td><?php echo $physics_th; ?> </td>
                        </tr>
                        <tr>
                            <td><?php echo $physics; ?></td>
                        </tr>
                        <tr>
                            <td rowspan="3">Chemistry;</td>
                            <td><?php echo $chemistry_p; ?></td>
                            <td rowspan="3"><?php echo $che_grade; ?></td>
                            <td rowspan="3"><?php echo $che_point; ?></td>
                        </tr>
                        <tr>

                            <td><?php echo $chemistry_th; ?> </td>
                        </tr>
                        <tr>
                            <td><?php echo $chemistry; ?></td>
                        </tr>
                        <tr>
                            <td rowspan="3">Biology</td>
                            <td><?php echo $biology_p; ?></td>
                            <td rowspan="3"><?php echo $bio_grade; ?></td>
                            <td rowspan="3"><?php echo $bio_point; ?></td>
                        </tr>
                        <tr>

                            <td><?php echo $biology_th; ?> </td>
                        </tr>
                        <tr>
                            <td><?php echo $biology; ?></td>
                        </tr>

                        <tr>
                            <td>Islam</td>
                            <td><?php echo $islam; ?> </td>
                            <td><?php echo $islam_grade; ?> </td>
                            <td><?php echo $islam_point; ?> </td>
                        </tr>
                        <tr>
                            <td>Social Science</td>
                            <td><?php echo $social_science; ?> </td>
                            <td><?php echo $s_s_grade; ?></td>
                            <td><?php echo $s_s_point; ?> </td>
                        </tr>
                        <tr>
                            <td>Result</td>
                            <td colspan="2"><?php echo $overall_grade; ?> </td>
                            <td><?php echo $overall_point; ?></td>
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