$(document).ready(function() {
    // alert('connected');

    let mymodal = document.getElementById('contactform');
    let modalbutton = document.getElementById("modalbutton");
    let close = document.getElementsByClassName('close')[0];

    modalbutton.onclick = function(){
        mymodal.style.display = "block";
    }

    close.onclick = function(){
        mymodal.style.display = "none";
    }
    window.onclick = function(event){
        if(event.target == mymodal){
            mymodal.style.display = "none";
        }
    }








});





