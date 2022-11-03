<h1 style="text-align: center;">Cakes Details</h1>

<?php
$cakes_flavor = array("Black Forest", "Vanilla Cake", "Red Velvet", "Lemon Sponge", "Chocolate Cake");

$cakes_price = array(780, 600,  800, 650, 660);

$m_c = array(180, 150, 220, 165, 170);

$t_c = 150;
$space_c = 50;
$staff_c = 60;

echo "<h1>Cakes Flavor Name:</h1>";
for ($i = 0; $i < 5; $i = $i + 1) {
    echo $cakes_flavor[$i] . "<br>";
}

echo "<h1>Total Inventory cost:</h1>";
for ($i = 0; $i < 5; $i = $i + 1) {
    $sum_m_t_c = ($m_c[$i] + $t_c);
    $u_c = ($sum_m_t_c * 3) / 100;
    $total_i_c = ($sum_m_t_c + $u_c + $space_c + $staff_c);
    echo "Total inventory cost for " . $cakes_flavor[$i] . " = " . $total_i_c . "<br>";
}

echo "<h1>Regular Price:</h1>";
for ($i = 0; $i < 5; $i = $i + 1) {
    echo $cakes_flavor[$i] . " = " . $cakes_price[$i] . "<br>";
}

echo "<h1>Discount Price:</h1>";
for ($i = 0; $i < 5; $i = $i + 1) {
    if ($i == 0 || $i == 1 || $i == 2) {
        echo $cakes_flavor[$i] . " selling price after 5% discount = " . ($cakes_price[$i] - ($cakes_price[$i] * 5) / 100) . "<br>";
    } else {
        echo $cakes_flavor[$i] . " selling price after 7% discount = " . ($cakes_price[$i] - ($cakes_price[$i] * 7) / 100) . "<br>";
    }
}
?>