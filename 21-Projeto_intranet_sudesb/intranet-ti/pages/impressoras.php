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
    <title>Impressoras</title>
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
                alt="Logo da Sudesb" width="120px">
            </a>
            <!--Menu Navegação Links-->
            <div class="dropdown pe-5 me-2">
              <a class="btn btn-primary dropdown-toggle" role="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                aria-expanded="false">
                Links Úteis
              </a>
              <ul class="dropdown-menu dropdown-menu-info" aria-labelledby="dropdownMenuButton1">
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

    <div class="p-lg-5 mb-2 bg-light">
        <div class="container-fluid py-5">
            <br>
            <h1 class="display-5 fw-bold text-center">Bem vindo à Intranet da {TI} da Sudesb</h1>
            <p class="lead">Veja abaixo a relação das impressoras:</p>
            <hr>
        </div>

        <div class="row mb-2 d-flex flex-wrap text-center">
            <div class="col-sm-6 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <div class="card position-relative shadow-lg" style="height: 16rem;">
                    <div class="card-body">
                        <h3 class="card-title fw-bold pt-3">ASTEC</h3>
                        <p class="card-text">Impressora da ASTEC.</p><br>
                        <p>OKI: <strong>Tombo 9919</strong></p>
                    </div>
                    <div class="card-footer bg-transparent text-center">
                        <a href="http://10.46.12.32" target="_blank" class="btn button-option text-light">Acessar Impressora</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <div class="card position-relative shadow-lg" style="height: 16rem;">
                    <div class="card-body">
                        <h3 class="card-title text-red fw-bold pt-3">ASTEC Color</h3>
                        <p class="card-text">Impressora Colorida da ASTEC.</p><br>
                        <p>OKI Color: <strong>Tombo 10557</strong></p>
                    </div>
                    <div class="card-footer bg-transparent text-center">
                        <a href="http://10.46.12.33" target="_blank" class="btn button-option-color text-light">Acessar Impressora</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <div class="card position-relative shadow-lg" style="height: 16rem;">
                    <div class="card-body">
                        <h3 class="card-title fw-bold pt-3">BOXE</h3>
                        <p class="card-text">Impressora do Centro de Boxe</p><br>
                        <p>OKI: <strong>Tombo 9689</strong></p>
                    </div>
                    <div class="card-footer bg-transparent text-center">
                        <a href="http://10.46.12.201" target="_blank" class="btn button-option text-light">Acessar Impressora</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <div class="card position-relative shadow-lg" style="height: 16rem;">
                    <div class="card-body">
                        <h3 class="card-title fw-bold pt-3">CEEP</h3>
                        <p class="card-text">Impressora da Excelência.</p><br>
                        <p>OKI: <strong>Tombo 9922</strong></p>
                    </div>
                    <div class="card-footer bg-transparent text-center ">
                        <a href="http://10.46.12.27" target="_blank" class="btn button-option text-light">Acessar Impressora</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <div class="card position-relative shadow-lg" style="height: 16rem;">
                    <div class="card-body">
                        <h3 class="card-title fw-bold pt-3">COB</h3>
                        <p class="card-text">Impressora da COB.</p><br>
                        <p>OKI: <strong>Tombo 9945</strong></p>
                    </div>
                    <div class="card-footer bg-transparent text-center">
                        <a href="http://10.46.12.31" target="_blank" class="btn button-option text-light">Acessar Impressora</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <div class="card position-relative shadow-lg" style="height: 16rem;">
                    <div class="card-body">
                        <h3 class="card-title fw-bold pt-3">COPEL</h3>
                        <p class="card-text">Impressora da COPEL.</p><br>
                        <p>OKI: <strong>Tombo 9947</strong></p>
                    </div>
                    <div class="card-footer bg-transparent text-center">
                        <a href="http://10.46.12.22" target="_blank" class="btn button-option text-light">Acessar Impressora</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <div class="card position-relative shadow-lg" style="height: 16rem;">
                    <div class="card-body">
                        <h3 class="card-title fw-bold pt-3">COSEG</h3>
                        <p class="card-text">Impressora da COSEG.</p><br>
                        <p>Samsung: <strong>Tombo 16218</strong></p>
                    </div>
                    <div class="card-footer bg-transparent text-center">
                        <a href="http://10.46.12.200" target="_blank" class="btn button-option text-light">Acessar Impressora</a>
                    </div>
                </div>
            </div>
            <!--</div>
        <div class="row mt-3">-->
            <div class="col-sm-6 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <div class="card position-relative shadow-lg" style="height: 16rem;">
                    <div class="card-body">
                        <h3 class="card-title fw-bold pt-3">DAF</h3>
                        <p class="card-text">Impressora da DAF.</p><br>
                        <p>OKI: <strong>Tombo 15898</strong></p>
                    </div>
                    <div class="card-footer bg-transparent text-center">
                        <a href="http://10.46.12.26" target="_blank" class="btn button-option text-light">Acessar Impressora</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <div class="card position-relative shadow-lg" style="height: 16rem;">
                    <div class="card-body">
                        <h3 class="card-title fw-bold pt-3">DFE</h3>
                        <p class="card-text">Impressora da DFE.</p><br>
                        <p>OKI: <strong>Tombo 9923</strong></p>
                    </div>
                    <div class="card-footer bg-transparent text-center">
                        <a href="http://10.46.12.21" target="_blank" class="btn button-option text-light">Acessar Impressora</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <div class="card position-relative shadow-lg" style="height: 16rem;">
                    <div class="card-body">
                        <h3 class="card-title fw-bold pt-3">DFE 2</h3>
                        <p class="card-text">Impressora da Cerel/Cape/Cede.</p><br>
                        <p>OKI: <strong>Tombo 9943</strong></p>
                    </div>
                    <div class="card-footer bg-transparent text-center">
                        <a href="http://10.46.12.35" target="_blank" class="btn button-option text-light">Acessar Impressora</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <div class="card position-relative shadow-lg" style="height: 16rem;">
                    <div class="card-body">
                        <h3 class="card-title fw-bold pt-3">DIGER</h3>
                        <p class="card-text">Impressora da DIGER.</p><br>
                        <p>OKI: <strong>Tombo 13144</strong></p>
                    </div>
                    <div class="card-footer bg-transparent text-center">
                        <a href="http://10.46.12.23" target="_blank" class="btn button-option text-light">Acessar Impressora</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <div class="card position-relative shadow-lg" style="height: 16rem;">
                    <div class="card-body">
                        <h3 class="card-title text-red fw-bold pt-3">DIGER Color</h3>
                        <p class="card-text">Impressora Colorida da DIGER.</p><br>
                        <p>OKI Color: <strong>Tombo 10556</strong></p>
                    </div>
                    <div class="card-footer bg-transparent text-center">
                        <a href="http://10.46.12.24" target="_blank" class="btn button-option-color text-light">Acessar Impressora</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <div class="card position-relative shadow-lg" style="height: 16rem;">
                    <div class="card-body">
                        <h3 class="card-title fw-bold pt-3">DOE</h3>
                        <p class="card-text">Impressora da DOE.</p><br>
                        <p>OKI: <strong>Tombo 9946</strong></p>
                    </div>
                    <div class="card-footer bg-transparent text-center">
                        <a href="http://10.46.12.25" target="_blank" class="btn button-option text-light">Acessar Impressora</a>
                    </div>
                </div>
            </div>
            <!--</div>
    <div class="row mt-3">-->
            <div class="col-sm-6 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <div class="card position-relative shadow-lg" style="height: 16rem;">
                    <div class="card-body">
                        <h3 class="card-title text-red fw-bold pt-3">DOE Color</h3>
                        <p class="card-text">Impressora Colorida da DOE.</p><br>
                        <p>OKI Color: <strong>Tombo 12461</strong></p>
                    </div>
                    <div class="card-footer bg-transparent text-center">
                        <a href="http://10.46.12.28" target="_blank" class="btn button-option-color text-light">Acessar Impressora</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <div class="card position-relative shadow-lg" style="height: 16rem;">
                    <div class="card-body">
                        <h3 class="card-title fw-bold pt-3">EXPEDIENTE</h3>
                        <p class="card-text">Impressora do Expediente/Diger.</p><br>
                        <p>OKI: <strong>Tombo 9920</strong></p>
                    </div>
                    <div class="card-footer bg-transparent text-center">
                        <a href="http://10.46.12.29" target="_blank" class="btn button-option text-light">Acessar Impressora</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <div class="card position-relative shadow-lg" style="height: 16rem;">
                    <div class="card-body">
                        <h3 class="card-title fw-bold pt-3">PROJUR</h3>
                        <p class="card-text">Impressora da PROJUR.</p><br>
                        <p>OKI: <strong>Tombo 9924</strong></p>
                    </div>
                    <div class="card-footer bg-transparent text-center">
                        <a href="http://10.46.12.15" target="_blank" class="btn button-option text-light">Acessar Impressora</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <div class="card position-relative shadow-lg" style="height: 16rem;">
                    <div class="card-body">
                        <h3 class="card-title fw-bold pt-3">PROTOCOLO</h3>
                        <p class="card-text">Impressora do PROTOCOLO.</p><br>
                        <p>OKI: <strong>Tombo 11465</strong></p>
                    </div>
                    <div class="card-footer bg-transparent text-center">
                        <a href="http://10.46.12.30" target="_blank" class="btn button-option text-light">Acessar Impressora</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="text-dark position-relative bottom-0">
            <footer class="modal-footer d-flex justify-content-between align-items-center">
                <a href="https://www.bahia.ba.gov.br/" target="_blank"><img src="../assets/Governo-da-Bahia_black.png" width="110" alt="Governo do Estado"></a>
                <p class="fw-bold">Desenvolvido por Adriano de Oliveira</p>
                <p>&copy; Copyright 2023</p>
            </footer>
        </div>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
</body>

</html>