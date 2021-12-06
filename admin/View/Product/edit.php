<?php 
if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * from  product where product_id = '".$id."'";
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
                            FORM SỬA SẢN PHẨM
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                 <?php $i=0;
                           while ($row= mysqli_fetch_array($list)) {
                                    $i++;
                            ?>
                                <form action="modules/Product/control.php?id=<?php echo $row['product_id']; ?>"  method="POST"enctype="multipart/form-data">
                                   
                                   
                                    <div class="form-group">
                                        <label for="name">Tên sản phẩm:</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Tên sản phẩm" value="<?php echo $row['product_name']; ?>">
                                    </div>

                                     <div class="form-group">
                                        <label for="image">Hình ảnh:</label>
                                        <input type="file" id="image" name="image" >
                                        <img src="../upload/<?php echo $row['product_image']; ?>" alt="">
                                    </div>

                                    <div class="form-group">
                                        <label for="price">Giá:</label>
                                        <input type="text" class="form-control" id="price" name="price" placeholder="Price" value="<?php echo $row['product_price']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="quantity">Số lượng:</label>
                                        <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Số lượng" value="<?php echo $row['product_qty']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="status">Tình trạng:</label>
                                       <select name="status" id="status" class="form-control">
                                        <?php if($row['product_status']==1){ ?>

                                           <option selected value="1">Hiển thị</option>

                                           <option value="0">Ẩn</option>


                                       <?php }else{ ?>

                                             <option value="1">Hiển thị</option>

                                             <option selected value="0">Ẩn</option>

                                     <?php } ?>
                                       </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="category_id">Danh mục sản phẩm:</label>
                                        <select name="category_id" id="category_id" class="form-control">

                                            <?php 
                                                $query = "SELECT * from  category ORDER BY id_category DESC";
                                                $list=mysqli_query($con, $query); 
                                                while($row_category = mysqli_fetch_array($list)){ 
                                                    if ($row_category['id_category'] == $row['id_category']) {
                                                ?>

                                                    <option selected value="<?php echo $row_category['id_category']; ?>"><?php echo $row_category['category_name']; ?></option>

                                              <?php }else{ ?>  

                                                     <option  value="<?php echo $row_category['id_category']; ?>"><?php echo $row_category['category_name']; ?></option>

                                              <?php }} ?>
                                             
                                            
                                       </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="brand_id">Danh mục thương hiệu:</label>
                                        <select name="brand_id" id="brand_id" class="form-control">

                                            <?php 
                                                $query = "SELECT * from  brand ORDER BY brand_id DESC";
                                                $list=mysqli_query($con, $query); 
                                                while($row_category = mysqli_fetch_array($list)){ 
                                                    if ($row_category['brand_id'] == $row['brand_id']) {
                                                ?>

                                                    <option selected value="<?php echo $row_category['brand_id']; ?>"><?php echo $row_category['brand_name']; ?></option>

                                              <?php }else{ ?>  

                                                     <option  value="<?php echo $row_category['brand_id']; ?>"><?php echo $row_category['brand_name']; ?></option>

                                              <?php }} ?>
                                             
                                            
                                       </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Mô tả:</label>
                                        <textarea class="form-control " id="description" name="description" required="" ><?php echo $row['product_des']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="content">Nội dung:</label>
                                        <textarea class="form-control " id="content" name="content" required="" ><?php echo $row['product_content']; ?></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-info" name="edit-product">Cập nhật</button>
                                </form>
                            <?php } ?>
                            </div>

                        </div>
                    </section>

            </div>
            
        </div>

    </div>
</section>