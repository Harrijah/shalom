$(document).ready(function() {// Récupérer tous les éléments du document
    // Récupérer l'élément parent
const parentElement = document.getElementsByClassName("mytext03");

// Récupérer le premier enfant de l'élément parent
let childNode = parentElement.firstChild;

// Parcourir tous les enfants de l'élément parent
while (childNode) {
  // Vérifier si le nœud est un nœud texte et s'il contient uniquement des espaces
  if (childNode.nodeType === Node.TEXT_NODE && /^\s*$/.test(childNode.nodeValue)) {
    // Supprimer le nœud texte
    childNode.remove();
  }

  // Passer au prochain enfant
  childNode = childNode.nextSibling;
}

    
    // alert('connected');

    // let mymodal = document.getElementById('contactform');
    // let modalbutton = document.getElementById("modalbutton");
    // let close = document.getElementsByClassName('close')[0];

    // modalbutton.onclick = function(){
    //     mymodal.style.display = "block";
    // }

    // close.onclick = function(){
    //     mymodal.style.display = "none";
    // }
    // window.onclick = function(event){
    //     if(event.target == mymodal){
    //         mymodal.style.display = "none";
    //     }
    // }








});





