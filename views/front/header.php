<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styleCreerCompte.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

		
			<ul class="nav navbar-nav navbar-right">
                     <?php  
                      if(isset($_SESSION['Name']))
                      { $username=$_SESSION["Name"];
                        ?>
			<li><a href="#" class="wish"></span>Welcome <?php echo"$username" ;?> <span class="login"></span></a>
                      <?php }else{?>
			<li><a href="login.php" class="wish"></span>Log In <span class="login"></span></a>
                        <?php  }?>
                         <?php  
                      if(isset($_SESSION['Name']))
                      { $username=$_SESSION["Name"];
                        ?>
				<li><a href="wishlist.php" class="wish"></span>Wishlist <span class="badgew">0</span></a>
                      <?php }else{?>
                        <li><a href="login.php" class="wish"></span>Wishlist <span class="badgew">0</span></a>
                        <?php  }?>
                        

				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
								<div class="col-md-3">Product ID</div>

									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price</div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
							
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				
				</li>
			</ul>
		</div>
	</div>
</div>	

</body>
</html>