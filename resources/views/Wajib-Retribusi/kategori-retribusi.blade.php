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
                <div class="table-container">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="input-group" style="width: 200px;">
                            <span class="input-group-text">Search:</span>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </div>

                    <table class="table table-bordered mt-3">
                        <thead class="table-light">
                            <tr>
                            <th style="width: 50px;">No.</th>
                              <th>kategori retribusi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>kategori retribusi 1</td>
                            </tr>
                            <!-- Repeat rows as needed -->
                        </tbody>
                    </table>
                </div>
</html>
