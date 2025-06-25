<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <title>Label Record | @yield('title')</title>

    <style>
        .footer-link {
            color: #6c757d;
            /* Warna abu-abu */
        }

        .footer-link:hover {
            color: #5a6268;
            /* Warna abu-abu gelap saat di-hover */
        }

        .vh-100 {
            height: 100vh;
        }

        .monospace {
            font-family: monospace;
        }

        .nav-link {
            font-family: monospace;
            color: black;
            background-color: transparent;
        }

        .bg-light {
            background-color: #f8f9fa !important;
        }

        .nav-link.active {
            background-color: #567cae;
            color: black;
        }

        .table-responsive {
            overflow-x: auto;
        }

        .card-body {
            overflow-x: auto;
            /* Pastikan card-body memiliki overflow-x auto */
        }

        .table {
            width: 100%;
            /* Pastikan tabel memiliki lebar penuh */
            table-layout: auto;
            /* Atur layout tabel */
        }

        .table th,
        .table td {
            white-space: nowrap;
            /* Mencegah teks membungkus dalam sel tabel */
        }

        /* Atur warna teks dan latar belakang tabel */
        .table-dark th,
        .table-dark td {
            color: #ffffff;
            /* Warna teks putih */
        }

        .table-dark {
            background-color: #343a40;
            /* Warna latar belakang gelap */
        }

        .table-dark .thead-dark th {
            color: #ffffff;
            /* Warna teks putih pada header kolom */
            background-color: #343a40;
            /* Warna latar belakang gelap pada header kolom */
            border-color: #454d55;
            /* Warna garis batas */
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container-fluid d-flex flex-column flex-grow-1">
        <!-- HEADER -->
        <div class="row">
            <div class="col-md-12 bg-dark text-white py-3">
                <h1 class="text-white monospace">
                    <i class="bi bi-music-note"></i> Label-Records
                    <i class="bi bi-cassette"></i>
                    <!-- Dropdown User -->
                    <div class="dropdown float-right">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-person-fill"></i>
                            User
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">{{ Auth::user()->name }}</a>
                            <a class="dropdown-item" href="/user">Change Password</a>
                            <a class="dropdown-item" href="/logout">Logout</a>
                        </div>
                    </div>

                </h1>
            </div>
        </div>
        <!-- BODY -->
        <div class="row flex-grow-1">
            <!-- MENU -->
            @include('nav')
            <!-- ARTIKEL -->
            <div class="shadow-lg p-3 mb-5 bg-body rounded col-md-10 d-flex flex-column">
                <div class="card mt-4 flex-grow-1">
                    <div class="card-header font-weight-bold monospace mb-1">Label Record</div>
                    <div class="card-body">
                        @yield('artikel')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <footer class="bg-dark text-white py-3">
        <p class="text-center monospace mb-1">template by <a href="" class="footer-link">Herman Kambuaya</a></p>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery (gunakan versi lengkap) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- Popper.js, lalu Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "paging": true, // Menampilkan paging
                "lengthChange": true, // Menampilkan dropdown jumlah entries per halaman
                "searching": true, // Menampilkan fitur pencarian
                "info": true, // Menampilkan informasi jumlah data
                "autoWidth": true, // Mengatur lebar kolom otomatis
                "responsive": true // Aktifkan mode responsif
            });
        });
    </script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">





</body>

</html>
