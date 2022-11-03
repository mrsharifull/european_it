<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
    form {
        width: 60%;
        margin: 0 auto;
        padding: 10px;
    }



    form input {
        width: 98%;
        padding: 6px;
    }

    form .wrap {
        width: 100%;
        display: flex;
    }

    form .gender {
        width: 50%;
    }

    form .gender_wrap {
        display: flex;
        margin-top: 6px;
    }

    form .gender_wrap>input {
        width: auto;
    }

    form .district {
        width: 50%;
    }

    form .district select {
        width: 100%;
        padding: 6px;
    }

    .red_alert {
        color: red;
    }

    .green_alert {
        color: green;
    }
    </style>



</head>

<body>
    <?php
    $success = '';
    $student_name = '';
    $father_name = '';
    $mother_name = '';
    $email = '';
    $phone = '';
    $roll = '';
    $reg = '';
    $nid = '';
    $birthday = '';
    $gender = '';
    $district = '0';

    $eStudent_name = '';
    $eFather_name = '';
    $eMother_name = '';
    $eEmail = '';
    $ePhone = '';
    $eRoll = '';
    $eReg = '';
    $eNid = '';
    $eBirthday = '';
    $eGender = '';
    $eDistrict = '';

    if (isset($_POST['submit'])) {
        $student_name = $_POST['student_name'];
        $father_name = $_POST['father_name'];
        $mother_name = $_POST['mother_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $roll = $_POST['roll'];
        $reg = $_POST['reg'];
        $nid = $_POST['nid'];
        $birthday = $_POST['birthday'];
        if (isset($_POST['gender'])) {
            $gender = $_POST['gender'];
        }
        $district = $_POST['district'];

        $i = 0;
        if (empty($student_name)) {
            $i++;
            $eStudent_name = "<span class='red_alert'>X Please enter your name! </span>";
        }
        if (empty($father_name)) {
            $i++;
            $eFather_name = "<span class='red_alert'>X Please enter your father name! </span>";
        }
        if (empty($mother_name)) {
            $i++;
            $eMother_name = "<span class='red_alert'>X Please enter your mother name! </span>";
        }
        if (empty($email)) {
            $i++;
            $eEmail = "<span class='red_alert'>X Please enter your email! </span>";
        }
        if (empty($phone)) {
            $i++;
            $ePhone = "<span class='red_alert'>X Please enter your phone number! </span>";
        }
        if (empty($roll)) {
            $i++;
            $eRoll = "<span class='red_alert'>X Please enter your roll number! </span>";
        }
        if (empty($reg)) {
            $i++;
            $eReg = "<span class='red_alert'>X Please enter your registration number! </span>";
        }
        if (empty($nid)) {
            $i++;
            $eNid = "<span class='red_alert'>X Please enter your NID number! </span>";
        }
        if (empty($birthday)) {
            $i++;
            $eBirthday = "<span class='red_alert'>X Please enter your birthday! </span>";
        }
        if (empty($gender)) {
            $i++;
            $eGender = "<span class='red_alert'>X Please select your gender! </span>";
        }
        if ($district == "0") {
            $i++;
            $eDistrict = "<span class='red_alert'>X Please select your district! </span>";
        }
        if ($i == 0) {
            $success = "<span class= 'green_alert'>Your Data Inserted!<span>";
            $student_name = '';
            $father_name = '';
            $mother_name = '';
            $email = '';
            $phone = '';
            $roll = '';
            $reg = '';
            $nid = '';
            $birthday = '';
            $gender = '';
            $district = '0';
        }
    }





    ?>

    <form action="" method="post">
        <h2><?php echo $success; ?></h2>

        <label for="student_name">Student Name:</label><br>
        <input type="text" name="student_name" placeholder="Enter your name" value="<?php echo $student_name; ?>">
        <span><?php echo $eStudent_name; ?></span><br><br>

        <label for="father_name">Father Name:</label><br>
        <input type="text" name="father_name" placeholder="Enter your father name" value="<?php echo $father_name; ?>">
        <span><?php echo $eFather_name; ?></span><br><br>

        <label for="mother_name">Mother Name:</label><br>
        <input type="text" name="mother_name" placeholder="Enter your mother name" value="<?php echo $mother_name; ?>">
        <span><?php echo $eMother_name; ?></span><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" placeholder="Enter your email" value="<?php echo $email; ?>">
        <span><?php echo $eEmail; ?></span><br><br>

        <label for="phone">Phone:</label><br>
        <input type="number" name="phone" placeholder="Enter your phone number" value="<?php echo $phone; ?>">
        <span><?php echo $ePhone; ?></span><br><br>

        <label for="roll">Roll:</label><br>
        <input type="number" name="roll" placeholder="Enter your roll number" value="<?php echo $roll; ?>">
        <span><?php echo $eRoll; ?></span><br><br>

        <label for="reg">Registration No:</label><br>
        <input type="number" name="reg" placeholder="Enter your registration number" value="<?php echo $reg; ?>">
        <span><?php echo $eReg; ?></span><br><br>

        <label for="nid">NID No:</label><br>
        <input type="number" name="nid" placeholder="Enter your NID number" value="<?php echo $nid; ?>">
        <span><?php echo $eNid; ?></span><br><br>

        <label for="birthday">Date of Birth:</label><br>
        <input type="date" name="birthday" value="<?php echo $birthday; ?>">
        <span><?php echo $eBirthday; ?></span><br><br>

        <div class="wrap">
            <div class="gender">
                <label>Select your gender</label><br>
                <div class="gender_wrap">
                    <input type="radio" name="gender" id="gender" value="male">
                    <label for="gender">Male</label>
                    <input type="radio" name="gender" id="gender" value="female">
                    <label for="gender">Female</label>
                    <input type="radio" name="gender" id="gender" value="custom">
                    <label for="gender">Custom</label>
                </div>
                <span><?php echo $eGender; ?></span>
            </div>



            <div class="district">
                <label for="district">District:</label><br>
                <select name="district" id="district">
                    <option value="0">Select your distric</option>
                    <option value="Bagerhat">Bagerhat</option>
                    <option value="Bandarban">Bandarban</option>
                    <option value="Barguna">Barguna</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Bhola">Bhola</option>
                    <option value="Bogra">Bogra</option>
                    <option value="Brahmanbaria">Brahmanbaria</option>
                    <option value="Chandpur">Chandpur</option>
                    <option value="Chapai">Chapai</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Chuadanga">Chuadanga</option>
                    <option value="Comilla">Comilla</option>
                    <option value="Cox's Bazar">Cox's Bazar</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Dinajpur">Dinajpur</option>
                    <option value="Faridpur">Faridpur</option>
                    <option value="Gaibandha">Gaibandha</option>
                    <option value="Gazipur">Gazipur</option>
                    <option value="Gopalganj">Gopalganj</option>
                    <option value="Habiganj">Habiganj</option>
                    <option value="Jamalpur">Jamalpur</option>
                    <option value="Jessore">Jessore</option>
                    <option value="Jhalokati">Jhalokati</option>
                    <option value="Jhenaidah">Jhenaidah</option>
                    <option value="Joypurhat">Joypurhat</option>
                    <option value="Khagrachhari">Khagrachhari</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Kishoreganj">Kishoreganj</option>
                    <option value="Kurigram">Kurigram</option>
                    <option value="Kushtia">Kushtia</option>
                    <option value="Lakshmipur">Lakshmipur</option>
                    <option value="Lalmonirhat">Lalmonirhat</option>
                    <option value="Madaripur">Madaripur</option>
                    <option value="Magura">Magura</option>
                    <option value="Manikganj">Manikganj</option>
                    <option value="Meherpur">Meherpur</option>
                    <option value="Moulvibazar">Moulvibazar</option>
                    <option value="Munshiganj">Munshiganj</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Naogaon">Naogaon</option>
                    <option value="Narail">Narail</option>
                    <option value="Narayanganj">Narayanganj</option>
                    <option value="Narsingdi">Narsingdi</option>
                    <option value="Natore">Natore</option>
                    <option value="Nawabganj">Nawabganj</option>
                    <option value="Netrokona">Netrokona</option>
                    <option value="Nilphamari">Nilphamari</option>
                    <option value="Noakhali">Noakhali</option>
                    <option value="Pabna">Pabna</option>
                    <option value="Panchagarh">Panchagarh</option>
                    <option value="Patuakhali">Patuakhali</option>
                    <option value="Pirojpur">Pirojpur</option>
                    <option value="Rajbari">Rajbari</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Rangamati">Rangamati</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Satkhira">Satkhira</option>
                    <option value="Shariatpur">Shariatpur</option>
                    <option value="Sherpur">Sherpur</option>
                    <option value="Sirajganj">Sirajganj</option>
                    <option value="Sunamganj">Sunamganj</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Tangail">Tangail</option>
                    <option value="Thakurgaon">Thakurgaon</option>
                </select>
                <span><?php echo $eDistrict; ?></span>
            </div>
        </div>
        <br><br>
        <input type="submit" style="width:100%;" name="submit" value="Submit"><br><br>


    </form>

</body>

</html>