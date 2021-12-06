<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            FORM THÊM DANH MỤC
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form action="modules/Category/control-add.php"  method="POST">
                                   
                                    <div class="form-group">
                                        <label for="category_name">Tên danh mục</label>
                                        <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Password">
                                    </div>

                                    <div class="form-group">
                                        <label for="orderby">Thứ tự</label>
                                        <input type="text" class="form-control" id="orderby" name="orderby" placeholder="Password">
                                    </div>

                                     <div class="form-group">
                                        <label for="status">Trạng thái</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="1">Hiển thị</option>
                                            <option value="0"> Ẩn </option>
                                        </select>
                                    </div>
                                    
                                    
                                    <button type="submit" class="btn btn-info" name="add-category">Thêm</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
            
        </div>

    </div>
</section>