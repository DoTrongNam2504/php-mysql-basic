<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            FORM THÊM TÀI KHOẢN
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form action="modules/Account/control.php"  method="POST">
                                   
                                   <div class="form-group">
                                        <label for="admin_name">Họ tên : </label>
                                        <input type="text" class="form-control" id="admin_name" name="admin_name" placeholder="Họ và tên...">
                                    </div>

                                    <div class="form-group">
                                        <label for="admin_email">Email: </label>
                                        <input type="text" class="form-control" id="admin_email" name="admin_email" placeholder="Email....">
                                    </div>

                                    <div class="form-group">
                                        <label for="admin_pass">Password</label>
                                        <input type="Password" class="form-control" id="admin_pass" name="admin_pass" placeholder="Password....">
                                    </div>

                                    <div class="form-group">
                                        <label for="admin_status">Trạng thái</label>
                                        <select name="admin_status" id="admin_status" class="form-control">
                                            <option value="1">Hiển thị</option>
                                            <option value="0"> Ẩn </option>
                                        </select>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-info" name="add-account">Thêm</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
            
        </div>

    </div>
</section>