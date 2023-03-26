function search_name() {
  let input = document.getElementById("ipesquisa").value;
  input = input.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "");
  console.log(input);
  
  // Recupera os dados do localStorage
  let pessoas = JSON.parse(localStorage.getItem('pessoas') || '[]');

  for (let i = 0; i < pessoas.length; i++) {
    let pessoa = pessoas[i];
    let nome = pessoa.nome.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "");
    let setor = pessoa.setor.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "");
    let email = pessoa.email.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "");

    if (!nome.includes(input) && !setor.includes(input) && !email.includes(input)) {
      // Oculta a linha correspondente na tabela
      document.getElementById("linha_" + i).style.display = "none";
    } else {
      // Exibe a linha correspondente na tabela
      document.getElementById("linha_" + i).style.display = "table-row";
    }
  }
}
