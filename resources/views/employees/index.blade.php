<!DOCTYPE html>
<html>
<head>
    <title>Employee Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="row min-vh-100">
            <div class="col-md-3 bg-dark text-light py-3" id="sidebar">
                <figure class="text-center">
                      <!-- your logo here -->
                      <!-- <img src="your-logo.png" alt="Logo" height="50" class="navbar-brand-img"> -->
                </figure>
                <ul class="nav flex-column pl-4">
                    <li class="h5 font-weight-bold my-3 nav-item"><a class="nav-link text-light active" href="#">Data Karyawan</a></li>
                    <li class="h5 font-weight-bold my-3 nav-item"><a class="nav-link text-light" href="#">Data Nasabah</a></li>
                    <li class="h5 font-weight-bold my-3 nav-item"><a class="nav-link text-light" href="#">Setting</a></li>
                    <li class="h5 font-weight-bold my-3 nav-item"><a class="nav-link text-danger" href="#">Logout</a></li>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="container py-3">
                    <h2 class="mt-3">Employee List</h2>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No.</th>
                                    <th>Email</th>
                                    <th>Name</th>
                                    <!-- Add other columns -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($employees as $employee)
                                    <tr>
                                        <td>{{ $employee->id }}</td>
                                        <td>{{ $employee->email }}</td>
                                        <td>{{ $employee->Nama }}</td>
                                        <!-- Add other columns -->
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>