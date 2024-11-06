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

            <form action="{{ route('kategori.update', $kategori->id) }}" method="post">
                @csrf
                @method('put')
                <label for="nama">Nama</label>
                <input type="text" name="nama" value="{{$kategori->nama}}">
                <button type="submit">Simpan data</button>
            </form>
        </div>

</html>
