<?php 


if (isset ($_POST ['search']))
{
    $searchq= $_POST['search'];
    $searchq= preg_replace ("#[^0-9a-z]#i","",$searchq);
    $query = mysql_query ("SELECT * FROM produit WHERE Nom LIKE '%$searchq%'  ");
    $count=mysql_num_rows($query);
    if($count==0)
    {
        $output='Ce produit n\'esxiste pas!';
    }


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="search bar.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body> 


<form action="index.php" method="post">

<div class="search-box">
            <input  class="search-txt" type="search" name="search" placeholder="recherche" >
            <a class="search-btn" type="submit" href="#">
                    >>
            </a>
    
        </div>

</form>
    
</body>
</html>