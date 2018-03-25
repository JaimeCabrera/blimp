<!-- PreHead -->
<?php include("prehead.php"); ?>
</head>
<body id="page-top" class="index">
  <!-- Navigation -->
  <?php include("navbar.php"); ?>
  <!-- Horarios Section -->
  <section id="horarios">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>Horarios de los Buses Urbanos</h2>
          <hr class="star-primary">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 text-center">
             <?php include'php/consultarTurnos.php'; ?>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <?php include("footer.php"); ?>
