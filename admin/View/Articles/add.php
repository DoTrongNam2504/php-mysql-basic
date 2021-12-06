<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            FORM THÊM BÀI VIẾT
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form action="modules/Baiviet/control.php"  method="POST" enctype="multipart/form-data">
                                   
                                    <div class="form-group">
                                        <label for="baiviet_name">Tên bài viết </label>
                                        <input type="text" class="form-control" id="baiviet_name" name="baiviet_name" placeholder="Password">
                                    </div>

                                    <div class="form-group">
                                        <label for="baiviet_image">Hình ảnh</label>
                                        <input type="file" id="image" name="image">
                                    </div>

                                    <div class="form-group">
                                        <label >Mô tả ngắn</label>
                                      <textarea class="form-control "  name="baiviet_desc" required=""></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label >Nội dung</label>
                                        <textarea class="form-control "  name="baiviet_con" required=""></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="baiviet_status">Trạng thái</label>
                                        <select name="baiviet_status" id="baiviet_status" class="form-control">
                                            <option value="1">Hiển thị</option>
                                            <option value="0"> Ẩn </option>
                                        </select>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-info" name="add-baiviet">Thêm</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
            
        </div>

    </div>
</section>