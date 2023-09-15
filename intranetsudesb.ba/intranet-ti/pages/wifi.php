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
    <title>Wifi</title>
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
            <a class="navbar-brand" href="http://www.sudesb.ba.gov.br" target="_blank"><img src="../assets/SUDESB-BRANCO.png"
                alt="Logo da Sudesb" width="140px">
            </a>
            <!--Menu Navegação Links-->
            <div class="dropdown pe-5 me-2">
              <a class="btn btn-primary dropdown-toggle" role="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                aria-expanded="false">
                Links Úteis
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" target="_blank"
                    href="https://seibahia.ba.gov.br/sip/login.php?sigla_orgao_sistema=GOVBA&sigla_sistema=SEI">SEI</a></li>
                    <li><a class="dropdown-item" target="_blank" href="https://portaldefacilidades.ba.gov.br/#/">Prodeb</a></li>
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

    <div class="p-lg-5 my-lg-5 bg-light rounded-3">
        <div class="container">
            <br>
            <h1 class="display-5 fw-bold text-center">Acesso aos roteadores da SUDESB</h1> <br>
            <p class="lead">Veja abaixo a relação dos roteadores wifi:</p>
            <hr>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="d-flex gap-2 col justify-content-center">
                <span class="bi bi-router-fill">
                    <a href="http://10.46.12.8/" class="btn button-option text-light btn-lg" target="_blank">Aruba</a>
                </span>
                <div class="bi bi-router-fill">
                    <a href="http://10.46.12.5/" class="btn button-option text-light btn-lg" target="_blank">Astec</a>
                </div>
                <div class="bi bi-router-fill">
                    <a href="http://10.46.12.6/" class="btn button-option text-light btn-lg" target="_blank">Daf</a>
                </div>
                <div class="bi bi-router-fill">
                    <a href="http://10.46.12.17/" class="btn button-option text-light btn-lg" target="_blank">Copel</a>
                </div>
                <div class="bi bi-router-fill">
                    <a href="http://10.46.12.16/" class="btn button-option text-light btn-lg" target="_blank">Transporte</a>
                </div>
                <div class="bi bi-router-fill">
                    <a href="http://10.46.12.13/" class="btn button-option text-light btn-lg" target="_blank">Doe</a>
                </div>
                <div class="bi bi-router-fill">
                    <a href="http://10.46.12.1/" class="btn button-option text-light btn-lg" target="_blank">Reneval</a>
                </div>
                <div class="bi bi-router-fill">
                    <a href="http://10.46.12.18/" class="btn button-option text-light btn-lg" target="_blank">ABCD</a>
                </div>
                <div class="bi bi-router-fill">
                    <a href="http://10.46.12.34/" class="btn button-option text-light btn-lg" target="_blank">Roteador Info</a>
                </div>
            </div>
        </div>
    </div>

    <!-- RODAPÉ -->
  <div class="w-100 text-light nav-bg position-fixed bottom-0">
    <footer class="modal-footer d-flex justify-content-between align-items-center">
        <a href="https://www.bahia.ba.gov.br/" target="_blank"><img src="../assets/Governo-da-Bahia-white.png" width="110" alt="Governo do Estado"></a>
        <p class="nome">Desenvolvido por Adriano de Oliveira</p>
        <p>&copy; Copyright 2023</p>
    </footer>
  </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>