<?php
#Logic-1(Simple for loop)
echo "Logic-1 <br><br>";

for($i = 1; $i<=10; $i = $i+1){
    echo $i. "<br>";
}

#Logic-2(For loop with break)
echo "<br><br> Logic-2 <br><br>";

for($i = 1; $i<=10; $i = $i+1){
    if($i==8){
        break;
    }
    else{
        echo $i. "<br>";
    }
}

#Logic-3(For loop with continue)
echo "<br><br> Logic-3 <br><br>";

for($i = 1; $i<=10; $i = $i+1){
    if($i==4 || $i == 6 || $i == 8){
        continue;
    }
    else{
        echo $i. "<br>";
    }
}

#Logic-4(For loop with child then parent child)
echo "<br><br> Logic-4 <br><br>";

for($i = 1; $i<=5; $i = $i+1){
    echo $i. " i value. <br><br>";
    
    for($j = 1; $j<=5; $j = $j+1){
        echo $j. " J value. <br><br>";

        for($k = 1; $k<=5; $k = $k+1){
            echo $k. " k value. <br><br>";
        }
    }
}

#Logic-5(For loop with 1 parent 2 child)
echo "<br><br> Logic-5 <br><br>";

for($i = 1; $i<=5; $i = $i+1){
    echo $i. " i value. <br><br>";
    
    for($j = 1; $j<=5; $j = $j+1){
        echo $j. " J value. <br><br>"; 
    }
    for($k = 1; $k<=5; $k = $k+1){
        echo $k. " k value. <br><br>";
    }
}




?>