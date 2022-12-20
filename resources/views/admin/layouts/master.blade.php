@include('admin.layouts.head')
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  @include('admin.layouts.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('admin-contents')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('admin.layouts.footer')