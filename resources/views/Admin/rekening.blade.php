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

<<<<<<< HEAD
        @include('Template.navbar')
        <!-- End Navbar -->
        <div class="table-container">
            <div class="d-flex justify-content-between align-items-center">
                <button class="btn btn-primary btn-add">Tambah Data</button>
                <div class="input-group" style="width: 200px;">
                    <span class="input-group-text">Search:</span>
                    <input type="text" class="form-control" placeholder="Search">
=======
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
>>>>>>> a9b61bb87acca09106d68d902e3a7cbac7838827
                </div>
            </div>

<<<<<<< HEAD
            <table class="table table-bordered mt-3">
                <thead class="table-light">
                    <tr>
                        <th style="width: 50px;">No.</th>
                        <th>Nama Bank</th>
                        <th>Nama Pemilik</th>
                        <th>Nomor Rekening</th>
                        <th style="width: 150px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rekening as $index => $data)
                    <tr>
                        <td scope="col" class="text-center">{{ $index + 1 }}</td>
                        <td scope="col" class="text-center">{{ $data->refBank->nama_bank }}</td>
                        <td scope="col" class="text-center">{{ $data->nama_akun }}</td>
                        <td scope="col" class="text-center">{{ $data->no_rekening }}</td>
                        <td scope="col" class="text-center">
                            <a href="{{ route('rekening.edit', $data->id) }}" class="btn btn-primary btn-sm m-1">Ubah</a>
        
                            <form id="deleteForm{{ $data->id }}" action="{{ route('rekening.destroy', $data->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="ms-md-auto py-2 py-md-0">
            <a href="{{ route('rekening.create') }}" class="btn btn-primary btn-round">Tambah Data</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-primary bubble-shadow-small">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
=======
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
>>>>>>> a9b61bb87acca09106d68d902e3a7cbac7838827

</html>
