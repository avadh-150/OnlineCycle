
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main_sign.css">
    <link rel="stylesheet" href="demo.css">

    <title>Document</title>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    width: 60%;
    margin: 50px auto;
    padding: 30px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.title {
    text-align: center;
    font-size: 28px;
    color: #333;
    margin-bottom: 20px;
}

.t-contect {
    padding: 20px;
}

h1 {
    text-align: center;
    font-size: 22px;
    color: #555;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

p {
    width: 100%;
    margin-bottom: 15px;
}

.label, .name {
    font-size: 16px;
    color: #333;
    margin-bottom: 5px;
    display: block;
}

input[type="text"], 
input[type="email"], 
input[type="password"], 
input[type="number"], 
select {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    margin: 5px 0 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
    transition: all 0.3s ease;
}

input:focus, select:focus {
    border-color: #007BFF;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

.btn {
    width: 100%;
    padding: 12px;
    background-color: #007BFF;
    color: #ffffff;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    text-align: center;
}

.btn:hover {
    background-color: #0056b3;
}

select {
    cursor: pointer;
}

button[type="submit"] {
    width: 50%;
    margin-top: 10px;
}

button[type="submit"]:hover {
    background-color: #28a745;
}

    </style>
</head>

<body>

    <div class="container">


        <div class="table1">
            <h1 class="title"> Update the </h1>

            <div class="t-contect">

                <h1>Members Records</h1>
                <?php
                // include "connection.php";
                include('include/config.php');

                $id = $_GET['id'];
                $sql = "select * from users where id='$id'";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_assoc($result)) {

                ?>
                    <form action="" method="post">

                       
                        <p>
                            <label for="fname" class="name"> Name :</label><br>
                            <input type="text" value="<?php echo $row['name']; ?>" name="uname">

                        </p>
                        <p>
                            <label for="email" class="name">Email Ad : </label> <br>
                            <input type="email" value="<?php echo $row['email']; ?>"  name="email">


                        </p>
                        <p>
                            <label for="phone" class="name">Phone no. :</label> <br>
                            <input type="number" value="<?php echo $row['contactno']; ?>" name="pn">
                        </p>
                        <p>
                            <label for="pass" class="name">Password :</label><br>
                            <input type="password" value="<?php echo $row['password']; ?>" name="pass">
                        </p>
                        <p>
                            <label for="pass" class="name">Shipping Address :</label><br>
                            <input type="text" value="<?php echo $row['shippingAddress']; ?>" name="saddress">
                        </p>
                        <p>
                            <label for="pass" class="name">shipping City :</label><br>
                            <input type="text" value="<?php echo $row['shippingCity']; ?>" name="city">
                        </p><p>
                            <label for="pass" class="name">shipping State :</label><br>
                            <input type="text" value="<?php echo $row['shippingState']; ?>" name="state">
                        </p>
                        <p>
                            <label for="pass" class="name">shipping Pincode :</label><br>
                            <input type="text" value="<?php echo $row['shippingPincode']; ?>" name="code">
                        </p> 
                        <p>
                            <label for="pass" class="name">billing Address :</label><br>
                            <input type="text" value="<?php echo $row['billingAddress']; ?>" name="baddress">
                        </p>
                        
                      
                            <p>
                                <button type="submit" class="btn" value="" name="update">update</button>
                            </p> 
                    </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    </div>
</body>
</html>

<?php

if (isset($_REQUEST['update'])){ 
    $uname = $_POST['uname'];
    $el = $_POST['email'];
    $pn = $_POST['pn'];
    $ps = $_POST['pass'];
    $sa=$_POST['saddress'];
    $ba=$_POST['baddress'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $code=$_POST['code'];

    // $ba=$_POST['saddress'];
    $sql1 = "update users set name='$uname',email='$el',contactno='$pn',password='$ps',shippingAddress='$sa',shippingCity='$city',shippingState='$state',shippingPincode='$code',billingAddress='$ba' where id='$id'";
    $r1 = mysqli_query($con, $sql1);
    if ($r1) {
       echo "<script>window.location.href= 'manage-users.php';</script>";
    } else {
        echo "<h1>404</h1>";
    }
}
?>