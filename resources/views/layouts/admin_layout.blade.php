<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Админ-панел - @yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/admin/plugins/daterangepicker/daterangepicker.css">
  <link href="/admin/dist/css/colorbox.css" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('homeAdmin') }}" class="brand-link">
      <img src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Админ-панел</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               {{-- <li class="nav-item">
                <a href="{{ route('homeAdmin') }}" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Главная
                  </p>
                </a>
              </li> --}}

           {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-newspaper"></i>
              <p>
                Блог
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('post.index') }}" class="nav-link">
                  <p>Все статьи</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('post.create') }}" class="nav-link">
                  <p>Добавить статьи</p>
                </a>
              </li>
            </ul>
          </li> --}}
          
          {{-- <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-align-left"></i>
              <p>
                Категории
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('category.index') }}" class="nav-link">
                  <p>Все категории</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('category.create') }}" class="nav-link">
                  <p>Добавить категории</p>
                </a>
              </li>
            </ul>
          </li> --}}

          {{-- Slider start --}}

          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-dragon"></i>
              <p>
                Slider
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('slider.index') }}" class="nav-link">
                  <p>All sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('slider.create') }}" class="nav-link">
                  <p>Add a sliders</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- slider end --}}



          {{-- Yangilik start --}}

          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-dragon"></i>
              <p>
                News
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('article.index') }}" class="nav-link">
                  <p>All news</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('article.create') }}" class="nav-link">
                  <p>Add a news</p>
                </a>
              </li>
            </ul>

            {{-- Yangilik end --}}


            {{-- E'lon Start --}}

            <li class="nav-item ">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-dragon"></i>
                <p>
                  Ads
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('varticle.index') }}" class="nav-link">
                    <p>All ads</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('varticle.create') }}" class="nav-link">
                    <p>Add a ads</p>
                  </a>
                </li>
              </ul>
              {{-- E'lon end --}}

              {{-- video Start --}}
              
            <li class="nav-item ">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-dragon"></i>
                <p>Video
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('video.index') }}" class="nav-link">
                    <p>All videos</p>
                  </a>
                </li>
                {{-- <li class="nav-item">
                  <a href="{{ route('video.create') }}" class="nav-link">
                    <p>Добавить видео</p>
                  </a>
                </li> --}}
              </ul>

              {{-- Video end --}}

              {{-- Department start --}}

              <li class="nav-item ">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-dragon"></i>
                  <p>
                    Chair
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('department.index') }}" class="nav-link">
                      <p>All chairs</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('department.create') }}" class="nav-link">
                      <p>Add a chairs</p>
                    </a>
                  </li>
                </ul>

              {{-- Department end --}}


              {{-- administrator start --}}

              <li class="nav-item ">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-dragon"></i>
                  <p>
                     Administration
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('administrator.index') }}" class="nav-link">
                      <p>All administrations</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('administrator.create') }}" class="nav-link">
                      <p>Add a administrations</p>
                    </a>
                  </li>
                </ul>

              {{-- administrator end --}}

              {{-- callback start --}}

              <li class="nav-item ">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-dragon"></i>
                  <p>
                    Contact
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('callback.index') }}" class="nav-link">
                      <p>All contact</p>
                    </a>
                  </li>
                  {{-- <li class="nav-item">
                    <a href="{{ route('callback.create') }}" class="nav-link">
                      <p>Add a contact</p>
                    </a>
                  </li> --}}
                </ul>

              {{-- callback end --}}
            
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/admin/plugins/moment/moment.min.js"></script>
<script src="/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/admin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/admin/dist/js/pages/dashboard.js"></script>
<script type="text/javascript" src="/admin/dist/js/jquery.colorbox-min.js"></script>
<script src="https://cdn.tiny.cloud/1/ahyykz2cb58v2hls0682bf1wgweqyi38phnp65pwo6zoihe5/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript" src="/packages/barryvdh/elfinder/js/standalonepopup.js"></script>
<script src="/admin/admin.js"></script>
</body>
</html>
