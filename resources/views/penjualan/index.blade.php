<x-app-layout>
    <div class="section-header">
        <h1>Produk Penjualan</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Produk</a></div>
            <div class="breadcrumb-item">checkout</div>
        </div>
    </div>

    {{-- Content --}}
    <div class="section-body">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Penjualan</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama Produk<span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="" value="{{ old('name') }}">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="photo">Photo Produk</label>
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
                                    <input type="number" class="form-control @error('first_price') is-invalid @enderror" id="first_price" placeholder="10000" name="first_price" value="{{ old('first_price') }}">
                                    @error('first_price')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="last_price">Harga Jual<span class="text-danger">*</span> <span class="text-secondary">(satuan)</span></label>
                                    <input type="number" class="form-control @error('last_price') is-invalid @enderror" id="last_price" placeholder="12000" name="last_price" value="{{ old('last_price') }}">
                                    @error('last_price')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="count">Jumlah Produk<span class="text-danger">*</span></label>
                                <input type="number" class="form-control @error('count') is-invalid @enderror" name="count" id="count" placeholder="10" value="{{ old('count') }}">
                                @error('count')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="d-flex justify-content-end" style="gap: 5px">
                                <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>