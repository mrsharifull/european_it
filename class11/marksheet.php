<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet Generator</title>
</head>

<body>
    <?php
    // $bangla_1st = 70;
    // $bangla_2nd = 90;
    // $overall_bangla = ($bangla_1st + $bangla_2nd) / 2;

    // $english_1st = 75;
    // $english_2nd = 75;
    // $overall_english = ($english_1st + $english_2nd) / 2;

    // $math = 80;

    // # th means theory and  p means practical

    // $hair_math_th = 43;
    // $hair_math_p = 17;
    // $hair_math = ($hair_math_th + $hair_math_p);

    // $biology_th = 57;
    // $biology_p = 5;
    // $biology = ($biology_th + $biology_p);

    // $physics_th = 60;
    // $physics_p = 5;
    // $physics = ($physics_th + $physics_p);

    // $chemistry_th = 60;
    // $chemistry_p = 20;
    // $chemistry = ($chemistry_th + $chemistry_p);

    // $islam = 90;
    // $social_science = 65;




    $a = ['b1' => 80, 'b2' => 80, 'b_avg' => (80 + 80) / 2, 'e1' => 80, 'e2' => 60, 'e_avg' => (80 + 62) / 2, 'm' => 80, 'h_m_p' => 17, 'h_m_th' => 43, 'h_m' => (17 + 43), 'phy_p' => 18, 'phy_th' => 63, 'phy' => (18 + 63), 'che_p' => 20, 'che_th' => 34, 'che' => (20 + 34), 'bio_p' => 22, 'bio_th' => 44, 'bio' => (20 + 34), 'islam' => 90, 's_s' => 65];


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

    for ($i = 1; $i <= 13; $i++) {

        if ($i == 1) {
            if ($a['b1'] >= 80 && $a['b1'] <= 100) {
                $b1_grade = 'A+';
                $b1_point = 5.00;
            } elseif ($a['b1'] >= 70 && $a['b1'] <= 79) {
                $b1_grade = 'A';
                $b1_point = 4.00;
            } elseif ($a['b1'] >= 60 && $a['b1'] <= 69) {
                $b1_grade = 'A-';
                $b1_point = 3.50;
            } elseif ($a['b1'] >= 50 && $a['b1'] <= 59) {
                $b1_grade = 'B';
                $b1_point = 3.00;
            } elseif ($a['b1'] >= 40 && $a['b1'] <= 49) {
                $b1_grade = 'C';
                $b1_point = 2.50;
            } elseif ($a['b1'] >= 33 && $a['b1'] <= 39) {
                $b1_grade = 'D';
                $b1_point = 2.00;
            } else {
                $b1_grade = 'F';
                $b1_point = 0;
            }
        } elseif ($i == 2) {
            if ($a['b2'] >= 80 && $a['b2'] <= 100) {
                $b2_grade = 'A+';
                $b2_point = 5.00;
            } elseif ($a['b2'] >= 70 && $a['b2'] <= 79) {
                $b2_grade = 'A';
                $b2_point = 4.00;
            } elseif ($a['b2'] >= 60 && $a['b2'] <= 69) {
                $b2_grade = 'A-';
                $b2_point = 3.50;
            } elseif ($a['b2'] >= 50 && $a['b2'] <= 59) {
                $b2_grade = 'B';
                $b2_point = 3.00;
            } elseif ($a['b2'] >= 40 && $a['b2'] <= 40) {
                $b2_grade = 'C';
                $b2_point = 2.50;
            } elseif ($a['b2'] >= 33 && $a['b2'] <= 39) {
                $b2_grade = 'D';
                $b2_point = 2.00;
            } else {
                $b2_grade = 'F';
                $b2_point = 0;
            }
        } elseif ($i == 3) {
            if ($a['b_avg'] >= 80 && $a['b_avg'] <= 100) {
                $b_avg_grade = 'A+';
                $b_avg_point = 5.00;
            } elseif ($a['b_avg'] >= 70 && $a['b_avg'] <= 79) {
                $b_avg_grade = 'A';
                $b_avg_point = 4.00;
            } elseif ($a['b_avg'] >= 60 && $a['b_avg'] <= 69) {
                $b_avg_grade = 'A-';
                $b_avg_point = 3.50;
            } elseif ($a['b_avg'] >= 50 && $a['b_avg'] <= 59) {
                $b_avg_grade = 'B';
                $b_avg_point = 3.00;
            } elseif ($a['b_avg'] >= 40 && $a['b_avg'] <= 49) {
                $b_avg_grade = 'C';
                $b_avg_point = 2.50;
            } elseif ($a['b_avg'] >= 33 && $a['b_avg'] <= 39) {
                $b_avg_grade = 'D';
                $b_avg_point = 2.00;
            } else {
                $b_avg_grade = 'F';
                $b_avg_point = 0;
            }
        } elseif ($i == 4) {
            if ($a['e1'] >= 80 && $a['e1'] <= 100) {
                $e1_grade = 'A+';
                $e1_point = 5.00;
            } elseif ($a['e1'] >= 70 && $a['e1'] <= 79) {
                $e1_grade = 'A';
                $e1_point = 4.00;
            } elseif ($a['e1'] >= 60 && $a['e1'] <= 69) {
                $e1_grade = 'A-';
                $e1_point = 3.50;
            } elseif ($a['e1'] >= 50 && $a['e1'] <= 59) {
                $e1_grade = 'B';
                $e1_point = 3.00;
            } elseif ($a['e1'] >= 40 && $a['e1'] <= 49) {
                $e1_grade = 'C';
                $e1_point = 2.50;
            } elseif ($a['e1'] >= 33 && $a['e1'] <= 39) {
                $e1_grade = 'D';
                $e1_point = 2.00;
            } else {
                $e1_grade = 'F';
                $e1_point = 0;
            }
        } elseif ($i == 5) {
            if ($a['e2'] >= 80 && $a['e2'] <= 100) {
                $e2_grade = 'A+';
                $e2_point = 5.00;
            } elseif ($a['e2'] >= 70 && $a['e2'] <= 79) {
                $e2_grade = 'A';
                $e2_point = 4.00;
            } elseif ($a['e2'] >= 60 && $a['e2'] <= 69) {
                $e2_grade = 'A-';
                $e2_point = 3.50;
            } elseif ($a['e2'] >= 50 && $a['e2'] <= 59) {
                $e2_grade = 'B';
                $e2_point = 3.00;
            } elseif ($a['e2'] >= 40 && $a['e2'] <= 49) {
                $e2_grade = 'C';
                $e2_point = 2.50;
            } elseif ($a['e2'] >= 33 && $a['e2'] <= 39) {
                $e2_grade = 'D';
                $e2_point = 2.00;
            } else {
                $e2_grade = 'F';
                $e2_point = 0;
            }
        } elseif ($i == 6) {
            if ($a['e_avg'] >= 80 && $a['e_avg'] <= 100) {
                $e_avg_grade = 'A+';
                $e_avg_point = 5.00;
            } elseif ($a['e_avg'] >= 70 && $a['e_avg'] <= 79) {
                $e_avg_grade = 'A';
                $e_avg_point = 4.00;
            } elseif ($a['e_avg'] >= 60 && $a['e_avg'] <= 69) {
                $e_avg_grade = 'A-';
                $e_avg_point = 3.50;
            } elseif ($a['e_avg'] >= 50 && $a['e_avg'] <= 59) {
                $e_avg_grade = 'B';
                $e_avg_point = 3.00;
            } elseif ($a['e_avg'] >= 40 && $a['e_avg'] <= 49) {
                $e_avg_grade = 'C';
                $e_avg_point = 2.50;
            } elseif ($a['e_avg'] >= 33 && $a['e_avg'] <= 39) {
                $e_avg_grade = 'D';
                $e_avg_point = 2.00;
            } else {
                $e_avg_grade = 'F';
                $e_avg_point = 0;
            }
        } elseif ($i == 7) {
            if ($a['m'] >= 80 && $a['m'] <= 100) {
                $m_grade = 'A+';
                $m_point = 5.00;
            } elseif ($a['m'] >= 70 && $a['m'] <= 79) {
                $m_grade = 'A';
                $m_point = 4.00;
            } elseif ($a['m'] >= 60 && $a['m'] <= 69) {
                $m_grade = 'A-';
                $m_point = 3.50;
            } elseif ($a['m'] >= 50 && $a['m'] <= 59) {
                $m_grade = 'B';
                $m_point = 3.00;
            } elseif ($a['m'] >= 40 && $a['m'] <= 49) {
                $m_grade = 'C';
                $m_point = 2.50;
            } elseif ($a['m'] >= 33 && $a['m'] <= 39) {
                $m_grade = 'D';
                $m_point = 2.00;
            } else {
                $m_grade = 'F';
                $m_point = 0;
            }
        } elseif ($i == 8) {
            if ($a['h_m_p'] > $p && $a['h_m_th'] > $th && $a['h_m'] >= 80 && $a['h_m'] <= 100) {
                $h_m_grade = 'A+';
                $h_m_point = 5.00;
            } elseif ($a['h_m_p'] > $p && $a['h_m_th'] > $th && $a['h_m'] >= 70 && $a['h_m'] <= 79) {
                $h_m_grade = 'A';
                $h_m_point = 4.00;
            } elseif ($a['h_m_p'] > $p && $a['h_m_th'] > $th && $a['h_m'] >= 60 && $a['h_m'] <= 69) {
                $h_m_grade = 'A-';
                $h_m_point = 3.50;
            } elseif ($a['h_m_p'] > $p && $a['h_m_th'] > $th && $a['h_m'] >= 50 && $a['h_m'] <= 59) {
                $h_m_grade = 'B';
                $h_m_point = 3.00;
            } elseif ($a['h_m_p'] > $p && $a['h_m_th'] > $th && $a['h_m'] >= 40 && $a['h_m'] <= 49) {
                $h_m_grade = 'C';
                $h_m_point = 2.50;
            } elseif ($a['h_m_p'] > $p && $a['h_m_th'] > $th && $a['h_m'] >= 33 && $a['h_m'] <= 39) {
                $h_m_grade = 'D';
                $h_m_point = 2.00;
            } else {
                $h_m_grade = 'F';
                $h_m_point = 0;
            }
        } elseif ($i == 9) {
            if ($a['phy_p'] > $p && $a['phy_th'] > $th && $a['phy'] >= 80 && $a['phy'] <= 100) {
                $phy_grade = 'A+';
                $phy_point = 5.00;
            } elseif ($a['phy_p'] > $p && $a['phy_th'] > $th && $a['phy'] >= 70 && $a['phy'] <= 79) {
                $phy_grade = 'A';
                $phy_point = 4.00;
            } elseif ($a['phy_p'] > $p && $a['phy_th'] > $th && $a['phy'] >= 60 && $a['phy'] <= 69) {
                $phy_grade = 'A-';
                $phy_point = 3.50;
            } elseif ($a['phy_p'] > $p && $a['phy_th'] > $th && $a['phy'] >= 50 && $a['phy'] <= 59) {
                $phy_grade = 'B';
                $phy_point = 3.00;
            } elseif ($a['phy_p'] > $p && $a['phy_th'] > $th && $a['phy'] >= 40 && $a['phy'] <= 49) {
                $phy_grade = 'C';
                $phy_point = 2.50;
            } elseif ($a['phy_p'] > $p && $a['phy_th'] > $th && $a['phy'] >= 33 && $a['phy'] <= 39) {
                $phy_grade = 'D';
                $phy_point = 2.00;
            } else {
                $phy_grade = 'F';
                $phy_point = 0;
            }
        } elseif ($i == 10) {
            if ($a['che_p'] > $p && $a['che_th'] > $th && $a['che'] >= 80 && $a['che'] <= 100) {
                $che_grade = 'A+';
                $che_point = 5.00;
            } elseif ($a['che_p'] > $p && $a['che_th'] > $th && $a['che'] >= 70 && $a['che'] <= 79) {
                $che_grade = 'A';
                $che_point = 4.00;
            } elseif ($a['che_p'] > $p && $a['che_th'] > $th && $a['che'] >= 60 && $a['che'] <= 69) {
                $che_grade = 'A-';
                $che_point = 3.50;
            } elseif ($a['che_p'] > $p && $a['che_th'] > $th && $a['che'] >= 50 && $a['che'] <= 59) {
                $che_grade = 'B';
                $che_point = 3.00;
            } elseif ($a['che_p'] > $p && $a['che_th'] > $th && $a['che'] >= 40 && $a['che'] <= 49) {
                $che_grade = 'C';
                $che_point = 2.50;
            } elseif ($a['che_p'] > $p && $a['che_th'] > $th && $a['che'] >= 33 && $a['che'] <= 39) {
                $che_grade = 'D';
                $che_point = 2.00;
            } else {
                $che_grade = 'F';
                $che_point = 0;
            }
        } elseif ($i == 11) {
            if ($a['bio_p'] > $p && $a['bio_th'] > $th && $a['bio'] >= 80 && $a['bio'] <= 100) {
                $bio_grade = 'A+';
                $bio_point = 5.00;
            } elseif ($a['bio_p'] > $p && $a['bio_th'] > $th && $a['bio'] >= 70 && $a['bio'] <= 79) {
                $bio_grade = 'A';
                $bio_point = 4.00;
            } elseif ($a['bio_p'] > $p && $a['bio_th'] > $th && $a['bio'] >= 60 && $a['bio'] <= 69) {
                $bio_grade = 'A-';
                $bio_point = 3.50;
            } elseif ($a['bio_p'] > $p && $a['bio_th'] > $th && $a['bio'] >= 50 && $a['bio'] <= 59) {
                $bio_grade = 'B';
                $bio_point = 3.00;
            } elseif ($a['bio_p'] > $p && $a['bio_th'] > $th && $a['bio'] >= 40 && $a['bio'] <= 49) {
                $bio_grade = 'C';
                $bio_point = 2.50;
            } elseif ($a['bio_p'] > $p && $a['bio_th'] > $th && $a['bio'] >= 33 && $a['bio'] <= 39) {
                $bio_grade = 'D';
                $bio_point = 2.00;
            } else {
                $bio_grade = 'F';
                $bio_point = 0;
            }
        } elseif ($i == 12) {
            if ($a['islam'] >= 80 && $a['islam'] <= 100) {
                $islam_grade = 'A+';
                $islam_point = 5.00;
            } elseif ($a['islam'] >= 70 && $a['islam'] <= 79) {
                $islam_grade = 'A';
                $islam_point = 4.00;
            } elseif ($a['islam'] >= 60 && $a['islam'] <= 69) {
                $islam_grade = 'A-';
                $islam_point = 3.50;
            } elseif ($a['islam'] >= 50 && $a['islam'] <= 59) {
                $islam_grade = 'B';
                $islam_point = 3.00;
            } elseif ($a['islam'] >= 40 && $a['islam'] <= 49) {
                $islam_grade = 'C';
                $islam_point = 2.50;
            } elseif ($a['islam'] >= 33 && $a['islam'] <= 39) {
                $islam_grade = 'D';
                $islam_point = 2.00;
            } else {
                $islam_grade = 'F';
                $islam_point = 0;
            }
        } elseif ($i == 13) {
            if ($a['s_s'] >= 80 && $a['s_s'] <= 100) {
                $s_s_grade = 'A+';
                $s_s_point = 5.00;
            } elseif ($a['s_s'] >= 70 && $a['s_s'] <= 79) {
                $s_s_grade = 'A';
                $s_s_point = 4.00;
            } elseif ($a['s_s'] >= 60 && $a['s_s'] <= 69) {
                $s_s_grade = 'A-';
                $s_s_point = 3.50;
            } elseif ($a['s_s'] >= 50 && $a['s_s'] <= 59) {
                $s_s_grade = 'B';
                $s_s_point = 3.00;
            } elseif ($a['s_s'] >= 40 && $a['s_s'] <= 49) {
                $s_s_grade = 'C';
                $s_s_point = 2.50;
            } elseif ($a['s_s'] >= 33 && $a['s_s'] <= 39) {
                $s_s_grade = 'D';
                $s_s_point = 2.00;
            } else {
                $s_s_grade = 'F';
                $s_s_point = 0;
            }
        }
    }

    echo $b1_grade . '<br>';
    echo $b2_grade . '<br>';
    echo $b_avg_grade . '<br>';
    echo $e1_grade . '<br>';
    echo $e2_grade . '<br>';
    echo $e_avg_grade . '<br>';
    echo $m_grade . '<br>';
    echo $h_m_grade . '<br>';
    echo $phy_grade . '<br>';
    echo $che_grade . '<br>';
    echo $bio_grade . '<br>';
    echo $islam_grade . '<br>';
    echo $s_s_grade . '<br>';

    echo $b1_point . '<br>';
    echo $b2_point . '<br>';
    echo $b_avg_point . '<br>';
    echo $e1_point . '<br>';
    echo $e2_point . '<br>';
    echo $e_avg_point . '<br>';
    echo $m_point . '<br>';
    echo $h_m_point . '<br>';
    echo $phy_point . '<br>';
    echo $che_point . '<br>';
    echo $bio_point . '<br>';
    echo $islam_point . '<br>';
    echo $s_s_point . '<br>';
    ?>
</body>

</html>