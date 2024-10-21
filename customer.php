<?php
require_once 'connectDB/config.php';
?>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>تایید نهایی سفارش</title>

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
<div class="row" style="margin-top:200px;">
    <div class="col-md-6 col-lg-offset-6" style="margin-right: auto;margin-left: auto">
        <div class="panel panel-info" style="border-color:#222332">
            <div class="panel-heading" style="background-color:#222332; color:white">فرم مشخصات مشتری</div>
            <div class="panel-body">
                <?php
                $code = rand(10000000, 99999999);
                if(isset($_POST['saveOrder']))
                {
                    echo '<div class="alert alert-success" style="color: black; background-color: #c7d9eb; border-color: #c7d9eb;">';
                    echo 'ثبت سفارشات شما با موفقیت انجام شد';
                    echo ' - ';
                    echo 'کد رهگیری شما : ';
                    echo $code;
                    echo '</div>';
                }
                ?>
                <form action="" method="post">
                <input type="text" name="customer" class="form-control" placeholder="نام و نام خانوادگی را وارد کنید" style="margin-bottom:8px;">
                <input type="text" name="tel" class="form-control" placeholder="تلفن تماس را وارد کنید" style="margin-bottom:8px;">
                <input type="text" name="address" class="form-control" placeholder="آدرس پستی را وارد کنید" style="margin-bottom:8px;">

                    <input type="submit" name="saveOrder" class="btn btn-success" value="تایید نهایی سفارش" style="width: 100%;height: 40px; background-color:#007bff ; border-color:#007bff">
                </form>
            </div>
        </div>
    </div>
</div>
<?php
$num = 1;
$sumprice=0;
$session = $_SESSION;
$cart = [];
foreach ($session as $keySession => $value) {
    if (substr($keySession, 0, 5) == 'cart_') {
        $cart[$keySession] = $value;
    }
}

foreach ($cart as $item => $values):
    $sumprice+=$values['price'];
endforeach;

if (isset($_POST['saveOrder'])) {

    $customer=$_POST['customer'];
    $tel=$_POST['tel'];
    $address=$_POST['address'];

    $query = mysqli_query($connection, "Insert Into orders(customer,tel,address,priceCol,dateOrder,status,trackCode) values('$customer','$tel','$address','$sumprice','1400/08/30','پرداخت شده','$code')");
    foreach ($cart as $item => $values):
        {
            $productDT = $values['name'];
            $quantityDT = $values['quantity'];
            $priceDT = $values['price']/ $values['quantity'];
            $totalDT = $values['price'] ;
            $trackCodeDT = $code;
            $image = $values['image'];
            $queryDT = mysqli_query($connection, "Insert Into orderdetails(nameProduct,quantity,price,total,trackCode,image) values('$productDT','$quantityDT','$priceDT','$totalDT','$trackCodeDT','$image')");
        }
    endforeach;

}
?>



<div class="row" style=" margin-bottom:50px">
    <div class="col-md-6 col-lg-offset-6" style="margin-right: auto;margin-left: auto">

        <table class="table">
            <tr>
                <td><h3>جمع کل سفارش : </h3></td>
                <td><?php echo number_format($sumprice); ?> تومان</td>

            </tr>
        </table>

    </div>
</div>
	<footer class="py-5 bg-dark">
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
