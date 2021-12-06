<?php 
        $query = "SELECT * from  artices_item ORDER BY baiviet_id DESC";
        $list=mysqli_query($con, $query); 

 ?>
<section class="wrapper">
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách bài viết
            </div>
            <div class="panel-body">
                <a href="?admin_control=quanlibaiviet&query=add" class="btn btn-compose">
                    <i class="fa fa-check text-success text-active"></i>  Thêm bài viết mới
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
                            <th data-breakpoints="xs">Mã bài viết</th>
                            <th>Tên bài viết</th>
                            <th>Hình ảnh</th>
                            <th>Mô tả ngắn</th>
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
                                <?php echo $row['baiviet_id']; ?>
                                    
                            </td>

                            <td>
                                <?php echo $row['baiviet_name']; ?>
                                    
                            </td>
                             <td><img src="../upload/article/<?php echo $row['baiviet_image']; ?>" alt="" style="height:60px"></td>
                            <td>
                                 <?php echo $row['baiviet_desc']; ?>
                            </td>

                            <td>
                                 <?php if($row['baiviet_status']==1){ ?>
                                    Hiển thị
                                 <?php }else{ ?>
                                    Tạm Ẩn
                                 <?php } ?>
                            </td>

                            <td>
                                <a class="btn btn-add" href="?admin_control=quanlibaiviet&query=edit&id=<?php echo $row['baiviet_id']; ?>"> 
                                    <i class="fa fa-check text-success text-active"></i>  Sửa </a>
                                <a class="btn btn-add" href="modules/Baiviet/control.php?id=<?php echo $row['baiviet_id']; ?>"><i class="fa fa-times text-danger text"></i> Xóa </a>
                            </td>
                        </tr>
                       <?php } ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>