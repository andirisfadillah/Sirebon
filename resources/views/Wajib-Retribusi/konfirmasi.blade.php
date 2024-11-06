<div>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
</div>
<!DOCTYPE html>
<html lang="en">

<head>
    @include('Template.head')
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        @include('Template.sidebar')
        <!-- End Sidebar -->

        @include('Template.navbar')
                <!-- End Navbar -->
                <h1>Konfirmasi Pembayaran Retribusi</h1>
                    <form action="proses_transfer.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="jenis_bank">Jenis Bank:</label>
                            <select id="jenis_bank" name="jenis_bank" class="form-control" required>
                                <option value="">Pilih Jenis Bank</option>
                                <option value="bank_a">Bank A</option>
                                <option value="bank_b">Bank B</option>
                                <option value="bank_c">Bank C</option>
                                <option value="bank_d">Bank D</option>
                            </select>
                        </div>
            
                        <div class="form-group">
                            <label for="nominal_transfer">Nominal Transfer:</label>
                            <input type="number" id="nominal_transfer" name="nominal_transfer" class="form-control" required>
                        </div>
            
                        <div class="form-group">
                            <label for="nomor_rekening">Nomor Rekening:</label>
                            <input type="text" id="nomor_rekening" name="nomor_rekening" class="form-control" required>
                        </div>
            
                            <div class="form-group mb-3">
                                <label for="formFile" class="form-label">Bukti Pembayaran:</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
            
                        <button type="submit" class="btn btn-primary">Kirim</button>
                            </form>
</html>
