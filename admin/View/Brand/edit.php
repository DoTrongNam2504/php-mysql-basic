<?php 
if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * from  brand where brand_id = '".$id."'";
        $list=mysqli_query($con, $query); 
}
 ?>
<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            FORM SỬA THƯƠNG HIỆU
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                 <?php $i=0;
                           while ($row= mysqli_fetch_array($list)) {
                                    $i++;
                            ?>
                                <form action="modules/Brand/control.php?id=<?php echo $row['brand_id']; ?>"  method="POST">
                                   
                                    <div class="form-group">
                                        <label for="brand_name">Tên thương hiệu</label>
                                        <input type="text" class="form-control" id="brand_name" name="brand_name" placeholder="Password" value="<?php echo $row['brand_name']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="brand_order">Thứ tự</label>
                                        <input type="text" class="form-control" id="brand_order" name="brand_order" placeholder="Password" value="<?php echo $row['brand_order']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="brand_status">Trạng thái</label>
                                       <select name="brand_status" id="brand_status" class="form-control">
                                            <?php if($row['brand_order'] == 1){ ?>
                                           <option value="1" selected>Hiển thị</option>
                                           <option value="0"> Tạm ẩn</option>
                                        <?php }else{ ?>
                                            <option value="1">Hiển thị</option>
                                            <option value="0" selected>Tạm ẩn</option>
                                        <?php } ?>
                                       </select>
                                    </div>

                                    
                                    <button type="submit" class="btn btn-info" name="edit-brand">Cập nhật</button>
                                </form>
                            <?php } ?>
                            </div>

                        </div>
                    </section>

            </div>
            
        </div>

    </div>
</section>