<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>DMG</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="http://admin.kerdzebi.ge/backend/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="http://admin.kerdzebi.ge/backend/css/style.css">
  <link rel="stylesheet" href="http://admin.kerdzebi.ge/backend/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="http://admin.kerdzebi.ge/backend/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='http://admin.kerdzebi.ge/backend/img/favicon.ico'/>
</head>
<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">


      </nav>
      <div class="main-sidebar sidebar-style-2">

      </div>
      <!-- Main Content -->
      <div class="main-content">

        <section class="section">

          <div class="section-body">
            <div class="invoice">
              <div class="invoice-print">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="invoice-title">
                      <h2>Calls Request</h2>
                      <div class="invoice-number">Person Name - {{ $name }}</div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-6">
                        <address>
                          <strong>Client Details:</strong><br>
                          Name : {{ $name }}<br>
                          Phone: {{ $phone }}<br>
                        </address>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <hr>
            </div>
          </div>
        </section>

      </div>

    </div>
  </div>
  <!-- General JS Scripts -->
   <script src="http://admin.kerdzebi.ge/backend/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
   <script src="http://admin.kerdzebi.ge/backend/js/scripts.js"></script>
  <!-- Custom JS File -->
    <script src="http://admin.kerdzebi.ge/backend/js/custom.js"></script>
</body>


</html>
