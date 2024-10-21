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

    <title>درباره ما</title>

    <link href="css/bootstrap-rtl.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

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
<div class="container">
    <br>
    <div class="row" style="margin-top:180px; margin-bottom:60px">

        <div class="col">
            <div class="row">
                <div class="card" style="width:1000px; margin-right:65px;">
                    <div class="card-header">درباره ما</div>
                    <div class="card-body">
                        <p>
                         گالری طلا افتخار دارد در نوسازي و پيشرفت جامعه طلا و جواهر نقش کوچکي را بر عهده بگيرد، حرکت جامعه از سنتي به مدرن در زمينه هاي فرهنگي، اقتصادي و اجتماعي اجتناب ناپذير بوده و اين مرکز به تبعيت از نياز اجتماعي موجود ، نقش خود را يافته و با تمام وجود به عهده گرفته است.
                        </p>
                        <p>
                       مهمترين رويکردهای ما دراین شرکت به شرح زیر مي باشد:
                        </p>
                        <p>
                         توجه به فرهنگ ملي ايراني: به نحوي که افتخارات کهن و غناي فرهنگ ايراني و ارزشهاي ملي تحت تهاجم دستاوردهاي نو قرار نگيرد، بلکه ارزشهاي جديد در خدمت فرهنگ ملي ما باشد.
                        </p>
			<p>
			رعايت استانداردهاي کيفيت کالا و خدمات: همکاران ما در تلاشند تا به يک الگوي مناسب در توليد کالا رسيده و مشتري مداری و ارائه ی خدمات، بيش از حد انتظار را مورد توجه قرار دهند. احترام به ارزشهاي فرهنگي جامعه و توجه ويژه به درخواست مشتري اولين اولويت ماست.
			</p>
			<p>
			فضای مناسب: تجهيزات پيشرفته و به کارگيري سامانه هاي جديد و فناوریهای روز همراه با کارکنان کارآمد، نمونه ی منحصر به فرد يک گالری پيشرفته را ايجاد کرده است .
			</p>
			<p>
			پرسنل آموزش دیده: پرسنل آموزش دیده و ارتباط دائم با مراکز معتبر در زمينه ی طلا، جواهر و گوهرشناسي در داخل و خارج از کشور.
			</p>
			<p>
			تنوع در عرضه محصولات
			</p>
			<p>
			پاسخگویی به مطالبات جدید علاقمندان به طلا و جواهر.
			</p>
			<p>
			اين گالری با هدف نوآوری و ابتکار در زمینه طلا و جواهر و ارائه ی خدمات مطابق با نیازهای روز تأسیس شده و توجه به جنبه های فرهنگ ملی همراه با خدمات فراتر از استانداردهای رایج، مورد توجه جدی ما در این شرکت قرار دارد.
			</p>
			<p>
			تمامي كالاها و خدمات اين گالری، حسب مورد داراي مجوزهاي لازم از مراجع مربوطه مي باشند و فعاليتهاي اين سايت تابع قوانين و مقررات جمهوري اسلامي ايران است.
			</p>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
<br>
<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">تمامی حقوی مادی و معنوی این سایت در اختیار گالری طلای گلد می باشد</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>
