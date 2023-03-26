function cadastrarPessoa(setor, nome, email) {
  var setor = document.getElementById('iset').value.trim();
  var nome = document.getElementById('func').value.trim();
  var email = document.getElementById('mail').value.trim();
}

function pessoaJaCadastrada(pessoas, email) {
  for (var i = 0; i < pessoas.length; i++) {
    if (pessoas[i].email === email) {
      return true;
    }
  }
  return false;
}

function cadPessoas(setor, nome, email) {

  // Verifica se os valores são vazios antes de continuar
  if (setor.trim() === '' || nome.trim() === '' || email.trim() === '') {
    alert('Por favor, preencha todos os campos.');
    return;
  }

  // Verifica se a pessoa já está cadastrada pelo email
  var pessoas = JSON.parse(localStorage.getItem('pessoas') || '[]');
  if (pessoaJaCadastrada(pessoas, email)) {
    alert('Este e-mail já está cadastrado.');
    return;
  }
  
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
  cellEmail.innerHTML = '<a href="mailto:' + email + '">' + email + '</a>';

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

