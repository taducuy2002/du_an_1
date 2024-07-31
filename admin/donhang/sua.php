<?php
// Kiểm tra nếu $one_hoa_don là một mảng, sau đó trích xuất các biến từ mảng đó
if (is_array($one_hoa_don)) {
  extract($one_hoa_don);
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
    <h3 class="card-title">Cập nhật trạng thái</h3>
  </div>
  <!-- /.card-header -->

  <!-- Bắt đầu form cập nhật trạng thái đơn hàng -->
  <!-- Trang cập nhật trạng thái -->
  <form action="index.php?act=xuLyCapNhatDonHang" method="POST">
    <div class="card-body">
      <div class="form-group">
        <label for="trangthai">Trạng thái</label>
        <select name="trangthai" id="trangthai">
          <?php
          $optionsTrangthai = [
            0 => 'Chờ xác nhận',
            1 => 'Đã xác nhận',
            2 => 'Đang giao hàng',
            3 => 'Đã giao hàng',
            4 => 'Giao thành công',
            5 => 'Hủy đơn hàng'
          ];

          foreach ($optionsTrangthai as $value => $text) {
            echo "<option value=\"$value\" " . ($trang_thai == $value ? 'selected' : '') . ">$text</option>";
          }
          ?>
        </select>
      </div>
      <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>">
    </div>
    <div class="card-footer">
      <input type="submit" class="btn btn-primary" name="sua" value="Cập nhật trạng thái">
      <a href="index.php?act=list_dh"><button type="button" class="btn btn-success"><i class="fa-solid fa-backward"></i>
          Trở về danh sách</button></a>
    </div>
  </form>

</div>