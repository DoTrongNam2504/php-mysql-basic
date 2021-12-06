<?php 
		$id = $_GET['code'];
        $query = "SELECT * from  cart_detail, product WHERE cart_detail.product_id= product.product_id AND cart_detail.code_card= '".$id."' ORDER BY cart_detail.cart_dt_id DESC";
        $list=mysqli_query($con, $query); 

 ?>

<section class="wrapper">
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
               THÔNG TIN SẢN PHẨM ĐÃ MUA
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
                            <th data-breakpoints="xs">Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Giá sản phẩm</th>
                            <th>Số lượng mua</th>
                            <th>Tổng tiền</th>
                           
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=0;$tongdon=0;
                           while ($row= mysqli_fetch_array($list)) {

                                    $i++; $tongtien = $row['product_price']*$row['qty_buy'];	$tongdon += $tongtien;
                            ?>
                        <tr data-expanded="true">
                            <td>
                                <?php echo $row['product_id']; ?>
                                    
                            </td>
                            <td>
                                <?php echo $row['product_name']; ?>
                                    
                            </td>
                            <td>
                               <img src="../upload/<?php echo $row['product_image']; ?>" style="height: 100px" alt=""> 
                                    
                            </td>
                            <td>
                                 <?php echo number_format($row['product_price'],0,',','.').'đ'; ?>
                            </td>
                              <td>
                                 <?php echo $row['qty_buy']; ?>
                            </td>

                            <td>
                                <?php echo number_format($tongtien,0,',','.').'đ'; ?>
                            </td>

                            
                        </tr>
                       <?php } ?>
                       <tr>
                       	<td>Tổng tiền</td>
                       	<td colspan="5">
                        <input type="text" value="<?php echo number_format($tongdon,0,',','.').'đ'; ?>"></td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>