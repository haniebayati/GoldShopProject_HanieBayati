<?php
require_once 'connectDB/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>صفحه اصلی</title>

    <link href="css/bootstrap-rtl.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
	
	<link href="css/animate.css" rel="stylesheet">
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="height: 200px">
        <a class="navbar-brand" href="./">
          <img src="https://cdn1.vectorstock.com/i/thumb-large/24/40/diamond-shape-line-gold-logo-vector-39722440.jpg" alt="logo">
        </a>
    <div class="container">
    <!--    <a class="navbar-brand" href="#" style="font-size: 20px">گالری طلا گلد
            </a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto" style="margin-right:-20px">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">صفحه اصلی</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Admin/login.php">پنل مدیریت</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="store.php">فروشگاه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php">مشاهده سبد خرید</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="myOrders.php">سفارشات من</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">ارتباط با ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">درباره ما</a>
                </li>
                <li>
                    <form action="store.php" method="get">
                        <div class="input-group" style="margin-top: 11px; margin-right:50px">
                            <input type="text" name="search" class="form-control" style="width:130px; border-radius: 20px"
                                   placeholder="کالای خود را جست و جو کن">
                            <button name="btnSearch" class="btn btn-primary btn-sm" style="border-radius: 20px">جست و جو</button>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br>
<!-- Page Content -->

<div class="container" style="max-width:4000px; height:650px ;background-image: url('https://cdn01.zoomit.ir/2022/2/jewlery-photography-1.jpg?w=700'); background-size: 100%100%;">
<p style="color: white; font-size: 20px; margin-top: 250px; margin-right: 120px; animation-duration: 3s; animation-name: fadeInRight;">ترکیبی از طلا و ظرافت</p>
<p style="color: white; font-size: 20px; margin-top: 55px; margin-right: 40px;  animation-duration: 4s; animation-name: fadeInRight;">الهام گرفته از سبک های کلاسیک و باشکوه</p>
<p style="color: white; font-size: 20px; margin-top: 55px; margin-right: 120px;  animation-duration: 5s; animation-name: fadeInRight;">چون شما ارزشمندید</p>
</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark" id="footer-bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">تمامی حقوی مادی و معنوی این سایت در اختیار گالری طلا می باشد.</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>
