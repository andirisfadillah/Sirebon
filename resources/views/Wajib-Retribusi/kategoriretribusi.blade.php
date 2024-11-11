<div><!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
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
               <div class="table-container">
                                <div class="d-flex justify-content-between align-items-center">
                                    <button class="btn btn-primary btn-add">Tambah Data</button>
                                </div>

                                <table class="table table-bordered mt-3">
                                    <thead class="table-light">
                                        <tr>
                                        <th style="width: 50px;">No.</th>
                                          <th>kategori retribusi</th>
                                             <th style="width: 150px;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>kategori retribusi 1</td>

                                            <td>
                                                <button class="btn btn-primary btn-sm">Ubah</button>
                                                <button class="btn btn-danger btn-sm">Hapus</button>
                                            </td>
                                        </tr>
                                        <!-- Repeat rows as needed -->
                                    </tbody>
                                </table>
                            </div>
</html>
