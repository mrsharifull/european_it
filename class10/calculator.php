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

    if (isset($_POST['plus'])) {
        $input1 = $_POST['input1'];
        $input2 = $_POST['input2'];
        if (empty($input1) || empty($input2)) {
            $cal = "please input your data";
        } else {
            $cal = $input1 + $input2;
            if ($cal % 2 == 0) {
                $comment = "is an even number!";
            } else {
                $comment = "is an odd number!";
            }
        }
    }
    if (isset($_POST['minus'])) {
        $input1 = $_POST['input1'];
        $input2 = $_POST['input2'];
        if (empty($input1) || empty($input2)) {
            $cal = "please input your data";
        } else {
            $cal = $input1 - $input2;
            if ($cal % 2 == 0) {
                $comment = "is an even number!";
            } else {
                $comment = "is an odd number!";
            }
        }
    }
    if (isset($_POST['multi'])) {
        $input1 = $_POST['input1'];
        $input2 = $_POST['input2'];
        if (empty($input1) || empty($input2)) {
            $cal = "please input your data";
        } else {
            $cal = $input1 * $input2;
            if ($cal % 2 == 0) {
                $comment = "is an even number!";
            } else {
                $comment = "is an odd number!";
            }
        }
    }
    if (isset($_POST['divide'])) {
        $input1 = $_POST['input1'];
        $input2 = $_POST['input2'];
        if (empty($input1) || empty($input2)) {
            $cal = "please input your data";
        } else {
            if ($input2 == 0) {
                $cal = "Invalid";
            } else {
                $cal = ($input1 / $input2);
                if ($cal % 2 == 0) {
                    $comment = "is an even number!";
                } else {
                    $cal = number_format(($input1 / $input2), 2);
                    $comment = "is an odd number!";
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
        <input type="text" value="<?php echo "$cal" . " " . "$comment"; ?>" id="result" disabled><br><br>
    </form>
</body>

</html>