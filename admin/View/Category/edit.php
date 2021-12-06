<?php 
if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * from  category where id_category = '".$id."'";
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
                            FORM SỬA DANH MỤC
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                 <?php $i=0;
                           while ($row= mysqli_fetch_array($list)) {
                                    $i++;
                            ?>
                                <form action="modules/Category/control-add.php?id=<?php echo $row['id_category']; ?>"  method="POST">
                                   
                                    <div class="form-group">
                                        <label for="category_name">Tên danh mục</label>
                                        <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Password" value="<?php echo $row['category_name']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="orderby">Thứ tự</label>
                                        <input type="text" class="form-control" id="orderby" name="orderby" placeholder="Password" value="<?php echo $row['orderby']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="category_status">Trạng thái</label>
                                        <select name="category_status" id="category_status" class="form-control">
                                        <?php if( $row['category_status'] == 1) {?>
                                            <option value="1" selected>Hiển thị</option>
                                            <option value="0"> Ẩn </option>
                                        <?php }else{ ?>
                                            <option value="1">Hiển thị</option>
                                            <option value="0" selected> Ẩn </option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-info" name="edit-category">Cập nhật</button>
                                </form>
                            <?php } ?>
                            </div>

                        </div>
                    </section>

            </div>
            
        </div>

    </div>
</section>