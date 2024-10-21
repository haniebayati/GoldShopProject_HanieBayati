<?php require_once 'connectDB/config.php';
$id = $_GET['id'];
$productQuery = mysqli_query($connection, "Select * From products where id='$id'");
$productRow = mysqli_fetch_array($productQuery);
/*echo '<pre>';
print_r($productRow);*/
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $productRow['title'] ?></title>


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
<div class="container" style="max-width:2000px">
    <div class="row" style="">
        <div class="col-lg-2">

            <div class="card alert-danger" style="background-color:#222332; margin-top: 120px; border-color:#222332; color:white; font-size:18px ;font-family: MyFont !important; text-align:center">دسته بندی محصولات</div>
            <br>
			<div class="list-group" style="border-radius:6px">
                <?php
                $catQuery = mysqli_query($connection, "Select * From category");
                while ($catRow = mysqli_fetch_array($catQuery)):
                    ?><a href="store.php?cat=<?php echo $catRow['id'] ?>"
                         class="list-group-item"  style="color:#222332; text-align:center"><?php echo $catRow['cat_name'] ?></a>
                <?php endwhile; ?>
            </div>

        </div>
        <!-- /.col-lg-2 -->

        <div class="col-lg-8" style="margin-top: 150px; margin-right:110px">

            <div class="card mt-4">
                <img class="card-img-top img-fluid" src="uploads/<?php echo $productRow['image'] ?>" alt=""
                     style="display: block;width: 40%;margin-right: auto;margin-left: auto;margin-top: 10px;">
                <div class="card-body">
                    <h3 class="card-title"><?php echo $productRow['title'] ?></h3>
                    <br>
                    <h3><?php echo number_format($productRow['price']) ?> تومان </h3>
                    <br>
                    <p class="card-text">
                        <?php echo $productRow['description'] ?>
                    </p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary btn-lg" style="font-family: MyFont !important; margin-right:350px">افزودن به سبد خرید</a>
                    </a>
                </div>
            </div>
            <!-- /.card -->

			<div class="card card-outline-secondary my-4">
                 <div class="card-header">
				 <p>
                   توضیحات محصول
				  </p>
                </div>
                <div class="card-body">
				<p>
				کلیه محصولات گالري طلا، طلای 18 عیار می باشد. 
				</p>
				<p>
				کلیه محصولات گالری با ضمانت نامه کتبی خدمت مشتریان عزیز عرضه می شود.
				</p>
				<p>
				 با توجه به اینکه محصولات گالري طلا در این مجموعه تولید می شوند، با حداقل اجرت به مشتریان عزیز ارائه می شوند. 
				</p>
				
                </div> 
            </div> 
            <!-- /.card -->
			<div class="card card-outline-secondary my-4">
                 <div class="card-header">
				 <p>
                   ارسال نظرات کاربران
				  </p>
                </div>
                <div class="card-body">
            <div class="comments">
                <form>
                    <div class="form-group">
                        <label for="name"><p>نام و نام خانوادگی :</p></label>
                        <input class="form-control" type="text" placeholder="نام و نام خانوادگی را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="email"><p>ایمیل :</p></label>
                        <input class="form-control" type="text" placeholder="ایمیل را وارد کنید">
                    </div>


                    <div class="form-group">
                        <label for="commentarea"><p>دیدگاه :</p></label>
                        <textarea class="form-control" name="comment" placeholder="دیدگاه خود را وارد کنید" style="height:80px"></textarea>

                    </div>


                    <input class="btn btn-primary btn-lg" type="Submit" name="submit" style="font-family: MyFont !important; margin-right:370px" value="ارسال نظرات">
                    <br>
                    <br>

                </form>
            </div>
        </div>
		</div>
		</div>
        <!-- /.col-lg-9 -->

    </div>

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
