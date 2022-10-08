<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Registration</title>
    <style>
        body {
            background: url(images/regis.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        .form {
            margin: 50px auto;
            width: 300px;
            padding: 30px 25px;
            background: white;
        }

        h1.login-title {
            color: #666;
            margin: 0px auto 25px;
            font-size: 25px;
            font-weight: 300;
            text-align: center;
        }

        .login-input {
            font-size: 15px;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 25px;
            height: 25px;
            width: calc(100% - 23px);
        }

        .login-input:focus {
            border-color: #6e8095;
            outline: none;
        }

        .login-button {
            color: #fff;
            background: #55a1ff;
            border: 0;
            outline: 0;
            width: 100%;
            height: 50px;
            font-size: 16px;
            text-align: center;
            cursor: pointer;
        }

        .link {
            color: #666;
            font-size: 15px;
            text-align: center;
            margin-bottom: 0px;
        }

        .link a {
            color: #666;
        }

        h3 {
            font-weight: normal;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    require('connectiondb.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $Password = mysqli_real_escape_string($con, $password);
        $email_add = stripslashes($_REQUEST['email_add']);
        $email_add = mysqli_real_escape_string($con, $email_add);
        $phone_number = stripslashes($_REQUEST['phone_number']);
        $phone_number = mysqli_real_escape_string($con, $phone_number);

        $query    = "INSERT into `user` (username, password, email_add, phone_number)
                     VALUES ('" . $username . "','" . $password . "','" . $email_add . "','" . $phone_number . "')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='Login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='Registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
    ?>
        <form class="form" action="" method="post">
            <h1 class="login-title">Registration</h1>
            <input type="text" class="login-input" name="username" placeholder="Username" required />
            <input type="password" class="login-input" name="password" placeholder="Password">
            <input type="text" class="login-input" name="email_add" placeholder="Email Adress">
            <input type="text" class="login-input" name="phone_number" placeholder="phone_number">
            <input type="submit" name="submit" value="Register" class="login-button">
        </form>
    <?php
    }
    ?>
</body>

</html>