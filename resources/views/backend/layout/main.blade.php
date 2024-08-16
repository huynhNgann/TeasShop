<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dashboard 2 | Velonic - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.ico')}}">
    <!-- Ricksaw Css-->
    <link href="{{asset('backend/assets/libs/rickshaw/rickshaw.min.css')}}" rel="stylesheet" type="text/css">
    <!-- App css -->
    <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
    <link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet">
    @yield('css')
</head>
<body>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Topbar Start -->
        @include('backend.layout.header')
        <!-- end Topbar -->
        @include('backend.layout.left-side-menu')
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        @yield('content')
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->
    <!-- Right Sidebar -->
    <!-- Right-bar -->
    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <!-- Vendor js -->
    <script src="{{asset('backend/assets/js/vendor.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/moment/moment.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/jquery-scrollto/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
   <!-- Chat app -->
    <script src="{{asset('backend/assets/js/pages/jquery.chat.js')}}"></script>
  <!-- Todo app -->
  <script src="{{asset('backend/assets/js/pages/jquery.todo.js')}}"></script>
   <!--Morris Chart-->
   <script src="{{asset('backend/assets/libs/morris-js/morris.min.js')}}"></script>
   <script src="{{asset('backend/assets/libs/raphael/raphael.min.js')}}"></script>

   <!-- Sparkline charts -->
   <script src="{{asset('backend/assets/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

   <!-- Dashboard init JS -->
   <script src="{{asset('backend/assets/js/pages/dashboard.init.js')}}"></script>

   <!-- App js -->
   <script src="{{asset('backend/assets/js/app.min.js')}}"></script>
    @yield('js')
    <script>
        $(document).ready(function() {
     if ($.fn.dataTable.isDataTable('#datatable')) {
         $('#datatable').DataTable();
     } else {
         $('#datatable').DataTable({
             paging: false,
             ordering: false // Tắt tính năng sắp xếp cho toàn bộ bảng
         });
     }
 });
 
     </script>
</body>

</html>
