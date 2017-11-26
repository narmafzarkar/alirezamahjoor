<?php
include 'header.php';
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
            <h3>ورود به حساب کاربری</h3>


            <div  class="right-posts auab-right-posts">
                <div class="informations clearfix">
                    <div class="left-inf">

                        <form  action="#" method="post">
                            <div class="inputs">
                                <input type="text" name="username" value="" placeholder="نام کاربری :">
                                <input type="password" name="password" value="" placeholder="رمز ورود :">
                                <input type="submit" name="submit" value="ورود" class="hide-btn">

                            </div>
<!--                             <input type="submit" name="submit" value="ورود" class="hide-btn">-->
                        </form>

                    </div>

<?php
if(isset($_POST['submit']))
{
    if (empty($_POST['username']) AND empty($_POST['password']))
        echo "لطفا نام کاربری و پسورد را وارد کنید";
    else {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $submit=$_POST['submit'];
        $query = mysqli_query($connect, "SELECT username,password FROM t_user WHERE 
                                            username='$username' AND password='$password'");

        $count = mysqli_num_rows($query);
        if ($count >= 1) {
            $_SESSION['user'] = $username;
            header("location: index.php");
        }
        else
            echo "نام کاربری یا رمز عبور اشتباه هست.";
    }


}

?>












                </div>
            </div>
</section>

</body>
</html>








