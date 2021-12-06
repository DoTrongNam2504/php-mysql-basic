<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            FORM THÊM THƯƠNG HIỆU
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form action="modules/Brand/control.php"  method="POST">
                                   
                                    <div class="form-group">
                                        <label for="brand_name">Tên thương hiệu </label>
                                        <input type="text" class="form-control" id="brand_name" name="brand_name" placeholder="Password">
                                    </div>

                                    <div class="form-group">
                                        <label for="brand_order">Thứ tự</label>
                                        <input type="text" class="form-control" id="brand_order" name="brand_order" placeholder="Password">
                                    </div>

                                    <div class="form-group">
                                        <label for="brand_status">Trạng thái</label>
                                        <select name="brand_status" id="brand_status" class="form-control">
                                            <option value="1">Hiển thị</option>
                                            <option value="0"> Ẩn </option>
                                        </select>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-info" name="add-brand">Thêm</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
            
        </div>

    </div>
</section>