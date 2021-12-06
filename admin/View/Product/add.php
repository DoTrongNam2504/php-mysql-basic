<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            FORM THÊM SẢN PHẨM
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form action="modules/Product/control.php"  method="POST" enctype="multipart/form-data">
                                   
                                    <div class="form-group">
                                        <label for="name">Tên sản phẩm:</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Tên sản phẩm">
                                    </div>

                                     <div class="form-group">
                                        <label for="image">Hình ảnh:</label>
                                        <input type="file" id="image" name="image">
                                    </div>

                                    <div class="form-group">
                                        <label for="price">Giá:</label>
                                        <input type="text" class="form-control" id="price" name="price" placeholder="Price">
                                    </div>

                                    <div class="form-group">
                                        <label for="quantity">Số lượng:</label>
                                        <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Số lượng">
                                    </div>

                                    <div class="form-group">
                                        <label for="category_id">Danh mục sản phẩm:</label>
                                        <select name="category_id" id="category_id" class="form-control">

                                            <?php 
                                                $query = "SELECT * from  category ORDER BY id_category DESC";
                                                $list=mysqli_query($con, $query); 
                                                while($row = mysqli_fetch_array($list)){ ?>

                                                    <option value="<?php echo $row['id_category']; ?>"><?php echo $row['category_name']; ?></option>

                                              <?php } ?>  
                                             
                                            
                                       </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="brand_id">Danh mục thương hiệu:</label>
                                        <select name="brand_id" id="brand_id" class="form-control">

                                            <?php 
                                                $query = "SELECT * from  brand ORDER BY brand_id DESC";
                                                $list=mysqli_query($con, $query); 
                                                while($row = mysqli_fetch_array($list)){ ?>

                                                    <option value="<?php echo $row['brand_id']; ?>"><?php echo $row['brand_name']; ?></option>

                                              <?php } ?>  
                                             
                                            
                                       </select>
                                    </div>


                                    <div class="form-group">
                                        <label for="status">Tình trạng:</label>
                                       <select name="status" id="status" class="form-control">
                                           <option value="1">Hiển thị</option>
                                           <option value="0">Ẩn</option>
                                       </select>
                                    </div>


                                    <div class="form-group">
                                        <label for="description">Mô tả:</label>
                                        <textarea class="form-control " id="description" name="description" required=""></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="content">Nội dung:</label>
                                        <textarea class="form-control " id="content" name="content" required=""></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-info" name="add-product">Thêm</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
            
        </div>

    </div>
</section>
