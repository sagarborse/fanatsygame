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
			<section class="main">
				<form class="form-5 clearfix" method="post">
				    <p>
				        <input type="text" id="login" name="login" placeholder="Username">
				        <input type="password" name="password" id="password" placeholder="Password"> 
				    </p>
				    <button type="submit" name="submit">
				    	<i class="icon-arrow-right"></i>
				    	<span>Sign in</span>
				    </button>     
				</form>
				<h3>
				<form class="form-5 clearfix" method="post">
				<input type="hidden" name="action" value="register">
				<input style="font-size: 18px;background-color: orange;" type="submit" value="Register">
				</form>
				</h3>​​​​
			</section>

			
        </div>

		<script type="text/javascript">
		$(function(){
			$('input, textarea').placeholder();
		});
		</script>
    </body>
</html>