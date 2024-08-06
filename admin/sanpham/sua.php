<?php
if(is_array($loadone_sanpham)){
  extract($loadone_sanpham);
}

?>
    <style>
        .card{
            width: 80%;
            margin-left: 17%;
        }
    </style>
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Sửa sản phẩm</h3>
      </div>
     
      <!-- /.card-header -->
      <!-- form start -->
      <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Tên sản phẩm</label>
            <input type="text" class="form-control" name="tensp" id="exampleInputEmail1" value="<?php echo $ten_san_pham ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Giá</label>
            <input type="text" class="form-control" name="gia" id="exampleInputEmail1" value="<?php echo $gia ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">IMAGE</label><br>
            <img src="../../img/<?=$img?>" style="width: 100px;"><br>
            <input type="file" name="img" id="exampleInputPassword1" accept="image/*" ><br><br>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Mô tả</label><br>
            <textarea name="mota" id="exampleInputPassword1" cols="150" rows="10"><?php echo $mo_ta ?></textarea>
          </div>
          
            <div class="form-group">
             <h1 style = "font-size: 17px;">Danh mục sản phẩm</h1>
          <select name="iddm">
          <?php 
              foreach ($list_danh_muc as $list) {
                          if ($id_danh_muc == $list['id']) {
                            echo ' <option value="' . $list['id'] . '" selected>' . $list['ten_danh_muc'] . '</option>';
                          } else {
                            echo ' <option value="' . $list['id'] . '">' . $list['ten_danh_muc'] . '</option>';
                          }
                        } ?>
            </select><br> 
            </div>
          
          <input type="hidden" name="id" value="<?php echo $id ?>">
        </div>
        <!-- /.card-body -->
        
        <div class="card-footer">
          <input type="submit" class="btn btn-primary" name="sua" value="Sửa">
          <a href="index.php?act=listsp"><input type="button" value="Trở về danh sách" class="btn btn-primary"></a>
        </div>
      </form>
    </div>