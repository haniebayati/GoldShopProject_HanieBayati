<?php
require_once '../connectDB/config.php';
?>

<form action="actions.php?add-new-cat" method="post">
    <br>
    <div class="row">
        <div class="col-md-10">
            <input type="text" name="catName" class="form-control" style="font-family: MyFont !important" placeholder="نام دسته بندی را وارد کنید"
                   style="max-width: 100%">
        </div>
        <div class="col-md-2">
            <input type="submit" name="save" value="ثبت دسته بندی" class="btn btn-primary" style="width: 100%; font-family: MyFont !important کcolor: #fff; background-color: #007bff; border-color: #007bff">
        </div>
    </div>

</form>

<br>
<div class="card mb-3">
    <div class="card-header text-right" style="color: white; font-family: MyFont !important">
        لیست دسته بندی ها
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table float-right" style="direction: rtl; font-family: MyFont !important">
                <thead>
                <tr>
                    <th style="font-size:18px">ردیف</th>
                    <th style="font-size:18px">نام دسته بندی</th>
                    <th style="font-size:18px">حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $num = 1;
                $cat_query = mysqli_query($connection, "Select * From category");
                while ($cat_row = mysqli_fetch_array($cat_query)):
                    ?>
                    <tr>
                        <td><?php echo $num++ ?></td>
                        <td><?php echo $cat_row['cat_name'] ?></td>
                        <td>
                            <a href="actions.php?delete-cat=<?php echo $cat_row['id'] ?>"
                               class="btn btn-danger btn-lg">حذف</a>
                        </td>
                    </tr>
                <?php
                endwhile;
                ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<!-- table list -->
