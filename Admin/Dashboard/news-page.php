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
        <div class="formgroup" id="name-form">
            <label for="category">دسته خبر </label>
            <select   name="category" >

                <?php
                $category_query=mysqli_query($connect,"SELECT id,title FROM t_category");
                $category=mysqli_fetch_all($category_query,MYSQLI_ASSOC);
                foreach ($category as $item1){
                    ?>
                <option value="<?php $item1['id'] ?>"><?php echo $item1['title'] ?> </option>                <?php } ?>
            </select>
        </div>
        <label for="category">نویسنده خبر </label>

        <div class="formgroup" id="name-form">
            <select   name="author" >
                <?php
                $author_query=mysqli_query($connect,"SELECT fullname,id FROM t_user");
                $author=mysqli_fetch_all($author_query,MYSQLI_ASSOC);
                foreach ($author as $item){
                ?>

                <option value="<?php  $item['id']; ?>"><?php echo $item['fullname'],$item['id']; ?></option>
                <?php } ?>
            </select>

        </div>

        <div>
        <input type="submit" name="submit" value="ثبت خبر" />
</div>
        <?php

        $title=@$_POST['title'];
        $summary=@$_POST['summary'];
        $text=@$_POST['text'];
        $cat_id=@$_POST['category'];
        $user_id=@$_POST['author'];

        if(isset($_POST['submit']))
$insert_query=mysqli_query($connect,"INSERT INTO t_news(title,summary,text,id_cat,user_id)
VALUES('$title','$summary','$text','$cat_id','$user_id')");


        ?>
    </form>

</div>




</body>
</html>