@extends('Template.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Tambah Rekening</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <form action="{{ route('rekening.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="id_ref_bank">Nama Bank</label>
                                    <select name="id_ref_bank" id="id_ref_bank" class="form-select">
                                        @foreach ($refBanks as $bank)
                                            <option value="{{ $bank->id }}">{{ $bank->nama_bank }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nama_akun">Nama Akun</label>
                                    <input type="text" name="nama_akun" class="form-control" required autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="no_rekening">Nomor Rekening</label>
                                    <input type="text" name="no_rekening" class="form-control" required
                                        autocomplete="off">
                                </div>
                                <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
