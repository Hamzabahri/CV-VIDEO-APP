<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("dist/css/adminlte.min.css")}}">
  <!-- overlayScrollbars -->
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  

    <!-- SEARCH FORM -->
    

    <!-- Right navbar links -->
    

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('index')}}" class="brand-link">
      <img src="{{asset("dist/img/AdminLTELogo.png")}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <a href="{{route('logout')}}" class="btn btn-primary border-width-2 d-none d-lg-inline-block" style="margin: 13px;">
                                <span class="mr-2 icon-lock_outline"></span>Déconnexion</a>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
              
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  @yield('dash')




  <footer class="main-footer">
    <strong>Copyright &copy; 2020 </strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset("dist/plugins/jquery/jquery.min.js")}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset("dist/plugins/jquery-ui/jquery-ui.min.js")}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- AdminLTE App -->
<script src="{{asset("dist/js/adminlte.js")}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset("dist/js/pages/dashboard.js")}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset("dist/js/demo.js")}}"></script>


<script>
  $(".activate_disactiveSTE").on("change", function(){
    $(this).parent().parent().submit();
  })

  $("#customSwitch3").on("change", function(){
    $("#formid").submit();
  })

</script>

</body>
</html>
