<style>
    a button[type="submit"] {
        color: white;
        padding: 8px;
        border: 1px solid;
        background-color: green;
        border-radius: 5px 5px 5px 5px;
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
                    <h1>Thêm sản phẩm</h1>
                </div>
                <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            <a href="index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                    </ul>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
                                        Tên sản phẩm <br>
                                        <input type="text" name="tensp"><br><br>
                                        Giá <br>
                                        <input type="text" name="gia"><br><br>
                                        image <br>
                                        <input type="file" name="img" accept="image/*"><br><br>
                                        mô tả <br>

                                        <textarea name="mota" cols="150" rows="10"></textarea><br><br>
                                        
                                        Danh mục sản phẩm
                                            <select name="iddm" id="">
                                            <option value="0">Chọn danh muc</option>
                                                <?php
                                                foreach ($list_danhmuc as $danh_muc) {
                                                    extract($danh_muc);
                                                    echo '<option value="'.$id.'">' .$ten_danh_muc. '</option>';
                                                   }
                                                ?>
                                            </select><br> <br>
                                        </div>

                                        <input type="submit" name="themmoi" value="Thêm sản phẩm" class="btn btn-primary">
                                    </form>
                                    <a href="index.php?act=listsp"><input type="button" value="Trở về danh sách" class="btn btn-primary"></a>
                                </thead>
                                </tfoot>
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