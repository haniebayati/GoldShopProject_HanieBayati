<?php
require_once '../connectDB/config.php';
?>
<div class="card mb-3">
    <div class="card-header" style="color: white; font-family: MyFont !important">
        لیست سفارشات
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table float-right" style="direction: rtl; font-family: MyFont !important">
                <thead>
                <tr>
                    <th style="font-size:17px">ردیف</th>
                    <th style="font-size:17px">نام مشتری</th>
                    <th style="font-size:17px">تلفن</th>
                    <th style="font-size:17px">آدرس</th>
                    <th style="font-size:17px">جمع کل سفارش</th>
                    <th style="font-size:17px">تاریخ سفارش</th>
                    <th style="font-size:17px">وضعیت سفارش</th>
                    <th style="font-size:17px">کد پیگیری</th>
                    <th style="font-size:17px">مشاهده</th>

                </tr>
                </thead>
                <tbody>
                <?php
                $num = 1;
                $query = mysqli_query($connection, "Select * From orders");
                while ($row = mysqli_fetch_array($query)):
                    ?>
                    <tr>
                        <td><?php echo $num++ ?></td>
                        <td><?php echo $row['customer'] ?></td>
                        <td><?php echo $row['tel'] ?></td>
                        <td><?php echo $row['address'] ?></td>
                        <td><?php echo number_format($row['priceCol']) ?></td>
                        <td><?php echo $row['dateOrder'] ?></td>
                        <td><?php echo $row['status'] ?></td>
                        <td><?php echo $row['trackCode'] ?></td>

                        <td>
                            <a href="index.php?orderDT?trackCode=<?php echo $row['trackCode'] ?>" class="btn btn-primary">لیست سفارشات</a>
                        </td>
                    </tr>
                <?php
                endwhile;
                ?>
                <?php

                ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
