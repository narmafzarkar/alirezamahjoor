<html>
<link href="Content/form.css" rel="stylesheet"/>
<?php include 'header.php' ?>

<body>

<div id="form">


    <div class="fish" id="fish"></div>
    <div class="fish" id="fish2"></div>

    <form id="waterform" action="#" method="post">

        <div class="formgroup" id="name-form">
            <label for="name">عنوان </label>
            <input type="text" id="name" name="title" />
        </div>

        <div class="formgroup" id="message-form">
            <label for="message">خلاصه </label>
            <textarea id="message" name="summary"></textarea>
        </div>

        <div class="formgroup" id="message-form">
            <label for="message">متن کامل خبر</label>
            <textarea id="message" name="text"></textarea>
        </div>
<div>
        <input type="submit" name="submit" value="ثبت خبر" />
</div>
        <?php
        $title=@$_POST['title'];
        $summary=@$_POST['summary'];
        $text=@$_POST['text'];
        if(isset($_POST['submit']))
$insert_query=mysqli_query($connect,"INSERT INTO t_news(title,summary,text)
VALUES('$title','$summary','$text')");
        print_r($insert_query);

        ?>
    </form>

</div>




</body>
</html>