$(document).ready(function() {// Récupérer tous les éléments du document
    // Récupérer l'élément parent
let menumobile02 = document.getElementById("menumobile02");
let mobilemenulist = document.getElementById("menumobile03");

// menu.onclick = ()=>{

// }
menumobile02.onclick = function(e){
  if(mobilemenulist.style.display == 'none'){
    // if(mobilemenulist.style.display == "none"){
      mobilemenulist.style.display = "block";
      // }
    }else{
      
      mobilemenulist.style.display = "none";
  }
    // menu.classList.remove("active");
    // menumobile03.style.display = "block";
    // if(
      // ){
    //   alert("ok");
    // }
    // alert('ok');
  // alert("ok");
  // menu.classListe.add("active");
  // menumobile03.style.display = "block";
};

// menumobile03.addEventListener('click', function(){
//   alert("ok");
// });
    
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





