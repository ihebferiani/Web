

<?php

include "db.php";
$id=$row['id'];
$sql="SELECT p.pourcentage FROM promotion p INNER JOIN produit r on r.id=p.idProduit WHERE r.id='$id' ";
$run_query1= mysqli_query($con,$sql);
if(mysqli_num_rows($run_query1) > 0){
while($roww = mysqli_fetch_array($run_query1)){
        $pourcentage=$roww['pourcentage'];
        $pro_prix=$row['Prix']-($row['Prix']*($pourcentage/100));
        ?>
                <h4><?PHP echo $pro_prix; ?> DT</h4>
                <h5><s> <?PHP echo $row['Prix']; ?> DT</s></h5>
        <?php 
        }
}
else{
?>
<h4><?PHP echo $row['Prix']; ?> DT</h4>
<?php
}
        
?>