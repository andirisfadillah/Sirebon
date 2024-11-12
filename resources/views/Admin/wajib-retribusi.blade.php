@extends('Template.master')

@section('content')
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
                    @if (auth()->user()->level == 'admin')
                        <th style="width: 150px;">Aksi</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($kapalku as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->nama_lengkap }}</td>
                        <td>{{ $item->telepon }}</td>
                        <td>{{ $item->nik }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->kelurahan }}</td>
                        <td scope="col" class="text-center">
                            <a href="{{ route('kapalku.edit', $item->id) }}" class="btn btn-primary btn-sm m-1">Ubah</a>

                            <form action="{{ route('kapalku.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm m-1"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="ms-md-auto py-2 py-md-0">
        <a href="{{ route('kapalku.create') }}" class="btn btn-primary btn-round">Tambah Data</a>
    </div>
@endsection
