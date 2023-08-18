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
  <title>Intranet TI-Sudesb</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/features/">
  <link rel="shortcut icon" href="assets/governo-do-estado.ico" type="image/x-icon">

  <!-- Custom styles for this template -->
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header class="mb-5">
    <nav class="navbar navbar-expand-lg nav-bg navbar-dark fixed-top">
      <div class="container-fluid mx-5">
        <a class="navbar-brand" href="http://www.sudesb.ba.gov.br" target="_blank"><img src="./assets/SUDESB-BRANCO.png"
            alt="Logo da Sudesb" width="140px">
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
            <li><a class="dropdown-item" target="_blank" href="pages/ramais.php">Ramais</a>
            </li>
            <li><a class="dropdown-item" target="_blank" href="./Manual-da-TI.pdf" download="Manual-da-TI.pdf" type="application/pdf">Manual da TI</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="p-lg-5 mb-3 rounded-3">
    <div class="container py-5">
      <h1 class="display-5 fw-bold text-center mb-3">Bem vindo à Intranet da {TI} da Sudesb</h1>
      <p class="lead"> Veja abaixo as categorias dos serviços:</p>
      <hr>
    </div>

    <div class="container px-0 py-0" id="hanging-icons">
      <h2 class="pb-3 border-bottom">Escolha uma categoria abaixo:</h2>
      <div class="row g-3 py-1 row-cols-1 row-cols-lg-3">
        <div class="col d-flex align-items-start">
          <div class="icon-square bg-light text-dark flex-shrink-0 me-2">
            <i class="bi bi-server text-icon"></i>
          </div>
          <div>
            <h2>Monitoramento</h2>
            <p>Servidores como OCS, Zabbix, VMWARE...</p>
            <div class="btn-group dropend">
              <button type="button" class="btn button-option text-light dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">Servidores</button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="http://10.46.12.19/zabbix/" target="_blank">Zabbix</a></li>
                <li><a class="dropdown-item" href="http://10.46.12.19/ocsreports/" target="_blank">OCS Inventory</a>
                </li>
                <li><a class="dropdown-item" href="https://vcenter.datacenter.prodeb/" target="_blank">VMWARE Prodeb</a>
                </li>
                <li><a class="dropdown-item" href="http://10.46.12.12/scs/login" target="_blank">Chamados
                    TI</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <div class="icon-square bg-light text-dark flex-shrink-0 me-2">
            <i class="bi bi-printer-fill text-icon"></i>
          </div>
          <div>
            <h2>Impressoras</h2>
            <p>Impressoras instaladas em Pituaçu.</p>
            <a href="pages/impressoras.php" class="btn button-option text-light">
              Impressoras
            </a>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
            <i class="bi bi-hdd-network-fill text-icon"></i>
          </div>
          <div>
            <h2>Backup</h2>
            <p>Acesso aos serviços de backup/storages.</p>
            <div class="btn-group dropend">
              <button type="button" class="btn button-option text-light dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">Backup</button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="http://10.46.12.4/" target="_blank">NAS/Iomega 4</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="http://10.46.12.10/" target="_blank">NAS/Seagate 10</a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="http://10.46.12.11/" target="_blank">NAS/Asustor 11</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row g-3 my-3 py-1 row-cols-1 row-cols-lg-3">
        <div class="col d-flex align-items-start">
          <div class="icon-square bg-light text-dark flex-shrink-0 me-2">
            <i class="bi bi-router-fill text-icon"></i>
          </div>
          <div>
            <h2>Wi-fi</h2>
            <p>Lista dos roteadores wifi</p>
            <a href="pages/wifi.php" class="btn button-option text-light target="_blank">
              Wi-fi
            </a>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <div class="icon-square bg-light text-dark flex-shrink-0 me-2">
            <i class="bi bi-camera-video-fill text-icon"></i>
          </div>
          <div>
            <h2>Câmeras</h2>
            <p>Acessar as câmeras instaladas.</p>
            <a href="http://10.46.12.182/" target="_blank" class="btn button-option text-light">
              Câmeras
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</body>

</html>