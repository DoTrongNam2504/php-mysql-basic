<?php 
        $query = "SELECT * from  admin ORDER BY admin_id DESC";
        $list=mysqli_query($con, $query); 

 ?>
<section class="wrapper">
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách tài khoản admin
            </div>
            <div class="panel-body">
                <a href="?admin_control=quanlitaikhoan&query=add" class="btn btn-compose">
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
                            <th data-breakpoints="xs">Mã Tài Khoản</th>
                            <th>Tên người quản lí</th>
                            <th>Email</th>
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
                                <?php echo $row['admin_id']; ?>
                                    
                            </td>
                            <td>
                                <?php echo $row['admin_name']; ?>
                                    
                            </td>
                            <td>
                                 <?php echo $row['email']; ?>
                            </td>

                            <td>
                                 <?php if($row['status']==1){ ?>
                                    Hiển thị
                                 <?php }else{ ?>
                                    Tạm Ẩn
                                 <?php } ?>
                            </td>

                            <td>
                                <a class="btn btn-add" href="?admin_control=quanlitaikhoan&query=edit&id=<?php echo $row['admin_id']; ?>"> 
                                    <i class="fa fa-check text-success text-active"></i>  Sửa </a>
                                <a class="btn btn-add" href="modules/Account/control.php?id=<?php echo $row['admin_id']; ?>"><i class="fa fa-times text-danger text"></i> Xóa </a>
                            </td>
                        </tr>
                       <?php } ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>