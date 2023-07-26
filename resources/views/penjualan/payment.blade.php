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
                    <form action="{{route('payment.store')}}" method="post">
                        <div class="row">
                            <div class="col-md-3 mb-1 my-2 text-left">
                                @if($products->photo == null)
                                <img alt="image" src="{{ asset('file_upload/produk/produk.png') }}" class="img-thumbnail" width="60%" data-toggle="tooltip" title="Produk">
                                @else
                                <img alt="image" src="{{ asset('file_upload/produk/' . $products->photo) }}" class="img-thumbnail" width="60%" data-toggle="tooltip" title="Produk">
                                @endif
                            </div>
                            <div class="col-md-8 text-left">

                                <h6>{{$products->name}}</h6>
                                <h6>{{'Rp. ' . number_format(($products->last_price * $products['id']), 0, ',', '.') }}</h6>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <p>Jumlah Barang</p>
                                        <ul class="pagination">
                                            <div>
                                                <td class="d-inline">
                                                    <input type="number" class="form-control form-control-sm mb-2 text-center" width="20%" disabled name="quantity[{{ $products['id'] }}]" min="0" value="0">
                                                    <button type="button" class="btn-primary d-inline" onclick="incrementQuantity(this)">+</button>
                                                    <button type="button" class="btn-primary d-inline" onclick="decrementQuantity(this)">-</button>
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
</x-app-layout>
<script>
    function incrementQuantity(button) {
        var input = button.previousElementSibling;
        input.value = parseInt(input.value) + 1;
    }

    function decrementQuantity(button) {
        var input = button.previousElementSibling.previousElementSibling;
        var value = parseInt(input.value) - 1;
        input.value = value >= 0 ? value : 0;
    }
</script>