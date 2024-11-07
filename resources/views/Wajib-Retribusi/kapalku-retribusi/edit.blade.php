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

          
                
                <form action="{{ route('kapalku.store') }}" method="post">
                    @csrf
                <label for="nama">Nama</label>
                <input type="text" name="nama" value="{{$kapalku->nama}}">
                <label for="nama">Telepon</label>
                <input type="text" name="telepon" value="{{$kapalku->telepon}}">
                <label for="nama">Nik</label>
                <input type="text" name="nik" value="{{$kapalku->nik}}">
                <label for="nama">Alamat</label>
                <input type="text" name="alamat" value="{{$kapalku->alamatku}}">
                <label for="nama">Kelurahan</label>
                <input type="text" name="kelurahan" value="{{$kapalku->kelurahan}}">
                <button type="submit">Simpan data</button>
            </form>
        </div>

</html>