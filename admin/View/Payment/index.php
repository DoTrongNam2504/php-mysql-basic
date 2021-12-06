<?php 
        $query = "SELECT * from  cart, user WHERE cart.user_id= user.user_id ORDER BY cart_id DESC";
        $list=mysqli_query($con, $query); 

 ?>
<section class="wrapper">
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách đơn hàng
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
                            <th data-breakpoints="xs">Mã đơn hàng</th>
                            <th>Tên khách hàng</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Trạng thái</th>

                            <th data-breakpoints="xs sm md" data-title="DOB">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=0;
                           while ($row= mysqli_fetch_array($list)) {
                                    $i++;
                            ?>
                        <tr data-expanded="true">
                            <td>
                                <?php echo $row['cart_id']; ?>
                                    
                            </td>
                            <td>
                                <?php echo $row['user_name']; ?>
                                    
                            </td>
                            <td>
                                 <?php echo $row['address']; ?>
                            </td>
                              <td>
                                 <?php echo $row['phone']; ?>
                            </td>

                            <td>
                                <?php if($row['cart_status']==1){ ?>
                                    Đã Xử lý
                                <?php }else{ ?>
                                    Chưa xử lý
                                <?php } ?>
                            </td>

                            <td>
                                <a class="btn btn-add" href="?admin_control=quanlidonhang&query=view&code=<?php echo $row['code_card']; ?>"> 
                                    <i class="fa fa-check text-success text-active"></i>  Xem chi tiết </a>
                                
                            </td>
                        </tr>
                       <?php } ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>