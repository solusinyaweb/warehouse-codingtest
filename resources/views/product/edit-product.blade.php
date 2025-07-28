@extends('index')

@section('content')

<div class="pc-content">

    <!-- Header -->
    <div class="col-md-12 col-xl-12 d-flex justify-content-between align-items-center mb-3">
        <h5 class="mb-0">Ubah Produk</h5>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8 col-xl-12">
            <div class="card">
                <div class="card-body">

                    <form action="">


                        <!-- Nama Produk -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Produk</label>
                            <input type="text" name="name" class="form-control" placeholder="Masukkan nama produk" required>
                        </div>

                        <!-- Kategori -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Kategori</label>
                            <select name="category" class="form-select" required>
                                <option value="">-- Pilih Kategori --</option>
                                <option value="Flooring">Flooring</option>
                                <option value="Keramik">Keramik</option>
                                <option value="Vinyl">Vinyl</option>
                                <option value="Aksesoris">Aksesoris</option>
                            </select>
                        </div>

                        <!-- Harga -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Harga</label>
                            <input type="number" name="price" class="form-control" placeholder="Masukkan harga" required>
                        </div>

                        <!-- Stok -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Stok</label>
                            <input type="number" name="stock" class="form-control" placeholder="Jumlah stok tersedia" required>
                        </div>

                        <!-- Upload Gambar -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Foto Produk</label>
                            <input type="file" name="image" class="form-control">
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
