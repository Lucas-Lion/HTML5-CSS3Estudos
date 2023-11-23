// Pesquisa de Ramais
function search_ramal() {
  let input = document.getElementById("ipesquisa").value;
 input = input.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "");
  console.log(input)
  let x = document.getElementsByClassName("dados");

  for (i = 0; i < x.length; i++) {
    if (!x[i].innerHTML.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "").includes(input)) {
      x[i].style.display = "none";
    } else {
      x[i].style.display = "table-row";
    }
  }
}