<x-app-layout>
    <div class="section-header">
        <h1>Produk Penjualan</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Produk</a></div>
            <div class="breadcrumb-item">checkout</div>
        </div>
    </div>


    {{-- Content --}}


    {{-- Content --}}
    <div class="section-body">

        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Daftar Produk Penjualan</h4>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-1" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            No
                                        </th>
                                        <th>Nama Produk</th>
                                        <th>Harga Beli</th>
                                        <th>Harga Jual</th>
                                        <th>Stock</th>
                                        <th>Foto</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @if($products->count() == 0)
                                    <tr>
                                        <td colspan="6" class="text-center">Belum ada produk masuk...</td>
                                    </tr>
                                    @else
                                    @foreach($products as $product)
                                    <tr>
                                        <td class="align-middle">{{ $loop->iteration }}</td>
                                        <td class="align-middle">{{ $product->name }}</td>
                                        <td class="align-middle money text-primary">{{ $product->first_price }}</td>
                                        <td class="align-middle money text-primary">{{ $product->last_price }}</td>
                                        <td class="align-middle">{{ $product->stok }} Pcs</td>
                                        <td class="align-middle">
                                            @if($product->photo == null)
                                            <img alt="image" src="{{ asset('file_upload/produk/produk.png') }}" class="rounded-circle" width="30" data-toggle="tooltip" title="Produk">
                                            @else
                                            <img alt="image" src="{{ asset('file_upload/produk/' . $product->photo) }}" class="" width="30" data-toggle="tooltip" title="Produk">
                                            @endif
                                        </td>
                                        <td class="align-middle">
                                            <!-- <a href="{{ route('products.show', $product) }}" class="btn btn-primary m-0 btn-sm lihat-pembimbing"><i class="far fa-eye"></i></a> -->
                                            <a href="{{ route('checkout.show', $product) }}" class="btn btn-primary m-0 btn-sm "><i class="fas fa-shopping-cart"></i> Beli</a>
                                            <!-- <form action="{{ route('products.destroy', $product) }}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="d-none"></button>
                                                <a href="" class="btn btn-sm btn-danger not-link confirm-delete"><i class="fas fa-trash"></i></a>
                                            </form> -->
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>