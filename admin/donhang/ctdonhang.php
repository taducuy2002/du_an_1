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

    .box {
        margin-top: 10px;
        padding: 10px;
        border: 1px solid gray;
        border-radius: 10px 50px;
        text-align: center;
    }

    .box li {
        list-style-type: none;
        font-size: 20px;
        line-height: 30px;
    }

    .box h2 {
        font-weight: bold;
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý đơn hàng</h1>
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
                            <h3 class="card-title">Chi tiết đơn hàng</h3>
                        </div>
                        <div class="box">
                            <h2>Thông tin người nhận</h2>
                            <?php
                            if (isset($one_hoa_don)) {
                                extract($one_hoa_don);
                            } else {
                                echo "<p>Không có thông tin người nhận.</p>";
                            }
                            ?>
                            <ul>
                                <li>Tên người nhận: <strong><?= htmlspecialchars($ten_nguoi_nhan ?? 'N/A') ?></strong>
                                </li>
                                <li>Số điện thoại người nhận:
                                    <strong><?= htmlspecialchars($sdt_nguoi_nhan ?? 'N/A') ?></strong></li>
                                <li>Địa chỉ người nhận:
                                    <strong><?= htmlspecialchars($dia_chi_nguoi_nhan ?? 'N/A') ?></strong></li>
                                <li>Email người nhận:
                                    <strong><?= htmlspecialchars($email_nguoi_nhan ?? 'N/A') ?></strong></li>
                            </ul>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <h4>Thông tin sản phẩm</h4>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Mã sản phẩm</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Ảnh sản phẩm</th>
                                        <th>Giá sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($list_hoa_don_ct) && is_array($list_hoa_don_ct)) {
                                        foreach ($list_hoa_don_ct as $list) {
                                            echo '<tr>
                                                <td>' . htmlspecialchars($list['id']) . '</td>
                                                <td>' . htmlspecialchars($list['id_san_pham']) . '</td>
                                                <td>' . htmlspecialchars($list['ten_san_pham']) . '</td>
                                                <td><img src="../../img/' . htmlspecialchars($list['img_sp']) . '" style="width: 100px;"></td>
                                                <td>' . htmlspecialchars($list['gia_san_pham']) . '$</td>
                                                <td>' . htmlspecialchars($list['so_luong']) . '</td>
                                                <td>' . htmlspecialchars($list['thanh_tien']) . '$</td>
                                            </tr>';
                                        }
                                    } else {
                                        echo '<tr><td colspan="8">Không có thông tin sản phẩm.</td></tr>';
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="7"><strong>Tổng tiền: </strong></td>
                                        <td><strong><?= htmlspecialchars($tong_tien ?? '0') ?>$</strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                            <a href="index.php?act=list_dh"><button type="button" class="btn btn-success"><i class="fa-solid fa-backward"></i> Quay lại</button></a>
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