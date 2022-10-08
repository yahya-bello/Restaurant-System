<!DOCTYPE html>
<head>
    <title>

    </title>
    <style>
        body{
            background-image: url(images/restaurant-interior.jpg);
        }
    </style>
</head>
<body>
    
</body>
</html>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasta_PART</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/b570e6912d.js" crossorigin="anonymous"></script>
</head>

<body>
    <section class="Menu">

        <div class="cont"> <br>
            <h2 class="tocentertext"> HERE YOU CAN EXPLORE DIFFERENT TYPES OF PIZZA </h2>
            <br>
            <?php

            include "connectiondb.php";
            $sql = "SELECT * from pasta";
            $result = mysqli_query($con, $sql);
            $rows = mysqli_num_rows($result);
            if ($rows > 0) {
                while ($rows = mysqli_fetch_assoc($result)) {
                    $id = $rows['id'];
                    $title = $rows['title'];
                    $description = $rows['description'];
                    $price = $rows['price'];
                    $image_name = $rows['img_name'];
            ?>

                    <div class="Menu1">
                        <div class="Menu1img">
                            <?php
                            if ($image_name == "") {
                                echo "<div class = 'error'> image not found. </div>";
                            } else {
                            ?>
                                <img src="images/<?php echo $image_name; ?>" alt=" Cheese Pizza" class="Menu1imgg imagecurve">
                        </div>
                    <?php
                            }
                    ?>

                    <div class="Menu1descr">
                        <h4><?php echo $title; ?></h4>
                        <p class="Menu1price"><?php echo $price; ?></p>
                        <p class="Menu1details"><?php echo $description; ?> </p>
                        <br>
                        <a href="order.php?food_id=<?php echo $id; ?>" class="fai faid">Order now</a>
                    </div>
                    </div>
        </div>

        <?php

            }

            } 
            else {
                echo "<div class = 'error'> image not found. </div>";
            }
        ?>
<!-- <div class="Menu1 ">
                <div class="Menu1img"> <img src="images/Prosciutto e funghi.jpg" alt="Prosciutto e funghi" class="Menu1imgg imagecurve"></div>
                <div class="Menu1descr">
                    <h4>Prosciutto e funghi</h4>
                    <p class="Menu1price"> $10</p>
                    <p class="Menu1details">
                        Topped with tomato sauce, mozzarella, thin slices of prosciutto cotto, and mushrooms </p>
                    <br>
                    <a href="#" class="fai faid">Order now</a>
                </div>
            </div>

            <div class="Menu1 ">
                <div class="Menu1img"> <img src="images/Pepperoni Pizza.jpg" alt=" Cheese Pizza" class="Menu1imgg imagecurve"></div>
                <div class="Menu1descr">
                    <h4>Pepperoni Pizza</h4>
                    <p class="Menu1price"> $6</p>
                    <p class="Menu1details">
                        prepared simply with mozzarella, tomato sauce, and pepperoni.</p>
                    <br>
                    <a href="#" class="fai faid">Order now</a>
                </div>
            </div>


            <div class="Menu1 ">
                <div class="Menu1img"> <img src="images/Stuffed Pizza.jpg" alt=" Cheese Pizza" class="Menu1imgg imagecurve"></div>
                <div class="Menu1descr">
                    <h4>Stuffed Pizza</h4>
                    <p class="Menu1price"> $7</p>
                    <p class="Menu1details">
                        with tomato sauce before it's baked to perfection. </p>
                    <br>
                    <a href="#" class="fai faid">Order now</a>
                </div>
            </div>
            <div class="Menu1 ">
                <div class="Menu1img"> <img src="images/Pizza al padellino.jpg" alt=" Cheese Pizza" class="Menu1imgg imagecurve"></div>
                <div class="Menu1descr">
                    <h4>Pizza al padellino</h4>
                    <p class="Menu1price"> $8</p>
                    <p class="Menu1details">
                        from ham and cheese to bell peppers and prosciutto. </p>
                    <br>
                    <a href="#" class="fai faid">Order now</a>
                </div>
            </div>
            <div class="Menu1 ">
                <div class="Menu1img"> <img src="images/Margherita Pizza.jpg" alt=" Cheese Pizza" class="Menu1imgg imagecurve"></div>
                <div class="Menu1descr">
                    <h4>Margherita Pizza</h4>
                    <p class="Menu1price"> $9</p>
                    <p class="Menu1details">
                        has thin crust, fresh tomato sauce, fresh mozzarella cheese </p>
                    <br>
                    <a href="#" class="fai faid">Order now</a>
                </div>
            </div>
            <div class="Menu1 ">
                <div class="Menu1img"> <img src="images/Chicken Pizza.jpg" alt=" Cheese Pizza" class="Menu1imgg imagecurve"></div>
                <div class="Menu1descr">
                    <h4>Chicken Pizza</h4>
                    <p class="Menu1price"> $5</p>
                    <p class="Menu1details">
                        Made with use an equal mixture of smoky barbecue and tomato sauces. </p>
                    <br>
                    <a href="#" class="fai faid">Order now</a>
                </div>
            </div>
            <div class="Menu1 ">
                <div class="Menu1img"> <img src="images/Stromboli.jpg" alt=" Cheese Pizza" class="Menu1imgg imagecurve"></div>
                <div class="Menu1descr">
                    <h4>Stromboli</h4>
                    <p class="Menu1price"> $10</p>
                    <p class="Menu1details">
                        Made with chicken,sauce, and vegetables etc... </p>
                    <br>
                    <a href="#" class="fai faid">Order now</a>
                </div>
            </div> -->

<div class=" tofixflotingpb"></div>

</div>
    </section>
    <section class="footer">
        <div class="row">
            <div class="coloum">
                <img src="images/lecamerteam.jpg" class="lecamerteam" alt="teamlogo">
                <p>Le camer team is a groug of fours engenering students that are trying to develope some projets to improve thier cv/resume
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure,.
                </p>
            </div>
            <div class="coloum">
                <h6>Our Office <div class="underL"><span></span></div>
                </h6>
                <p>IUT </p>
                <p>Board Bazar, Gazipur </p>
                <p> Dkaha,1704, Bangladesh </p>
                <p class="emailadd">faissalhamadou656@gmail.com</p>
                <h5>+880 - 1643395719</h5>
            </div>
            <div class="coloum">
                <h6>Links <div class="underL"><span></span></div>
                </h6>
                </h6>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Features</a></li>
                    <li><a href="">Contacts</a></li>
                </ul>
            </div>
            <div class="coloum">
                <h6>Newsletter <div class="underL"><span></span></div>
                </h6>
                </h6>
                <form>
                    <i class="far fa-envelope"></i>
                    <input type="email" placeholder="Please enter your email id" required>
                    <button type="submit"> <i class="fas fa-arrow-right"></i></button>
                </form>
                <div class="oursocailmedia">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-whatsapp"></i>
                </div>
            </div>

        </div>
        <hr>
        <p class="copyr"> Le Camer Team 2021 - All Rights Reserved to them</p>


        <!-- <div class="cont">
            <p>This project was Designed By <a href="#">Le Camer group</a></p>
         </div> -->
    </section>
</body>

</html>




for drinks :
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drinks_PART</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/b570e6912d.js" crossorigin="anonymous"></script>
</head>

<body>
    <section class="Menu">

        <div class="cont"> <br>
            <h2 class="tocentertext"> HERE YOU CAN EXPLORE DIFFERENT TYPES OF PIZZA </h2>
            <br>
            <?php

            include "connectiondb.php";
            $sql = "SELECT * from drinks";
            $result = mysqli_query($con, $sql);
            $rows = mysqli_num_rows($result);
            if ($rows > 0) {
                while ($rows = mysqli_fetch_assoc($result)) {
                    $id = $rows['id'];
                    $title = $rows['title'];
                    $description = $rows['description'];
                    $price = $rows['price'];
                    $image_name = $rows['img_name'];
            ?>

                    <div class="Menu1">
                        <div class="Menu1img">
                            <?php
                            if ($image_name == "") {
                                echo "<div class = 'error'> image not found. </div>";
                            } else {
                            ?>
                                <img src="images/<?php echo $image_name; ?>" alt=" Cheese Pizza" class="Menu1imgg imagecurve">
                        </div>
                    <?php
                            }
                    ?>

                    <div class="Menu1descr">
                        <h4><?php echo $title; ?></h4>
                        <p class="Menu1price"><?php echo $price; ?></p>
                        <p class="Menu1details"><?php echo $description; ?> </p>
                        <br>
                        <a href="order.php?food_id=<?php echo $id; ?>" class="fai faid">Order now</a>
                    </div>
                    </div>
        </div>

        <?php

            }

            } 
            else {
                echo "<div class = 'error'> image not found. </div>";
            }
        ?>
<!-- <div class="Menu1 ">
                <div class="Menu1img"> <img src="images/Prosciutto e funghi.jpg" alt="Prosciutto e funghi" class="Menu1imgg imagecurve"></div>
                <div class="Menu1descr">
                    <h4>Prosciutto e funghi</h4>
                    <p class="Menu1price"> $10</p>
                    <p class="Menu1details">
                        Topped with tomato sauce, mozzarella, thin slices of prosciutto cotto, and mushrooms </p>
                    <br>
                    <a href="#" class="fai faid">Order now</a>
                </div>
            </div>

            <div class="Menu1 ">
                <div class="Menu1img"> <img src="images/Pepperoni Pizza.jpg" alt=" Cheese Pizza" class="Menu1imgg imagecurve"></div>
                <div class="Menu1descr">
                    <h4>Pepperoni Pizza</h4>
                    <p class="Menu1price"> $6</p>
                    <p class="Menu1details">
                        prepared simply with mozzarella, tomato sauce, and pepperoni.</p>
                    <br>
                    <a href="#" class="fai faid">Order now</a>
                </div>
            </div>


            <div class="Menu1 ">
                <div class="Menu1img"> <img src="images/Stuffed Pizza.jpg" alt=" Cheese Pizza" class="Menu1imgg imagecurve"></div>
                <div class="Menu1descr">
                    <h4>Stuffed Pizza</h4>
                    <p class="Menu1price"> $7</p>
                    <p class="Menu1details">
                        with tomato sauce before it's baked to perfection. </p>
                    <br>
                    <a href="#" class="fai faid">Order now</a>
                </div>
            </div>
            <div class="Menu1 ">
                <div class="Menu1img"> <img src="images/Pizza al padellino.jpg" alt=" Cheese Pizza" class="Menu1imgg imagecurve"></div>
                <div class="Menu1descr">
                    <h4>Pizza al padellino</h4>
                    <p class="Menu1price"> $8</p>
                    <p class="Menu1details">
                        from ham and cheese to bell peppers and prosciutto. </p>
                    <br>
                    <a href="#" class="fai faid">Order now</a>
                </div>
            </div>
            <div class="Menu1 ">
                <div class="Menu1img"> <img src="images/Margherita Pizza.jpg" alt=" Cheese Pizza" class="Menu1imgg imagecurve"></div>
                <div class="Menu1descr">
                    <h4>Margherita Pizza</h4>
                    <p class="Menu1price"> $9</p>
                    <p class="Menu1details">
                        has thin crust, fresh tomato sauce, fresh mozzarella cheese </p>
                    <br>
                    <a href="#" class="fai faid">Order now</a>
                </div>
            </div>
            <div class="Menu1 ">
                <div class="Menu1img"> <img src="images/Chicken Pizza.jpg" alt=" Cheese Pizza" class="Menu1imgg imagecurve"></div>
                <div class="Menu1descr">
                    <h4>Chicken Pizza</h4>
                    <p class="Menu1price"> $5</p>
                    <p class="Menu1details">
                        Made with use an equal mixture of smoky barbecue and tomato sauces. </p>
                    <br>
                    <a href="#" class="fai faid">Order now</a>
                </div>
            </div>
            <div class="Menu1 ">
                <div class="Menu1img"> <img src="images/Stromboli.jpg" alt=" Cheese Pizza" class="Menu1imgg imagecurve"></div>
                <div class="Menu1descr">
                    <h4>Stromboli</h4>
                    <p class="Menu1price"> $10</p>
                    <p class="Menu1details">
                        Made with chicken,sauce, and vegetables etc... </p>
                    <br>
                    <a href="#" class="fai faid">Order now</a>
                </div>
            </div> -->

<div class=" tofixflotingpb"></div>

</div>
    </section>
    <section class="footer">
        <div class="row">
            <div class="coloum">
                <img src="images/lecamerteam.jpg" class="lecamerteam" alt="teamlogo">
                <p>Le camer team is a groug of fours engenering students that are trying to develope some projets to improve thier cv/resume
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure,.
                </p>
            </div>
            <div class="coloum">
                <h6>Our Office <div class="underL"><span></span></div>
                </h6>
                <p>IUT </p>
                <p>Board Bazar, Gazipur </p>
                <p> Dkaha,1704, Bangladesh </p>
                <p class="emailadd">faissalhamadou656@gmail.com</p>
                <h5>+880 - 1643395719</h5>
            </div>
            <div class="coloum">
                <h6>Links <div class="underL"><span></span></div>
                </h6>
                </h6>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Features</a></li>
                    <li><a href="">Contacts</a></li>
                </ul>
            </div>
            <div class="coloum">
                <h6>Newsletter <div class="underL"><span></span></div>
                </h6>
                </h6>
                <form>
                    <i class="far fa-envelope"></i>
                    <input type="email" placeholder="Please enter your email id" required>
                    <button type="submit"> <i class="fas fa-arrow-right"></i></button>
                </form>
                <div class="oursocailmedia">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-whatsapp"></i>
                </div>
            </div>

        </div>
        <hr>
        <p class="copyr"> Le Camer Team 2021 - All Rights Reserved to them</p>


        <!-- <div class="cont">
            <p>This project was Designed By <a href="#">Le Camer group</a></p>
         </div> -->
    </section>
</body>

</html>