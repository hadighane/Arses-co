<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Arses-co Admin panel</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{url('back/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{url('back/assets/vendors/iconfonts/ionicons/dist/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{url('back/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{url('back/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{url('back/assets/vendors/css/vendor.bundle.addons.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{url('back/assets/css/shared/style.css')}}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{url('back/assets/css/demo_1/style.css')}}">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{url('back/assets/images/favicon.ico')}}" />
  </head>
  <body>
    <div class="container-scroller" dir="rtl">
      @include('back.navbar')
      <div class="container-fluid page-body-wrapper">
        @include('back.sidebar')
        @include('back.main')
      </div>
    </div>

    <script src="back/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="back/assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="back/assets/js/shared/off-canvas.js"></script>
    <script src="back/assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="back/assets/js/demo_1/dashboard.js"></script>
    <!-- End custom js for this page-->
    <script src="back/assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
  </body>
</html>