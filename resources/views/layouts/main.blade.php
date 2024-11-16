<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('sistem-mulmet/assets/images/logoSekolah.png') }}" rel="icon">
    <title>SKPH Quiz</title>
    <link href="{{ asset('sistem-mulmet/template/RuangAdmin/vendor/fontawesome-free/css/all.min.css') }}"
        rel="stylesheet" type="text/css">
    <link href="{{ asset('sistem-mulmet/template/RuangAdmin/vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('sistem-mulmet/template/RuangAdmin/css/ruang-admin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('sistem-mulmet/css/style.css') }}">
    <link href="{{ asset('sistem-mulmet/template/RuangAdmin/vendor/datatables/dataTables.bootstrap4.min.css') }}"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('UI_QUIZ/css/admin.css') }}">
</head>

<body id="page-top">
    @yield('content')
    {{-- @include('sweetalert::alert') --}}

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    {{-- <b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b> --}}
                </span>
            </div>
        </div>
    </footer>
    <!-- Footer -->

    </div> <!-- Penutup tag <div id="content-wrapper"> -->
    </div> <!-- Penutup tag <div id="wrapper"> -->

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script src="{{ asset('sistem-mulmet/template/RuangAdmin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sistem-mulmet/template/RuangAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('sistem-mulmet/template/RuangAdmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('sistem-mulmet/template/RuangAdmin/js/ruang-admin.min.js') }}"></script>
    <script src="{{ asset('sistem-mulmet/template/RuangAdmin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('sistem-mulmet/template/RuangAdmin/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('sistem-mulmet/template/RuangAdmin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('sistem-mulmet/template/RuangAdmin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('UI_QUIZ/js/script-mapel.js') }}"></script>

    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable(); // ID From dataTable
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
    </script>

</body>

</html>
