<div>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
</div>
<!DOCTYPE html>
<html lang="en">

<head>
    {{-- @include('Template.head') --}}
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
                                <form action="{{ route('kapal.store') }}" method="post">
                                    @csrf
                                    <label for="nama_pemilik">Nama Pemilik</label>
                                    <input type="text" name="nama_pemilik" required>
                                    <label for="nama_kapal">Nama Kapal</label>
                                    <input type="text" name="nama_kapal" required>
                                    <label for="jenis_kapal">Jenis Kapal</label>
                                    <input type="text" name="jenis_kapal" required>
                                    <label for="ukuran">Ukuran</label>
                                    <input type="text" name="ukuran" required>
                                    <button type="submit">Simpan</button>
                                </form>
                                
                    </table>
                </div>
</html>
