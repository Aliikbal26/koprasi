<x-app-layout>
    <div class="section-header">
        <h1>Produk</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Produk</a></div>
            <div class="breadcrumb-item">edit</div>
        </div>
    </div>

    {{-- Content --}}
    <div class="section-body">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Edit Produk</h4>
                        <a href="" class="btn btn-success jumlah-product">Tambah Jumlah Produk</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.update', $product) }}" method="post" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama Produk<span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="" value="{{ old('name', $product->name) }}">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="photo">Photo Produk <span class="text-secondary">(kosongkan jika tidak diubah)</span></label>
                                <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" id="photo" placeholder="">
                                @error('photo')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="first_price">Harga Beli<span class="text-danger">*</span> <span class="text-secondary">(satuan)</span></label>
                                    <input type="number" class="form-control @error('first_price') is-invalid @enderror" id="first_price" placeholder="10000" name="first_price" value="{{ old('first_price', $product->first_price) }}">
                                    @error('first_price')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="last_price">Harga Jual<span class="text-danger">*</span> <span class="text-secondary">(satuan)</span></label>
                                    <input type="number" class="form-control @error('last_price') is-invalid @enderror" id="last_price" placeholder="12000" name="last_price" value="{{ old('last_price', $product->last_price) }}">
                                    @error('last_price')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="count">Stok Produk<span class="text-danger">*</span></label>
                                <input type="number" class="form-control @error('count') is-invalid @enderror" name="count" id="count" placeholder="10" value="{{ old('count', $product->stok) }}">
                                @error('count')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="d-flex justify-content-end" style="gap: 5px">
                                <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="{{ route('addStok', $product) }}" method="post" class="modal-part modal-stok-product" id="modal-add-pembimbing" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="count">Stok Produk<span class="text-danger">*</span></label>
            <input type="number" class="form-control " name="count" id="count" placeholder="0" required>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <p class="text-center m-0 p-0">Tambah stok produk untuk {{ $product->name }}</p>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>
</x-app-layout>