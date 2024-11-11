<!DOCTYPE html>
<html lang="en">

<head>
    @include('Template.head')
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        @include('Template.navbar')
        @include('Template.sidebar')
        <!-- End Sidebar -->

        <!-- Content Row -->
        <div class="row">
            <div>
                <div class="form-container">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" value="text">
                            </div>
                            <div class="form-group col-md-6"> <!-- Mengoreksi "clas" menjadi "class" -->
                                <label for="hakAkses">Hak Akses</label>
                                <input type="text" class="form-control" id="hakAkses" value="Administrator">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control" id="nik" value="3674938217278893">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="namaLengkap">Nama Lengkap</label>
                                <input type="text" class="form-control" id="namaLengkap" value="namaku">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="telepon">Telepon</label>
                                <input type="text" class="form-control" id="telepon" value="081234567890">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" value="Ds. cikaso">
                            </div>
                            <button type="submit" name="save" class="btn btn-primary mt-1">Simpan</button>
                        </div>
                    </form> <!-- Menutup tag <form> -->
                </div>
            </div>

            <h2>Ganti Password</h2>
            <div class="container mt-5">
                <form action="{{ route('ganti-password') }}" method="POST">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @elseif (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <div class="form-group">
                        <label>Password Lama</label>
                        <input type="password" name="current_password" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Password Baru</label>
                        <input type="password" name="new_password" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Konfirmasi Password Baru</label>
                        <input type="password" name="new_password_confirmation" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Ganti Password</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
