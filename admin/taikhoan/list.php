<style>
  a button[type="submit"] {
    color: white;
    padding: 8px;
    border: 1px solid;
    background-color: green;
    border-radius: 5px;
  }

  a button[type="submit"]:hover {
    cursor: pointer;
    background-color: red;
  }

  input {
    width: 100%;
  }
</style>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản lý tài khoản</h1>
        </div>
        <!-- <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Danh sách tài khoản</li>
          </ol>
        </div> -->
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
              <h3 class="card-title">Danh sách tài khoản</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tên đăng nhập</th>
                    <th>Họ tên</th>
                    <th>Ngày sinh</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Chức vụ</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($list_tai_khoan as $tai_khoan): ?>
                    <tr>
                      <td><?php echo $tai_khoan['id']; ?></td>
                      <td><?php echo $tai_khoan['ten_dang_nhap']; ?></td>
                      <td><?php echo $tai_khoan['ho_ten']; ?></td>
                      <td><?php echo $tai_khoan['ngay_sinh']; ?></td>
                      <td><?php echo $tai_khoan['so_dien_thoai']; ?></td>
                      <td><?php echo $tai_khoan['email']; ?></td>
                      <td><?php echo $tai_khoan['dia_chi']; ?></td>
                      <td><?php echo $tai_khoan['vai_tro']; ?></td>
                      <td><?php echo $tai_khoan['trang_thai'] == 0 ? 'Hoạt động' : 'Không hoạt động'; ?></td>
                      <td>
                        <a href="index.php?act=suatk&id=<?php echo $tai_khoan['id']; ?>"><button
                            class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</button></a>
                        <!-- <a href="index.php?act=xoatk&id=<?php echo $tai_khoan['id']; ?>"
                          onclick="return confirm('Bạn có chắc chắn muốn xóa?');"><button
                            class="btn btn-danger">Xóa</button></a> -->
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
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