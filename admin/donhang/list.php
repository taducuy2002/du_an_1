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
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản lý đơn hàng</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Danh sách đơn hàng</h3>
            </div>
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tên người nhận</th>
                    <th>SĐT người nhận</th>
                    <th>Địa chỉ</th>
                    <th>Ngày đặt hàng</th>
                    <th>Tổng tiền</th>
                    <th>Phương thức thanh toán</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($listOrders as $order): ?>
                    <tr>
                      <!-- //chuyển đổi các ký tự đặc biệt trong chuỗi thành các ký tự HTML -->
                      <td><?= htmlspecialchars($order['id']) ?></td>
                      <td><?= htmlspecialchars($order['ten_nguoi_nhan']) ?></td>
                      <td><?= htmlspecialchars($order['sdt_nguoi_nhan']) ?></td>
                      <td><?= htmlspecialchars($order['dia_chi_nguoi_nhan']) ?></td>
                      <td><?= htmlspecialchars($order['ngay_dat_hang']) ?></td>
                      <td><?= htmlspecialchars($order['tong_tien']) ?></td>
                      <td><?= $order['pt_thanh_toan'] == 1 ? 'Thanh toán khi nhận hàng' : '' ?></td>
                      <td>
                        <?php
                        switch ($order['trang_thai']) {
                          case 0:
                            echo "Chờ xác nhận";
                            break;
                          case 1:
                            echo "Đã xác nhận";
                            break;
                          case 2:
                            echo "Đang giao hàng";
                            break;
                          case 3:
                            echo "Đã giao hàng";
                            break;
                          case 4:
                            echo "Giao thành công";
                            break;
                          case 5:
                            echo "Đã hủy";
                            break;
                          default:
                            echo "Không xác định";
                            break;
                        }
                        ?>
                      </td>
                      <td>
                        <a href="index.php?act=chiTietDonHang&id=<?= htmlspecialchars($order['id']) ?>">
                          <button class="btn btn-primary"><i class="fa-solid fa-circle-info"></i> Chi tiết đơn hàng</button>
                        </a>
                        <a href="index.php?act=capNhatDonHang&id=<?= htmlspecialchars($order['id']) ?>">
                          <button class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Cập nhật trạng
                            thái</button>
                        </a>
                        <!-- <a href="index.php?act=xoaDonHang&id=<?= htmlspecialchars($order['id']) ?>"
                          onclick="return confirm('Bạn có chắc chắn muốn xóa?');">
                          <button class="btn btn-danger">Xóa</button>
                        </a> -->
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>