<?php
require_once '../connectDB/config.php';
?>
<div class="card mb-3">
    <div class="card-header" style="color: white; font-family: MyFont !important">
          ریز سفارشات مشتری 
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table float-right" style="direction: rtl; font-family: MyFont !important">
                <thead>
                <tr>
                    <th style="font-size:18px">ردیف</th>
                    <th style="font-size:18px">تصویر محصول</th>
                    <th style="font-size:18px">نام محصول</th>
                    <th style="font-size:18px">تعداد</th>
                    <th style="font-size:18px">قیمت واحد</th>
                    <th style="font-size:18px">قیمت کل</th>

                </tr>
                </thead>
                <tbody>
                <?php
                if(isset($_GET['orderDT?trackCode'])) {
                    //echo $_GET['orderDT?trackCode'];
                    $tc = $_GET['orderDT?trackCode'];
                }
                $num=1;
                $query=mysqli_query($connection,"Select * From orderdetails where trackCode='$tc'");
                while ($row=mysqli_fetch_array($query)):
                    ?>
                    <tr>
                        <td><?php echo $num++ ?></td>
                        <td><img src="../uploads/<?php echo $row['image'] ?>" style="width: 80px;"></td>
                        <td><?php echo $row['nameProduct'] ?></td>
                        <td><?php echo $row['quantity'] ?></td>
                        <td><?php echo number_format($row['price']) ?></td>
                        <td><?php echo number_format($row['total']) ?></td>
                    </tr>
                <?php
                endwhile;
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>