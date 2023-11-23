<?php 

session_start();

if ($_SESSION['authenticated']!='conectado') {
   
    header("Location: index.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta http-equiv="refresh" content="15"> -->
  <title>Ramais Sudesb</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/features/">
  <link rel="shortcut icon" href="../assets/governo-do-estado.ico" type="image/x-icon">

  <!-- Custom styles for this template -->
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark nav-bg fixed-top">
      <div class="container-fluid mx-5">
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
          aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->
        <!-- <div class="collapse navbar-collapse" id="navbarTogglerDemo01"> -->
          <a class="navbar-brand" href="http://www.sudesb.ba.gov.br" target="_blank"><img
              src="../assets/SUDESB-BRANCO.png" alt="Logo da Sudesb" width="120px">
          </a>
          <!--Menu Navegação Links-->
          <div class="dropdown pe-5 me-2">
            <a class="btn btn-primary dropdown-toggle" role="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
              aria-expanded="false">
              Links Úteis
            </a>
            <ul class="dropdown-menu dropdown-menu-info" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" target="_blank"
                  href="https://seibahia.ba.gov.br/sip/login.php?sigla_orgao_sistema=GOVBA&sigla_sistema=SEI">SEI</a>
              </li>
              <li><a class="dropdown-item" target="_blank" href="https://portaldefacilidades.ba.gov.br/#/">Prodeb</a>
              </li>
              <li><a class="dropdown-item" target="_blank" href="https://outlook.office.com/owa/">Email</a></li>
              <li><a class="dropdown-item" target="_blank" href="https://rhbahia.ba.gov.br/login">Portal RH</a></li>
              <li><a class="dropdown-item" target="_blank" href="https://dool.egba.ba.gov.br/">Diário Oficial</a></li>
              <li><a class="dropdown-item" target="_blank" href="https://www.comprasnet.ba.gov.br/">Comprasnet</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" target="_blank" href="ramais.php">Ramais</a>
              </li>
              <li><a class="dropdown-item" target="_blank" href="./Manual-da-TI.pdf" download="Manual-da-TI.pdf" type="application/pdf">Manual da TI</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
  </header>

  <div class="p-lg-1 mt-5">
    <div class="container-sm container pt-5">
      <div class="row align-items-center">
        <h1 class="col-sm-2 col-xl-9 col-xxl-9 display-5 fw-bold">Confira a lista dos Ramais telefônicos:</h1>
        <div class="col-xxl-3 form">
          <!-- <label for="searchbar" class="form-label">Pesquise</label> -->
          <input type="search" name="search" id="searchbar" onkeyup="search_ramal()" class="form-control"
            placeholder="Busque aqui...">
        </div>
      </div>
      <hr>
      <div class="table-responsive shadow-lg">
        <table class="table table-borderless table-hover table-striped">
          <thead class="nav-bg text-light">
            <tr>
              <th class="col-3 text-center" scope="col">Setor</th>
              <th class="col-3 text-center" scope="col">Ramal</th>
              <th class="col-6 text-center" scope="col">Nome</th>
            </tr>
          </thead>
          <tbody>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Recepção</td>
              <td>0500</td>
              <td>Marlene</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Protocolo</td>
              <td>0547</td>
              <td>Neuzimari / Geovana</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Diger - Secretária</td>
              <td>0505</td>
              <td>Fabiana</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Diger - Secretária</td>
              <td>0503</td>
              <td>Rose</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Diger - Secretária</td>
              <td>0558</td>
              <td>Patrícia</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Chefia de Gabinete</td>
              <td>0506</td>
              <td>Diogo</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Diger - Diretoria</td>
              <td>0504</td>
              <td>Dr. Vicente</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Diger - Expediente</td>
              <td>0545</td>
              <td>Bernadete</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Diger</td>
              <td>0546</td>
              <td>Gabriela</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Astec I</td>
              <td>0548</td>
              <td>Susi / Najila</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Astec II</td>
              <td>0549</td>
              <td>Selma / Sueli</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Astec III</td>
              <td>0551</td>
              <td>Marisa / Cecília / Edcarlos / Milena</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Ascom</td>
              <td>0539</td>
              <td>Hilda / Jéssica / Marcos</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Doee - Diretoria</td>
              <td>0507</td>
              <td>Marcos Andrade / Fátima</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Doee - Contratos</td>
              <td>0542</td>
              <td>Joice / Renata</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Doee - Coord. CEE I</td>
              <td>0537</td>
              <td>Hélio / Junior</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Doee</td>
              <td>0552</td>
              <td>Rose</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Doee - Eng e Arquit.</td>
              <td>0543</td>
              <td>Afrânio</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Doee - Eng e Arquit.</td>
              <td>0541</td>
              <td>Claudio</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Doee - Coord. Obras</td>
              <td>0544</td>
              <td>Luiz Brantes</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Estádio-Manutenção</td>
              <td>0538</td>
              <td>Reneval / Jorge / Fernando</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Transporte</td>
              <td>0533</td>
              <td>Sílvio / Paulo</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>CCTL</td>
              <td>0526</td>
              <td>Ivanildes / Larissa / Rosa / Marília / Adalgisa / Ilma / Rita</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Excelência - Diretoria</td>
              <td>0554</td>
              <td>Sinval Vieira</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Excelência</td>
              <td>0553</td>
              <td>Fernando / Thais / Antônia / Conceição / Gerson</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Daf - Diretoria</td>
              <td>0502</td>
              <td>Edvaldo</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Daf</td>
              <td>0501</td>
              <td>Káthia</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Cad</td>
              <td>0524</td>
              <td>Patrícia / Edneide</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Crh</td>
              <td>0527</td>
              <td>Alexandro / Normeuza / Genice</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Comap</td>
              <td>0522</td>
              <td>Morgana / Melquiades / Claudia / Bianca / Rafael</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Almoxarifado</td>
              <td>0523</td>
              <td>Jorge / Gileno / Rhuan</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Cfin</td>
              <td>0525</td>
              <td>Alberto</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Cfin - Funcionários</td>
              <td>0555</td>
              <td>Nice / Jorge / Mercês / Carlinhos / Marcia / Milena / Beatriz</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Copel</td>
              <td>0529</td>
              <td>Osvan / Sueli / Marleide / João Ricardo</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Coseg - Coordenação</td>
              <td>0520</td>
              <td>Liz</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Coseg - Funcionários</td>
              <td>0521</td>
              <td>Paulo / Cláudia / Grisi / Adriano / Giovane / Lucas</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Dfe - Diretoria</td>
              <td>0535</td>
              <td>Wilton</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Dfe</td>
              <td>0534</td>
              <td>Janice / Ilka</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Cape</td>
              <td>0531</td>
              <td>Maurício / Rogério / Angela Maria / Orlando</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Cede - Professores</td>
              <td>0532</td>
              <td>Alvaro / Angela / Alex / Paulão / Graça</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Cerel</td>
              <td>0530</td>
              <td>Gisele / Rosana / Cesar / Lívia / Ticão</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Informática</td>
              <td>0550</td>
              <td>João / Igor / Pablo / Lucas / Victória</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Copa Tribuna</td>
              <td>0540</td>
              <td>Heloisa / Domingas</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Copa - Cantina 07</td>
              <td>0528</td>
              <td>Valdiva (val)</td>
            </tr>
            <tr class="table-secondary text-center fw-bold ramais" scope="row">
              <td>Limpeza</td>
              <td>0536</td>
              <td>Milena / Funcionários</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row mt-2">
      <div class="d-flex col-2 localz">
        <a href="index.php" class="btn text-icon retorno">
          <i class="bi bi-arrow-left-circle-fill"></i>
          <i>Voltar</i></a>
      </div>
    </div>
  </div>
  <br>
  <div class="text-light position-relative bottom-0 nav-bg">
    <footer class="modal-footer d-flex justify-content-between align-items-center">
        <a href="https://www.bahia.ba.gov.br/" target="_blank"><img src="../assets/Governo-da-Bahia-white.png" width="110" alt="Governo do Estado"></a>
        <p class="fw-bold">Desenvolvido por Adriano de Oliveira</p>
        <p>&copy; Copyright 2023</p>
    </footer>
  </div>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <script src="./js/search.js"></script>
</body>

</html>