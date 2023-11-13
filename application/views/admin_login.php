<!DOCTYPE html>
<html>
<head>
	<title>Login Form VSN ASSETS</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin-login/style.css'); ?>">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <link href="<?php echo base_url('assets/img/favicon.png'); ?>" rel="icon">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<div class="img">
			<img src="<?php echo base_url('assets/img/logo/LOGO-MERCHANDISE1.png'); ?>">
		</div>
		<div class="login-content">
			<form action="<?php echo base_url('Admin/Login'); ?>" method="post">
				<img src="<?php echo base_url('assets/img/logo/LOGO-MERCHANDISE1.png'); ?>">
				<h2 class="title">Welcome</h2>
          <h4 class="title">IMAGINE</h4>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="username" class="input" style="text-transform: uppercase;">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input">
            	   </div>
            	</div>
              <font color="red">
                <?php 
                    echo $this->session->flashdata('error'); 
                  ?>
                </font>
            	<!-- <a href="#">Forgot Password?</a> -->
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url('assets/admin-login/js/main.js'); ?>"></script>
</body>
</html>