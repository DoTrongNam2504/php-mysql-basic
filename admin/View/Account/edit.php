<?php 
if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * from  admin where admin_id = '".$id."'";
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
                            FORM CẬP NHẬT TÀI KHOẢN
                        </header>
                       


                         <div class="panel-body">
                            <div class="position-center">
                                 <?php $i=0;
                           while ($row= mysqli_fetch_array($list)) {
                                    $i++;
                            ?>
                                <form action="modules/Account/control.php?id=<?php echo $row['admin_id']; ?>"  method="POST">
                                   
                                   
                                    
                                    

                                     <div class="form-group">
                                        <label for="admin_name">Họ tên : </label>
                                        <input type="text" class="form-control" id="admin_name" name="admin_name" placeholder="Họ và tên..."value="<?php echo $row['admin_name']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="admin_email">Email: </label>
                                        <input type="text" class="form-control" id="admin_email" name="admin_email" placeholder="Email...." value="<?php echo $row['email']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="admin_pass">Password cũ</label>
                                        <input type="Password" class="form-control" id="admin_pass" name="admin_pass_old" placeholder="Password....">
                                    </div>


                                     <div class="form-group">
                                        <label for="admin_pass">Password mới</label>
                                        <input type="Password" class="form-control" id="admin_pass-new" name="admin_pass_new" placeholder="Password....">
                                    </div>

                                    <div class="form-group">
                                        <label for="admin_status">Trạng thái</label>
                                       <select name="admin_status" id="admin_status" class="form-control">
                                            <?php if($row['status'] == 1){ ?>
                                           <option value="1" selected>Hiển thị</option>
                                           <option value="0"> Tạm ẩn</option>
                                        <?php }else{ ?>
                                            <option value="1">Hiển thị</option>
                                            <option value="0" selected>Tạm ẩn</option>
                                        <?php } ?>
                                       </select>
                                    </div>



                                    
                                    <button type="submit" class="btn btn-info" name="edit-account">Cập nhật</button>
                                </form>
                            <?php } ?>
                            </div>

                        </div>

                    </section>

            </div>
            
        </div>

    </div>
</section>