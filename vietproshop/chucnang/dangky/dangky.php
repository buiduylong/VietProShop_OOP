<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
	body {font-family: Arial, Helvetica, sans-serif;}
	* {box-sizing: border-box;}

	/* Full-width input fields */
	input[type=text], input[type=password] {
		width: 100%;
		padding: 15px;
		margin: 5px 0 22px 0;
		display: inline-block;
		border: none;
		background: #f1f1f1;
	}

	/* Add a background color when the inputs get focus */
	input[type=text]:focus, input[type=password]:focus {
		background-color: #ddd;
		outline: none;
	}

	/* Set a style for all buttons */
	button {
		background-color: #4CAF50;
		color: white;
		padding: 0px 10px;
		border: none;
		cursor: pointer;

		opacity: 0.9;
	}

	button:hover {
		opacity:1;
	}

	.fix-button{
        padding-left: 0px;
    }

	/* Extra styles for the cancel button */
	.cancelbtn {
		padding: 0px 20px;
		background-color: #f44336;
	}

	/* Float cancel and signup buttons and add an equal width */
	.cancelbtn, .signupbtn {
		float: left;
		width: 50%;
	}

	/* Add padding to container elements */
	.container {
		padding: 16px;
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
		background-color: #474e5d;
		padding-top: 50px;
	}

	/* Modal Content/Box */
	.modal-content {
		background-color: #fefefe;
		margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
		border: 1px solid #888;
		width: 80%; /* Could be more or less, depending on screen size */
	}

	/* Style the horizontal ruler */
	hr {
		border: 1px solid #f1f1f1;
		margin-bottom: 25px;
	}

	/* The Close Button (x) */
	.close {
		position: absolute;
		right: 35px;
		top: 15px;
		font-size: 40px;
		font-weight: bold;
		color: #f1f1f1;
	}

	.close:hover,
	.close:focus {
		color: #f44336;
		cursor: pointer;
	}

	/* Clear floats */
	.clearfix::after {
		content: "";
		clear: both;
		display: table;
	}

	/* Change styles for cancel button and signup button on extra small screens */
	@media screen and (max-width: 300px) {
		.cancelbtn, .signupbtn {
			width: 100%;
		}
	}
</style>
</head>
<body>
	<?php 
	include_once '././quantri/ketnoi.php';
	if(isset($_POST['submit2'])){
		$email=$_POST['email'];
		$mat_khau=$_POST['mat_khau'];
		$quyen_truy_cap=2;

		if (isset($email) && isset($mat_khau) && isset($quyen_truy_cap)) {
			$sql="INSERT INTO thanhvien(email, mat_khau, quyen_truy_cap) VALUES('$email', '$mat_khau', '$quyen_truy_cap')";
			$query= mysqli_query($conn, $sql);
			header('location: index.php');
		}

	}

	?>
	<div id="id02" class="modal fix-button">
		<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
		<form class="modal-content" method="post">
			<div class="container" action="">
				<h1>Đăng ký</h1>
				<p>Điền thông tin của bạn để đăng ký</p>
				<hr>
				<label for="email"><b>Email</b></label>
				<input class="form-control" type="email" placeholder="Email của bạn" name="email" required>

				<label for="psw"><b>Mật khẩu</b></label>
				<input class="form-control" type="password" placeholder="Mật khẩu" name="mat_khau" required>

				<!-- <label for="psw"><b>Quyền truy cập</b></label> -->
				<!-- <input type="hidden" name="quyen_truy_cap" value="2"> -->

				

				<div class="clearfix">
					<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Hủy</button>
					<button type="submit" name="submit2" class="signupbtn">Đăng ký</button>
				</div>
			</div>
		</form>
	</div>
	
	<div class="col-md-1 col-sm-12 col-xs-12">
		<button onclick="document.getElementById('id02').style.display='block'" style="width:100%;">Sign up</button>
	</div>


	<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}
</script>

</body>
</html>
