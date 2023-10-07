<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="row min-vh-100">
            <div class="col-md-3 bg-dark text-light py-3" id="sidebar">
                <figure class="text-center">
                      <img src="assets/images/logo_unsia.png" alt="Logo" height="50" class="navbar-brand-img">
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
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="mt-3">Data Nasabah</h2>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addKaryawanModal">Add Nasabah</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No.</th>
                                    <th>Email</th>
                                    <th>Nama</th>
                                    <th>Nama belakang</th>
                                    <th>Alamat</th>
                                    <th>Telepon</th>
                                    <th>Avatar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customers as $customer)
                                    <tr>
                                        <td>{{ $customer->id }}</td>
                                        <td>{{ $customer->email }}</td>
                                        <td>{{ $customer->Nama }}</td>
                                        <td>{{ $customer->Nama_belakang }}</td>
                                        <td>{{ $customer->alamat }}</td>
                                        <td>{{ $customer->telepon }}</td>
                                        <td>{{ $customer->avatar }}</td>
                                        <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addKaryawanModal"
    data-id="{{ $customer->id }}" data-email="{{ $customer->email }}" data-password="{{ $customer->password }}"
    data-nama="{{ $customer->Nama }}" data-namabelakang="{{ $customer->Nama_belakang }}" data-alamat="{{ $customer->alamat }}"
    data-telepon="{{ $customer->telepon }}" data-avatar="{{ $customer->avatar }}">Edit</button>

                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteKaryawanModal" data-id="{{ $customer->id }}">Delete</button>
            </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addKaryawanModal" tabindex="-1" aria-labelledby="addKaryawanModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addKaryawanModalLabel">Add/Edit Nasabah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form method="POST" action="{{ route('customer.store') }}">
                    @csrf
                    <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" name="email" type="email" class="form-control" id="avatar" maxlength="55">
                        </div>
                    <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" name="password" type="password" class="form-control" id="avatar" maxlength="55">
                        </div>
                    <div class="mb-3">
                            <label for="Nama" class="form-label">Nama</label>
                            <input id="Nama" name="Nama" type="text" class="form-control" id="avatar" maxlength="55">
                        </div>
                        <div class="mb-3">
                            <label for="Nama_belakang" class="form-label">Nama Belakang</label>
                            <input id="Nama_belakang" name="Nama_belakang" type="text" class="form-control" id="avatar" maxlength="55">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input id="alamat" name="alamat" type="text" class="form-control" id="avatar" maxlength="55">
                        </div>
                        <div class="mb-3">
                            <label for="telepon" class="form-label">Telepon</label>
                            <input id="telepon" name="telepon" type="text" class="form-control" id="avatar" maxlength="55">
                        </div>
                        <div class="mb-3">
                            <label for="avatar" class="form-label">Avatar</label>
                            <input id="avatar" name="avatar" type="text" class="form-control" id="avatar" maxlength="55">
                        </div>
                        <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                    </form>
                </div>
               
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteKaryawanModal" tabindex="-1" aria-labelledby="deleteKaryawanModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteKaryawanModalLabel">Delete Karyawan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this record?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <form method="POST" action="{{ route('customer.destroy', 'delete-id') }}" id="deleteForm">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js">
       var myModal = new bootstrap.Modal(document.getElementById('addKaryawanModal'), {});

document.addEventListener("DOMContentLoaded", function() {
    var modalLabel = document.getElementById('addKaryawanModalLabel');

    document.getElementById('addKaryawanModal').addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget;
        if (button.getAttribute('data-id')) {
            modalLabel.textContent = 'Edit Karyawan';
        } else {
            modalLabel.textContent = 'Add Karyawan';
        }
    });
});



    </script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var deleteModal = document.getElementById('deleteKaryawanModal');
        var deleteForm = document.getElementById('deleteForm');

        deleteModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget;
            var id = button.getAttribute('data-id');
            var action = '/customers/' + id;
            deleteForm.action = action;
        });
    });
</script>
<script> document.addEventListener("DOMContentLoaded", function() {
    var modal = document.getElementById('addKaryawanModal');
    var modalLabel = document.getElementById('addKaryawanModalLabel');

    modal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget;
        var id = button.getAttribute('data-id');
        if (id) {
            modalLabel.textContent = 'Edit Karyawan';
            document.getElementById('email').value = button.getAttribute('data-email');
            document.getElementById('password').value = button.getAttribute('data-password');
            document.getElementById('Nama').value = button.getAttribute('data-nama');
            document.getElementById('Nama_belakang').value = button.getAttribute('data-namabelakang');
            document.getElementById('alamat').value = button.getAttribute('data-alamat');
            document.getElementById('telepon').value = button.getAttribute('data-telepon');
            document.getElementById('avatar').value = button.getAttribute('data-avatar');
        } else {
            modalLabel.textContent = 'Add Karyawan';
            // Clear any previous values
            document.getElementById('email').value = '';
            document.getElementById('password').value = '';
            document.getElementById('Nama').value = '';
            document.getElementById('Nama_belakang').value = '';
            document.getElementById('alamat').value = '';
            document.getElementById('telepon').value = '';
            document.getElementById('avatar').value = '';
        }
    });
});
</script>
</body>
</html>