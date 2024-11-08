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
                <div class="container mt-5">
                    <!-- Search Input and Table Container -->
                    <div class="table-container">
                        <!-- Search Bar -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="input-group" style="width: 200px;">
                                <span class="input-group-text">Search:</span>
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                        </div>
            
                        <!-- Dark Themed Data Table -->
                        <table class="table table-dark table-bordered mt-3">
                            <div class="table-container">
                                <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 50px;">No.</th>
                                    <th scope="col">Kategori Retribusi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Sample Data Row -->
                                <tr>
                                    <thead class="thead-dark">
                                    <th scope="col">1</th>
                                    <th scope="col">Kategori Retribusi</th>
                                </tr>
                                <!-- Repeat rows as needed or dynamically populate with backend data -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </body>
            </html>