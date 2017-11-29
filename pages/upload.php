<?php
include 'header.php';

?>
<!DOCTYPE html>
<html>
<body>

<section>
    <div class="wrapper">
        <div class="contact-us">
            <h3>آپلود تصویر</h3>


            <div  class="right-posts auab-right-posts">
                <div class="informations clearfix">
                    <div class="left-inf">

                        <form action="#" method="POST" enctype="multipart/form-data">
                            <div class="inputs">
                               انتخاب تصویر برای آپلود:
                                <input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
                                <input type="file" name="pictures" accept="image/*"/>
                                <input type="submit" name="submit" value="آپلود عکس"/>

                            </div>

                        </form>

                    </div>

                    <?php
                    if(isset($_POST['submit']))
                    {
                        $image = new Bulletproof\Image($_FILES);

                        $image->setName("upload".rand(1,100))
                            ->setLocation("upload");
                        $image->setSize(1,1000000);

                        if($image["pictures"]){
                            if($image->upload()){
                                echo $image->getName(); // samayo
                                echo $image->getMime(); // gif
                                echo $image->getLocation(); // avatars
                                echo $image->getFullPath(); // avatars/samayo.gif
                            }
                            else
                                echo $image['error'];
                        }
                        else echo "if biruni";


                    }
                    ?>


                </div>
            </div>
</section>









</body>
</html>
