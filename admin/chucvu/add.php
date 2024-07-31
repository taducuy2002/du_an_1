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
                    <h1>Thêm chức vụ</h1>
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
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="index.php?act=addcv" method="POST">
                                <div class="form-group">
                                    <label for="id">ID</label>
                                    <input type="text" name="id" id="id" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="tencv">Tên chức vụ</label>
                                    <input type="text" name="tencv" id="tencv" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="mota">Mô tả</label>
                                    <input type="text" name="mota" id="mota" class="form-control">
                                </div>
                                <input type="submit" name="themmoi" value="Thêm chức vụ" class="btn btn-primary">
                            </form>
                            <a href="index.php?act=listcv" class="btn btn-secondary">Trở về danh sách</a>
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