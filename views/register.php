<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>	
			@import url(http://fonts.googleapis.com/css?family=Montserrat:400,700|Handlee);
			body {
				background: #eedfcc url(assets/images/bg3.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.5);
			}
		</style>
    </head>
    <body>
        <div class="container">
			
			<header>
			
				<h1><strong>IPL Fantasy League </strong></h1>
				


				<div class="support-note">
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>
			<?php
			if(isset($taken)) {
				echo "<h1 style='color:white; text-align:center;'>Username Already Exist</h1>";
			}

			?>
			<section class="main">
				<form class="form-5 clearfix"   method="post">
				    <p>
				        <input type="text" id="login" name="login" placeholder="Username">
						<input type="hidden" id="login" name="action" value="register">
				        <input type="password" name="password" id="password" placeholder="Password">
						<input type="text" name="fteam" id="fteam" placeholder="Your Team Name"> 
				    </p>

				    <button type="submit" name="submit" style="height:155px">
				    	<i class="icon-arrow-right" style="top: 16%;"></i>
				    	<span>Register</span>
				    </button>     
				</form>
				<h3><a href="?">Login</a></h3>
			</section>
			
        </div>

		<script type="text/javascript">
		$(function(){
			$('input, textarea').placeholder();
		});
		</script>
    </body>
</html>