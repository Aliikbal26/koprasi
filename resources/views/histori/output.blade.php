<x-app-layout>
    <div class="section-header">
        <h1>Histori Produk</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('histori-masuk') }}">Histori</a></div>
        </div>
    </div>

    {{-- Content --}}
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Histori Produk Keluar</h4>
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
                                        <th>Stok Keluar</th>
                                        <th>Tanggal</th>
                                        <!-- <th>Photo</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($products->count() == 0)
                                    <tr>
                                        <td colspan="6" class="text-center">Belum ada produk masuk...</td>
                                    </tr>
                                    @else
                                    @foreach($products as $row)
                                    <tr>
                                        <td class="align-middle">{{ $loop->iteration }}</td>
                                        <td class="align-middle">{{ $row->name }}</td>
                                        <td class="align-middle">{{ $row->count }}</td>
                                        <td class="align-middle">{{ $row->created_at }}</td>
                                        <!-- <td class="align-middle">
                                            @if($row->photo == null)
                                            <img alt="image" src="{{ asset('file_upload/produk/produk.png') }}" class="rounded-circle" width="30" data-toggle="tooltip" title="Produk">
                                            @else
                                            <img alt="image" src="{{ asset('file_upload/produk/' . $row->product->photo) }}" class="" width="30" data-toggle="tooltip" title="Produk">
                                            @endif
                                        </td> -->
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