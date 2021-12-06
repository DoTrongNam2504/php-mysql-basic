<?php 
if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * from  artices_item where baiviet_id = '".$id."'";
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
                            FORM SỬA BÀI VIẾT
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                 <?php $i=0;
                           while ($row= mysqli_fetch_array($list)) {
                                    $i++;
                            ?>
                                <form action="modules/Baiviet/control.php?id=<?php echo $row['baiviet_id']; ?>"  method="POST"  enctype="multipart/form-data">
                                   
                                   

                                    <div class="form-group">
                                        <label for="baiviet_name">Tên bài viết </label>
                                        <input type="text" class="form-control" id="baiviet_name" name="baiviet_name" placeholder="Password" value="<?php echo $row['baiviet_name']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="baiviet_image">Hình ảnh</label>
                                        <img src="../upload/article/<?php echo $row['baiviet_image']; ?>" alt="">
                                        <input type="file" id="image" name="image">
                                    </div>

                                    <div class="form-group">
                                        <label >Mô tả ngắn</label>
                                      <textarea class="form-control "  name="baiviet_desc" required="" value=""><?php echo $row['baiviet_desc']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label >Nội dung</label>
                                        <textarea class="form-control "  name="baiviet_con" required="" value=""><?php echo $row['baiviet_content']; ?></textarea>
                                    </div>

                                    


                                    <div class="form-group">
                                        <label for="brand_status">Trạng thái</label>
                                       <select name="baiviet_status" id="baiviet_status" class="form-control">
                                            <?php if($row['baiviet_status'] == 1){ ?>
                                           <option value="1" selected>Hiển thị</option>
                                           <option value="0"> Tạm ẩn</option>
                                        <?php }else{ ?>
                                            <option value="1">Hiển thị</option>
                                            <option value="0" selected>Tạm ẩn</option>
                                        <?php } ?>
                                       </select>
                                    </div>

                                    
                                    <button type="submit" class="btn btn-info" name="edit-baiviet">Cập nhật</button>
                                </form>
                            <?php } ?>
                            </div>

                        </div>
                    </section>

            </div>
            
        </div>

    </div>
</section>