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
                        <div class="input-group" style="width: 200px;">
                            <span class="input-group-text">Search:</span>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </div>

                    <table class="table table-bordered mt-3">
                        <thead class="table-light">
                            <tr>
                                <form action="{{ route('kapalku.store') }}" method="post">
                                    @csrf
                                    <label for="nama">Nama lengkap</label>
                                    <input type="text" name="nama_lengkap">
                                    <label for="nama">Telepon</label>
                                    <input type="text" name="telepon">
                                    <label for="nama">Nik</label>
                                    <input type="text" name="nik">
                                    <label for="nama">Alamat</label>
                                    <input type="text" name="alamat">
                                    <label for="nama">Kelurahan</label>
                                    <input type="text" name="kelurahan">
                                    <button type="submit">Simpan data</button>
                                </form>
                    </table>
                </div>
</html>
