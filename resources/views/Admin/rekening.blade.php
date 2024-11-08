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
                <div class="table-container">
                    <div class="d-flex justify-content-between align-items-center">
                        <button class="btn btn-primary btn-add">Tambah Data</button>
                        <div class="input-group" style="width: 200px;">
                            <span class="input-group-text">Search:</span>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </div>

                    <table class="table table-bordered mt-3">
                        <thead class="table-light">
                            <tr>
                            <th style="width: 50px;">No.</th>
                                <th>Jenis Bank</th>
                                <th>Nama Pemilik</th>
                                <th>Nomor Rekening</th>
                                <th style="width: 150px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rekening as $index => $data)
                            <tr>
                                <td scope="col" class="text-center">{{ $index + 1 }}</td>
                                <td scope="col" class="text-center">
                                    {{ $data->refBank->nama_bank }}</td>
                                    <td scope="col" class="text-center">{{ $data->nama_akun }}</td>
                                    <td scope="col" class="text-center">{{ $data->no_rekening }}</td>
                                    <td scope="col" class="text-center">
                                        <a href="{{ route('rekening.edit', $data->id) }}"
                                            class="btn btn-primary btn-sm m-1">Ubah</a>

                                            <form action="{{ route('rekening.destroy', $data->id) }}"
                                                method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm m-1"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                               
                            <!-- Repeat rows as needed -->
                        </tbody>
                    </table>
                </div>
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>2024 &copy; SiRebon. Dinas Komunikasi, Informatika & Statistik.</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
    
            </div>
            <!-- End of Content Wrapper -->
    
        </div>
        <!-- End of Page Wrapper -->
    
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    
        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Anda Yakin?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body">Klik "Logout" Jika Anda Yakin Ingin Keluar</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="{{ route ('logout') }}">Logout</a>
                    </div>
                </div>
            </div>
        </div>
</html>
