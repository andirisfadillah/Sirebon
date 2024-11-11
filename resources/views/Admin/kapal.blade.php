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
                                <th>Nama lengkap</th>
                                <th>telepon</th>
                                <th>nik</th>
                                <th>alamat</th>
                                <th>kelurahan</th>
                                @if (auth()->user()->level == "admin")
                                <th style="width: 150px;">Aksi</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kapalku as $index => $data)
                            <tr>
                                    <td scope="col" class="text-center">{{ $index + 1 }}.</td>
                                    <td scope="col" class="text-center">{{ $data->nama_lengkap }}</td>
                                    <td scope="col" class="text-center">{{ $data->telepon }}</td>
                                    <td scope="col" class="text-center">{{ $data->nik }}</td>
                                    <td scope="col" class="text-center">{{ $data->alamat }}</td>
                                    <td scope="col" class="text-center">
                                        {{ $data->kelurahan->nama_kelurahan }}</td>
                                    @if (auth()->user()->level == 'admin')
                                        <td scope="col" class="text-center">
                                            <a href="{{ route('wajib-retribusi.edit', $data->id) }}"
                                                class="btn btn-primary btn-sm m-1">Ubah</a>

                                            <form action="{{ route('wajib-retribusi.destroy', $data->id) }}"
                                                method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm m-1"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                            </form>
                                        </td>
                                    @endif
                                  </tr>
                                  @endforeach
                        </tbody>
                    </table>
                </div>

                        <div class="ms-md-auto py-2 py-md-0">
                            <a href="#" class="btn btn-primary btn-round">Tambah Data</a>
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
                                    </html>