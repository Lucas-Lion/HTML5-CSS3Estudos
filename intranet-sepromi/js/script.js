$(document).ready(function() {
    var botao = $('.botao');
    var dropDown = $('.ul-sub');    
   
       botao.on('click', function(event){
           dropDown.stop(true,true).slideToggle();
           event.stopPropagation();
       });
   });