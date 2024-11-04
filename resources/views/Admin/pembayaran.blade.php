<div>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
</div>
<!DOCTYPE html>
<html lang="en">

<head>
    @include('Template.head')
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        @include('Template.sidebar')
        <!-- End Sidebar -->

        @include('Template.navbar')
                <!-- End Navbar -->
                <div class="container">
                    <div class="d-flex justify-content-between mb-3">
                        <button class="btn btn-primary">Tambah Data</button>
                        <div class="input-group" style="max-width: 200px;">
                            <span class="input-group-text">Search:</span>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </div>
                
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Lengkap</th>
                                <th>Rekening</th>
                                <th>Bukti</th>
                                <th>Tanggal Bayar</th>
                                <th>Tanggal Tindak Lanjut</th>
                                <th>Tindak Lanjut User</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
</html>

