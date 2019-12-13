<!doctype html>

<html class="no-js" lang=""> 
<head>
<style>
 *{margin :0; padding :0; }
    body{
		-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    font-family: Helvetica ,sans-serif; 
            background-image : url("../views/Image/h2-img-4a.jpg");
     
       }
 </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="Login Admin">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="logo.png">
    <link rel="shortcut icon" href="logo.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="css/cs-skin-elastic.css">
    <link rel="stylesheet" href="css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body class="bg-white">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="#">
                    </a>
                </div>
                <div class="login-form bg-dark">
                    <form method="post" onsubmit="return verifForm(this)" >
                        <div class="form-group">
                            <label>Adresse email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" oninput="verifMail(this)">
                        </div>
                        <div class="form-group">
                            <label>Mot de passe</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" oninput="verifPass(this)">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Se souvenir de moi
                            </label>
                        </div>
                        <input type="submit" name="login_btn" class="btn btn-success btn-flat m-b-30 m-t-30" value="Login" >
                    </form>
<?php
session_start();
include "../../core/LoginC.php";
if(isset($_POST['login_btn']))
{
$user = $_POST['email'];
$pass = $_POST['password'];
$Login1C=new LoginC();
$n=1;


if(empty($user) || empty($pass)) 
{
	?>
	<script type="text/javascript">
       var msg="Username/Password can't be empty";
       console.log(msg)
       alert(msg);
   
</script>
<?php
}
 else 
{
	$r=$Login1C->login($user,$pass);

    foreach ($r as $key) 
    {
        if ($key['email']==$user && $key['password']==$pass) 
		{
			$n++;
            if($key['role']==1) {
                $_SESSION["login_in"] = "true";
                $_SESSION["ID"] = $key['user_id'];
                $_SESSION['Name']= $key['first_name'];
                header("location: ../back");
            }
            else
            {
                $_SESSION["login_in"] = "true";
                $_SESSION["ID"] = $key['user_id'];
                $_SESSION['Name']= $key['first_name'];

                header("location:produit.php");
            }
            
        }
        else
        {
            $_SESSION["login_in"] = 0;
        }
    }
}

}


	

?>

                </div>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
