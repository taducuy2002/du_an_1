<?php
if (is_array($one_chuc_vu)) {
  extract($one_chuc_vu);
}
?>
<style>
  .card {
    width: 80%;
    margin-left: 17%;
  }
</style>
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Sửa chức vụ</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="index.php?act=suacv" method="POST">
    <div class="card-body">
      <div class="form-group">
        <label for="ten_chuc_vu">Tên chức vụ</label>
        <input type="text" class="form-control" name="tencv" id="ten_chuc_vu"
          value="<?php echo htmlspecialchars($ten_chuc_vu); ?>">
      </div>
      <div class="form-group">
        <label for="mo_ta">Mô tả</label>
        <input type="text" class="form-control" name="mota" id="mo_ta" value="<?php echo htmlspecialchars($mo_ta); ?>">
      </div>
      <div class="form-group">
        <label for="trang_thai">Trạng thái</label>
        <select name="status" id="trang_thai">
          <option value="0" <?php echo $trang_thai == 0 ? 'selected' : '' ?>>Hoạt động</option>
          <option value="1" <?php echo $trang_thai == 1 ? 'selected' : '' ?>>Không hoạt động</option>
        </select> <br><br>
      </div>
      <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <input type="submit" class="btn btn-primary" name="sua" value="Sửa">
      <a href="index.php?act=listcv"><input type="button" value="Trở về danh sách" class="btn btn-primary"></a>
    </div>
  </form>
</div>