<x-app-layout>
    <div class="section-header">
        <h1>Produk</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('products.index') }}">Produk</a></div>
            <div class="breadcrumb-item">{{ $product->name }}</div>
        </div>
    </div>

    {{-- Content --}}
    <div class="section-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>{{ $product->name }}</h4>
                        <a href="{{ route('products.index') }}" class="btn btn-secondary">kembali</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                @if($product->photo == null)
                                <img alt="image" src="{{ asset('file_upload/produk/produk.png') }}" class="img-fluid" width="100" title="Produk">
                                @else
                                <img alt="image" src="{{ asset('file_upload/produk/' . $product->photo) }}" class="img-fluid" witdh="100" title="Produk">
                                @endif
                                <!-- <img src="{{ asset('file_upload/produk/' . $product->photo) }}" alt="" class="img-fluid"> -->
                            </div>
                            <div class="col-md-5">
                                <table class="w-100">
                                    <tr>
                                        <td width="">Harga Beli</td>
                                        <td class="money text-primary">{{ $product->first_price }}</td>
                                    </tr>
                                    <tr>
                                        <td width="">Harga Jual</td>
                                        <td class="money text-primary">{{ $product->last_price }}</td>
                                    </tr>
                                    <tr>
                                        <td width="">Stok Barang</td>
                                        <td class="text-primary">{{ $product->stok }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>