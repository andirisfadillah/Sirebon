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

            <table class="table table-bordered mt-5">
                <thead class="table-light">
                    <tr>
                        <th style="width: 50px;">No.</th>
                        <th>Kapalku</th>
                        <th style="width: 150px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kapalku as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->Nama_lengkap }}</td>
                        <td>{{ $item->Telefon }}</td>
                        <td>{{ $item->Nik }}</td>
                        <td>{{ $item->Alamat }}</td>
                        <td>{{ $item->Kelurahan }}</td>
                        <td>
                            
                            <a href="{{route('kapalku.edit', $item->id)}}" class="btn btn-primary btn-sm">Ubah</a>
                            <form action="{{ route('kapalku.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <!-- Repeat rows as needed -->
                </tbody>
            </table>
            <a class="btn btn-primary btn-add" href="{{route('kapalku.create')}}">Tambah data</a>

        </div>

</html>
