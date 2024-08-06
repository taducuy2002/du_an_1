<style>
  .button {
    color: white;
    padding: 8px;
    border: 1px solid;
    background-color: green;
    border-radius: 5px;
  }

  .button:hover {
    cursor: pointer;
    background-color: red;
  }
</style>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản lý chức vụ</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Danh sách chức vụ</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tên chức vụ</th>
                    <th>Mô tả</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($list_chuc_vu as $list): ?>
                    <?php
                    $trang_thai = $list['trang_thai'] == 0 ? 'đang hoạt động' : 'dừng hoạt động';
                    $suacv = "index.php?act=suacv&id=" . $list['id'];
                    $xoacv = "index.php?act=xoacv&id=" . $list['id'];
                    ?>
                    <tr>
                      <td><?php echo $list['id']; ?></td>
                      <td><?php echo $list['ten_chuc_vu']; ?></td>
                      <td><?php echo $list['mo_ta']; ?></td>
                      <td><?php echo $trang_thai; ?></td>
                      <td>
                        <a href="<?php echo $suacv; ?>"><input type="button" class="btn btn-warning" value="Sửa"></a>
                        <a href="<?php echo $xoacv; ?>"
                          onclick="return confirm('Bạn có chắc chắn muốn xóa chức vụ này?')"><input type="button"
                            class="btn btn-danger" value="Xóa"></a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <a href="index.php?act=formaddcv" class="btn btn-primary">Thêm chức vụ</a>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->