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
    $sum = '';

    if (isset($_POST['plus'])) {
        $input1 = $_POST['input1'];
        $input2 = $_POST['input2'];
        if (empty($input1) || empty($input2)) {
            $sum = "please input your data";
        } else {
            $sum = 0;
            if ($input1 > $input2) {
                $sum = "Invalid(must be a>b) !";
            } else {
                for ($i = $input1; $i <= $input2; $i = $i + 1) {
                    $sum = $sum + $i;
                    if ($sum % 2 == 0) {
                        $comment = "is an even number!";
                    } else {
                        $comment = "is an odd number!";
                    }
                }
            }
        }
    }
    if (isset($_POST['minus'])) {
        $input1 = $_POST['input1'];
        $input2 = $_POST['input2'];
        if (empty($input1) || empty($input2)) {
            $sum = "please input your data";
        } else {
            $sum = 0;
            if ($input1 > $input2) {
                $sum = "Invalid(must be a>b) !";
            } else {
                for ($i = $input1; $i <= $input2; $i = $i + 1) {
                    if ($i == $input1) {
                        $sum = $i;
                    } else {
                        $sum = $sum - $i;
                        if ($sum % 2 == 0) {
                            $comment = "is an even number!";
                        } else {
                            $comment = "is an odd number!";
                        }
                    }
                }
            }
        }
    }
    if (isset($_POST['multi'])) {
        $input1 = $_POST['input1'];
        $input2 = $_POST['input2'];
        if (empty($input1) || empty($input2)) {
            $sum = "please input your data";
        } else {
            $sum = 1;
            if ($input1 > $input2) {
                $sum = "Invalid(must be a>b) !";
            } else {
                for ($i = $input1; $i <= $input2; $i = $i + 1) {
                    $sum = $sum * $i;
                    if ($sum % 2 == 0) {
                        $comment = "is an even number!";
                    } else {
                        $comment = "is an odd number!";
                    }
                }
            }
        }
    }
    if (isset($_POST['divide'])) {
        $input1 = $_POST['input1'];
        $input2 = $_POST['input2'];
        if (empty($input1) || empty($input2)) {
            $sum = "please input your data";
        } else {
            $sum = 0;
            if ($input1 > $input2) {
                $sum = "Invalid(must be a>b) !";
            } else {
                for ($i = $input1; $i <= $input2; $i = $i + 1) {
                    if ($i == $input1) {
                        $sum = $i;
                    } else {
                        $sum = number_format(($sum / $i), 3);
                        if ($sum % 2 == 0) {
                            $comment = "is an even number!";
                        } else {
                            $comment = "is an odd number!";
                        }
                    }
                }
            }
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
        <input type="text" value="<?php echo "$sum" . " " . "$comment"; ?>" id="result" disabled><br><br>
    </form>
</body>

</html>