<?php

require_once('db.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"
    />
    <!--Font google en-th-->
    <link
      href="https://fonts.googleapis.com/css?family=Mukta|Sarabun&display=swap" rel="stylesheet"/>
    <!--ลิ้ง css-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/index.css" />
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>RAFFLAEK</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#008489">
  <div class="container">
  <a class="navbar-brand" href="#"><img src="/img/logo.png" width="140"  class="d-inline-block align-top" alt=""></a></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size:1.2rem">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">หน้าแรก <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">รายการ</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="loginchat.php">แชท</a>
      </li>
     
      
    </ul>
	<ul class="navbar-nav ml-auto">
		 <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  เข้าสู่ระบบ/สมัครสมาชิก
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
			  <a class="dropdown-item" href="login.php">เข้าสู่ระบบ</a>
			  <a class="dropdown-item" href="registration.php">สมัครสมาชิก</a>

			</div>
		  </li>
	</ul>
 
  </div>
  </div>
</nav>
	<div class="container mt-4">
		<?php include('show_product.php'); ?>
	</div>
</body>
</html>





