<?php
require_once '../connectDB/config.php';
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ورود به پنل مدیریت</title>
        <link rel="stylesheet" href="../css/bootstrap-rtl.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="../js/jquery.min.js"></script>
    </head>
    <body>
	<nav class="nav top-bar">
        <a class="navbar-brand" href="./">
          <img src="https://cdn1.vectorstock.com/i/thumb-large/24/40/diamond-shape-line-gold-logo-vector-39722440.jpg" alt="logo" style="height:190px">
        </a>
    <h3 class="text-center" style="font-size:30px;margin-right:350px;margin-top: 90px; font-family: MyFont !important">ورود به پنل مدیریت</h3>
</nav>
	
    <form action="" method="post">
        <div class="row container">
            <div class="col-md-5" style="margin-left: auto;margin-right: 38%">
        <div class="panel panel-primary" style="border-color:#222332; width: 500px; height: auto; margin-top: 80px; margin-bottom:80px">
            <div class="panel-heading" style="background-color : #222332; color : white; font-family: MyFont !important">فرم ورود مدیریت سایت</div>
            <div class="panel-body" style="font-family: MyFont !important">
                <?php
                //if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if(isset($_POST['login'])){
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $query = mysqli_query($connection, "Select * From users where username='$username' and password='$password'");
                    if (mysqli_num_rows($query) >0) {
                        $_SESSION['admin']=$username;
                        header('Location:index.php');
                    } else {
                        echo '<div class="alert alert-danger">';
                        echo 'نام کاربری یا رمز عبور اشتباه می باشد';
                        echo '</div>';
                    }

                }
                ?>
                <br>
                <input type="text" name="username" class="form-control" style="font-family: MyFont !important" placeholder="نام کاربری را وارد کنید">
                <br>
                <input type="password" name="password" class="form-control" style="font-family: MyFont !important" placeholder="رمز عبور را وارد کنید">
                <br>
                <input type="submit" name="login" value="ورود" class="btn btn-primary" style="background-color: #007bff; border-color: #007bff;width: 100%; font-family: MyFont !important">
            </div>
        </div>
            </div>
        </div>

    </form>
	
	<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">تمامی حقوی مادی و معنوی این سایت در اختیار گالری طلا می باشد.</p>
    </div>
    <!-- /.container -->
</footer>
    </body>
    </html>

