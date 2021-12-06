<?php 
        $query = "SELECT * from  category ORDER BY id_category DESC";
        $list=mysqli_query($con, $query); 

 ?>
<section class="wrapper">
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách danh mục
            </div>
            <div class="panel-body">
                <a href="?admin_control=quanlidanhmuc&query=add" class="btn btn-compose">
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
                            <th data-breakpoints="xs">Mã danh mục</th>
                            <th>Tên danh mục</th>
                            <th>Thứ tự</th>
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
                                <?php echo $row['id_category']; ?>
                                    
                            </td>
                            <td>
                                <?php echo $row['category_name']; ?>
                                    
                            </td>
                            <td>
                                 <?php echo $row['orderby']; ?>
                            </td>

                            <td>
                                <?php if($row['category_status']==1){ ?>
                                    Hiển thị
                                <?php }else{ ?>
                                    Tạm ẩn
                                <?php } ?>
                            </td>

                            <td>
                                <a class="btn btn-add" href="?admin_control=quanlidanhmuc&query=edit&id=<?php echo $row['id_category']; ?>"> 
                                    <i class="fa fa-check text-success text-active"></i>  Sửa </a>
                                <a class="btn btn-add" href="modules/Category/control-add.php?id=<?php echo $row['id_category']; ?>"><i class="fa fa-times text-danger text"></i> Xóa </a>
                            </td>
                        </tr>
                       <?php } ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>