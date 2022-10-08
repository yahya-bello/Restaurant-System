<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <style>
        * {
            margin: 0 0;
            padding: 0 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            width: 40%;
            margin: 0 auto;
        }

        .food-search {
            background-image: url(images/order_back.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            padding: 1% 0;
            color: white;
        }

        .food-search input[type="search"] {
            width: 50%;
            padding: 1%;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
        }

        .order {
            width: 50%;
            margin: 0 auto;
        }

        .input-responsive {
            width: 96%;
            padding: 1%;
            margin-bottom: 3%;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
        }

        .order-label {
            margin-bottom: 1%;
            font-weight: bold;
        }

        .text-center {
            text-align: center;
        }

        .text-left {
            text-align: left;
        }

        .text-white {
            color: white;
        }

        .food-menu-img {
            width: 20%;
            float: left;
        }

        .food-menu-desc {
            width: 70%;
            float: left;
            margin-left: 8%;
        }

        food-price {
            font-size: 1.2rem;
            margin: 2% 0;
        }

        .food-detail {
            font-size: 1rem;
            color: #747d8c;
        }

        .order {
            width: 100%;
        }

        fieldset {
            border: 1px solid white;
            margin: 5%;
            padding: 3%;
            border-radius: 5px;
        }

        .float-container {
            position: relative;
        }

        .img-responsive {
            width: 135%;
        }

        .img-curve {
            border-radius: 15px;
        }

        .input-responsive {
            width: 96%;
            padding: 1%;
            margin-bottom: 3%;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
        }
        .btn {
            padding: 1%;
            border: none;
            font-size: 1rem;
            border-radius: 5px;
        }
        .btn-primary {
            background-color: #ff6b81;
            color: white;
            cursor: pointer;
        }
        .btn-primary:hover {
            color: white;
            background-color: #ff4757;
        }
    </style>
</head>

<body> 
    <?php
        include "connectiondb.php";
        if(isset($_GET['food_id']))
        {
            $food_id = $_GET['food_id'];
            $sql = "SELECT * FROM pizza WHERE id = $food_id";
            $result = mysqli_query($con, $sql);
            $count = mysqli_num_rows($result);
            if($count==1)
            {
                $row = mysqli_fetch_assoc($result);
                $title = $row['title'];
                $price = $row['price'];
                $image_name = $row['img_name']; 
            }
        }
        else{
            header("Location: Pizza.php");
        }
    ?>
    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container">

            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="#" class="order">
                <fieldset>
                    <legend>Selected Food</legend>

                    <div class="food-menu-img">
                        <?php
                        if($image_name == "")
                        {
                            echo "<div class = 'error'> image not found. </div>";
                        }
                        else
                        { 
                            ?>
                             <img src="images/<?php echo $image_name; ?>"  alt="alter" class="img-responsive img-curve">
                            <?php
                        }
                        ?>
                        
                    </div>

                    <div class="food-menu-desc">
                        <h3><?php echo $title ?></h3>
                        <p class="food-price">$<?php echo $price ?></p>
                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>

                    </div>

                </fieldset>

                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name"  class="input-responsive"required>
                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact"  class="input-responsive" required>
                    <div class="order-label">Email</div>
                    <input type="email" name="email" class="input-responsive" required>
                    <div class="order-label">Address</div>
                    <textarea name="address" rows="3" class="input-responsive" required></textarea>
                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>

        </div>
    </section>
</body>

</html>