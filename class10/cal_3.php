<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>

    <?php
    $cal = '';
    $comment = '';
    $comment1 = '';
    $sum = '';
    $sum1 = '';
    $sum2 = '';
    $sum3 = '';
    $sum4 = '';
    $output1 = '';
    $output2 = '';
    $output3 = '';
    $output4 = '';
    $summation = '';


    if (isset($_REQUEST['plus'])) {
        $input1 = $_REQUEST['input1'];
        $input2 = $_REQUEST['input2'];
        if (empty($input1) || empty($input2)) {
            $cal = "please input your data";
        } else {
            $sum1 = 0;
            if ($input1 > $input2) {
                $sum1 = "Invalid(must be a>b) !";
            } else {
                for ($i = $input1; $i <= $input2; $i = $i + 1) {
                    $sum1 = $sum1 + $i;
                    if ($sum1 % 2 == 0) {
                        $comment = "is an even number!";
                    } else {
                        $comment = "is an odd number!";
                    }
                }
            }
        }
    }
    $output1 = intval($sum1);

    if (isset($_REQUEST['minus'])) {
        $input1 = $_REQUEST['input1'];
        $input2 = $_REQUEST['input2'];
        if (empty($input1) || empty($input2)) {
            $cal = "please input your data";
        } else {
            $sum = 0;
            if ($input1 > $input2) {
                $sum = "Invalid(must be a>b) !";
            } else {
                for ($i = $input1; $i <= $input2; $i = $i + 1) {
                    if ($i == $input1) {
                        $sum = $i;
                    } else {
                        $sum2 = $sum - $i;
                        if ($sum2 % 2 == 0) {
                            $comment = "is an even number!";
                        } else {
                            $comment = "is an odd number!";
                        }
                    }
                }
            }
        }
    }
    $output2 = intval($output1) + intval($sum2);

    if (isset($_REQUEST['multi'])) {
        $input1 = $_REQUEST['input1'];
        $input2 = $_REQUEST['input2'];
        if (empty($input1) || empty($input2)) {
            $cal = "please input your data";
        } else {
            $sum = 1;
            if ($input1 > $input2) {
                $sum = "Invalid(must be a>b) !";
            } else {
                for ($i = $input1; $i <= $input2; $i = $i + 1) {
                    $sum3 = $sum * $i;
                    if ($sum3 % 2 == 0) {
                        $comment = "is an even number!";
                    } else {
                        $comment = "is an odd number!";
                    }
                }
            }
        }
    }
    $output3 = intval($output1) + intval($output2) + intval($sum3);

    if (isset($_REQUEST['divide'])) {
        $input1 = $_REQUEST['input1'];
        $input2 = $_REQUEST['input2'];
        if (empty($input1) || empty($input2)) {
            $cal = "please input your data";
        } else {
            $sum = 0;
            if ($input1 > $input2) {
                $sum = "Invalid(must be a>b) !";
            } else {
                for ($i = $input1; $i <= $input2; $i = $i + 1) {
                    if ($i == $input1) {
                        $sum = $i;
                    } else {
                        $sum4 = number_format(($sum / $i), 3);
                        if ($sum4 % 2 == 0) {
                            $comment = "is an even number!";
                        } else {
                            $comment = "is an odd number!";
                        }
                    }
                }
            }
        }
    }
    $output4 = intval($output1) + intval($output2) + intval($output3) + intval($sum4);
    if (isset($_REQUEST['equal'])) {
        $summation = intval($output1) + intval($output2) + intval($output3) + intval($output4);
        if ($summation % 2 == 0) {
            $comment1 = "is an even number!";
        } else {
            $comment1 = "is an odd number!";
        }
    }

    ?>
    <form action="" method="post">
        <label for="input1">a:</label><br>
        <input type="number" name="input1" value="<?php echo "$input1"; ?>" id="input1"><br><br>
        <label for="input2">b:</label><br>
        <input type="number" name="input2" value="<?php echo "$input2"; ?>" id="input1"><br><br>
        <input type="submit" name="plus" value="+">
        <input type="submit" name="minus" value="-">
        <input type="submit" name="multi" value="*">
        <input type="submit" name="divide" value="/"><br><br>
        <label for="result">Output:</label><br>
        <input type="text" value="<?php echo "$cal $sum1 $sum2 $sum3 $sum4" . " " . "$comment"; ?>" id="result"
            disabled><br><br>
        <input type="submit" name="equal" value="="><br><br>
        <label for="summation">All output summation:</label><br>
        <input type="text" value="<?php echo "$summation" . " " . "$comment1"; ?>" id="result" disabled><br><br>
    </form>
</body>

</html>