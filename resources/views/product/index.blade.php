<x-app-layout>
    <div class="section-header">
        <h1>Produk</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Produk</a></div>
        </div>
    </div>

    {{-- Content --}}
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Daftar Produk</h4>
                        <a href="{{ route('products.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Pembimbing Baru</a>
                    </div>
                    
                    <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-1" id="table-1">
                        <thead>
                            <tr>
                            <th class="text-center">
                                #
                            </th>
                            <th>Nama Pembimbing</th>
                            <th>Sekolah</th>
                            <th>Email</th>
                            <th>Photo</th>
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
                                <td class="align-middle">{{ $product->school->name }}</td>
                                <td class="align-middle">{{ $product->email }}</td>
                                <td>
                                    @if($product->photo == null)
                                    <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="rounded-circle" width="28" data-toggle="tooltip" title="Wildan Ahdian">
                                    @else
                                    <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="rounded-circle" width="28" data-toggle="tooltip" title="Wildan Ahdian">
                                    @endif
                                </td>
                                <td class="align-middle">
                                    <a href="" class="btn btn-primary m-0 btn-sm lihat-pembimbing" data-pembimbing="{{ $product->productname }}"><i class="far fa-eye"></i></a>
                                    <a href="" class="btn btn-success m-0 btn-sm edit-pembimbing" data-pembimbing="{{ $product->productname }}"><i class="far fa-edit"></i></a>
                                    <form action="{{ route('products.destroy', $product) }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="d-none"></button>
                                            <a href="" class="btn btn-sm btn-danger not-link confirm-delete"><i class="fas fa-trash"></i></a>
                                    </form>
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