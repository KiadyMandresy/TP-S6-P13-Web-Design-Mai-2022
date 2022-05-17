<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo vendors_url("feather/feather.css")  ?>"/>
  <link rel="stylesheet" href="<?php echo vendors_url("ti-icons/css/themify-icons.css" )  ?>"/>
  <link rel="stylesheet" href="<?php echo vendors_url("css/vendor.bundle.base.css" )  ?>"/>
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo css_url("vertical-layout-light/style.css"  )  ?>"/>
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo image_url("favicon.png" )  ?>"/>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">


              <h4>Veuillez enter vos informations</h4>
              <h6 class="font-weight-light">Entrez vos informations</h6> 

                <form class="pt-3" action="<?php echo base_url('login_controller/login')?>"  method="POST">
                    <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="nom" placeholder="Username">
                    </div>
                    <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="mdp" placeholder="Password">
                    </div>
                    <div class="mt-3">
                    <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" >
                    </div>
                </form>

            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo vendors_url("js/vendor.bundle.base.js"  )  ?>" ></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo js_url("off-canvas.js")  ?>" ></script>
  <script src="<?php echo js_url("hoverable-collapse.js")  ?>" ></script>
  <script src="<?php echo js_url("template.js")  ?>" ></script>
  <script src="<?php echo js_url("settings.js")  ?>" ></script>
  <script src="<?php echo js_url("todolist.js")  ?>" ></script>
  
  <!-- endinject -->
</body>

</html>
