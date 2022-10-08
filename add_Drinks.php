<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background: url(images/add_back.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        .forms {
            margin: 50px auto;
            width: 450px;
            padding: 30px 25px;
            background: white;
        }

        .add-button {
            color: #fff;
            background: #55a1ff;
            border: 0;
            outline: 0;
            width: 100%;
            height: 50px;
            font-size: 16px;
            cursor: pointer;
        }

        .input {
            font-size: 15px;
            border: 1px solid #ccc;
            padding: 8px;
            margin-bottom: 25px;
            height: 20px;
            width: calc(100% - 23px);
        }

        .cat_foods {
            margin-bottom: 25px;
            padding: 10px;
            width: calc(100% - 8px);
        }
    </style>
</head>

<body>
    <?php
    if (isset($_POST['upload'])) {
        echo $_SESSION['upload'];
        unset($_SESSION['upload']);
    }
    ?>
    <div class='content'>
        <div class='forms'>
            <h1>Add Foods</h1> <br> <br>
            <form action="" method="POST" enctype="multipart/form-data">
                <table class="tab">
                    <tr>
                        <td>
                            <h2>Title</h2>
                        </td>
                        <td> <input type="text" class="input" name='title'> </td>
                    </tr>
                    <tr>
                        <td>
                            <h2> Description</h2>
                        </td>
                        <td> <textarea name="description" class="input" cols="30" rows="5"></textarea> </td>
                    </tr>
                    <tr>
                        <td>
                            <h2>Price</h2>
                        </td>
                        <td> <input type="number" class="input" name='price'> </td>
                    </tr>
                    <tr>
                        <td>
                            <h2>Select image</h2>
                        </td>
                        <td> <input type="file" name='image' class="input"> </td>
                    </tr>
                    <tr>
                        <td>
                            <h2>Type_foods</h2>
                        </td>
                        <td><input type="text" class="input" name='type_foods'></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Add Foods" class="add-button" /></td>
                    </tr>

                </table>
            </form>
            <?php
            include "connectiondb.php";
            if (isset($_POST['submit'])) {
                $title = $_POST['title'];
                $title = mysqli_real_escape_string($con, $title);
                $description = $_POST['description'];
                $description = mysqli_real_escape_string($con, $description);
                $price = $_POST['price'];
                $type_foods = $_POST['type_foods'];
                $type_foods = mysqli_real_escape_string($con, $type_foods);

                
                if(isset($_FILES['image'])){
                    $errors= array();
                    $file_name = $_FILES['image']['name'];
                    $file_size =$_FILES['image']['size'];
                    $file_tmp =$_FILES['image']['tmp_name'];
                    $file_type=$_FILES['image']['type'];
                    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
                    
                    $extensions= array("jpeg","jpg","png");
                    
                    if(in_array($file_ext,$extensions)=== false){
                        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
                    }
                    
                    if($file_size > 2097152){
                        $errors[]='File size must be excately 2 MB';
                    }
                    
                    if(empty($errors)==true){
                        move_uploaded_file($file_tmp,"images/foods_img".$file_name);
                        header("Location: Drinks.php");
                    }else{
                        print_r($errors);
                    }
                }

                // if (isset($_FILES['image']['name'])) {

                //     $imagename = $_FILES['image']['name'];

                //     if ($imagename!="") {
                        
                //         $ext = end(explode( '.', $imagename));

                //         $image_name = "food_img_".".".$ext;
                        
                //         $src = $_FILES['image']['tmp_name'];
                //         $src = mysqli_real_escape_string($con, $src);
                //         $des = "/images/foods_img".$imagename;
                //         $upload = move_uploaded_file($src, $des);
                //         if ($upload == false) {
                //             $_SESSION['upload'] = "fail to upload Image";
                //             die();
                //         }
                //     }
                // } else {
                //     $imagename = "";
                // }

                $query    = "INSERT into `drinks` (title, description, price, img_name, type_foods)
                VALUES ('" . $title . "','" . $description . "','" .$price . "','" . $file_name . "','" . $type_foods . "')";

                $res = mysqli_query($con, $query);
                if ($res == true) {
                    $_SESSION['add'] = "added foods successfully";
                } else {
                    $_SESSION['add'] = "fail added foods successfully";
                }
            }
            ?>

        </div>
    </div>
</body>

</html>