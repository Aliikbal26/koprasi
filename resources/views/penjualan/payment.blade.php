<x-app-layout>
    <div class="section-header">
        <h1>Pembayaran</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('checkout.index') }}">Payment</a></div>
            <div class="breadcrumb-item">Laptop</div>
        </div>
    </div>

    <div class="card">
        <div class="row  my-1">
            <div class="col-md-12">
                <div class="card-body p-3 shadow-md">
                    <!-- @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif -->
                    <form action="{{route('checkout.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-3 mb-1 my-2 text-left">
                                @if($products->photo == null)
                                <img alt="image" name="photo" src="{{ asset('file_upload/produk/produk.png') }}" class="img-thumbnail" width="60%" data-toggle="tooltip" title="Produk">
                                @else
                                <img alt="image" name="photo" src="{{ asset('file_upload/produk/' . $products->photo) }}" class="img-thumbnail" width="60%" data-toggle="tooltip" title="Produk">
                                @endif
                            </div>
                            <div class="col-md-8 text-left">
                                <input type="text" name="product_id" id="product_id" value="{{$products['id']}}" hidden>
                                <input type="text" name="name" id="name" class="form-control" value="{{$products->name}}">
                                <!-- <h6 name="name" value="{{$products->name}}"></h6> -->
                                <!-- <input class="form-control" name="price" value=" {{'Rp. ' . number_format(($products->last_price * $products['id']), 0, ',', '.') }} "> -->
                                <input class="form-control" name="price" value=" {{(($products->last_price * $products['id'])) }} ">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <p>Jumlah Barang</p>
                                        <ul class="pagination">
                                            <div>
                                                <td class="d-inline">
                                                    <div class="input-group">
                                                        <!-- <input type="number" name="quantity" class="form-control form-control-sm mb-2 text-center" min="1" value="quantity[{{ $products['id'] }}]"> -->
                                                        <input type="number" name="quantity" class="form-control form-control-sm mb-2 text-center" min="1" value="">
                                                        <!-- <div class="input-group-append">
                                                            <button type="button" class="btn btn-primary" onclick="incrementQuantity(this)">+</button>
                                                            <button type="button" class="btn btn-primary" onclick="decrementQuantity(this)">-</button>
                                                        </div> -->
                                                    </div>
                                                    <!-- <input type="number" name="quantity[{{ $products['id'] }}]" class="form-control form-control-sm mb-2 text-center" width="20%" disabled min="0" value="0">
                                                    <button type="button" class="btn-primary d-inline" onclick="incrementQuantity(this)">+</button>
                                                    <button type="button" class="btn-primary d-inline" onclick="decrementQuantity(this)">-</button> -->
                                                </td>
                                            </div>
                                        </ul>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success btn-sm"> Bayar </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function incrementQuantity(button) {
            var input = button.parentElement.previousElementSibling;
            input.value = parseInt(input.value) + 1;
        }

        function decrementQuantity(button) {
            var input = button.parentElement.previousElementSibling;
            var value = parseInt(input.value) - 1;
            input.value = value >= 0 ? value : 0;
        }
        // function incrementQuantity(button) {
        //     var input = button.previousElementSibling;
        //     input.value = parseInt(input.value) + 1;
        // }

        // function decrementQuantity(button) {
        //     var input = button.previousElementSibling.previousElementSibling;
        //     var value = parseInt(input.value) - 1;
        //     input.value = value >= 0 ? value : 0;
        // }
    </script>
</x-app-layout>