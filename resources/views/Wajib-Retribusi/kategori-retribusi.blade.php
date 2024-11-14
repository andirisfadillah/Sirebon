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
                </tr>
            @endforeach
            <!-- Repeat rows as needed -->
        </tbody>
    </table>
@endsection
