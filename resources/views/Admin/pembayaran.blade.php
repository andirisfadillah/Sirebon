@extends('Template.master')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        {{-- {{route('pembayaran.create')}} --}}
        <a href="#" class="btn btn-primary">Tambah Data</a>
    </div>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Lengkap</th>
                <th>Rekening</th>
                <th>Bukti</th>
                <th>Tanggal Bayar</th>
                <th>Tanggal Tindak Lanjut</th>
                <th>Tindak Lanjut User</th>
                <th>Aksi</th>

            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
@endsection
