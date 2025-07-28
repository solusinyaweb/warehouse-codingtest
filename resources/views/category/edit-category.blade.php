@extends('index')

@section('content')

<div class="pc-content">

    <!-- Header -->
    <div class="col-md-12 col-xl-12 d-flex justify-content-between align-items-center mb-3">
        <h5 class="mb-0">Edit Category</h5>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8 col-xl-12">
            <div class="card">
                <div class="card-body">

                    <form action="">


                        <!-- Nama Produk -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Category Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Masukkan nama produk" required>
                        </div>






                        <!-- Tombol Aksi -->
                        <div class="d-flex justify-content-between">
                            <a href="" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

</div>

@endsection
