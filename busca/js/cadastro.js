function pessoaJaCadastrada(pessoas, nome, email) {
  for (var i = 0; i < pessoas.length; i++) {
    if (pessoas[i].nome.trim().toLowerCase() === nome.trim().toLowerCase() && pessoas[i].email.trim().toLowerCase() === email.trim().toLowerCase()) {
      return true;
    }
  }
  return false;
}

function cadPessoas(setor, nome, email) {
  var tb = document.getElementById('tbPessoas');
  var qtdLinhas = tb.rows.length;
  var linha = tb.insertRow(qtdLinhas);

  var cellCodigo = linha.insertCell(0);
  var cellSetor = linha.insertCell(1);
  var cellNome = linha.insertCell(2);
  var cellEmail = linha.insertCell(3);

  cellCodigo.innerHTML = qtdLinhas;
  cellSetor.innerHTML = setor;
  cellNome.innerHTML = nome;
  cellEmail.innerHTML = email;

  // Adiciona a pessoa cadastrada ao armazenamento local
  var pessoas = JSON.parse(localStorage.getItem('pessoas') || '[]');
  if (!pessoaJaCadastrada(pessoas, nome, email)) {
    pessoas.push({
      setor: setor,
      nome: nome,
      email: email
    });
    localStorage.setItem('pessoas', JSON.stringify(pessoas));
  }
}

// Recupera as pessoas do armazenamento local e as exibe na tabela
var pessoas = JSON.parse(localStorage.getItem('pessoas') || '[]');
for (var i = 0; i < pessoas.length; i++) {
  var pessoa = pessoas[i];
  cadPessoas(pessoa.setor, pessoa.nome, pessoa.email);
}
