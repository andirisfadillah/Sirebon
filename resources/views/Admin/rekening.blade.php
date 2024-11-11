<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SiRebon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Webfont Loading -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ["assets/css/fonts.min.css"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins.min.css">
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css">

    <!-- CSS for demo purposes (optional, can be removed in production) -->
    <link rel="stylesheet" href="assets/css/demo.css">

    <style>
        /* Wrapper Flexbox */
        .wrapper {
            display: flex;
            height: 100vh;
            flex-direction: row;
            overflow: hidden;
        }

        /* Sidebar Styling */
        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            padding-top: 20px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar .nav-item a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            display: block;
        }

        .sidebar .nav-item a:hover {
            background-color: #007bff;
        }

        /* Main Panel Styling */
        .main-panel {
            margin-left: 250px; /* Space for Sidebar */
            width: calc(100% - 250px); /* Remaining width for content */
            padding: 20px;
            overflow-y: auto;
            background-color: #f8f9fa;
        }

        /* Navbar Styling */
        .main-header {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            position: sticky;
            top: 0;
            width: 100%;
        }

        .navbar {
            margin-bottom: 0;
        }

        .navbar .nav-item {
            padding-right: 20px;
        }

        /* Navbar Toggler */
        .navbar-toggler {
            border: none;
            background-color: transparent;
        }

        /* Table Styling */
        .table {
            margin-top: 20px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                position: relative;
                height: auto;
            }

            .main-panel {
                margin-left: 0;
                width: 100%;
            }

            .navbar {
                position: relative;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar">
            @include('Template.sidebar')
            @include('Template.navbar')
        </div>

        <!-- Main Content Area -->
        <div class="main-panel">
            <!-- Navbar -->
            <div class="main-header">
                <nav class="navbar navbar-header navbar-expand-lg navbar-light border-bottom">
                    <div class="container-fluid">
                        <nav class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pe-1">
                                        <i class="fa fa-search search-icon"></i>
                                    </button>
                                </div>
                                <input type="text" placeholder="Search ..." class="form-control" />
                            </div>
                        </nav>
                    </div>
                </nav>
            </div>

            <!-- Content Section -->
            <div class="container mt-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <a href="http://127.0.0.1:8000/rekening/create" class="btn btn-primary">Tambah Data</a>
                </div>

                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th class="text-center" style="width: 50px;">No.</th>
                            <th class="text-center" style="width: 150px;">Jenis Bank</th>
                            <th class="text-center" style="width: 200px;">Nama Pemilik</th>
                            <th class="text-center" style="width: 150px;">Nomor Rekening</th>
                            <th class="text-center" style="width: 180px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Table Body Content Goes Here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
</body>

</html>
