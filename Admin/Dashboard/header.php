<?php include 'db.php';
include '../../asset/jdf/jdf.php';
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8" />
    <!--[if lt IE 9]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>داشبورد</title>
    <meta name="description" content="test" />
    <meta name="keywords" content="test" />
    <meta http-equiv="content-language" content="fa-IR" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="google" content="notranslate" />


    <link href="Content/panel.css" rel="stylesheet" />
    <link href="Content/font.css" rel="stylesheet"/>
    <link href="Content/bootstrap.rtl.min.css" rel="stylesheet" />
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js" async ></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js" async ></script>
    <![endif]-->
</head>
<body class="hold-transition skin-admin sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <a href="#" class="logo">
                <span class="logo-mini">
                   ادمین سایت
                </span>
            <span class="logo-lg">
                    ادمین سایت
                </span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">تعویض منو</span>
            </a>
            <div class="navbar-custom-menu">
                <ul id="topleftnav" class="nav navbar-nav">
                    <li class="dropdown messages-menu">
                        <a href="#" target="_blank">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li class="dropdown messages-menu">
                        <a href="#" target="_blank">
                            <i class="fa fa-wordpress"></i>
                            <span class="hidden-xs">وبلاگ</span>
                        </a>
                    </li>
                    <li class="dropdown messages-menu">
                        <a href="/Support.html">
                            <i class="fa fa-envelope-o"></i>
                            <span class="hidden-xs">پشتیبانی</span>
                        </a>
                    </li>
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="hidden-xs">حسین حیاتی</span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="https://www.gravatar.com/avatar/fa64db38864b2ab434311e20b548b955?s=100" class="img-circle" alt="حسین حیاتی">
                                <p>
                                    حسین حیاتی
                                    <small>
                                        Hossein.hayati5654@gmail.com
                                    </small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="User.php" class="btn btn-default btn-flat">حساب کاربری</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">خروج</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-right image">
                    <a class="image" data-toggle="modal" href="#">
                        <img src="https://www.gravatar.com/avatar/fa64db38864b2ab434311e20b548b955?s=100" class="img-circle" alt="حسین حیاتی" />
                    </a>
                </div>
                <div class="pull-left info">
                    <p>حسین حیاتی</p>
                    <small>  وضعیت : آنلاین</small>
                </div>
                <div class="clearfix"></div>
                <a class="btn btn-social bg-orange btn-block btn-labeled" data-toggle="modal" href="#">
                    <i class="fa fa-home"></i>
                    <span>مشاهده سایت</span>
                </a>
                <div class="clearfix"></div>
                <hr />
            </div>
            <ul class="sidebar-menu">
                <li>
                </li>
                <li class="header">بخش کاربری</li>
                <li class="treeview">
                    <a href="Index.html">
                        <i class="fa fa-dashboard"></i> <span>داشبورد</span>
                    </a>
                </li>
                <li class="treeview">
                    <a>
                        <i class="fa fa-newspaper-o"></i>
                        <span>مطالب</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="Articles.php"><i class="fa fa-plus"></i> تمامی مطالب </a></li>
                        <li><a href="#"><i class="fa fa-check"></i> دیدگاه ها</a></li>
                        <li><a href="#"><i class="fa fa-file-archive-o"></i> دسته بندی ها</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <span>محصولات</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="Products.php"><i class="fa fa-check"></i> تمامی محصولات</a></li>
                        <li><a href="Sales.php"><i class="fa fa-plus"></i> فروش ها</a></li>
                        <li><a href="#"><i class="fa fa-plus"></i> افزودن محصول</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user"></i> <span>کاربران</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="User.php"><i class="fa fa-dollar"></i> تمامی کاربران </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-line-chart"></i> افزودن کاربر</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="Support.php">
                        <i class="fa fa-envelope-o"></i>
                        <span>پشتیبانی</span>
                        <small class="label pull-right bg-red">
                            0
                        </small>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-gears"></i> <span>تنظیمات</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="#"><i class="fa fa-user"></i> ویرایش مشخصات کاربری </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-lock"></i> تغییر کلمه عبور</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
    </aside>