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
    #Mark insert variable
    $bangla_1st = "";
    $bangla_2nd = "";
    $english_1st = "";
    $english_2nd = "";
    $math = "";
    $hair_math_p = "";
    $hair_math_th = "";
    $physics_p = "";
    $physics_th = "";
    $chemistry_p = "";
    $chemistry_th = "";
    $biology_p = "";
    $biology_th = "";
    $islam = "";
    $social_science = "";


    #Mark required variable
    $err_bangla_1st = "";
    $err_bangla_2nd = "";
    $err_english_1st = "";
    $err_english_2nd = "";
    $err_math = "";
    $err_hair_math_p = "";
    $err_hair_math_th = "";
    $err_physics_p = "";
    $err_physics_th = "";
    $err_chemistry_p = "";
    $err_chemistry_th = "";
    $err_biology_p = "";
    $err_biology_th = "";
    $err_islam = "";
    $err_social_science = "";


    if (isset($_POST['submit'])) {

        $bangla_1st = $_POST['bangla_1st'];
        $bangla_2nd = $_POST['bangla_2nd'];
        $english_1st = $_POST['english_1st'];
        $english_2nd = $_POST['english_2nd'];
        $math = $_POST['math'];
        $hair_math_p = $_POST['hair_math_p'];;
        $hair_math_th = $_POST['hair_math_th'];;
        $physics_p = $_POST['physics_p'];;
        $physics_th = $_POST['physics_th'];;
        $chemistry_p = $_POST['chemistry_p'];;
        $chemistry_th = $_POST['chemistry_th'];;
        $biology_p = $_POST['biology_p'];;
        $biology_th = $_POST['biology_th'];;
        $islam = $_POST['islam'];
        $social_science = $_POST['social_science'];


        $e = 0;
        
        if (empty($bangla_1st) || $bangla_1st > 100) {
            $e++;
            $err_bangla_1st = "Please Enter Your Subject Mark <=100!";
        }
        if (empty($bangla_2nd) || $bangla_2nd > 100) {
            $e++;
            $err_bangla_2nd = "Please Enter Your Subject Mark <=100!";
        }
        if (empty($english_1st) || $english_1st > 100) {
            $e++;
            $err_english_1st = "Please Enter Your Subject Mark <=100!";
        }
        if (empty($english_2nd) || $english_2nd > 100) {
            $e++;
            $err_english_2nd = "Please Enter Your Subject Mark <=100!";
        }
        if (empty($math) || $math > 100) {
            $e++;
            $err_math = "Please Enter Your Subject Mark <=100!";
        }
        #1
        if (empty($hair_math_p) || $hair_math_p > 25) {
            $e++;
            $err_hair_math_p = "Please Enter Your Practical Mark <26 !";
        }
        if (empty($hair_math_th) || $hair_math_th > 75) {
            $e++;
            $err_hair_math_th = "Please Enter Your Theory Mark <76 !";
        }
        #2
        if (empty($physics_p) || $physics_p > 25) {
            $e++;
            $err_physics_p = "Please Enter Your Practical Mark <26 !";
        }
        if (empty($physics_th) || $physics_th > 75) {
            $e++;
            $err_physics_th = "Please Enter Your Theory Mark <76 !";
        }
        #3
        if (empty($chemistry_p) || $chemistry_p > 25) {
            $e++;
            $err_chemistry_p = "Please Enter Your Practical Mark <26 !";
        }
        if (empty($chemistry_th) || $chemistry_th > 75) {
            $e++;
            $err_chemistry_th = "Please Enter Your Theory Mark <76 !";
        }
        #4
        if (empty($biology_p) || $biology_p > 25) {
            $e++;
            $err_biology_p = "Please Enter Your Subject Mark <=100!";
        }
        if (empty($biology_th) || $biology_th > 75) {
            $e++;
            $err_biology_th = "Please Enter Your Subject Mark <=100!";
        }
        if (empty($islam) || $islam > 100) {
            $e++;
            $err_islam = "Please Enter Your Subject Mark <=100!";
        }
        if (empty($social_science) || $social_science > 100) {
            $e++;
            $err_social_science = "Please Enter Your Subject Mark <=100!";
        }

        if ($e == 0) {
            include "marksheet_output_copy.php";
            $bangla_1st = "";
            $bangla_2nd = "";
            $english_1st = "";
            $english_2nd = "";
            $math = "";
            $hair_math_p = "";
            $hair_math_th = "";
            $physics_p = "";
            $physics_th = "";
            $chemistry_p = "";
            $chemistry_th = "";
            $biology_p = "";
            $biology_th = "";
            $islam = "";
            $social_science = "";
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
				
                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="col-6">
                                <div class="">
                                    <label for="bangla_1st" class="form-label">Bangla 1st Paper Mark</label>
                                    <input type="number" name="bangla_1st" value="<?php echo $bangla_1st; ?>"
                                        class="form-control" placeholder="Enter your subject mark"
                                        aria-describedby="emailHelp">
                                    <span class="Red_alert"><?php echo $err_bangla_1st; ?></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="">
                                    <label for="bangla_2nd" class="form-label">Bangla 2nd Paper Mark</label>
                                    <input type="number" name="bangla_2nd" value="<?php echo $bangla_2nd; ?>"
                                        class="form-control" placeholder="Enter your subject mark">
                                    <span class="Red_alert"><?php echo $err_bangla_2nd; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="col-6">
                                <div class="">
                                    <label for="english_1st" class="form-label">English 1st Paper Mark</label>
                                    <input type="number" name="english_1st" value="<?php echo $english_1st; ?>"
                                        class="form-control" placeholder="Enter your subject mark"
                                        aria-describedby="emailHelp">
                                    <span class="Red_alert"><?php echo $err_english_1st; ?></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="">
                                    <label for="english_2nd" class="form-label">English 2nd Paper Mark</label>
                                    <input type="number" name="english_2nd" value="<?php echo $english_2nd; ?>"
                                        class="form-control" placeholder="Enter your subject mark">
                                    <span class="Red_alert"><?php echo $err_english_2nd; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="col-6">
                                <div class="">
                                    <label for="math" class="form-label">Math Mark</label>
                                    <input type="number" name="math" value="<?php echo $math; ?>" class="form-control"
                                        placeholder="Enter your subject mark" aria-describedby="emailHelp">
                                    <span class="Red_alert"><?php echo $err_math; ?></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="">
                                    <label for="hair_math_p" class="form-label">Hair Math Practical Mark</label>
                                    <input type="number" name="hair_math_p" value="<?php echo $hair_math_p; ?>"
                                        class="form-control" placeholder="Enter your subject mark">
                                    <span class="Red_alert"><?php echo $err_hair_math_p; ?></span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="col-6">
                                <div class="">
                                    <label for="hair_math_th" class="form-label">Hair Math Theory Mark</label>
                                    <input type="number" name="hair_math_th" value="<?php echo $hair_math_th; ?>"
                                        class="form-control" placeholder="Enter your subject mark">
                                    <span class="Red_alert"><?php echo $err_hair_math_th; ?></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="">
                                    <label for="physics_p" class="form-label">Physics Practical Mark</label>
                                    <input type="number" name="physics_p" value="<?php echo $physics_p; ?>"
                                        class="form-control" placeholder="Enter your subject mark"
                                        aria-describedby="emailHelp">
                                    <span class="Red_alert"><?php echo $err_physics_p; ?></span>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="col-6">
                                <div class="">
                                    <label for="physics_th" class="form-label">Physics Theory Mark</label>
                                    <input type="number" name="physics_th" value="<?php echo $physics_th; ?>"
                                        class="form-control" placeholder="Enter your subject mark"
                                        aria-describedby="emailHelp">
                                    <span class="Red_alert"><?php echo $err_physics_th; ?></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="">
                                    <label for="chemistry_p" class="form-label">Chemistry Practical Mark</label>
                                    <input type="number" name="chemistry_p" value="<?php echo $chemistry_p; ?>"
                                        class="form-control" placeholder="Enter your subject mark">
                                    <span class="Red_alert"><?php echo $err_chemistry_p; ?></span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="col-6">
                                <div class="">
                                    <label for="chemistry_th" class="form-label">Chemistry Theory Mark</label>
                                    <input type="number" name="chemistry_th" value="<?php echo $chemistry_th; ?>"
                                        class="form-control" placeholder="Enter your subject mark">
                                    <span class="Red_alert"><?php echo $err_chemistry_th; ?></span>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="">
                                    <label for="biology_p" class="form-label">Biology Practical Mark</label>
                                    <input type="number" name="biology_p" value="<?php echo $biology_p; ?>"
                                        class="form-control" placeholder="Enter your subject mark"
                                        aria-describedby="emailHelp">
                                    <span class="Red_alert"><?php echo $err_biology_p; ?></span>
                                </div>
                            </div>
                        </div>

                    </div>

                <div class="col-12 mb-3">
                    <div class="row">
                        <div class="col-6">
                            <div class="">
                                <label for="biology_th" class="form-label">Biology Theory Mark</label>
                                <input type="number" name="biology_th" value="<?php echo $biology_th; ?>"
                                    class="form-control" placeholder="Enter your subject mark"
                                    aria-describedby="emailHelp">
                                <span class="Red_alert"><?php echo $err_biology_th; ?></span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="">
                                <label for="islam" class="form-label">Islam Mark</label>
                                <input type="number" name="islam" value="<?php echo $islam; ?>" class="form-control"
                                    placeholder="Enter your subject mark">
                                <span class="Red_alert"><?php echo $err_islam; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="">
                                <label for="social_science" class="form-label">Social Science Mark</label>
                                <input type="number" name="social_science" value="<?php echo $social_science; ?>"
                                    class="form-control" placeholder="Enter your subject mark">
                                <span class="Red_alert"><?php echo $err_social_science; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="">
                                <button type="submit" class="btn btn-primary w-100" name="submit">Submit</button>

                            </div>
                        </div>
                    </div>
                </div>
        </div>

        </form>
        </div>
    </section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>