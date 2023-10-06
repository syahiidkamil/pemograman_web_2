<!DOCTYPE html>
<html>
<head>
    <title>Employee Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="sidebar">
                    <div class="logo">
                        <!-- Your Logo Here -->
                    </div>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#">Data Karyawan</a></li>
                        <li><a href="#">Data Nasabah</a></li>
                        <li><a href="#">Setting</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="content">
                    <table class="table">
                        <thead>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>