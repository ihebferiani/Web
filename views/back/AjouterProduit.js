/*document.getElementById("Ajout") .addEventListener("submit",function(e){
e.preventDefault();

var erreur;
var Nom=document.getElementById("Nom");
var Nom=document.getElementById("Description");
var Nom=document.getElementById("Prix");

if(!Nom.value) {
    erreur="Veuillez renseigner un nom"
}

if(!Nom.value) {
    erreur="Veuillez renseigner une Description"
}

if(!Nom.value) {
    erreur="Veuillez renseigner un Prix"
}

if(erreur){
    e.preventDefault();
return false;
}
else{
alert('Formulaire envoye!');
}});
*/
function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}
function verifNomDes(champ)
{
   if(champ.value.length <2 )
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}


function verifPrix(champ)
{
   var Prix = parseInt(champ.value);
   if(isNaN(Prix) || Prix < 1|| Prix > 100)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

