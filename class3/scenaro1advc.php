<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scenario-1</title>

    <style>
    #cakes_name,
    #c_name1,
    #c_name2,
    #c_name3,
    #c_name4,
    #c_name5 {
        cursor: pointer;
    }

    #cakes_name_show,
    #cake_details1,
    #cake_details2,
    #cake_details3,
    #cake_details4,
    #cake_details5 {
        display: none;
    }
    </style>
</head>

<body>

    <?php

# Cakes Name:
# 1. Black Forest = b_f
# 2. Vanilla Cake = v_c
# 3. Red Velvet = r_v
# 4. Lemon Sponge = l_s
# 5. Chocolate Cake = c_c

$cake1 = "Black Forest \/";
$cake2 = "Vanilla Cake \/";
$cake3 = "Red Velvet \/";
$cake4 = "Lemon Sponge \/";
$cake5 = "Chocolate Cake \/";


# material cost for each cake per pound
# material cost = m_c

$m_c_b_f = 180;
$m_c_v_c = 150;
$m_c_r_v = 220;
$m_c_l_s = 165;
$m_c_c_c = 170;

# transportation cost for each cake per pound
# transportation cost = t_c

$t_c = 150;

# Total material & transportation cost for each cake per pound

$total_m_c_t_c_b_f = ($m_c_b_f + $t_c);
$total_m_c_t_c_v_c = ($m_c_v_c + $t_c);
$total_m_c_t_c_r_v = ($m_c_r_v + $t_c);
$total_m_c_t_c_l_s = ($m_c_l_s + $t_c);
$total_m_c_t_c_c_c = ($m_c_c_c + $t_c);

# utility cost for each cake per pound
# utility cost = u_c

$u_c_b_f = ($total_m_c_t_c_b_f*3)/100;
$u_c_v_c = ($total_m_c_t_c_v_c*3)/100;
$u_c_r_v = ($total_m_c_t_c_r_v*3)/100;
$u_c_l_s = ($total_m_c_t_c_l_s*3)/100;
$u_c_c_c = ($total_m_c_t_c_c_c*3)/100;

# space cost for each cake per pound
# space cost = s_c

$s_c = 50;

# staff cost for each cake per pound
# staff cost = staff_c

$staff_c = 60;

# Total inventory cost for each cake per pound
# Total inventory cost = t_i_c

$t_i_c_b_f = ($total_m_c_t_c_b_f + $u_c_b_f + $s_c + $staff_c);
$t_i_c_v_c = ($total_m_c_t_c_v_c + $u_c_v_c + $s_c + $staff_c);
$t_i_c_r_v = ($total_m_c_t_c_r_v + $u_c_r_v + $s_c + $staff_c);
$t_i_c_l_s = ($total_m_c_t_c_l_s + $u_c_l_s + $s_c + $staff_c);
$t_i_c_c_c = ($total_m_c_t_c_c_c + $u_c_c_c + $s_c + $staff_c);

# Selling price for the each cake per pound
# Selling price = s_p

$s_p_b_f = 780;
$s_p_v_c = 600;
$s_p_r_v = 800;
$s_p_l_s = 650;
$s_p_c_c = 660;

# 5% discount selling price on first 3 cakes for New Year 2022
# 5% discount selling price = disc5_s_p

$disc5_s_p_b_f = $s_p_b_f - ($s_p_b_f * 5)/100;
$disc5_s_p_v_c = $s_p_v_c - ($s_p_v_c * 5)/100;
$disc5_s_p_r_v = $s_p_r_v - ($s_p_r_v * 5)/100;


# 7% discount selling price on rest of the cake for New Year 2022
# 7% discount selling price = disc7_s_p

$disc7_s_p_l_s = $s_p_l_s - ($s_p_l_s * 7)/100;
$disc7_s_p_c_c = $s_p_c_c - ($s_p_c_c * 7)/100;
?>

    <div class="cakes">
        <h1 id="cakes_name">Cakes Name \/</h1>
        <div id="cakes_name_show">

            <!----------------------
           1. Black Forest 
        ----------------------->
            <h2 id="c_name1"><?php echo "1. $cake1"; ?></h2>

            <div id="cake_details1">
                <h3 style="margin-left:20px;">
                    <?php echo "Total inventory cost for Black Forest per pound = $t_i_c_b_f Tk"; ?>
                </h3>
                <h3 style="margin-left:20px;">
                    <?php echo "The selling price before discount for Black Forest per pound = $s_p_b_f Tk"; ?>
                </h3>
                <h3 style="margin-left:20px;">
                    <?php echo "The selling price after 5% discount for Black Forest per pound = $disc5_s_p_b_f Tk"; ?>
                </h3>
            </div>

            <!----------------------
                2. Vanilla Cake 
            ----------------------->
            <h2 id="c_name2"><?php echo "2. $cake2"; ?></h2>

            <div id="cake_details2">
                <h3 style="margin-left:20px;">
                    <?php echo "Total inventory cost for Vanilla Cake per pound = $t_i_c_v_c Tk"; ?>
                </h3>
                <h3 style="margin-left:20px;">
                    <?php echo "The selling price before discount for Vanilla Cake per pound = $s_p_v_c Tk"; ?>
                </h3>
                <h3 style="margin-left:20px;">
                    <?php echo "The selling price after 5% discount for Vanilla Cake per pound = $disc5_s_p_v_c Tk"; ?>
                </h3>
            </div>

            <!----------------------
                3. Red Velvet 
            ----------------------->
            <h2 id="c_name3"><?php echo "3. $cake3"; ?></h2>

            <div id="cake_details3">
                <h3 style="margin-left:20px;">
                    <?php echo "Total inventory cost for Red Velvet per pound = $t_i_c_r_v Tk"; ?>
                </h3>
                <h3 style="margin-left:20px;">
                    <?php echo "The selling price before discount for Red Velvet per pound = $s_p_r_v Tk"; ?>
                </h3>
                <h3 style="margin-left:20px;">
                    <?php echo "The selling price after 5% discount for Red Velvet per pound = $disc5_s_p_r_v Tk"; ?>
                </h3>
            </div>

            <!----------------------
                4. Lemon Sponge 
            ----------------------->
            <h2 id="c_name4"><?php echo "4. $cake4"; ?></h2>

            <div id="cake_details4">
                <h3 style="margin-left:20px;">
                    <?php echo "Total inventory cost for Lemon Sponge per pound = $t_i_c_l_s Tk"; ?>
                </h3>
                <h3 style="margin-left:20px;">
                    <?php echo "The selling price before discount for Lemon Sponge per pound = $s_p_l_s Tk"; ?>
                </h3>
                <h3 style="margin-left:20px;">
                    <?php echo "The selling price after 7% discount for Lemon Sponge per pound = $disc7_s_p_l_s Tk"; ?>
                </h3>
            </div>

            <!----------------------
                5. Chocolate Cake 
            ----------------------->
            <h2 id="c_name5"><?php echo "5. $cake5"; ?></h2>

            <div id="cake_details5">
                <h3 style="margin-left:20px;">
                    <?php echo "Total inventory cost for Chocolate Cake per pound = $t_i_c_c_c Tk"; ?>
                </h3>
                <h3 style="margin-left:20px;">
                    <?php echo "The selling price before discount for Chocolate Cake per pound = $s_p_c_c Tk"; ?>
                </h3>
                <h3 style="margin-left:20px;">
                    <?php echo "The selling price after 7% discount for Chocolate Cake per pound = $disc7_s_p_c_c Tk"; ?>
                </h3>
            </div>
        </div>
    </div>





    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#cakes_name").click(function() {
            $("#cakes_name_show").slideToggle("slow");
        });

    });


    $(document).ready(function() {
        $("#c_name1").click(function() {
            $("#cake_details1").slideToggle("slow");
        });
    });
    $(document).ready(function() {
        $("#c_name2").click(function() {
            $("#cake_details2").slideToggle("slow");
        });
    });
    $(document).ready(function() {
        $("#c_name3").click(function() {
            $("#cake_details3").slideToggle("slow");
        });
    });
    $(document).ready(function() {
        $("#c_name4").click(function() {
            $("#cake_details4").slideToggle("slow");
        });
    });
    $(document).ready(function() {
        $("#c_name5").click(function() {
            $("#cake_details5").slideToggle("slow");
        });
    });
    </script>

</body>

</html>