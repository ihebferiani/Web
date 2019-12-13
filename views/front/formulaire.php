




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>compte</title>
    <link rel="stylesheet" href="styleCreerCompte.css" type="text/css">
    <!-- <link rel="stylesheet" href="search bar.css"> -->
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    

</head>
<style>
body
{
    background-image: url("bagra4.jpg");
}
</style>
<body>
<?php include "header.php"?>

    <div id="container">
            <header>
                <h1>Créer un Compte</h1>
            </header>
        

        <div id="formulaire" align="center">
            <form name="f" action="formulaire.php" method="POST">
                <table border="0" width=50% >   
                             <tr class="label">
                                <td><input type="radio" name="sexe" >Homme</td>
                                <td><input type="radio" name="sexe">Femme</td>
                            </tr>
                        <tr class="label">
                                <td><span class="required">*</span> <label for="nom">Nom</label> </td>
                                <td><input type="text" id="nom" placeholder="Entrez Votre Nom" name="textNom" pattern="[a-zA-Z ]+" required=''></td>
                            </tr>

            
                            <tr class="label">
                                    <td><span class="required">*</span> <label for="prenom">Prénom</label> </td>
                                    <td><input type="text" placeholder="Entrez Votre Prénom" id="prenom" name="textPrenom"></td>
                            </tr>
            
                            <tr class="label">
                                    <td><span class="required">*</span> <label for="courriel">Courriel</label> </td>
                                    <td><input type="text" placeholder="Entrez Votre Adresse E-mail" id="courriel" name="textEmail"></td>
                            </tr>

                            <tr class="label">
                                <td><span class="required">*</span> <label for="mdp">Mot de passe</label> </td>
                                <td>
                                    <i id="fa2" class="fa fa-eye"></i>
                                    <input type="password" id="mdp" placeholder="Entrez Votre mot de passe" name="textMdp">
                                    <script>
                                            var mdp=document.getElementById('mdp');
                                            var fa2=document.getElementById('fa2');
                                            fa2.addEventListener('click',togglePass);
                                
                                            function togglePass()
                                            {

                        
                                                fa2.classList.toggle('active');


                                                (mdp.type == 'password') ? mdp.type='text' : mdp.type='password';
                                            }
                                
                                        
                                    </script>
                               
                               
                                </td>

                            </tr>
                            <tr class="label">
                                <td><p style="line-height: 1.25em;"> <span class="required">*</span> <label for="pwd">comfirmation <br /> mot de passe</p></label> </td>
                                
                                
                                <td>
                                    <i id="eye" class="fa fa-eye"></i>
                                    <input type="password" id="pwd" placeholder="Réecrivez le mot de passe " name="textCmdp"></td>
                                   
                                   <script>
                                            var pwd=document.getElementById('pwd');
                                            var eye=document.getElementById('eye');
                                            eye.addEventListener('click',togglePass);
                                
                                            function togglePass()
                                            {

                        
                                                eye.classList.toggle('active');


                                                (pwd.type == 'password') ? pwd.type='text' : pwd.type='password';
                                            }
                                
                                        
                                    </script>
                           
                           
                                </tr>
            
                            <tr class="label">
                                    <td><span class="required">*</span> <label for="adresse"> Adresse</label> </td>
                                    <td><input type="text" placeholder="Entrez Votre Adresse Totale"  id="adresse" name="textAdresse"></td>
                            </tr>
                            <tr class="label">
                                    <td><span class="required">*</span> <label for="zone"> Gouvernorat</label></td>
                                    <td> <select name="zone_id" id="zone">
                                        <option value=""> --- Veuillez choisir --- </option>
                                        <option value="3291">Ariana</option>
                                        <option value="3292">Beja</option>
                                        <option value="3293">Ben Arous</option>
                                        <option value="3294">Bizerte</option>
                                        <option value="3295">Gabes</option>
                                        <option value="3296">Gafsa</option>
                                        <option value="3297">Jendouba</option>
                                        <option value="3298">Kairouan</option>
                                        <option value="3299">Kasserine</option>
                                        <option value="3300">Kebili</option>
                                        <option value="3301">Kef</option>
                                        <option value="3302">Mahdia</option>
                                        <option value="3303">Manouba</option>
                                        <option value="3304">Medenine</option>
                                        <option value="3305">Monastir</option>
                                        <option value="3306">Nabeul</option>
                                        <option value="3307">Sfax</option>
                                        <option value="3308">Sidi Bouzid</option>
                                        <option value="3309">Siliana</option>
                                        <option value="3310">Sousse</option>
                                        <option value="3311">Tataouine</option>
                                        <option value="3312">Tozeur</option>
                                        <option value="3313">Tunis</option>
                                        <option value="3314">Zaghouan</option>
                                    </select></td>
                            </tr>
            
                            <tr class="label">
                                    <td><span class="required">*</span><label for="tel">Télephone</label></td>
                                    <td><input type="text" placeholder="Entrez Votre Numéro de Téléphone" id="tel" name="textTelephone"></td>
                            </tr>

                </table>
             
            </form>
        </div>


        <div  align="center" >
            <input   id="button" type="submit" name="submit" onclick="ValiderInscription()">

        </div>
    </div>
    
</body>
</html>