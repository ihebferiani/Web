<?PHP
session_start();
include "../../core/ProduitCore.php";
include "db.php";
$Produit1C=new ProduitCore();
$ListeProduit=$Produit1C->afficherProduit();

?>
<!DOCTYPE html>


<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link type="text/css" rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>

		<link rel="stylesheet" type="text/css" href="style.css">


<style>
 *{margin :0; padding :0; }
    body{
           max-width: 1240px;
           width:100%;
        
           background-color:#f6f6f6; 
           margin: auto auto;
        

           
           
           /* background:radial-gradient(circle at center ,#ffb701,#78960f, #14500a); */
       }

         .ladyvache {

            display:flex;
            flex-wrap:wrap;
            background-image : url("../front/image/milk-background.jpg");
            background-size:990px;
            

                    }

         .ladyvache-card {

           flex: 16%;
                
           padding: 1%;
           /* background-color:#fff; */
           box-shadow:20px;

         
            border: 2px solid white; 


                         
             }

        .ladyvache-image {
                
            }
        .ladyvache-image img {

                max-width:100%;
               

               }      


        .ladyvache-info {
            
            text-align:center;


        }

        
       @media (max-width: 920px) {

           .ladyvache-card {

             flex: 1 21%;
         

           }


           .ladyvache .ladyvache-card: first-child,
           .ladyvache .ladyvache-card:nth-child(2){
                   flex: 2 46% ;
           }
       }

       @media (max-width:600px){

               .ladyvache-card {

                       flex:1 46%;
                       
               }

       }


       #wishh{
               align:center;
               color:#ffb701;
               cursor: pointer;
               margin-right:10px;


       }
       #wishh:active{
               align:center;
               color:#78960f;
       }

 #product:active{
    color:#78960f;
}

#product{
    color:#ffb701;
    cursor: pointer;
}
.icon {
        text-align: center ;
        
}

h1 {
font-size:20px;
color:#14500a;
text-align:center;



}


.image-vache{

height:180px;
margin-left: 40%;


}
h4,h5,h3
{
        color: black;
        font-family: arial;
}

.mrcereal {

display:flex;
flex-wrap:wrap;
background-image : url("../front/Image/cereal-background.jpg");
background-size:990px;


        }
 .mrcereal-card {

           flex: 16%;
       
           padding: 1%;
           /* background-color:#fff; */
           box-shadow:20px;

         
            border: 2px solid white; 


                         
             }

        .mrcereal-image {
                
            }
        .mrcereal-image img {

                max-width:100%;
               

               }      


        .mrcereal-info {
            
            text-align:center;


        }

        
       @media (max-width: 920px) {

           .mrcereal-card {

             flex: 2 21%;
         

           }


           .mrcereal .mrcereal-card: first-child,
           .ladyvache .mrcereal-card:nth-child(2){
                   flex: 2 46% ;
           }
       }

       @media (max-width:600px){

               .mrcereal-card {

                       flex:2 10%;
                       
               }

       }
       
.image-cereal{

height:180px;
margin-left: 43%;


}

}
.mrfruite {

display:flex;
flex-wrap:wrap;
background-image : url("../views/Image/melon.jpg");
background-size:990px;


        }
 .mrfruite-card {

           flex: 16%;
       
           padding: 1%;
           /* background-color:#fff; */
           box-shadow:20px;

         
            border: 2px solid white; 


                         
             }

        .mrfruite-image {
                
            }
        .mrfruite-image img {

                max-width:100%;
               

               }      


        .mrfruite-info {
            
            text-align:center;


        }

        
       @media (max-width: 920px) {

           .mrfruite-card {

             flex: 2 21%;
         

           }


           .mrfruite .mrfruite-card: first-child,
           .ladyvache .mrfruite-card:nth-child(2){
                   flex: 2 46% ;
           }
       }

       @media (max-width:600px){

               .mrfruite-card {

                       flex:2 10%;
                       
               }

       }
       
.image-fruite{

height:180px;
margin-left: 43%;


}

</style>


</head>
<body>
<?php  include "header.php";
include "navbar.php"
?>
        <br/><br/>

<?php  
include "navbar.php"
?>




<!-- <div class="navbar">
  <a href="#">L'aventure GP</a>

  <a href="#">Les gourmandises GP</a>
  <a href="#">Les Activités GP</a>  
  <a href="#">L'atelier Recette GP</a>
  <a href="#">Contactez-nous</a>
</div> -->



<img  class="image-cereal" src="Image/cutie.jpg"> 

<section class=" mrfruite ">
    <!-- <div class="title" > Madame Vache</div> -->
  
  <div class="mrfruite-card">
    <div class="mrfruite-image"> <img src="Image/jus1.png">  </div>
       
        <div class="icon" >
         <i class="fa fa-heart fa-lg"   id="heart" ></i> 

   
        <i class="fa fa-shopping-cart fa-lg"   id="cart" ></i>
        <br/><br/>

        </div>


        <script>

                var heart=document.getElementById('heart');
                var cart=document.getElementById('cart');

                        
                        heart.addEventListener('click',togglePass);
                        cart.addEventListener('click',togglePass);

                        function togglePass()
                        {
        
                                heart.classList.toggle('active');
                                cart.classList.toggle('active');
                        }
        </script>




<div class="mrfruite-info">
<h4>  Jus matin tonique </h4> 

 <h4> 33cl </h4>
      

<h5> 8.400 DT</h5>

</div>
</div>


<div class="mrfruite-card">
    <div class="mrfruite-image"> <img src="Image/jus2.png">  </div>
       
        <div class="icon" >
         <i class="fa fa-heart fa-lg"   id="heart" ></i> 

   
        <i class="fa fa-shopping-cart fa-lg"   id="cart" ></i>
        <br/><br/>

        </div>


        <script>

                var heart=document.getElementById('heart');
                var cart=document.getElementById('cart');

                        
                        heart.addEventListener('click',togglePass);
                        cart.addEventListener('click',togglePass);

                        function togglePass()
                        {
        
                                heart.classList.toggle('active');
                                cart.classList.toggle('active');
                        }
        </script>




<div class="mrfruite-info">
<h4> Jus crainberry</h4> 

 <h4>33cl</h4>
      

<h5> 8.700 DT</h5>

</div>
</div>
<div class="mrfruite-card">
    <div class="mrfruite-image"> <img src="Image/jus5.png">  </div>
       
        <div class="icon" >
         <i class="fa fa-heart fa-lg"   id="heart" ></i> 

   
        <i class="fa fa-shopping-cart fa-lg"   id="cart" ></i>
        <br/><br/>

        </div>


        <script>

                var heart=document.getElementById('heart');
                var cart=document.getElementById('cart');

                        
                        heart.addEventListener('click',togglePass);
                        cart.addEventListener('click',togglePass);

                        function togglePass()
                        {
        
                                heart.classList.toggle('active');
                                cart.classList.toggle('active');
                        }
        </script>




<div class="mrfruite-info">
<h4>  Jus de pamplemousse rose</h4> 

 <h4>33cl</h4>
      

<h5> 5.400 DT</h5>

</div>
</div>

<div class="mrfruite-card">
    <div class="mrfruite-image"> <img src="Image/jus4.png">  </div>
       
        <div class="icon" >
         <i class="fa fa-heart fa-lg"   id="heart" ></i> 

   
        <i class="fa fa-shopping-cart fa-lg"   id="cart" ></i>
        <br/><br/>

        </div>


        <script>

                var heart=document.getElementById('heart');
                var cart=document.getElementById('cart');

                        
                        heart.addEventListener('click',togglePass);
                        cart.addEventListener('click',togglePass);

                        function togglePass()
                        {
        
                                heart.classList.toggle('active');
                                cart.classList.toggle('active');
                        }
        </script>




<div class="mrfruite-info">
<h4>  Jus d'abricot</h4> 

 <h4>33cl</h4>
      

<h5> 6.400 DT</h5>

</div>
</div>

<div class="mrfruite-card">
    <div class="mrfruite-image"> <img src="Image/jus3.png">  </div>
       
        <div class="icon" >
         <i class="fa fa-heart fa-lg"   id="heart" ></i> 

   
        <i class="fa fa-shopping-cart fa-lg"   id="cart" ></i>
        <br/><br/>

        </div>


        <script>

                var heart=document.getElementById('heart');
                var cart=document.getElementById('cart');

                        
                        heart.addEventListener('click',togglePass);
                        cart.addEventListener('click',togglePass);

                        function togglePass()
                        {
        
                                heart.classList.toggle('active');
                                cart.classList.toggle('active');
                        }
        </script>




<div class="mrfruite-info">
<h4> Jus de pomme </h4> 

 <h4> 33cl</h4>
      

<h5> 6.420 DT</h5>

</div>
</div>

</section>







        <!-- <table >
                <tr>
                        <td> <h1>Madame</h1> </td>
                        <td><img  class="image-vache" src="Image/ladyvache.png"> </td>
                        <td> <h1>Vache</h1> </td>
                </tr>
        </table> -->

        <img  class="image-vache" src="Image/lady vache.png">

 
     
<section class=" ladyvache ">
    <!-- <div class="title" > Madame Vache</div> -->
  
     
                
 <?PHP 
$sql="SELECT Image ,Nom, Description ,Prix FROM Produit ";

foreach($ListeProduit as $row){
        ?>
        <?PHP	$pro_id    = $row['id'];?>

  <div class="ladyvache-card">
    <div class="ladyvache-image"> <img src="Image/<?PHP echo $row['Image']; ?>">  </div>
       
        <div class="icon" >
        <?php echo"
        <button pid='$pro_id' style='float:right;' id='product' class='fa fa-shopping-cart fa-lg'></button>
                                                                                <button pid='$pro_id' style='float:right;' id='wishh' class='fa fa-heart fa-lg'></button>
        ";?>
        <br/><br/>

        </div>

        <script>

                var wishh=document.getElementById('wishh');
                var product=document.getElementById('product');

                        
                        product.addEventListener('click',togglePass);
                        wishh.addEventListener('click',togglePass);

                        function togglePass()
                        {
        
                                wishh.classList.toggle('active');
                                product.classList.toggle('active');
                        }
        </script>







<div class="ladyvache-info">
<h3>  <?PHP echo $row['Nom']; ?> </h3> 
<?PHP	$pro_id    = $row['id'];?>

 <h3><?PHP echo $row['Description']; ?></h3>
      





<?php
$id=$row['id'];
$sql="SELECT p.pourcentage FROM promotion p INNER JOIN produit r on r.id=p.idProduit WHERE r.id='$id' ";
$run_query1= mysqli_query($con,$sql);
if(mysqli_num_rows($run_query1) > 0){
while($roww = mysqli_fetch_array($run_query1)){
        $pourcentage=$roww['pourcentage'];
        $pro_prix=$row['Prix']-($row['Prix']*($pourcentage/100));
        ?>     <?php echo"
        <button pid='$pro_id' style='float:right;' id='product' class='fa fa-shopping-cart fa-lg'></button>
                                                                                <button pid='$pro_id' style='float:right;' id='wishh' class='fa fa-heart fa-lg'></button>
        "?>
              
        <?php 
        }
}
else{
?>
<h4><?PHP echo $row['Prix']; ?> DT</h4>
<?php
}
        
?>    







</div>
</div>
<?PHP 
}
?>
</section>




<img  class="image-cereal" src="Image/mrcereal.png"> 

<section class=" mrcereal ">
    <!-- <div class="title" > Madame Vache</div> -->
  
  <div class="mrcereal-card">
    <div class="mrcereal-image"> <img src="Image/1.png">  </div>
       
        <div class="icon" >
         <i class="fa fa-heart fa-lg"   id="heart" ></i> 

   
        <i class="fa fa-shopping-cart fa-lg"   id="cart" ></i>
        <br/><br/>

        </div>


        <script>

                var heart=document.getElementById('heart');
                var cart=document.getElementById('cart');

                        
                        heart.addEventListener('click',togglePass);
                        cart.addEventListener('click',togglePass);

                        function togglePass()
                        {
        
                                heart.classList.toggle('active');
                                cart.classList.toggle('active');
                        }
        </script>




<div class="mrcereal-info">
<h4> Granola Mela-Canella</h4> 

 <h4> 100g </h4>
      

<h5> 12.550DT</h5>

</div>
</div>


<div class="mrcereal-card">
    <div class="mrcereal-image"> <img src="Image/2.png">  </div>
       
        <div class="icon" >
         <i class="fa fa-heart fa-lg"   id="heart" ></i> 

   
        <i class="fa fa-shopping-cart fa-lg"   id="cart" ></i>
        <br/><br/>

        </div>


        <script>

                var heart=document.getElementById('heart');
                var cart=document.getElementById('cart');

                        
                        heart.addEventListener('click',togglePass);
                        cart.addEventListener('click',togglePass);

                        function togglePass()
                        {
        
                                heart.classList.toggle('active');
                                cart.classList.toggle('active');
                        }
        </script>




<div class="mrcereal-info">
<h4>  Granola Tropical </h4> 

 <h4> 100g</h4>
      

<h5> 13.500 DT</h5>

</div>
</div>
<div class="mrcereal-card">
    <div class="mrcereal-image">
             <img src="Image/3.png">  </div>
       
        <div class="icon" >
         <i class="fa fa-heart fa-lg"   id="heart" ></i> 

   
        <i class="fa fa-shopping-cart fa-lg"   id="cart" ></i>
        <br/><br/>

        </div>


        <script>

                var heart=document.getElementById('heart');
                var cart=document.getElementById('cart');

                        
                        heart.addEventListener('click',togglePass);
                        cart.addEventListener('click',togglePass);

                        function togglePass()
                        {
        
                                heart.classList.toggle('active');
                                cart.classList.toggle('active');
                        }
        </script>




<div class="mrcereal-info">
<h4> Granola choco-banane </h4> 

 <h4> 100g </h4>
      

<h5>  11.450 DT </h5>

</div>
</div>

<div class="mrcereal-card">
    <div class="mrcereal-image"> <img src="Image/4.png">  </div>
       
        <div class="icon" >
         <i class="fa fa-heart fa-lg"   id="heart" ></i> 

   
        <i class="fa fa-shopping-cart fa-lg"   id="cart" ></i>
        <br/><br/>

        </div>


        <script>

                var heart=document.getElementById('heart');
                var cart=document.getElementById('cart');

                        
                        heart.addEventListener('click',togglePass);
                        cart.addEventListener('click',togglePass);

                        function togglePass()
                        {
        
                                heart.classList.toggle('active');
                                cart.classList.toggle('active');
                        }
        </script>




<div class="mrcereal-info">
<h4>  Granola-Fantaise</h4> 

 <h4>100g</h4>
      

<h5> 14.500 DT </h5>

</div>
</div>

<div class="mrcereal-card">
    <div class="mrcereal-image"> <img src="Image/5.png">  </div>
       
        <div class="icon" >
         <i class="fa fa-heart fa-lg"   id="heart" ></i> 

   
        <i class="fa fa-shopping-cart fa-lg"   id="cart" ></i>
        <br/><br/>

        </div>


        <script>

                var heart=document.getElementById('heart');
                var cart=document.getElementById('cart');

                        
                        heart.addEventListener('click',togglePass);
                        cart.addEventListener('click',togglePass);

                        function togglePass()
                        {
        
                                heart.classList.toggle('active');
                                cart.classList.toggle('active');
                        }
        </script>




<div class="mrcereal-info">
<h4> Granola Prestige </h4> 

 <h4> 100g</h4>
      

<h5>12.500 DT</h5>

</div>
</div>

</section>




<img src="image/footer.png" width=100% >




</body>
</html>