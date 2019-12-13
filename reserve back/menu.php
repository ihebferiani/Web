<style>
    .menu_gauche 
    {
        background-color:#78960f;
        
    }


    .menu .nav-item a:hover {
	background-color: #ffb701;
}

.menu .nav-item .sous_menu
{
	position: relative;
	background-color: #78960f;
	display: none;
	
}

</style>


<div class="menu_gauche">
<div class="menu">

<ul>
        <li class="nav-item "><a href="#">
                <i class="fa fa-home" aria-hidden="true"></i> Tableau de bord</a>
        </li>
        <li class="nav-item "><a href="#">
                <i class="fa fa-th-list" aria-hidden="true"></i> Produits</a>
            <div class="sous_menu">
                <ul class="nav">
                    <li class="nav-item"><a href="tous_produits.php?id_prdu=0">Consulter les produits</a></li>
                    <li class="nav-item"><a href="tous_produits.php?id_prdu=0">Ajouter un produit</a></li>
                    <li class="nav-item"><a href="tous_produits.php?id_prdu=0">Modifier les produits</a></li>
                    
                    
                </ul>
            </div>
        </li>
        <li class="nav-item"><a href="#">
                <i class="fa fa-th-list" aria-hidden="true"></i> Commerce</a>
            <div class="sous_menu">
                <ul class="nav">
                    <li class="nav-item"><a href="commandes.php">Commandes</a></li>
                    <li class="nav-item"><a id="statistique_commande" href="statistique_commandes.php">Statistiques</a></li>
                </ul>
            </div>
        </li>
        
        <li class="nav-item"><a href="#">
                <i class="fa fa-th-list" aria-hidden="true"></i> Livraison</a>
            <div class="sous_menu">
                <ul class="nav">
                     <li class="nav-item"><a href="tous_livreurs.php?id_lr=0">Tous les livreurs</a></li>
                    <li class="nav-item"><a href="factures.php?id_fac=0">Facture</a></li>
                </ul>
            </div>
        </li>
         <li class="nav-item"><a href="#">
                <i class="fa fa-th-list" aria-hidden="true"></i> Evenement </a>
            <div class="sous_menu">
                <ul class="nav">

                    
                    <li class="nav-item"><a href="afficherpromotion.php">Consulter les Promotions</a></li>
                    <li class="nav-item"><a href="./Promotions.php">Ajouter une Promotion</a></li>
                    <li class="nav-item"><a href="./Promotions.php">Modifier les Promotions</a></li>
                </ul>
            </div>
        </li>
   
    </ul>

</div>
</div> 