// Seleciona o elemento input que contém o arquivo de imagem
const inputImagem = document.querySelector('#input-imagem');

// Adiciona um evento de mudança ao elemento input
inputImagem.addEventListener('change', function() {
  // Cria um objeto FileReader
  const leitorArquivo = new FileReader();

  // Define a função de retorno de chamada para quando o arquivo for lido
  leitorArquivo.onload = function() {
    // Define o atributo src da imagem com a imagem lida
    const imagemPerfil = document.querySelector('#imagem-perfil');
    imagemPerfil.src = leitorArquivo.result;
  };

  // Lê o arquivo de imagem selecionado como uma URL de dados
  leitorArquivo.readAsDataURL(inputImagem.files[0]);
});

