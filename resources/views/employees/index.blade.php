<!DOCTYPE html>
<html>
<head>
    <title>Employee Dashboard</title>
</head>
<body>
    <!-- Sidebar -->
    <div id="sidebar">
        <div class="logo">
            <!-- Your Logo Here -->
        </div>
        <ul>
            <li><a href="#">Data Karyawan</a></li>
            <li><a href="#">Data Nasabah</a></li>
            <li><a href="#">Setting</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>

    <!-- Employee Table -->
    <div id="content">
        <table>
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
</body>
</html>
