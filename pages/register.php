<?php
include 'header.php';
//}
//if (empty($_POST['username'] AND empty($_POST['password'])))
//    echo "شما نمی توانید نام کاربری یا رمز عبور را خالی بگذارید.";
//else {
//
//
//}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<section>
    <div class="wrapper">
        <div class="contact-us">
            <h3>ثبت نام</h3>


            <div  class="right-posts auab-right-posts">
                <div class="informations clearfix">
                    <div class="left-inf">

                        <form  action="#" method="post">
                            <div class="inputs">
                                <input type="text" name="fullname" value="" placeholder="نام و نام خانوادگی :">
                                <input type="text" name="username" value="" placeholder="نام کاربری :">
                                <input type="password" name="password" value="" placeholder="رمز ورود :">
                                <input type="text" name="age" value="" placeholder="سن :">
                                <select  name="gender" class="select_opt" >
                                    <option value="male">مرد</option>
                                    <option value="female">زن</option>
                                <input type="submit" name="submit" value="ثبت نام" class="hide-btn">

                                </select>
                            </div>
<!--                            <input type="submit" name="submit" value="ثبت نام" class="hide-btn">-->
                        </form>

                    </div>

                    <?php
                    if(isset($_POST['submit'])) {
                        if (empty($_POST['username']) AND empty($_POST['password']))
                       echo 'لطفا نام کاربری و پسورد را وارد کنید.';
                        else {
                            $fullname = $_POST['fullname'];
                            $username = $_POST['username'];
                            $password = $_POST['password'];
                            $age = $_POST['age'];
                            $gender = $_POST['gender'];


                            //test tekrari naboodan username
                            $query1 = mysqli_query($connect, "SELECT username FROM t_user WHERE 
                                            username='$username' ");
                            $count = mysqli_num_rows($query1);
                            if ($count >= 1)
                                echo "نام کاربری وارد شده تکراری است";

                            else {
                                //vorood data dar database

                  $query = mysqli_query($connect, "INSERT INTO t_user(fullname,username,password,age,gender)
                      values('$fullname','$username','$password','$age','$gender')");
                           $_SESSION['user'] = $username;
                            header("location: index.php");
                            }
                        }
                    }
                    ?>
                </div>





            </div>
</section>

</body>
</html>








