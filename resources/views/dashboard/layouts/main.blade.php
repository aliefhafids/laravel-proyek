<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- plugins:css -->
    <link rel="stylesheet" href="/css/vendors/feather/feather.css">
    <link rel="stylesheet" href="/css/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/css/vendors/css/vendor.bundle.base.css">

    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/css/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="/css/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="/js/select.dataTables.min.css">

    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/css/vendors/vertical-layout-light/style.css">

    <title>MAHAR</title>
</head>

<body>
<div class="container-scroller">
    @include('dashboard.layouts.header')

    <div class="container-fluid">
        <div class="row">
            @include('dashboard.layouts.sidebar')

            @yield('container')
        </div>
    </div>
<div>



    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>

    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/css/vendors/chart.js/Chart.min.js"></script>
    <script src="/css/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="/css/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="/js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/js/off-canvas.js"></script>
    <script src="/js/hoverable-collapse.js"></script>
    <script src="/js/template.js"></script>
    <script src="/js/settings.js"></script>
    <script src="/js/todolist.js"></script>

    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="/js/dashboard.js"></script>
    <script src="/js/Chart.roundedBarCharts.js"></script>
    <script src="/js/chart.js"></script>

</body>

</html>
