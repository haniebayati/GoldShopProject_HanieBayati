<?php
require_once '../connectDB/config.php';
?>
<div class="card mb-3">
    <div class="card-header" style="color: white; font-family: MyFont !important">
        افزودن محصول جدید
    </div>
    <div class="card-body">
        <!-- form area -->
        <form action="actions.php?add-new-product" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group float-right" style="width: 100%">
                        <input type="text" name="title" class="form-control" style="font-family: MyFont !important" placeholder="عنوان محصول">
                    </div>
                    <div class="form-group">
                        <textarea name="desc" cols="30" rows="10" class="form-control"
                                  placeholder="توضیحات محصول"></textarea>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-3">
                            <input type="number" name="price" class="form-control" style="margin-left: 14px; font-family: MyFont !important" size="60"
                                   placeholder="قیمت">
                        </div>
                    </div>
                </div><!--Main Content-->
                <aside class="col-md-4">
                    <div class="form-group">
                        <select name="cat" class="form-control" style="font-family: MyFont !important">
                            <?php
                            $query=mysqli_query($connection,"Select * From category");
                            while($row=mysqli_fetch_array($query)):
                                ?>
                                <option value="<?php echo $row['id']?>"><?php echo $row['cat_name'] ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="file" name="image" class="form-control-file" style="font-family: MyFont !important">
                    </div>
                    <br>
                    <div class="form-group" >
						<input type="submit" class="btn btn-primary btn-lg" style="font-family: MyFont !important; color: #fff; background-color: #007bff; border-color: #007bff; margin-right: 220px" value="افزودن محصول">
                     <!--   <input type="reset" class="btn btn-danger btn-lg" style="font-family: MyFont !important" value="حذف محصول"> -->
                        
                    </div>

                </aside><!--SIDEBAR-->
            </div>
        </form>

        <!-- end form -->
    </div>
</div>