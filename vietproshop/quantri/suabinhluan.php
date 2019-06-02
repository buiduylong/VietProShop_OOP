<?php 
$id_bl = $_GET['id_bl'];

$sql2= "SELECT * FROM blsanpham INNER JOIN sanpham ON blsanpham.id_sp=sanpham.id_sp WHERE blsanpham.id_bl=$id_bl";
$query2 = mysqli_query($conn, $sql2);
$row = mysqli_fetch_array($query2);

if(isset($_POST['submit'])){
    $ten=$_POST['ten'];
    $dien_thoai=$_POST['dien_thoai'];
    $binh_luan=$_POST['binh_luan'];

    if (isset($ten) && isset($dien_thoai) && isset($binh_luan)) {
        $sql="UPDATE blsanpham SET ten='$ten', dien_thoai='$dien_thoai', binh_luan='$binh_luan' WHERE blsanpham.id_bl=$id_bl";
        $query = mysqli_query($conn, $sql);
        header('location: quantri.php?page_layout=danhsachbinhluan');
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
        <h1 class="page-header">Sửa bình luận</h1>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Sửa bình luận</div>
            <div class="panel-body">

                <form method="post" enctype="multipart/form-data" role="form">
                        <div class="form-group">
                            <label>Tên người bình luận</label>
                            <input type="text" class="form-control"  name="ten" value="<?php echo $row['ten']; ?>" required="">
                        </div>
                        <div class="form-group">
                            <label>Điện thoại</label>
                            <input type="text" class="form-control" name="dien_thoai" value="<?php echo $row['dien_thoai']; ?>" required="">
                        </div>

                        <div class="form-group">
                            <label>Sản phẩm bình luận</label>
                            <input type="text" class="form-control" name="ten_sp" value="<?php echo $row['ten_sp']; ?>" required="" disabled>
                        </div>

                        <div class="form-group">
                            <label>Nội dung bình luận</label>
                            <textarea required="" class="form-control" rows="3" name="binh_luan"><?php if(isset($_POST['binh_luan'])){echo $_POST['binh_luan'];} else{echo $row['binh_luan'];}  ?></textarea>
                            <script type="text/javascript" charset="utf-8">
                                CKEDITOR.replace('binh_luan');
                            </script>
                        </div>
                    <button type="submit" class="btn btn-primary" name="submit">Cập nhật</button>
                    <button type="reset" class="btn btn-default" name="reset">Làm mới</button>


                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->

