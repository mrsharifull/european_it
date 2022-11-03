<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>

<body>


    <?php
    $a = [[7, 8, 9, 10], [11, 12, 13, 14, 15]];
    // var_dump($a);

    for ($row = 0; $row < count($a); $row = $row + 1) {
        for ($col = 0; $col < count($a[$row]); $col = $col + 1) {
            echo $a[$row][$col] . "<br>";
        }
    }

    for ($i = 1; $i < 5; $i = $i + 1) {
        for ($j = 1; $j <= $i; $j = $j + 1) {
            echo "*";
        }
        echo "<br>";
    }

    $s = 12;
    for ($i = 1; $i <= $s; $i++) {
        for ($k = $s - 1; $k >= $i; $k = $k - 1) {
            echo '&nbsp;&nbsp;';
        }
        for ($j = 1; $j <= $i + $k; $j = $j + 1) {
            echo "*";
        }

        echo "<br/>";
    }

    $n = 4;
    for ($i = 1; $i <= $n; $i = $i + 1) {
        for ($j = 1; $j <= (2 * $n) - 1; $j = $j + 1) {
            if ($j >= $n - ($i - 1) && $j <= $n + ($i - 1)) {
                echo "*";
            } else {
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }

    for ($i = 1; $i <= $n; $i = $i + 1) {
        for ($j = 1; $j <= (1 * $n); $j = $j + 1) {
            if ($j >= $n - ($i - 1) && $j <= $n + ($i - 1)) {
                echo "*";
            } else {
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }
    echo "<br>";
    for ($i = 1; $i <= $n; $i = $i + 1) {
        for ($j = 1; $j <= (1 * $n); $j = $j + 1) {
            if ($j >= $n - ($i - 1) && $j <= $n + ($i - 1)) {
                echo "&nbsp;&nbsp;";
            } else {
                echo "*";
            }
        }
        echo "<br>";
    }

    echo " <br><br><br>";
    for ($i = 1; $i <= $n; $i = $i + 1) {
        for ($j = 1; $j <= $n; $j = $j + 1) {
            if ($j > $i) {
                echo "&nbsp;&nbsp;";
            } else {
                echo "*";
            }
        }
        echo "<br>";
    }

    // ==================================================================
    #foreach loop Logic-1

    echo "<br>";
    echo "<br>";

    $a = ["name" => "Shariful", "Roll" => "101369", "email" => "abc@gmail.com"];
    foreach ($a as $k => $value) {
        echo $k . " = " . $value . "<br>";
    }

    // ==================================================================
    #foreach loop Logic-2

    echo "<br>";
    echo "<br>";

    $a = ["name" => "Shariful", "Roll" => "101369", "email" => "abc@gmail.com"];
    $i = 1;
    foreach ($a as $k => $value) {
        if ($i == 3) {
            break;
        } else {
            echo $k . " = " . $value . "<br>";
        }
        $i = $i + 1;
    }

    // ==================================================================
    #foreach loop Logic-3

    echo "<br>";
    echo "<br>";

    $a = ["name" => "Shariful", "Roll" => "101369", "email" => "abc@gmail.com"];
    $i = 1;
    foreach ($a as $k => $value) {
        if ($i == 2) {
            echo "";
        } else {
            echo $k . " = " . $value . "<br>";
        }
        $i = $i + 1;
    }




    ?>

</body>

</html>