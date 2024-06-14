<!-- resources/views/welcome.blade.php -->

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
        }

        .footer-link:hover {
            color: #5a6268;
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
        }

        .table {
            width: 100%;
            table-layout: auto;
        }

        .table th,
        .table td {
            white-space: nowrap;
        }

        .table-dark th,
        .table-dark td {
            color: #ffffff;
        }

        .table-dark {
            background-color: #343a40;
        }

        .table-dark .thead-dark th {
            color: #ffffff;
            background-color: #343a40;
            border-color: #454d55;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container-fluid d-flex flex-column flex-grow-1">
        <!-- HEADER -->
        <div class="row">
            <div class="col-md-12 bg-dark text-white py-3">
                <h1 class="text-white monospace">
                    <i class="bi bi-music-note"></i> Artistic-Records
                    <i class="bi bi-cassette"></i>
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
                        <input type="text" id="search" class="form-control" placeholder="Search...">
                        <table class="table mt-3" id="results">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Results will be appended here -->
                            </tbody>
                        </table>
                        @yield('artikel')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <footer class="bg-dark text-white py-3">
        <p class="text-center monospace mb-1">template by <a href="" class="footer-link">Stevan Tarigan</a></p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"
        integrity="sha384-BKXvRO4c5QTEtv3G1F5oyJXHt4BX6+/QtIRvT4LHeM2jvq/Of3U3cYpVpKw9Rwv7" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "info": true,
                "autoWidth": true,
                "responsive": true
            });

            $('#search').on('input', function () {
                var query = $(this).val();
                if (query.length > 2) {
                    $.ajax({
                        url: '/api/search',
                        method: 'GET',
                        data: {
                            query: query
                        },
                        success: function (data) {
                            $('#results tbody').empty();
                            data.forEach(function (item) {
                                $('#results tbody').append(`
                                    <tr>
                                        <td>${item.labelName}</td>
                                        <td>${item.description}</td>
                                    </tr>
                                `);
                            });
                        }
                    });
                } else {
                    $('#results tbody').empty();
                }
            });
        });
    </script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

</body>

</html>
