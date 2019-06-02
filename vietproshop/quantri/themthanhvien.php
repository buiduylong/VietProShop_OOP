<?php 
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $mat_khau=$_POST['mat_khau'];
    $quyen_truy_cap=$_POST['quyen_truy_cap'];

    if (isset($email) && isset($mat_khau) && isset($quyen_truy_cap)) {
        $sql="INSERT INTO thanhvien(email, mat_khau, quyen_truy_cap) VALUES('$email', '$mat_khau', '$quyen_truy_cap')";
        $query= mysqli_query($conn, $sql);
        header('location: quantri.php?page_layout=danhsachthanhvien');
    }

}

?>
<div class="row">
    <ol class="breadcrumb">
        <li><a href="quantri.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active"></li>
    </ol>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Thêm thành viên mới</h1>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Thêm thành viên mới</div>
            <div class="panel-body">

                <form method="post" enctype="multipart/form-data" role="form">

                    <div class="form-group">
                        <label>Email thành viên</label>
                        <input type="email" class="form-control"  name="email" required="">
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="text" class="form-control" name="mat_khau" required="">
                    </div>
                    
                    <div class="form-group">
                        <label>Quyền truy cập</label>
                        <select name="quyen_truy_cap" class="form-control">
                            <option value="unselectd" selected>Lựa chọn quyền truy cập</option>
                            <option value="1">Quản trị viên</option>
                            <option value="2">Thành viên</option>
                        </select>
                    </div>                 

                    <button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
                    <button type="reset" class="btn btn-default" name="reset">Làm mới</button>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->

