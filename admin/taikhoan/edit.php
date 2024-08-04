<style>
  a button[type="submit"],
  a.button-back {
    color: white;
    padding: 8px;
    border: 1px solid;
    border-radius: 5px;
    text-decoration: none;
  }

  a button[type="submit"] {
    background-color: green;
  }

  a button[type="submit"]:hover {
    cursor: pointer;
    background-color: red;
  }

  a.button-back {
    background-color: #007bff;
    margin-bottom: 10px;
  }

  a.button-back:hover {
    background-color: #0056b3;
  }

  input,
  select {
    width: 100%;
    margin-bottom: 10px;
  }

  .disabled {
    background-color: #e9ecef;
    border: 1px solid #ced4da;
  }
</style>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Cập nhật tài khoản</h1>
          <div class="col-sm-6 float-right">
            <a href="index.php?act=listtk" class="btn btn-success">Quay lại</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Sửa thông tin tài khoản</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="index.php?act=updatetk" method="POST">
                <?php
                if (isset($taikhoan) && is_array($taikhoan)) {
                  extract($taikhoan); // Tách các phần tử của mảng thành biến
                }
                ?>

                <label for="ten_dang_nhap">Tên đăng nhập:</label>
                <input type="text" id="ten_dang_nhap" name="ten_dang_nhap"
                  value="<?php echo htmlspecialchars($ten_dang_nhap ?? ''); ?>" disabled>

                <label for="ho_ten">Họ tên:</label>
                <input type="text" id="ho_ten" name="ho_ten" value="<?php echo htmlspecialchars($ho_ten ?? ''); ?>"
                  disabled>

                <label for="ngay_sinh">Ngày sinh:</label>
                <input type="text" id="ngay_sinh" name="ngay_sinh"
                  value="<?php echo htmlspecialchars($ngay_sinh ?? ''); ?>" disabled>

                <label for="so_dien_thoai">Số điện thoại:</label>
                <input type="text" id="so_dien_thoai" name="so_dien_thoai"
                  value="<?php echo htmlspecialchars($so_dien_thoai ?? ''); ?>" disabled>

                <label for="email">Email:</label>
                <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($email ?? ''); ?>"
                  disabled>

                <label for="dia_chi">Địa chỉ:</label>
                <input type="text" id="dia_chi" name="dia_chi" value="<?php echo htmlspecialchars($dia_chi ?? ''); ?>"
                  disabled>

                <label for="vai_tro">Chức vụ:</label>
                <select id="vai_tro" name="vai_tro">
                  <?php foreach ($list_chuc_vu as $list): ?>
                    <option value="<?php echo $list['id']; ?>" <?php echo ($chuc_vu ?? '') == $list['id'] ? 'selected' : ''; ?>>
                      <?php echo htmlspecialchars($list['ten_chuc_vu']); ?>
                    </option>
                  <?php endforeach; ?>
                </select>

                <label for="trang_thai">Trạng thái:</label>
                <select id="trang_thai" name="trang_thai">
                  <option value="0" <?php echo ($trang_thai ?? 0) == 0 ? 'selected' : ''; ?>>Hoạt động</option>
                  <option value="1" <?php echo ($trang_thai ?? 1) == 1 ? 'selected' : ''; ?>>Không hoạt động</option>
                </select>

                <input type="hidden" name="id" value="<?php echo htmlspecialchars($id ?? ''); ?>">
                <input type="submit" name="sua" class="btn btn-primary" value="Cập nhật"
                  onclick="return confirm('Bạn có chắc chắn muốn thay đổi trạng thái tài khoản này?')">
                <?php if (isset($thongbao) && $thongbao): ?>
                  <p><?php echo htmlspecialchars($thongbao); ?></p>
                <?php endif; ?>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>