<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db.php";
if(isset($_POST["getProduct"])){

	$product_query = "SELECT * FROM products ";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$pro_brand = $row['product_brand'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
			echo "
				<div class='col-md-4'>
							<div class='panel panel-info'>
								<div class='panel-heading'>$pro_title</div>
								<div class='panel-body'>
									<img src='../product_images/$pro_image' style='width:160px; height:250px;'/>
								</div>

								<div class='panel-heading'>$pro_price.00 DT
								</form>
									<button pid='$pro_id' style='float:right;' id='product' class='btn btn-danger btn-xs'>AddToCart</button>
									<button pid='$pro_id' style='float:right;' id='wishh' class='btn btn-danger btn-xs'>AddToWishlist</button>

								</div>
								
							</div>
							
						</div>	
			";
		}
	} 
}

	
	if(isset($_POST["AddToWishlist"])){
		

		$p_id = $_POST["proId"];
		

		if(isset($_SESSION["uid"])){

		$user_id = $_SESSION["uid"];

		$sql = "SELECT * FROM wishlist WHERE p_id = '$p_id' AND user_id = '$user_id'";
		$run_query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($run_query);
		if($count > 0){
			$sql  = "UPDATE wishlist SET qty = qty + 1 WHERE p_id = '$p_id' AND user_id = '$user_id'";
			if(mysqli_query($con,$sql)){
				
			}
		} else {
			$sql = "INSERT INTO `wishlist`
			(`p_id`, `ip_add`, `user_id`, `qty`) 
			VALUES ('$p_id','$ip_add','$user_id','1')";
			if(mysqli_query($con,$sql)){
			
			}
		}
		}else{
			$sql = "SELECT id FROM wishlist WHERE ip_add = '$ip_add' AND p_id = '$p_id' AND user_id = -1";
			$query = mysqli_query($con,$sql);
			if (mysqli_num_rows($query) > 0) {
				$sql  = "UPDATE wishlist SET qty = qty + 1 WHERE ip_add = '$ip_add' AND p_id = '$p_id' AND user_id = -1";
				if(mysqli_query($con,$sql)){
				
				}
					exit();
			}
			$sql = "INSERT INTO `wishlist`
			(`p_id`, `ip_add`, `user_id`, `qty`) 
			VALUES ('$p_id','$ip_add','-1','1')";
			if (mysqli_query($con,$sql)) {
			
				exit();
			}
			
		}
		
		
		
		
	}



	if(isset($_POST["addToCart"])){
		

		$p_id = $_POST["proId"];
		

		if(isset($_SESSION["uid"])){

		$user_id = $_SESSION["uid"];

		$sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
		$run_query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($run_query);
		if($count > 0){
			$sql  = "UPDATE cart SET qty = qty + 1 WHERE p_id = '$p_id' AND user_id = '$user_id'";
			if(mysqli_query($con,$sql)){
				
			}
		} else {
			$sql = "INSERT INTO `cart`
			(`p_id`, `ip_add`, `user_id`, `qty`) 
			VALUES ('$p_id','$ip_add','$user_id','1')";
			if(mysqli_query($con,$sql)){
				
			}
		}
		}else{
			$sql = "SELECT id FROM cart WHERE ip_add = '$ip_add' AND p_id = '$p_id' AND user_id = -1";
			$query = mysqli_query($con,$sql);
			if (mysqli_num_rows($query) > 0) {
				$sql  = "UPDATE cart SET qty = qty + 1 WHERE ip_add = '$ip_add' AND p_id = '$p_id' AND user_id = -1";
				if(mysqli_query($con,$sql)){
				
				}
					exit();
			}
			$sql = "INSERT INTO `cart`
			(`p_id`, `ip_add`, `user_id`, `qty`) 
			VALUES ('$p_id','$ip_add','-1','1')";
			if (mysqli_query($con,$sql)) {
				
				exit();
			}
			
		}
		
		
		
		
	}

	if (isset($_POST["count_item"])) {
		if (isset($_SESSION["uid"])) {
			$sql = "SELECT COUNT(*) AS count_item FROM cart WHERE user_id = $_SESSION[uid]";
		}else{
			$sql = "SELECT COUNT(*) AS count_item FROM cart WHERE ip_add = '$ip_add' AND user_id < 0";
		}
		
		$query = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($query);
		echo $row["count_item"];
		exit();
	}

if (isset($_POST["count_wishs"])) {
	if (isset($_SESSION["uid"])) {
		$sql = "SELECT COUNT(*) AS count_wishs FROM wishlist WHERE user_id = $_SESSION[uid]";
	}else{
		$sql = "SELECT COUNT(*) AS count_wishs FROM wishlist WHERE ip_add = '$ip_add' AND user_id < 0";
	}
	
	$query = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($query);
	echo $row["count_wishs"];
	exit();
}


if(isset($_SESSION['order'])){
	$order = $_SESSION['order'];
}else{
	$order='Prix';
}
if(isset($_SESSION['sort'])){
	$sort=$_SESSION['sort'];
}else{
	$sort='DESC';
}

if (isset($_POST["Common"])) {


	if (isset($_SESSION["uid"])) {
		$sql = "SELECT a.id as product_id ,a.Nom as product_title,a.Prix as product_price,a.Image as product_image,b.id,b.qty FROM produit a,cart b WHERE a.id=b.p_id AND b.user_id='$_SESSION[uid]' ORDER BY $order $sort";
	}else{
		$sql = "SELECT a.id as product_id ,a.Nom as product_title,a.Prix as product_price,a.Image as product_image,b.id,b.qty FROM produit a,cart b WHERE a.id=b.p_id AND b.ip_add='$ip_add' AND b.user_id < 0 ORDER BY $order $sort";
	}
	$query = mysqli_query($con,$sql);
	if (isset($_POST["getCartItem"])) {
		if (mysqli_num_rows($query) > 0) {
			$n=0;
			while ($row=mysqli_fetch_array($query)) {
				$n++;
				$product_id = $row["product_id"];
				$product_title = $row["product_title"];
				$product_price = $row["product_price"];
				$product_image = $row["product_image"];
				$cart_item_id = $row["id"];
				$qty = $row["qty"];
				echo '
					<div class="row">
						<div class="col-md-3">'.$n.'</div>
						<div class="col-md-3"><img class="img-responsive" src="Image/'.$product_image.'" /></div>
						<div class="col-md-3">'.$product_title.'</div>
						<div class="col-md-3"<a href="?order=Prix&&sort=$sort">'.$product_price.' DT </a></div>
					</div>';
				
			}
			?>
				<a style="float:right;" href="cart.php" class="btn btn-warning">Edit&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></span></a>
			<?php
			exit();
		}
	}
	if (isset($_POST["checkOutDetails"])) {
		if (mysqli_num_rows($query) > 0) {
			echo "<form method='post' action='checkout.php'>";
				$n=0;
				while ($row=mysqli_fetch_array($query)) {
					$n++;
					$product_id = $row["product_id"];
					$product_title = $row["product_title"];
					$product_price = $row["product_price"];
					$product_image = $row["product_image"];
					$cart_item_id = $row["id"];
					$qty = $row["qty"];

					echo 
						'<div class="row">
								<div class="col-md-2">
									<div class="btn-group">
										<a href="#" remove_id="'.$product_id.'" class="btn btn-danger remove"><span class="glyphicon glyphicon-trash"></span></a>
										<a href="#" update_id="'.$product_id.'" class="btn btn-primary update"><span class="glyphicon glyphicon-ok-sign"></span></a>
									</div>
								</div>
								<input type="hidden" name="product_id[]" value="'.$product_id.'"/>
								<input type="hidden" name="" value="'.$cart_item_id.'"/>
								<div class="col-md-2"><img class="img-responsive" src="Image/'.$product_image.'"></div>
								<div class="col-md-2">'.$product_title.'</div>
								<div class="col-md-2"><input type="text" class="form-control qty" value="'.$qty.'" ></div>

								<div class="col-md-2"><input type="" class="form-control price" value="'.$product_price.'" readonly="readonly"></div>
								<div class="col-md-2"><input type="text" class="form-control total" value="'.$product_price. ' " readonly="readonly"></div>

								</div>';
				}
				
				echo '<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-4">
								<b class="net_total" style="font-size:20px;"> DT </b>
					</div>';
				if (!isset($_SESSION["uid"])) {
					echo '<input type="submit" style="float:right;" name="login_user_with_product" class="btn btn-info btn-lg" value="Valider" >
							</form>';
					
								}
			}
	}
	
	
}

if (isset($_POST["wishs"])) {

	if (isset($_SESSION["uid"])) {
		$sql = "SELECT a.id as product_id ,a.Nom as product_title,a.Prix as product_price,a.Image as product_image,b.id,b.qty FROM produit a,wishlist b WHERE a.id=b.p_id AND b.user_id='$_SESSION[uid]'ORDER BY $order $sort";
	}else{
		$sql = "SELECT a.id as product_id ,a.Nom as product_title,a.Prix as product_price,a.Image as product_image,b.id,b.qty FROM produit a,wishlist b WHERE a.id=b.p_id AND b.ip_add='$ip_add' AND b.user_id < 0 ORDER BY $order $sort";
	}
	$query = mysqli_query($con,$sql);

	if (isset($_POST["wishlistdet"])) {
		if (mysqli_num_rows($query) > 0) {
			echo "<form method='post' action='#'>";
				$n=0;
				while ($row=mysqli_fetch_array($query)) {
					$n++;
					$product_id = $row["product_id"];
					$product_title = $row["product_title"];
					$product_price = $row["product_price"];
					$product_image = $row["product_image"];
					$cart_item_id = $row["id"];
					$qty = $row["qty"];

					echo 
						'<div class="row">
								<div class="col-md-2">
									<div class="btn-group">
										<a href="#" remove_id="'.$product_id.'" class="btn btn-danger remove"><span class="glyphicon glyphicon-trash"></span></a>
										<a href="#" update_id="'.$product_id.'" class="btn btn-primary update"><span class="glyphicon glyphicon-ok-sign"></span></a>
									</div>
								</div>
								<input type="hidden" name="product_id[]" value="'.$product_id.'"/>
								<input type="hidden" name="" value="'.$cart_item_id.'"/>
								<div class="col-md-2"><img class="img-responsive" src="Image/'.$product_image.'"></div>
								<div class="col-md-2">'.$product_title.'</div>
								<div class="col-md-2"><input type="text" class="form-control qty" value="'.$qty.'" ></div>

								<div class="col-md-2"><input type="" class="form-control price" value="'.$product_price.'" readonly="readonly"></div>
								<div class="col-md-2"><input type="text" class="form-control total" value="'.$product_price. ' " readonly="readonly"></div>

								</div>';
				}
				
				echo '<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-4">
								<b class="net_total" style="font-size:20px;"> DT </b>
					</div>';
				if (!isset($_SESSION["uid"])) {
					echo '<input type="submit" style="float:right;" name="login_user_with_product" class="btn btn-info btn-lg" value="Valider" >
							</form>';
					
								}
			}
	}
	
	
}

if (isset($_POST["removeItemFromCart"])) {
	$remove_id = $_POST["rid"];
	if (isset($_SESSION["uid"])) {
		$sql = "DELETE FROM cart WHERE p_id = '$remove_id' AND user_id = '$_SESSION[uid]'";
	}else{
		$sql = "DELETE FROM cart WHERE p_id = '$remove_id' AND ip_add = '$ip_add'";
	}
	if(mysqli_query($con,$sql)){
		echo "<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is removed from cart</b>
				</div>";
		exit();
	}
}

if (isset($_POST["removeItemFromwishlist"])) {
	$remove_id = $_POST["rid"];
	if (isset($_SESSION["uid"])) {
		$sql = "DELETE FROM wishlist WHERE p_id = '$remove_id' AND user_id = '$_SESSION[uid]'";
	}else{
		$sql = "DELETE FROM wishlist WHERE p_id = '$remove_id' AND ip_add = '$ip_add'";
	}
	if(mysqli_query($con,$sql)){
		echo "<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is removed from wishlist</b>
				</div>";
		exit();
	}
}


if (isset($_POST["updateCartItem"])) {
	$update_id = $_POST["update_id"];
	$qty = $_POST["qty"];
	if (isset($_SESSION["uid"])) {
		$sql = "UPDATE cart SET qty='$qty' WHERE p_id = '$update_id' AND user_id = '$_SESSION[uid]'";
	}else{
		$sql = "UPDATE cart SET qty='$qty' WHERE p_id = '$update_id' AND ip_add = '$ip_add'";
	}
	if(mysqli_query($con,$sql)){
		echo "<div class='alert alert-info'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is updated</b>
				</div>";
		exit();
	}
}
if (isset($_POST["updatewishlistItem"])) {
	$update_id = $_POST["update_id"];
	$qty = $_POST["qty"];
	if (isset($_SESSION["uid"])) {
		$sql = "UPDATE wishlist SET qty='$qty' WHERE p_id = '$update_id' AND user_id = '$_SESSION[uid]'";
	}else{
		$sql = "UPDATE wishlist SET qty='$qty' WHERE p_id = '$update_id' AND ip_add = '$ip_add'";
	}
	if(mysqli_query($con,$sql)){
		echo "<div class='alert alert-info'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is updated</b>
				</div>";
		exit();
	}
}




?>






