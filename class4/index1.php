<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Great Calculation</title>
</head>

<body>

    <?php
$bangla_1st = 81;
$bangla_2nd = 77;
$bangla_avg = ($bangla_1st + $bangla_2nd)/2;

$english_1st = 80;
$english_2nd = 65;
$english_avg = ($english_1st + $english_2nd)/2;

$math = 71;
$hair_math = 69;
$physics = 79;
$chemistry = 76;
$biology = 66;
$social_science = 83;
$ict = 81;
$islam = 87;

$result = ($bangla_avg + $english_avg + $math + $hair_math + $physics + $chemistry 
+$biology + $social_science + $ict + $islam)/10;



// 80 - 100 = A+
// 70 - 79 = A
// 60 - 69 = A-
// 50 - 59 = B
// 40 - 49 = C
// 33 - 39 = D
// 0 - 32 = F



#Bangla Result

if($bangla_avg >= 80 && $bangla_avg <= 100 ){
    echo "<b>Bangla = </b> ".$bangla_avg." Grade (A+)";
}
elseif($bangla_avg >= 70 && $bangla_avg <= 79 ){
    echo "<b>Bangla = </b> ".$bangla_avg." Grade (A)";
}
elseif($bangla_avg >= 60 && $bangla_avg <= 69 ){
    echo "<b>Bangla = </b> ".$bangla_avg." Grade (A-)";
}
elseif($bangla_avg >= 50 && $bangla_avg <= 59 ){
    echo "<b>Bangla = </b> ".$bangla_avg." Grade (B)";
}
elseif($bangla_avg >= 40 && $bangla_avg <= 49 ){
    echo "<b>Bangla = </b> ".$bangla_avg." Grade (C)";
}
elseif($bangla_avg >= 33 && $bangla_avg <= 39 ){
    echo "<b>Bangla = </b> ".$bangla_avg." Grade (D)";
}
else{
    echo "<b>Bangla = </b> ".$bangla_avg." Grade (F)";
}


echo "<br><br>";


#English Result

if($english_avg >= 80 && $english_avg <= 100 ){
    echo "<b>English = </b> ".$english_avg." Grade (A+)";
}
elseif($english_avg >= 70 && $english_avg <= 79 ){
    echo "<b>English = </b> ".$english_avg." Grade (A)";
}
elseif($english_avg >= 60 && $english_avg <= 69 ){
    echo "<b>English = </b> ".$english_avg." Grade (A-)";
}
elseif($english_avg >= 50 && $english_avg <= 59 ){
    echo "<b>English = </b> ".$english_avg." Grade (B)";
}
elseif($english_avg >= 40 && $english_avg <= 49 ){
    echo "<b>English = </b> ".$english_avg." Grade (C)";
}
elseif($english_avg >= 33 && $english_avg <= 39 ){
    echo "<b>English = </b> ".$english_avg." Grade (D)";
}
else{
    echo "<b>English = </b> ".$english_avg." Grade (F)";
}


echo "<br><br>";


#Math Result

if($math >= 80 && $math <= 100 ){
    echo "<b>Math = </b> ".$math." Grade (A+)";
}
elseif($math >= 70 && $math <= 79 ){
    echo "<b>Math = </b> ".$math." Grade (A)";
}
elseif($math >= 60 && $math <= 69 ){
    echo "<b>Math = </b> ".$math." Grade (A-)";
}
elseif($math >= 50 && $math <= 59 ){
    echo "<b>Math = </b> ".$math." Grade (B)";
}
elseif($math >= 40 && $math <= 49 ){
    echo "<b>Math = </b> ".$math." Grade (C)";
}
elseif($math >= 33 && $math <= 39 ){
    echo "<b>Math = </b> ".$math." Grade (D)";
}
else{
    echo "<b>Math = </b> ".$math." Grade (F)";
}


echo "<br><br>";


#Hair Math Result

if($hair_math >= 80 && $hair_math <= 100 ){
    echo "<b>Hair Math = </b> ".$hair_math." Grade (A+)";
}
elseif($hair_math >= 70 && $hair_math <= 79 ){
    echo "<b>Hair Math = </b> ".$hair_math." Grade (A)";
}
elseif($hair_math >= 60 && $hair_math <= 69 ){
    echo "<b>Hair Math = </b> ".$hair_math." Grade (A-)";
}
elseif($hair_math >= 50 && $hair_math <= 59 ){
    echo "<b>Hair Math = </b> ".$hair_math." Grade (B)";
}
elseif($hair_math >= 40 && $hair_math <= 49 ){
    echo "<b>Hair Math = </b> ".$hair_math." Grade (C)";
}
elseif($hair_math >= 33 && $hair_math <= 39 ){
    echo "<b>Hair Math = </b> ".$hair_math." Grade (D)";
}
else{
    echo "<b>Hair Math = </b> ".$hair_math." Grade (F)";
}


echo "<br><br>";


#Physics Result

if($physics >= 80 && $physics <= 100 ){
    echo "<b>Physics = </b> ".$physics." Grade (A+)";
}
elseif($physics >= 70 && $physics <= 79 ){
    echo "<b>Physics = </b> ".$physics." Grade (A)";
}
elseif($physics >= 60 && $physics <= 69 ){
    echo "<b>Physics = </b> ".$physics." Grade (A-)";
}
elseif($physics >= 50 && $physics <= 59 ){
    echo "<b>Physics = </b> ".$physics." Grade (B)";
}
elseif($physics >= 40 && $physics <= 49 ){
    echo "<b>Physics = </b> ".$physics." Grade (C)";
}
elseif($physics >= 33 && $physics <= 39 ){
    echo "<b>Physics = </b> ".$physics." Grade (D)";
}
else{
    echo "<b>Physics = </b> ".$physics." Grade (F)";
}


echo "<br><br>";


#Chemistry Result

if($chemistry >= 80 && $chemistry <= 100 ){
    echo "<b>Chemistry = </b> ".$chemistry." Grade (A+)";
}
elseif($chemistry >= 70 && $chemistry <= 79 ){
    echo "<b>Chemistry = </b> ".$chemistry." Grade (A)";
}
elseif($chemistry >= 60 && $chemistry <= 69 ){
    echo "<b>Chemistry = </b> ".$chemistry." Grade (A-)";
}
elseif($chemistry >= 50 && $chemistry <= 59 ){
    echo "<b>Chemistry = </b> ".$chemistry." Grade (B)";
}
elseif($chemistry >= 40 && $chemistry <= 49 ){
    echo "<b>Chemistry = </b> ".$chemistry." Grade (C)";
}
elseif($chemistry >= 33 && $chemistry <= 39 ){
    echo "<b>Chemistry = </b> ".$chemistry." Grade (D)";
}
else{
    echo "<b>Chemistry = </b> ".$chemistry." Grade (F)";
}


echo "<br><br>";


#Biology Result

if($biology >= 80 && $biology <= 100 ){
    echo "<b>Biology = </b> ".$biology." Grade (A+)";
}
elseif($biology >= 70 && $biology <= 79 ){
    echo "<b>Biology = </b> ".$biology." Grade (A)";
}
elseif($biology >= 60 && $biology <= 69 ){
    echo "<b>Biology = </b> ".$biology." Grade (A-)";
}
elseif($biology >= 50 && $biology <= 59 ){
    echo "<b>Biology = </b> ".$biology." Grade (B)";
}
elseif($biology >= 40 && $biology <= 49 ){
    echo "<b>Biology = </b> ".$biology." Grade (C)";
}
elseif($biology >= 33 && $biology <= 39 ){
    echo "<b>Biology = </b> ".$biology." Grade (D)";
}
else{
    echo "<b>Biology = </b> ".$biology." Grade (F)";
}


echo "<br><br>";


#Social Science Result

if($social_science >= 80 && $social_science <= 100 ){
    echo "<b>Social Science = </b> ".$social_science." Grade (A+)";
}
elseif($social_science >= 70 && $social_science <= 79 ){
    echo "<b>Social Science = </b> ".$social_science." Grade (A)";
}
elseif($social_science >= 60 && $social_science <= 69 ){
    echo "<b>Social Science = </b> ".$social_science." Grade (A-)";
}
elseif($social_science >= 50 && $social_science <= 59 ){
    echo "<b>Social Science = </b> ".$social_science." Grade (B)";
}
elseif($social_science >= 40 && $social_science <= 49 ){
    echo "<b>Social Science = </b> ".$social_science." Grade (C)";
}
elseif($social_science >= 33 && $social_science <= 39 ){
    echo "<b>Social Science = </b> ".$social_science." Grade (D)";
}
else{
    echo "<b>Social Science = </b> ".$social_science." Grade (F)";
}


echo "<br><br>";


#I.C.T Result

if($ict >= 80 && $ict <= 100 ){
    echo "<b>I.C.T = </b> ".$ict." Grade (A+)";
}
elseif($ict >= 70 && $ict <= 79 ){
    echo "<b>I.C.T = </b> ".$ict." Grade (A)";
}
elseif($ict >= 60 && $ict <= 69 ){
    echo "<b>I.C.T = </b> ".$ict." Grade (A-)";
}
elseif($ict >= 50 && $ict <= 59 ){
    echo "<b>I.C.T = </b> ".$ict." Grade (B)";
}
elseif($ict >= 40 && $ict <= 49 ){
    echo "<b>I.C.T = </b> ".$ict." Grade (C)";
}
elseif($ict >= 33 && $ict <= 39 ){
    echo "<b>I.C.T = </b> ".$ict." Grade (D)";
}
else{
    echo "<b>I.C.T = </b> ".$ict." Grade (F)";
}


echo "<br><br>";


#Islam Result

if($islam >= 80 && $islam <= 100 ){
    echo "<b>Islam = </b> ".$islam." Grade (A+)";
}
elseif($islam >= 70 && $islam <= 79 ){
    echo "<b>Islam = </b> ".$islam." Grade (A)";
}
elseif($islam >= 60 && $islam <= 69 ){
    echo "<b>Islam = </b> ".$islam." Grade (A-)";
}
elseif($islam >= 50 && $islam <= 59 ){
    echo "<b>Islam = </b> ".$islam." Grade (B)";
}
elseif($islam >= 40 && $islam <= 49 ){
    echo "<b>Islam = </b> ".$islam." Grade (C)";
}
elseif($islam >= 33 && $islam <= 39 ){
    echo "<b>Islam = </b> ".$islam." Grade (D)";
}
else{
    echo "<b>Islam = </b> ".$islam." Grade (F)";
}


echo "<br><br>";


#GPA Result

if($result >= 80 && $result <= 100 ){
    echo "<b>GPA  = </b> 5.00 Grade (A+)";
}
elseif($result >= 70 && $result <= 79 ){
    echo "<b>GPA  = </b>".number_format($result/16, 2)." Grade (A)";
}
elseif($result >= 60 && $result <= 69 ){
    echo "<b>GPA  = </b>".number_format($result/16, 2)." Grade (A-)";
}
elseif($result >= 50 && $result <= 59 ){
    echo "<b>GPA  = </b>".number_format($result/16, 2)." Grade (B)";
}
elseif($result >= 40 && $result <= 49 ){
    echo "<b>GPA  = </b>".number_format($result/16, 2)." Grade (C)";
}
elseif($result >= 33 && $result <= 39 ){
    echo "<b>GPA  = </b>".number_format($result/16, 2)." Grade (D)";
}
else{
    echo "<b>GPA  = </b>"."Fail"." Grade (F)";
}


echo "<br><br>";

?>

</body>

</html>