<?php
$bangla_1st = 70;
$bangla_2nd = 90;
$overall_bangla = ($bangla_1st + $bangla_2nd)/2;

$english_1st = 75;
$english_2nd = 75;
$overall_english = ($english_1st + $english_2nd)/2;

$math = 80;

# th means theory and  p means practical

$hair_math_th = 43;
$hair_math_p = 17;
$hair_math = ($hair_math_th + $hair_math_p);

$biology_th = 57;
$biology_p = 5;
$biology = ($biology_th + $biology_p);

$physics_th = 60;
$physics_p = 5;
$physics = ($physics_th + $physics_p);

$chemistry_th = 60;
$chemistry_p = 20;
$chemistry = ($chemistry_th + $chemistry_p);


$islam = 90;
$social_science = 65;

$avg_result = 
(
    $overall_bangla + $overall_english + $math + $hair_math +$biology + $physics + $chemistry 
    + $social_science + $islam
 )/9;

$theory_pass = (75*33)/100;
$practical_pass = (25*33)/100;


#Hair math theory and practical invalid variable
$h_r_th_p_invalid =
(($hair_math_th < 0) || ($hair_math_p < 0) ||($hair_math_th >75) || ($hair_math_p >25));

#Biology theory and practical invalid variable
$b_th_p_invalid =
(($biology_th < 0) || ($biology_p < 0) ||  ($biology_th >75) || ($biology_p >25));

#Physics theory and practical invalid variable
$p_th_p_invalid =
(($physics_th < 0) || ($physics_p < 0) || ($physics_th >75) ||  ($physics_p >25));

#Chemistry theory and practical invalid variable
$c_th_p_invalid =
(($chemistry_th < 0) || ($chemistry_p < 0) || ($chemistry_th >75) || ($chemistry_p >25));


// 80 - 100 = A+
// 70 - 79 = A
// 60 - 69 = A-
// 50 - 59 = B
// 40 - 49 = C
// 33 - 39 = D
// 0 - 32 = F

#Bangla 1st Result

if($bangla_1st >= 80 && $bangla_1st <= 100 ){
    
    echo "<b>Bangla 1<sup>st</sup> Paper = </b> Grade (A+)";
}
elseif($bangla_1st >= 70 && $bangla_1st <= 79 ){
    echo "<b>Bangla 1<sup>st</sup> Paper = </b>  Grade (A)";
}
elseif($bangla_1st >= 60 && $bangla_1st <= 69 ){
    echo "<b>Bangla 1<sup>st</sup> Paper = </b>  Grade (A-)";
}
elseif($bangla_1st >= 50 && $bangla_1st <= 59 ){
    echo "<b>Bangla 1<sup>st</sup> Paper = </b>  Grade (B)";
}
elseif($bangla_1st >= 40 && $bangla_1st <= 49 ){
    echo "<b>Bangla 1<sup>st</sup> Paper = </b>  Grade (C)";
}
elseif($bangla_1st >= 33 && $bangla_1st <= 39 ){
    echo "<b>Bangla 1<sup>st</sup> Paper = </b>  Grade (D)";
}
else{
    if($bangla_1st  <0 || $bangla_1st  >100){
        echo "<b>Bangla 1<sup>st</sup> Paper = Invalid Marks</b>";
    }
    else{
        echo "<b>Bangla 1<sup>st</sup> Paper = </b>  Grade (F)";
    }   
}

echo "<br><br>";


#Bangla 2nd Result

if($bangla_2nd >= 80 && $bangla_2nd <= 100 ){
    echo "<b>Bangla 2<sup>nd</sup> Paper = </b> Grade (A+)";
}
elseif($bangla_2nd >= 70 && $bangla_2nd <= 79 ){
    echo "<b>Bangla 2<sup>nd</sup> Paper = </b>  Grade (A)";
}
elseif($bangla_2nd >= 60 && $bangla_2nd <= 69 ){
    echo "<b>Bangla 2<sup>nd</sup> Paper = </b>  Grade (A-)";
}
elseif($bangla_2nd >= 50 && $bangla_2nd <= 59 ){
    echo "<b>Bangla 2<sup>nd</sup> Paper = </b>  Grade (B)";
}
elseif($bangla_2nd >= 40 && $bangla_2nd <= 49 ){
    echo "<b>Bangla 2<sup>nd</sup> Paper = </b>  Grade (C)";
}
elseif($bangla_2nd >= 33 && $bangla_2nd <= 39 ){
    echo "<b>Bangla 2<sup>nd</sup> Paper = </b>  Grade (D)";
}
else{
    if($bangla_2nd  <0 || $bangla_2nd  >100){
        echo "<b>Bangla 2<sup>nd</sup> Paper =  Invalid Marks</b>";
    }
    else{
        echo "<b>Bangla 2<sup>nd</sup> Paper = </b>  Grade (F)";
    }   
}

echo "<br><br>";


#Bangla Avg Result

if($overall_bangla >= 80 && $overall_bangla <= 100 ){
    echo "<b>Overall Bangla = </b> Grade (A+)";
}
elseif($overall_bangla >= 70 && $overall_bangla <= 79 ){
    echo "<b>Overall Bangla = </b>  Grade (A)";
}
elseif($overall_bangla >= 60 && $overall_bangla <= 69 ){
    echo "<b>Overall Bangla = </b>  Grade (A-)";
}
elseif($overall_bangla >= 50 && $overall_bangla <= 59 ){
    echo "<b>Overall Bangla = </b>  Grade (B)";
}
elseif($overall_bangla >= 40 && $overall_bangla <= 49 ){
    echo "<b>Overall Bangla = </b>  Grade (C)";
}
elseif($overall_bangla >= 33 && $overall_bangla <= 39 ){
    echo "<b>Overall Bangla = </b>  Grade (D)";
}
else{
    if($overall_bangla  <0 || $overall_bangla  >100){
        echo "<b>Overall Bangla = Invalid Marks</b>";
    }
    else{
        echo "<b>Overall Bangla = </b>  Grade (F)";
        
    }   
}

echo "<br><br>";

#English 1st Result

if($english_1st >= 80 && $english_1st <= 100 ){
    echo "<b>English 1<sup>st</sup> Paper = </b> Grade (A+)";
}
elseif($english_1st >= 70 && $english_1st <= 79 ){
    echo "<b>English 1<sup>st</sup> Paper = </b>  Grade (A)";
}
elseif($english_1st >= 60 && $english_1st <= 69 ){
    echo "<b>English 1<sup>st</sup> Paper = </b>  Grade (A-)";
}
elseif($english_1st >= 50 && $english_1st <= 59 ){
    echo "<b>English 1<sup>st</sup> Paper = </b>  Grade (B)";
}
elseif($english_1st >= 40 && $english_1st <= 49 ){
    echo "<b>English 1<sup>st</sup> Paper = </b>  Grade (C)";
}
elseif($english_1st >= 33 && $english_1st <= 39 ){
    echo "<b>English 1<sup>st</sup> Paper = </b>  Grade (D)";
}
else{
    if($english_1st  <0 || $english_1st  >100){
        echo "<b>English 1<sup>st</sup> Paper = Invalid Marks</b>";
    }
    else{
        echo "<b>English 1<sup>st</sup> Paper = </b>  Grade (F)";
    }   
}

echo "<br><br>";

#English 2nd Result

if($english_2nd >= 80 && $english_2nd <= 100 ){
    echo "<b>English 2<sup>nd</sup> Paper = </b> Grade (A+)";
}
elseif($english_2nd >= 70 && $english_2nd <= 79 ){
    echo "<b>English 2<sup>nd</sup> Paper = </b>  Grade (A)";
}
elseif($english_2nd >= 60 && $english_2nd <= 69 ){
    echo "<b>English 2<sup>nd</sup> Paper = </b>  Grade (A-)";
}
elseif($english_2nd >= 50 && $english_2nd <= 59 ){
    echo "<b>English 2<sup>nd</sup> Paper = </b>  Grade (B)";
}
elseif($english_2nd >= 40 && $english_2nd <= 49 ){
    echo "<b>English 2<sup>nd</sup> Paper = </b>  Grade (C)";
}
elseif($english_2nd >= 33 && $english_2nd <= 39 ){
    echo "<b>English 2<sup>nd</sup> Paper = </b>  Grade (D)";
}
else{
    if($english_2nd  <0 || $english_2nd  >100){
        echo "<b>English 2<sup>nd</sup> Paper = Invalid Marks</b>";
    }
    else{
        echo "<b>English 2<sup>nd</sup> Paper = </b>  Grade (F)";
    }   
}

echo "<br><br>";


#English Avg Result

if($overall_english >= 80 && $overall_english <= 100 ){
    echo "<b>Overall English = </b> Grade (A+)";
}
elseif($overall_english >= 70 && $overall_english <= 79 ){
    echo "<b>Overall English = </b> Grade (A)";
}
elseif($overall_english >= 60 && $overall_english <= 69 ){
    echo "<b>Overall English = </b> Grade (A-)";
}
elseif($overall_english >= 50 && $overall_english <= 59 ){
    echo "<b>Overall English = </b> Grade (B)";
}
elseif($overall_english >= 40 && $overall_english <= 49 ){
    echo "<b>Overall English = </b> Grade (C)";
}
elseif($overall_english >= 33 && $overall_english <= 39 ){
    echo "<b>Overall English = </b> Grade (D)";
}
else{
    if($overall_english  <0 || $overall_english  >100){
        echo "<b>Overall English = Invalid Marks</b>";
    }
    else{
        echo "<b>Overall English = </b> Grade (F)";
    }  
}

echo "<br><br>";

#Math Result

if($math >= 80 && $math <= 100 ){
    echo "<b>Math = </b> Grade (A+)";
}
elseif($math >= 70 && $math <= 79 ){
    echo "<b>Math = </b> Grade (A)";
}
elseif($math >= 60 && $math <= 69 ){
    echo "<b>Math = </b> Grade (A-)";
}
elseif($math >= 50 && $math <= 59 ){
    echo "<b>Math = </b> Grade (B)";
}
elseif($math >= 40 && $math <= 49 ){
    echo "<b>Math = </b> Grade (C)";
}
elseif($math >= 33 && $math <= 39 ){
    echo "<b>Math = </b> Grade (D)";
}
else{
    if($math  <0 || $math  >100){
        echo "<b>Math = Invalid Marks</b>";
    }
    else{
        echo "<b>Math = </b> Grade (F)";
    }  
}

echo "<br><br>";

#Hair Math Result

if($h_r_th_p_invalid){
    echo "<b>Hair Math = Invalid Marks</b>";
}
else{
    if($hair_math >= 80 && $hair_math <= 100 ){
        if($hair_math_th >= $theory_pass && $hair_math_p >= $practical_pass){
            echo "<b>Hair Math = </b>  Grade (A+)";
        }
        else{
            echo "<b>Hair Math = </b> Grade (F)";
        }
    }
    elseif($hair_math >= 70 && $hair_math <= 79 ){
        if($hair_math_th >= $theory_pass && $hair_math_p >= $practical_pass){
            echo "<b>Hair Math = </b>  Grade (A)";
        }
        else{
            echo "<b>Hair Math = </b> Grade (F)";
        }
        
    }
    elseif($hair_math >= 60 && $hair_math <= 69 ){
        if($hair_math_th >= $theory_pass && $hair_math_p >= $practical_pass){
            echo "<b>Hair Math = </b>  Grade (A-)";
        }
        else{
            echo "<b>Hair Math = </b> Grade (F)";
        }
        
    }
    elseif($hair_math >= 50 && $hair_math <= 59 ){
        if($hair_math_th >= $theory_pass && $hair_math_p >= $practical_pass){
            echo "<b>Hair Math = </b>  Grade (B)";
        }
        else{
            echo "<b>Hair Math = </b> Grade (F)";
        }
    }
    elseif($hair_math >= 40 && $hair_math <= 49 ){
        if($hair_math_th >= $theory_pass && $hair_math_p >= $practical_pass){
            echo "<b>Hair Math = </b>  Grade (C)";
        }
        else{
            echo "<b>Hair Math = </b> Grade (F)";
        }
    }
    elseif($hair_math >= 33 && $hair_math <= 39 ){
        if($hair_math_th >= $theory_pass && $hair_math_p >= $practical_pass){
            echo "<b>Hair Math = </b>  Grade (D)";
        }
        else{
            echo "<b>Hair Math = </b> Grade (F)";
        }
    }
    else{
        echo "<b>Hair Math = </b> Grade (F)";     
    }
}

echo "<br><br>";

#Biology Result

if($b_th_p_invalid){
    echo "<b>Biology = Invalid Marks</b>";
}
else{
    if($biology >= 80 && $biology <= 100 ){
        if($biology_th >= $theory_pass && $biology_p >= $practical_pass){
            echo "<b>Biology = </b>  Grade (A+)";
        }
        else{
            echo "<b>Biology = </b>  Grade (F)";
        }
    }
    elseif($biology >= 70 && $biology <= 79 ){
        if($biology_th >= $theory_pass && $biology_p >= $practical_pass){
            echo "<b>Biology = </b>  Grade (A)";
        }
        else{
            echo "<b>Biology = </b>  Grade (F)";
        }
    }
    elseif($biology >= 60 && $biology <= 69 ){
        if($biology_th >= $theory_pass && $biology_p >= $practical_pass){
            echo "<b>Biology = </b>  Grade (A-)";
        }
        else{
            echo "<b>Biology = </b>  Grade (F)";
        }
    }
    elseif($biology >= 50 && $biology <= 59 ){
        if($biology_th >= $theory_pass && $biology_p >= $practical_pass){
            echo "<b>Biology = </b>  Grade (B)";
        }
        else{
            echo "<b>Biology = </b>  Grade (F)";
        }
    }
    elseif($biology >= 40 && $biology <= 49 ){
        if($biology_th >= $theory_pass && $biology_p >= $practical_pass){
            echo "<b>Biology = </b>  Grade (C)";
        }
        else{
            echo "<b>Biology = </b>  Grade (F)";
        }
    }
    elseif($biology >= 33 && $biology <= 39 ){
        if($biology_th >= $theory_pass && $biology_p >= $practical_pass){
            echo "<b>Biology = </b>  Grade (D)";
        }
        else{
            echo "<b>Biology = </b>  Grade (F)";
        }
    }
    else{
        echo "<b>Biology = </b>  Grade (F)";
    }
}

echo "<br><br>";

#Physics Result

if($p_th_p_invalid){
    echo "<b>Physics  = Invalid Mark</b>";
}
else{
    if($physics >= 80 && $physics <= 100 ){
        if($physics_th >= $theory_pass && $physics_p >= $practical_pass){
            echo "<b>Physics  = </b>  Grade (A+)";
        }
        else{
            echo "<b>Physics = </b> Grade (F)";
        }
    }
    elseif($physics >= 70 && $physics <= 79 ){
        if($physics_th >= $theory_pass && $physics_p >= $practical_pass){
            echo "<b>Physics  = </b>  Grade (A)";
        }
        else{
            echo "<b>Physics = </b> Grade (F)";
        }
    }
    elseif($physics >= 60 && $physics <= 69 ){
        if($physics_th >= $theory_pass && $physics_p >= $practical_pass){
            echo "<b>Physics  = </b>  Grade (A-)";
        }
        else{
            echo "<b>Physics = </b> Grade (F)";
        }
    }
    elseif($physics >= 50 && $physics <= 59 ){
        if($physics_th >= $theory_pass && $physics_p >= $practical_pass){
            echo "<b>Physics  = </b>  Grade (B)";
        }
        else{
            echo "<b>Physics = </b> Grade (F)";
        }
    }
    elseif($physics >= 40 && $physics <= 49 ){
        if($physics_th >= $theory_pass && $physics_p >= $practical_pass){
            echo "<b>Physics  = </b>  Grade (C)";
        }
        else{
            echo "<b>Physics = </b> Grade (F)";
        }
    }
    elseif($physics >= 33 && $physics <= 39 ){
        if($physics_th >= $theory_pass && $physics_p >= $practical_pass){
            echo "<b>Physics  = </b>  Grade (D)";
        }
        else{
            echo "<b>Physics = </b> Grade (F)";
        }
    }
    else{
        echo "<b>Physics = </b> Grade (F)";
    }
}



echo "<br><br>";

#Chemistry Result
if($c_th_p_invalid){
    echo "<b>Chemistry = Invalid Mark</b>";
}
else{
    if($chemistry >= 80 && $chemistry <= 100 ){
        if($chemistry_th >= $theory_pass && $chemistry_p >= $practical_pass){
            echo "<b>Chemistry = </b>  Grade (A+)";
        }
        else{
            echo "<b>Chemistry = </b>Grade (F)";
        }
    }
    elseif($chemistry >= 70 && $chemistry <= 79 ){
        if($chemistry_th >= $theory_pass && $chemistry_p >= $practical_pass){
            echo "<b>Chemistry = </b>  Grade (A)";
        }
        else{
            echo "<b>Chemistry = </b>Grade (F)";
        }
    }
    elseif($chemistry >= 60 && $chemistry <= 69 ){
        if($chemistry_th >= $theory_pass && $chemistry_p >= $practical_pass){
            echo "<b>Chemistry = </b>  Grade (A-)";
        }
        else{
            echo "<b>Chemistry = </b>Grade (F)";
        }
    }
    elseif($chemistry >= 50 && $chemistry <= 59 ){
        if($chemistry_th >= $theory_pass && $chemistry_p >= $practical_pass){
            echo "<b>Chemistry = </b>  Grade (B)";
        }
        else{
            echo "<b>Chemistry = </b>Grade (F)";
        }
    }
    elseif($chemistry >= 40 && $chemistry <= 49 ){
        if($chemistry_th >= $theory_pass && $chemistry_p >= $practical_pass){
            echo "<b>Chemistry = </b>  Grade (C)";
        }
        else{
            echo "<b>Chemistry = </b>Grade (F)";
        }
    }
    elseif($chemistry >= 33 && $chemistry <= 39 ){
        if($chemistry_th >= $theory_pass && $chemistry_p >= $practical_pass){
            echo "<b>Chemistry = </b>  Grade (D)";
        }
        else{
            echo "<b>Chemistry = </b>Grade (F)";
        }
    }
    else{
        echo "<b>Chemistry = </b>Grade (F)";
    }
}
echo "<br><br>";

#Islam Result

if($islam >= 80 && $islam <= 100 ){
    echo "<b>Islam = </b> Grade (A+)";
}
elseif($islam >= 70 && $islam <= 79 ){
    echo "<b>Islam = </b> Grade (A)";
}
elseif($islam >= 60 && $islam <= 69 ){
    echo "<b>Islam = </b> Grade (A-)";
}
elseif($islam >= 50 && $islam <= 59 ){
    echo "<b>Islam = </b> Grade (B)";
}
elseif($islam >= 40 && $islam <= 49 ){
    echo "<b>Islam = </b> Grade (C)";
}
elseif($islam >= 33 && $islam <= 39 ){
    echo "<b>Islam = </b> Grade (D)";
}
else{
    if($islam <0 || $islam >100){
        echo "<b>Islam = Invalid Marks</b>";
    }
    else{
        echo "<b>Islam = </b> Grade (F)";
    }   
}

echo "<br><br>";

#Social Science Result

if($social_science >= 80 && $social_science <= 100 ){
    echo "<b>Social Science = </b>Grade (A+)";
}
elseif($social_science >= 70 && $social_science <= 79 ){
    echo "<b>Social Science = </b>Grade (A)";
}
elseif($social_science >= 60 && $social_science <= 69 ){
    echo "<b>Social Science = </b>Grade (A-)";
}
elseif($social_science >= 50 && $social_science <= 59 ){
    echo "<b>Social Science = </b>Grade (B)";
}
elseif($social_science >= 40 && $social_science <= 49 ){
    echo "<b>Social Science = </b>Grade (C)";
}
elseif($social_science >= 33 && $social_science <= 39 ){
    echo "<b>Social Science = </b>Grade (D)";
}
else{
    
    if($social_science <0 || $social_science >100){
        echo "<b>Social Science = Invalid Marks</b>";
    }
    else{
        echo "<b>Social Science = </b>Grade (F)";
    }
}

echo "<br><br>";

#GPA Result
$invalid = 
(
    ($bangla_1st <0) || ($bangla_2nd <0) || ($overall_bangla <0) || ($overall_english <0) || 
    ($english_1st <0) || ($english_2nd <0) || ($math <0) || ($social_science <0) || 
    ($islam <0) || 
    
    ($bangla_1st >100) || ($bangla_2nd >100) || ($overall_bangla >100) || 
    ($overall_english >100) || ($english_1st >100) || ($english_2nd >100) || ($math >100) || 
    ($social_science >100) || ($islam >100)
);

$failed = 
(
    ($bangla_1st <33) || ($bangla_2nd <33) || ($overall_bangla <33) || ($overall_english <33) || 
    ($english_1st <33) || ($english_2nd <33) || ($math <33) || ($hair_math <33) || 
    ($biology <33) || ($physics <33) || ($chemistry <33) || ($social_science <33) || 
    ($islam <33) || ($hair_math_th < $theory_pass) || ($biology_th < $theory_pass) || 
    ($physics_th < $theory_pass) || ($chemistry_th < $theory_pass) || 
    ($hair_math_p < $practical_pass) || ($biology_p < $practical_pass) || 
    ($physics_th < $practical_pass) || ($chemistry_p < $practical_pass)
);


if($invalid || $h_r_th_p_invalid || $b_th_p_invalid || $p_th_p_invalid || $c_th_p_invalid){
    echo "<b>Overall Point  = Invalid</b> <br><br>";
    echo "<b>Invalid Marks</b>";
}
else{
    if($failed){
        echo "<b>Overall Point  = </b>0 <br><br>";
        echo "<b>Failed</b>";
    }
    else{
        if($avg_result >= 80 && $avg_result <= 100 ){
            echo "<b>Overall Point  = </b> 5.00 <br><br>";
            echo "<b>Grade  = </b> (A+)";
        }
        elseif($avg_result >= 70 && $avg_result <= 79 ){
            echo "<b>Overall Point  = </b> 4.00 <br><br>";
            echo "<b>Grade  = </b> (A)";
        }
        elseif($avg_result >= 60 && $avg_result <= 69 ){
            echo "<b>Overall Point  = </b> 3.50 <br><br>";
            echo "<b>Grade  = </b> (A-)";
        }
        elseif($avg_result >= 50 && $avg_result <= 59 ){
            echo "<b>Overall Point  = </b> 3.00 <br><br>";
            echo "<b>Grade  = </b> (B)";
        }
        elseif($avg_result >= 40 && $avg_result <= 49 ){
            echo "<b>Overall Point  = </b> 2.00 <br><br>";
            echo "<b>Grade  = </b> (C)";
        }
        elseif($avg_result >= 33 && $avg_result <= 39 ){
            echo "<b>Overall Point  = </b> 1.00 <br><br>";
            echo "<b>Grade  = </b> (D)";
        }   
    }
}

echo "<br><br>";