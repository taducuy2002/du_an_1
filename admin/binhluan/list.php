<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quản lý bình luận</title>
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
</head>

<body>
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý bình luận</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
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
                <h3 class="card-title">Danh sách bình luận</h3>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>ID Tài khoản</th>
                      <th>ID Sản phẩm</th>
                      <th>Nội dung bình luận</th>
                      <th>Ngày bình luận</th>
                      <th>Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($listbinhluan as $binhluan): ?>
                      <tr>
                        <td><?= $binhluan['idbl'] ?></td>
                        <td><?= $binhluan['id_user'] ?></td>
                        <td><?= $binhluan['id_pro'] ?></td>
                        <td><?= $binhluan['noidung'] ?></td>
                        <td><?= $binhluan['ngaybinhluan'] ?></td>
                        <td>
                          <a onclick="return confirm('Bạn có chắc chắn muốn xóa bình luận này hay không?')"
                            href="index.php?act=xoabl&idbl=<?= $binhluan['idbl'] ?>">
                            <input type="button" value="Xóa" class="button">
                          </a>
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
</body>

</html>