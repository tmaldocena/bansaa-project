<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - BANSAA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logosena.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <?php include './header.php' ?>

  <?php include './sidebar.php' ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row mt-5">
        <h3 class="fw-bold secondary-color">Bienvenido Username!</h1>
        <p class="fs-4 secondary-color">Seleccione el módulo al que desea ingresar</p>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="assets/img/card.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title secondary-color">Módulo IAA</h5>
                      <p class="card-text fw-bold">Ingreso de Actividades de aprendizaje</p>
                      <div class="col">
                        <a href="./iaa-nueva-actividad.php" alt='' class="main-color me-2">Nueva</a>
                        <a href="./iaa-eliminar-actividad.php" alt='' class="main-color me-2">Eliminar</a>
                        <a href="./iaa-editar-actividad.php" alt='' class="main-color me-2">Editar</a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
          <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="assets/img/card.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title secondary-color">Módulo BAA</h5>
                      <p class="card-text fw-bold">Banco de Actividades de Aprendizaje</p>
                      <a href="#" alt='' class="main-color">Ingresar</a>
                    </div>
                  </div>
                </div>
            </div>
        </div>

      </div>
    
    </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/index.js"></script>

</body>

</html>