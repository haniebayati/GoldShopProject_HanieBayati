<?php
require_once 'connectDB/config.php';
?>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>سفارشات من</title>

    <link href="css/bootstrap-rtl.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

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
<br>
<form action="" method="post" style="margin-top:120px">
    <div class="row container" style="margin-left: 150px;margin-right: 150px">
        <div class="col-md-10">
            <input type="text" name="txtCode" class="form-control"
                   placeholder="لطفا کد پیگیری خود را جهت مشاهده لیست سفارش وارد نمایید">
        </div>
        <div class="col-md-2">
            <input type="submit" class="btn btn-primary" value="پیگیری سفارش" name="searchOrder">
        </div>
    </div>
</form>
<hr>
<br>
<div class="col-sm-12">
    <table class="table table-hover">


        <thead>

        <tr style="text-align: center">
            <th>ردیف</th>
            <th>تصویر</th>
            <th>نام محصول</th>
            <th>تعداد</th>
            <th class="text-center">قیمت واحد</th>
            <th class="text-center">قیمت کل</th>

        </tr>

        </thead>
        <tbody>
        <?php
        if (isset($_POST['searchOrder'])) {
        $num = 1;
        $total = 0;
        $code = $_POST['txtCode'];
        $query = mysqli_query($connection, "Select * From orderdetails where trackCode='$code'");
        while ($row = mysqli_fetch_array($query)):
        $total += $row['total'];
        ?>
        <tr style="text-align: center">
            <td class="col-md-1 text-center"><strong><?php echo $num++ ?></strong></td>
            <td class="col-md-1">

                <a class="thumbnail pull-left" href="#"> <img class="media-object"
                                                              src="uploads/<?php echo $row['image'] ?>"
                                                              style="width: 72px; height: 72px;"></a>

</div>
</div>
</td>
<td class="col-md-5" style="text-align: center">
    <h4 style="margin-left:10px;" class="media-heading"><a><?php echo $row['nameProduct'] ?></a></h4>
</td>
<td class="col-md-1" style="text-align: center">
    <?php echo $row['quantity'] ?>
</td>
<td class="col-md-1 text-center">
    <strong><?php echo number_format($row['price']) ?></strong></td>
<td class="col-md-1 text-center"><strong><?php echo number_format($row['total']) ?></strong></td>

</tr>
<?php endwhile;
} ?>
</tbody>
</table>
</div>
<br>
<div class="row">
    <div class="col-md-3">
        <table class="table">
            <tr>
                <td><h3>جمع کل سفارش : </h3></td>
                <td><?php
                    if(isset($_POST['searchOrder'])) {
                        echo number_format($total);
                    }
                    else {
                        echo 0;
                    }
                    ?> تومان</td>

            </tr>
        </table>
    </div>
</div>
<br>
<br><br><br>
<footer class="py-5 bg-dark" id="footer-bg-dark" style="margin-top:87px">
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
