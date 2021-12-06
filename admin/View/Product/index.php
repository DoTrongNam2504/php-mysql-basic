<?php 
        $query = "SELECT * from  product,category,brand WHERE product.id_category= category.id_category AND product.brand_id = brand.brand_id ORDER BY product_id DESC";
        $list=mysqli_query($con, $query); 

 ?>
<section class="wrapper">
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
               Danh sách sản phẩm
            </div>
            <div class="panel-body">
                <a href="?admin_control=quanlisanpham&query=add" class="btn btn-compose">
                    <i class="fa fa-check text-success text-active"></i>  Thêm mới
                </a>
                
            </div>
            <div>
                <table class="table" ui-jq="footable" ui-options='{
					        "paging": {
					          "enabled": true
					        },
					        "filtering": {
					          "enabled": true
					        },
					        "sorting": {
					          "enabled": true
					        }}'>
                    <thead>
                        <tr>
                            <th data-breakpoints="xs">Mã </th>
                            <th>Hình ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th >Giá</th>
                            <th >Số lượng</th>
                            <th >Tình trạng</th>
                            <th >Danh mục</th>
                            <th >Thương hiệu</th>
                            <th >Thao tác</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=0;
                           while ($row= mysqli_fetch_array($list)) {
                                    $i++;
                            ?>
                        <tr data-expanded="true">
                            <td><?php echo $row['product_id']; ?></td>
                            <td>
                                <img src="../upload/<?php echo $row['product_image']; ?>" alt="" width="100px">

                                </td>
                            <td><?php echo $row['product_name']; ?></td>
                            <td><?php echo $row['product_price']; ?></td>
                            <td><?php echo $row['product_qty']; ?></td>
                            <td>
                                <?php if($row['product_status'] == 1){
                                    echo 'Hiển thi'; 
                                    }else{
                                        echo 'Tạm ẩn';
                                    }

                                    ?>
                                    
                            </td>
                            
                            <td>
                                <?php echo $row['category_name']; ?>
                            </td>

                             <td>
                                <?php echo $row['brand_name']; ?>
                            </td>

                            <td>
                                 <a class="btn btn-add" href="?admin_control=quanlisanpham&query=edit&id=<?php echo $row['product_id']; ?>"> 
                                 <i class="fa fa-check text-success text-active"></i>  Sửa </a>
                                 
                                <a class="btn btn-add" href="modules/Product/control.php?id=<?php echo $row['product_id']; ?>"><i class="fa fa-times text-danger text"></i> Xóa </a>

                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>