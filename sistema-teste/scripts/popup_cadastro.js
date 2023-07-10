document.getElementById("cadastro-form").addEventListener("submit", function(event) {
  event.preventDefault(); // Impede o envio padrão do formulário

 
  var popup = document.getElementById("popup");
  popup.style.display = "block";
 
  document.getElementById("cadastro-form").reset();

  setTimeout(function() {
      popup.style.display = "none";
  }, 2000);
});