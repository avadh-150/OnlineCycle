<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <style>
        /* Custom styles for the dropdown menu */



        /* Dropdown styles */
        .dropdown-menu {
            background-color: #000;
            border: 1px solid #ccc;
            border-radius: 0;
            padding: 10px 0;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            min-width: 150px;
            font-size: 17px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            text-align: center;

        }

        .dropdown-menu .dropdown-item {
            padding: 10px 20px 10px 20px;
            font-weight: lighter;
            overflow: hidden;
            color: #fff;
            font-weight: lighter;
            transition: background-color 0.3s;
            letter-spacing: 1px;
            /* word-spacing: 20px; */
            border-radius: 9px;
            /* border:1px solid #f8f9fa */
        }

        .dropdown-menu .dropdown-item:hover {
            background-color: #f8f9fa;
            /* Hover background for dropdown items */
            color: #000;
            text-decoration: none;
        }

        .dropdown-menu .dropdown-item+.dropdown-item {
            border-top: 1px solid #e9ecef;
            /* Adds a border between dropdown items */
        }

        /* Dropdown toggle styling */
        .navbar-nav .dropdown-toggle {
            background-color: #000;
            color: white;
            border-radius: 4px;
            padding: 10px 20px;
        }

        .navbar-nav .dropdown-toggle:hover {
            background-color: #ff4d4d;
            color: white;
        }
    </style>
</head>

<body>


    <nav style="background-color: #000;" class="navbar navbar-expand-lg navbar-light bg-light">

        <div style="background-color: #000;" class="header-nav animate-dropdown">
            <div class="container">
                <div class="yamm navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                    </div>
                    <div class="nav-bg-class">
                        <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                            <div class="nav-outer">
                                <ul class="nav navbar-nav">
                                    <li class="active dropdown yamm-fw">
                                        <a style="background: #000; " href="index.php" data-hover="dropdown" class="dropdown-toggle">Home</a>

                                    </li>
                                    <li class="active dropdown yamm-fw">
                                        <a style="background: #000;" href="about-us.php" data-hover="dropdown" class="dropdown-toggle ">About Us</a>

                                    </li>
                                    <li class="active dropdown yamm-fw">
                                        <a href="contact-us.php" data-hover="dropdown" class="dropdown-toggle" style="background: #000;">Contact Us</a>
                                    </li>
                                    <li class="active dropdown yamm-fw">
                                        <a style="background: #000; " href="services.php" data-hover="dropdown" class="dropdown-toggle">Services</a>
                                    </li>
                                    <!-- Dropdown for Bicycle categories -->
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" id="bicycleDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: #000;">Bicycles</a>
                                        <div class="dropdown-menu" aria-labelledby="bicycleDropdown">
                                            <a class="dropdown-item" href="category.php?cid=4">All</a><br><br>
                                            <?php $sql = mysqli_query($con, "select id,subcategory from subcategory");
                                            while ($row = mysqli_fetch_array($sql)) {
                                            ?>

                                                <a href="sub-category.php?scid=<?php echo $row['id']; ?>" class="dropdown-item"> <?php echo $row['subcategory']; ?></a><br><br>

                                                <!-- <a href="category.php?cid=<?php echo $row['id']; ?>"> <?php echo $row['categoryName']; ?></a> -->

                                            <?php } ?>
                                        </div>
                                    </li>
                                    <li class="active dropdown yamm-fw">
                                        <a href="admin/" data-hover="dropdown" class="dropdown-toggle" style="background: #000;">Admin</a>

                                    </li>

                                    <?php if (strlen($_SESSION['login'])) {   ?>
                                        <li><a style="background: #000;" href="#"><i class="icon fa fa-user"></i><?php echo htmlentities($_SESSION['username']); ?></a></li>
                                    <?php } ?>

                                    <li><a style="background: #000;" href="my-account.php"><i class="icon fa fa-user" style="margin-left:150px"></i></a></li>
                                    <li><a style="background: #000;" href="my-wishlist.php"><i class="icon fa fa-heart"></i></a></li>
                                    <!-- <li><a href="my-cart.php"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li> -->
                                    <?php if (strlen($_SESSION['login']) == 0) {   ?>
                                        <li><a href="login.php"><i class="icon fa fa-sign-in"></i></a></li>
                                    <?php } else { ?>

                                        <li><a style="background: #000;" href="logout.php"><i class="icon fa fa-sign-out"></i></a></li>
                                    <?php } ?>
                                </ul>
                                <!-- /.navbar-nav -->
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </nav>
</body>

</html>