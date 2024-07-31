<main>
    <div class="head-title">
        <div class="left">
            <h1>Tổng quan</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Trang Chủ</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Tổng Quan </a>
                </li>
            </ul>
        </div>
    </div>

    <ul class="box-info">
        <!-- Hiển thị tổng số đơn hàng -->
        <li>
            <i class='bx bxs-calendar-check'></i>
            <span class="text">
                <?php
                // Tính tổng số đơn hàng
                $total_orders = 0;
                foreach ($count_bill as $bill) {
                    $total_orders += $bill['count'];
                }
                ?>
                <h3><?= $total_orders ?></h3>
                <p>Đơn Hàng</p>
            </span>
        </li>

        <!-- Hiển thị tổng số khách hàng -->
        <li>
            <i class='bx bxs-group'></i>
            <span class="text">
                <?php
                // Tính tổng số khách hàng
                $total_customers = 0;
                foreach ($count_account as $ac) {
                    $total_customers += $ac['count'];
                }
                ?>
                <h3><?= $total_customers ?></h3>
                <p>Khách Hàng</p>
            </span>
        </li>

        <!-- Hiển thị tổng doanh thu -->
        <li>
            <i class='bx bxs-dollar-circle'></i>
            <span class="text">
                <?php
                // Tính tổng doanh thu
                $total_revenue = 0;
                foreach ($Sum_total as $money) {
                    $total_revenue += $money['doanh_thu'];
                }
                ?>
                <h3><?= number_format($total_revenue, 0, '.', ',') ?> $</h3>
                <p>Tổng Doanh Thu</p>
            </span>
        </li>
    </ul>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Đơn Hàng Gần Đây </h3>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Khách Hàng</th>
                        <th>Ngày</th>
                        <th>Trạng Thái</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($loadAll_bill_home as $bill): ?>
                        <?php
                        // Trích xuất thông tin đơn hàng
                        $kh = $bill["ten_nguoi_nhan"] . '<br>' . $bill["email_nguoi_nhan"];
                        $trangthaidh = get_ttdh($bill["trang_thai"]);
                        ?>
                        <tr>
                            <td>
                                <p><?= $kh ?></p>
                            </td>
                            <td>
                                <p><?= $bill["ngay_dat_hang"] ?></p>
                            </td>
                            <td>
                                <!-- Hiển thị trạng thái đơn hàng với các lớp CSS tương ứng -->
                                <span class="<?php
                                switch ($bill["trang_thai"]) {
                                    case 0:
                                        echo 'status completed';
                                        break;
                                    case 1:
                                        echo 'status pending';
                                        break;
                                    case 2:
                                        echo 'status cancel';
                                        break;
                                    case 3:
                                        echo 'status process';
                                        break;
                                    case 4:
                                        echo 'status bluecheck';
                                        break;
                                } ?>">
                                    <?= $trangthaidh ?>
                                </span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>