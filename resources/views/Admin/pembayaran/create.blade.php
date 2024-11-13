@extends('Template.master')

@section('content')
    <div class="table-container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <a href="{{ route('retribusi.index') }}" class="btn btn-secondary">Kembali</a>
            <h2>Tambah Pembayaran Retribusi</h2>
        </div>

        <div class="row"></div>
        <div class="col-10 offset-sm-1">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('kategori.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Simpan Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
