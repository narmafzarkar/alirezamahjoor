<html>
<!--<link href="Content/form.css" rel="stylesheet"/>-->
<?php include 'header.php' ?>

<body>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
فرم ثبت خبر        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="col-lg-12 connectedSortable">
                    <div class="box box-info">
                        <form action="#" method="post">
                            <input name="__RequestVerificationToken" type="hidden" value="P-atNtfo9AX6JSBUmgpKSnvuHdLzQ_gbeNH5fEZCbidkNkKadZIV-Dri5S9ZH2y2sYG1lSCx1T6QZ37HptX_ZDYJyRg5HzR2W7RsbrQyRDwxK5PNMBvPCboSHR0_ocosV6MG5JmZ3iz8j1gnCHW9PQ2" /> <div class="box-header">
                                <i class="fa fa-envelope"></i>
                                <h3 class="box-title">ثبت خبر جدید</h3>
                            </div>
                            <div class="box-body">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label class="control-label col-md-2" for="Title">عنوان </label>
                                        <div class="col-md-10">
                                            <input class="form-control text-box single-line" data-val="true" data-val-length="طول عنوان تیکت بایست 550 و حداکثر 550 حرف باشد" data-val-length-max="550" data-val-required="پر کردن فیلد &#39;عنوان تیکت&#39; الزامیست." id="Title" name="title" placeholder="عنوان اصلی" type="text" value="" />
                                            <span class="field-validation-valid text-danger" data-valmsg-for="Title" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-2" for="Note">خلاصه خبر</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control text-box multi-line" data-val="true" data-val-length="طول سوال یا مشکل بایست 1550 و حداکثر 1550 حرف باشد" data-val-length-max="1550" data-val-required="پر کردن فیلد &#39;خلاصه خبر&#39; الزامیست." id="Note" name="summary" placeholder="خلاصه خبر را حداکثر در 300 کاراکتر در اینجا بنویسید" rows="2"></textarea>
                                            <span class="field-validation-valid text-danger" data-valmsg-for="Note" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2" for="Note">متن کامل خبر</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control text-box multi-line" data-val="true" data-val-length="طول سوال یا مشکل بایست 1550 و حداکثر 1550 حرف باشد" data-val-length-max="1550" data-val-required="پر کردن فیلد &#39;متن کامل خبر&#39; الزامیست." id="Note" name="text" placeholder="متن کامل خبر را در اینجا قرار دهید بدون محدودیت کاراکتر" rows="15"></textarea>
                                            <span class="field-validation-valid text-danger" data-valmsg-for="Note" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2" for="Section">دسته خبر</label>
                                        <div class="col-md-10">
                                            <select class="form-control" data-val="true" data-val-required="پر کردن فیلد &#39;دسته خبر&#39; الزامیست." id="Section" name="category">
                                                <?php
                                                $category_query=mysqli_query($connect,"SELECT id,title FROM t_category");
                                                $category=mysqli_fetch_all($category_query,MYSQLI_ASSOC);
                                                foreach ($category as $item1){
                                                    ?>
                                                    <option value="<?php echo $item1['id'] ?>"><?php echo $item1['title'] ?> </option>
                                                <?php } ?>

                                            </select>
                                            <span class="field-validation-valid text-danger" data-valmsg-for="Section" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2" for="Section">نویسنده خبر</label>
                                        <div class="col-md-10">
                                            <select class="form-control" data-val="true" data-val-required="پر کردن فیلد &#39;نویسنده&#39; الزامیست." id="Section" name="author">
                                                <?php
                                                $author_query=mysqli_query($connect,"SELECT t_user.id,fullname FROM t_user");
                                                $author=mysqli_fetch_all($author_query,MYSQLI_ASSOC);

                                                foreach ($author as $item){
                                                    ?>

                                                    <option value="<?php echo $item['id']; ?>"><?php echo $item['fullname']; ?></option>
                                                <?php } ?>

                                            </select>
                                            <span class="field-validation-valid text-danger" data-valmsg-for="Section" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer clearfix">
                                <div class="col-md-10 col-md-offset-2">
                                    <button type="submit" class="btn btn-labeled bg-orange-active" name="submit"> <i class="fa fa-send"></i> ارسال</button>
                                </div>
                            </div>
                            <?php

                            $title=@$_POST['title'];
                            $summary=@$_POST['summary'];
                            $text=@$_POST['text'];
                            $cat_id=@$_POST['category'];
                            $user_id=@$_POST['author'];
                            echo "<br>";
                            print_r($_POST['category']);
                            echo "<br>";
                            print_r($_POST['author']);


                            if(isset($_POST['submit']))
                                $insert_query=mysqli_query($connect,"INSERT INTO t_news(title,summary,text,id_cat,user_id)
VALUES('$title','$summary','$text','$cat_id','$user_id')");


                            ?>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

</body>
</html>