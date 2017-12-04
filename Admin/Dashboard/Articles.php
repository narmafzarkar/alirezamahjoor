﻿<?php include 'header.php' ?>
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    داشبورد
                </h1>
            </section>

            <section class="content">
            <div class="row">
                <div class="col-xs-12">

                    <div class="box box-info">
                        <div class="box-header with-border ui-sortable-handle" style="cursor: move;">
                            <br>
                            <a class="btn btn-info" href="news-page.php"> نوشتن خبر جدید </a>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">


                               
                                <table class="table no-margin">
                                    <thead>
                                        <tr>
                                            <th>

                                                <input class="ckbox" type="checkbox" value="">

                                            </th>
                                            <th>
                                                عنوان
                                            </th>
                                            <th>
                                               نام نویسنده
                                            </th>
                                            <th>
                                               تاریخ ایجاد
                                            </th>
                                            <th>

                                               دسته بندی
                                            </th>
                                            <th>
                                                چکیده
                                            </th>
                                            <th>
                                               عکس
                                            </th>
                                            <th>

                                                وضعیت
                                            </th>
                                            <th>نمایش</th>
                                            <th>ویرایش</th>
                                            <th>حذف</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
$news_query=mysqli_query($connect,"SELECT * FROM t_news ORDER BY id DESC ");
$news=mysqli_fetch_all($news_query,MYSQLI_ASSOC);

foreach ($news as $item){
?>
                                        <tr>
                                            <td>

                                                <input type="checkbox" value="">
                                            </td>
                                            <td class="col-md-3">
<?php echo $item['title']; ?>
                                            </td>
                                            <td class="col-md-1">
                                                <a href="#">
                                                <?php
                                                $user_id=$item['user_id'];
$user_query=mysqli_query($connect,"SELECT fullname FROM t_user INNER JOIN t_news ON '$user_id'=t_user.id");
$user=mysqli_fetch_assoc($user_query);

echo $user['fullname'];

                                                ?>
                                                </a>
                                            </td>
                                            <td class="col-md-2">
<?php echo jdate('Y/m/d',strtotime($item['create_time'])); ?>
                                            </td>
                                            <td class="col-md-1">
                                                <a href="#">
                                                    <?php
                                                    $id_cat=$item['id_cat'];
$cat_query=mysqli_query($connect,"SELECT t_category.title FROM t_category INNER JOIN t_news ON 
                  t_category.id=$id_cat");
$cat=mysqli_fetch_assoc($cat_query);
echo $cat['title'];



                                                    ?>

                                                </a>
                                            </td>

                                            <td class="col-md-4">
<?php echo $item['summary']; ?>
                                            </td>
                                            <td class="col-md-1">
                                                <img class="img-responsive img-thumbnail" src="Images/default-50x50.gif">
                                            </td>
                                            <td class="col-md-1">

                                               
                                                <span class="label label-success">منتشر شده</span>
                                               
                                               
                                            </td>
                                            <th>
                                                <a class="btn btn-info btn-sm glyphicon glyphicon-zoom-in" href="@Url.Action(MVC.Article.ArticleDetail(item.Id,item.NewsTitle))"></a>
                                            </th>
                                            <th>
                                                <a class="btn btn-info btn-sm glyphicon glyphicon-edit" href="@Url.Action(MVC.CpAdmin.News.Edit(item.Id))"></a>
                                            </th>
                                            <th>
                                                <a class="btn btn-danger btn-sm" href="@Url.Action(MVC.CpAdmin.News.Delete(item.Id))">×</a>
                                            </th>
                                        </tr>

<?php } ?>

                                    </tbody>
                                </table>


                            


                            </div>
                        </div>
                    </div>
                </div>
            </div>
                </section>


                                </div>
                            </div>

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <a href="#">لورم</a> &copy; 2015-2016
            </div>
            <div class="pull-left">
                <ul class="social list-unstyled list-inline" itemscope itemtype="http://schema.org/Organization">
                    <li><a itemprop="sameAs" target="_blank" href="//www.facebook.com/#" title="# facebook fanpage"><i class="fa fa-facebook"></i><span class="sr-only">سبوک </span></a></li>
                    <li><a itemprop="sameAs" target="_blank" href="//twitter.com/#"><i class="fa fa-twitter" title="# twitter"></i><span class="sr-only">توئیتر </span></a></li>
                    <li><a itemprop="sameAs" target="_blank" href="//www.google.com/#" rel="publisher" title="# google plus"><i class="fa fa-google-plus"></i><span class="sr-only">گوگل پلاس </span></a></li>
                    <li><a itemprop="sameAs" target="_blank" href="//www.linkedin.com/company/#" title="# linkedin page"><i class="fa fa-linkedin"></i><span class="sr-only">لینکداین </span></a></li>
                    <li><a itemprop="sameAs" target="_blank" href="//instagram.com/#?ref=badge" title="# instagram"><i class="fa fa-instagram"><span class="sr-only">اینستاگرام </span></i></a></li>
                    <li><a target="_blank" href="#" title="# feed"><i class="fa fa-rss"></i><span class="sr-only">اشتراک فید </span></a></li>
                    <li class="hidden"><a itemprop="url" href="#">لورم</a></li>
                </ul>
            </div>
        </footer>
        <div class="control-sidebar-bg"></div>
<script src="Scripts/jquery.min.js"></script>
    <script src="Scripts/bootstrap.rtl.min.js"></script>
    <script src="Scripts/panel.js"></script>

   
</body>
</html>