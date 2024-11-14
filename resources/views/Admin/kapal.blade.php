@extends('Template.master')

@section('content')
    <table class="table table-bordered mt-3">
        <thead class="table-light">
            <tr>
                <th style="width: 50px;">No.</th>
                <th>Nama Pemilik</th>
                <th>Nama Kapal</th>
                <th>Jenis Kapal</th>
                <th>Ukuran</th>
                @if (auth()->user()->level == 'admin')
                    <th style="width: 150px;">Aksi</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($kapal as $index => $data)
            <tr>
                <td scope="col" class="text-center">{{ $index + 1 }}.</td>
                <td scope="col" class="text-center">{{ $data->nama_pemilik }}</td>
                <td scope="col" class="text-center">{{ $data->nama_kapal }}</td>
                <td scope="col" class="text-center">{{ $data->jenis_kapal }}</td>
                <td scope="col" class="text-center">{{ $data->ukuran }}</td>

                @if (auth()->user()->level == 'admin')
                    <td scope="col" class="text-center">
                        <a href="{{ route('kapal.edit', $data->id) }}"
                            class="btn btn-primary btn-sm m-1">Ubah</a>

                        <form
                            action="{{ route('kapal.destroy', $data->id) }}"
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
        <a href="{{ route('kapal.create') }}" class="btn btn-primary btn-round">Tambah Data</a>
    </div>
@endsection
