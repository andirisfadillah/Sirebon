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
        <!--Content Row -->
        <div class="table-container">
            <div class="d-flex justify-content-between align-items-center">
                <button class="btn btn-primary btn-add">Tambah Data</button>
                <div class="input-group" style="width: 200px;">
                    <span class="input-group-text">Search:</span>
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </div>

            <form action="{{ route('kategori.store') }}" method="post">
                @csrf
                <label for="nama">Nama</label>
                <input type="text" name="nama">
                <button type="submit">Simpan data</button>
            </form>
        </div>

        @include('Template.footer')
    </div>

    <!-- Custom template | don't include it in your project! -->



    <!--   Core JS Files   -->
    @include('Template.script')

</body>

</html>
