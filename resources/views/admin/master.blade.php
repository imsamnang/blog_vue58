@include('admin.includes._head')

<body class="sidebar-mini skin-red fixed">
<div class="wrapper">
  <!-- Main Header -->
  <header class="main-header">
    <!-- Logo -->
    @include('admin.includes._logo')
    <!-- Header Navbar -->
    @include('admin.includes._topnav')
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    @include('admin.includes._sidebar')
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    {{-- @include('admin.includes._breadcrumb') --}}
    <!-- Main content -->
    <section class="content container-fluid">
      @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
    @include('admin.includes._footer')
  <!-- Control Sidebar -->
    {{-- @include('admin.includes._control_sidebar') --}}
  <!-- /.control-sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
  @include('admin.includes._script')  
  @stack('js')
</body>
</html>