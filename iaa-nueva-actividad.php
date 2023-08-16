<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Form 1 - BANSAA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logosena.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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

  <!-- ======= Header ======= -->
  <?php include './header.php' ?>

  <!-- ======= Sidebar ======= -->
  <?php include './sidebar.php' ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Nueva Actividad</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Modulo IAA</li>
          <li class="breadcrumb-item active">Nueva Actividad</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h4 class="card-title fs-4 fw-light secondary-color">1. Delimitación de la Actividad de Aprendizaje</h4>
              <p class="secondary-color">En este primer apartado se delimitará la Actividad de Aprendizaje a ingresar, seleccionando la Competencia para la que fue diseñada, así como el Resultado de Aprendizaje que abordará y el tipo de Actividad dentro de la Guía de Aprendizaje.</p>
              <form class="row g-4">
                <div class="col-8">
                  <label for="programa-formacion" class="form-label">Programa de Formación</label>
                  <input type="text" class="form-control" id="programa-formacion">
                </div>
                <div class="col-8">
                  <label for="competicion" class="form-label">Competición</label>
                  <input type="email" class="form-control" id="competicion">
                </div>
                <div class="col-8">
                  <label for="resultado" class="form-label">Resultado de Aprendizaje</label>
                  <input type="password" class="form-control" id="resultado">
                </div>
                <div class="col-8">
                  <label class="form-label">Tipo de Actividad de Aprendizaje</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Seleccione tipo</option>
                    <option value="1">Tipo 1</option>
                    <option value="2">Tipo 2</option>
                    <option value="3">Tipo 3</option>
                  </select>
                </div>

                <div class="text-end">
                  <button type="button" class="btn btn-palette">Siguiente</button>
                </div>
              </form><!-- Vertical Form -->

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
  <script src="assets/js/iaa-nueva-actividad.js"></script>

</body>

</html>