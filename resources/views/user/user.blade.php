@extends('index')

@section('content')

<div class="pc-content">

    <div class="row">

        <div class="col-md-12 col-xl-12 d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">User List</h5>
            <a href="/add-user" class="btn btn-primary">+ Add User</a>
        </div>

        <div class="col-md-12 col-xl-12">
            <div class="card tbl-card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-borderless mb-0">
                            <thead>
                                <tr>
                                    <th>NO.</th>
                                    <th>FOTO</th>
                                    <th>USERNAME</th>
                                    <th>ROLE</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#" class="text-muted">84564564</a></td>
                                    <td>Camera Lens</td>
                                    <td>40</td>
                                    <td>
                                        <span class="d-flex align-items-center gap-2">
                                            <i class="fas fa-circle text-danger f-10 m-r-5"></i>Rejected
                                        </span>
                                    </td>
                                    <td>
                                        <a href="/edit-user" class="btn btn-warning" title="edit"><i class="ti ti-brush"></i>Edit</a>
                                        <button class="btn btn-danger"  title="delete"><i class="ti ti-bucket"></i>Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
