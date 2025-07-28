@extends('index')

@section('content')

<div class="pc-content">

    <div class="row">
        <!-- Judul dan tombol tambah produk -->
        <div class="col-md-12 col-xl-12 d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">Product List</h5>
            <a href="/add-product" class="btn btn-primary">+ Add Product</a>
        </div>

        <!-- Tabel produk -->
        <div class="col-md-12 col-xl-12">
            <div class="card tbl-card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-borderless mb-0">
                            <thead>
                                <tr>
                                    <th>NO.</th>
                                    <th>FOTO</th>
                                    <th>NAMA PRODUK</th>
                                    <th>KATEGORI</th>
                                    <th>HARGA</th>
                                    <th>STOK</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Contoh baris produk -->
                                <tr>
                                    <td>1</td>
                                    <td><img src="{{ asset('images/sample.jpg') }}" width="50" class="rounded" /></td>
                                    <td>Lantai SPC Herringbone</td>
                                    <td>Flooring</td>
                                    <td>Rp 250.000</td>
                                    <td>120</td>
                                    <td>
                                        <a href="/edit-product" class="btn btn-warning btn-sm" title="Edit">
                                            <i class="ti ti-brush"></i> Edit
                                        </a>
                                        <button class="btn btn-danger btn-sm" title="Delete">
                                            <i class="ti ti-bucket"></i> Delete
                                        </button>
                                    </td>
                                </tr>

                                <!-- Tambahkan baris lainnya dari data database -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
