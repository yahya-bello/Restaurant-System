<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
        }
        body{
        display: flex;
        padding: 0 10px;
        min-height: 100vh;
        /*background: #0D6EFD;*/
        background: url(images/login_back.png);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        
        align-items: center;
        justify-content: center;
        } 
        ::selection{
           color: #fff;
           background: #0D6EFD;
        }
        .wrapper{
            width: 715px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 10px 10px 10px rgba(0,0,0,0.05);
        }
        .wrapper h1{
        font-size: 22px;
        font-weight: 600;
        padding: 20px 30px;
        border-bottom: 1px solid #ccc;
        }
        .wrapper form{
        margin: 35px 30px;
        }
        form .login-input{
        width: 100%;
        height: 100%;
        outline: none;
        padding: 15px 18px 15px 48px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin: 10px;

        }
        .button-area{
        margin: 25px 0;
        display: flex;
        align-items: center;
        }
        .button-area {
        color: #fff;
        border: none;
        outline: none;
        font-size: 18px;
        cursor: pointer;
        border-radius: 5px;
        padding: 13px 25px;
        background: #0D6EFD;
        transition: background 0.3s ease;
        }
        .button-area:hover{
        background: #025ce3;
        }
        .button-area span{
        font-size: 17px;
        margin-left: 30px;
        display: none;
        }
  </style>
</head>
<body>
    <div class="wrapper">
        <form class="form" action="" method="post">
            <h1 class="login-title">Send us Message</h1>
            <input type="text" class="login-input" name="name" placeholder="name" required />
            <input type="text" class="login-input" name="email" placeholder="Email Adress">
            <input type="text" class="login-input" name="phone" placeholder="phone_number">
            <textarea name="message" class="sms" cols="100" rows="7" placeholder="Your message"></textarea>
            <input type="submit" name="submit" value="Send" class="button-area">
        </form>
    </div>
<?php
    require('connectiondb.php');
    // When form submitted, insert values into the database.
    if (isset($_POST['submit'])) {
        $name = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($con, $name);
        $email= stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);
        $phone = stripslashes($_REQUEST['phone']);
        $phone = mysqli_real_escape_string($con, $phone);
        $message = stripslashes($_REQUEST['message']);
        $message = mysqli_real_escape_string($con, $message);

        $query    = "INSERT into `messages` (name, email, phone, message)
                     VALUES ('" . $name . "','" . $email ."','" . $phone . "','" . $message . "')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            header("Location: contactus.php");
        } else {
            echo "<div class='forms'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='contactus.php'>Send</a> again.</p>
                  </div>";
        }
    }
    ?>
</body>
</html>