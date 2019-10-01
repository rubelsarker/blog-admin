<!DOCTYPE html>

@include('admin.partial._head')

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
   @include('admin.partial._header')
    <!-- Left side column. contains the logo and sidebar -->
   @include('admin.partial._sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partial._breadcrumbs')
        @include('admin.partial.msg')

        <!-- Main content -->
        <section class="content container-fluid">

            <!--------------------------
              | Your Page Content Here |
              -------------------------->
            @yield('content')

        </section>
        <!-- /.content -->
    </div>

   @include('admin.partial._footer')


</div>
@include('admin.partial._script')
</body>
</html>