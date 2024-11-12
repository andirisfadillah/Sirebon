@extends('Template.master')

@section('content')
    <table class="table table-bordered mt-4">
        <thead class="table-light">
            <tr>
                <th style="width: 50px;">No.</th>
                <th>kategori retribusi</th>
                <th style="width: 150px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategori as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>

                        <a href="{{ route('kategori.edit', $item->id) }}" class="btn btn-primary btn-sm">Ubah</a>
                        <form action="{{ route('kategori.destroy', $item->id) }}" method="post">
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
    <a class="btn btn-primary btn-add" href="{{ route('kategori.create') }}">Tambah data</a>
@endsection
