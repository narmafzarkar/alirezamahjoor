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
                <option value="khabari">خبری</option>
                <option value="iran">---ایران</option>
                <option value="national">---بین الملل</option>
                <option value="ejtemaee">اجتماعی</option>
                <option value="varzeshi">ورزشی</option>
                <option value="valibal">---والیبال</option>
                <option value="footbal">---فوتبال</option>
                <option value="shatranj">---شطرنج</option>
                <option value="siasi">سیاسی</option>
                <option value="honari">هنری</option>
                <option value="eghtesadi">اقتصادی</option>
                <option value="boors">---بورس ایران</option>
                <option value="arz">---ارز</option>
            </select>
        </div>
        <div class="formgroup" id="name-form">
            <label for="category">نویسنده خبر </label>
            <select   name="category" >
                <option value="khabari">خبری</option>
            </select>
        </div>

        <div>
        <input type="submit" name="submit" value="ثبت خبر" />
</div>
        <?php
        $title=@$_POST['title'];
        $summary=@$_POST['summary'];
        $text=@$_POST['text'];
        $category=@$_POST['category'];
        switch($category)
        {
            case "khabari":
                $cat_id=1;break;
            case "ejtemaee":
                $cat_id=2;break;
            case "varzeshi":
                $cat_id=3;break;
            case "siasi":
                $cat_id=4;break;
            case "honari":
                $cat_id=5;break;
            case "eghtesadi":
                $cat_id=6;break;
            case "valibal":
                $cat_id=7;break;
            case "footbal":
                $cat_id=8;break;
            case "shatranj":
                $cat_id=9;break;
            case "iran":
                $cat_id=10;break;
            case "national":
                $cat_id=11;break;
            case "boors":
                $cat_id=12;break;
            case "arz":
                $cat_id=13;break;
        }

        if(isset($_POST['submit']))
$insert_query=mysqli_query($connect,"INSERT INTO t_news(title,summary,text,id_cat)
VALUES('$title','$summary','$text','$cat_id')");


        ?>
    </form>

</div>




</body>
</html>