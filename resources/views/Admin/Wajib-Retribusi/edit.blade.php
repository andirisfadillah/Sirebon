<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card profile-card">
                <div class="card-body">
                    <h5 class="card-title text-center">Ubah Wajib Retribusi</h5>
                    <hr>
                    <form action="{{ route('wajib-retribusi.update', $kapalku->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"
                                value="{{ $kapalku->nama_lengkap }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="telepon"> Telepon</label>
                            <input type="text" name="telepon" id="telepon" class="form-control"
                                value="{{ $kapalku->telepon }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" id="nik" class="form-control"
                                value="{{ $kapalku->nik }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control" required>{{ $kapalku->alamat }}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="kelurahan">Kelurahan</label>
                            <input type="text" name="kelurahan" id="kelurahan" class="form-control"
                                value="{{ $kapalku->kelurahan }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        <a href="{{ route('wajib-retribusi.index') }}" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
