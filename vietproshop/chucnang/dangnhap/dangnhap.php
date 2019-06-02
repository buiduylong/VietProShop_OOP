<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css" media="screen">

    body {font-family: Arial, Helvetica, sans-serif;}

    /* Full-width input fields */
    input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
        background-color: #4CAF50;
        color: white;
        padding: 0px 10px;
        border: none;
        cursor: pointer;
        width: 100%;
        height: 30px;


    }

    button:hover {
        opacity: 0.8;
    }

    .fix-button{
        padding-left: 0px;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        width: 10px;
        padding: 10px 10px;
        background-color: #f44336;
    }

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: red;
        cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
        from {-webkit-transform: scale(0)} 
        to {-webkit-transform: scale(1)}
    }

    @keyframes animatezoom {
        from {transform: scale(0)} 
        to {transform: scale(1)}
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
         display: block;
         float: none;
     }
     .cancelbtn {
         width: 100%;
     }
 }
</style>
</head>
<!-- <?php
include_once '././quantri/ketnoi.php';

if(isset($_POST["submit"])){
    $email=$_POST["email"];
    $mk=$_POST["mk"];
    if(isset($email)&&isset($mk)){
        $sql="SELECT * FROM thanhvien WHERE email='$email' AND mat_khau='$mk'";
        $query=mysqli_query($conn,$sql);
        $rows= mysqli_num_rows($query);
        if($rows>0){
            $_SESSION["email"]=$email;
            $_SESSION["mk"]=$mk;
            header('location: ../../index2.php');
        }
        else{
            echo '<center class="alert alert-danger">Tài khoản không tồn tại hoặc bạn không có quyền truy cập</center>';
        }
    }
}
?> -->
<body>
    <div class="col-md-1 col-sm-12 col-xs-12 fix-button">
     <a href="http://localhost:88/vietproshop/quantri/dangnhap.php" ><button>Log in</button></a>

     <!-- <div id="id01" class="modal">

        <form class="modal-content animate" method="post" action="">
          <div class="container">
              <label><b>Email</b></label>
              <input type="text" placeholder="Email của bạn" name="email" required>

              <label><b>Mật khẩu</b></label>
              <input type="password" placeholder="Mật khẩu của bạn" name="mat_khau" required>

              <button type="submit">Đăng nhập</button>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Ghi nhớ
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Hủy</button>
          <span>Quên <a href="#">mật khẩu?</a></span>
      </div>
  </form>
</div> -->
</div>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
