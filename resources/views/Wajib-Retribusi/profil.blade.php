@extends('Template.master')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card profile-card">
                <div class="card-body">
                    <h5 class="card-title">Profil</h5>
                    <hr>
                    <form>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="sdadas">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Hak Akses</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="Administrator" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">NIK</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="3424234324">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="alyayaya">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Telepon</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="099076756">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="Kalijaga">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h2>Ganti Password</h2>
        <form action="{{ route('ganti-password') }}" method="POST">
            @csrf

            <!-- Display success or error messages -->
            @if (session('status'))
                <<<<<<< HEAD <div class="alert alert-success">{{ session('status') }}
                @elseif (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                    =======
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @elseif (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    >>>>>>> a9b61bb87acca09106d68d902e3a7cbac7838827
            @endif
            <table class="table">
                <tr>
                    <td><label for="current_password">Password Lama</label></td>
                    <td>
                        <input type="password" id="current_password" name="current_password" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <td><label for="new_password">Password Baru</label></td>
                    <td>
                        <input type="password" id="new_password" name="new_password" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <td><label for="new_password_confirmation">Konfirmasi Password Baru</label></td>
                    <td>
                        <input type="password" id="new_password_confirmation" name="new_password_confirmation"
                            class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" class="btn btn-primary mt-3">Ganti Password</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
@endsection
