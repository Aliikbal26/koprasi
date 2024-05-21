<x-app-layout>
    <div class="section-header">
        <h1>Dashboard</h1>
        <!-- <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        </div> -->
    </div>

    {{-- Content --}}
    <div class="section-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <!-- <table class="table table-striped table-1" id="table-1"> -->

                        <form class="d-flex my-1 " id="">
                            <input class="form-control " type="search" placeholder="Search" aria-label="Search" id="table-1">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        <!-- <h4>Dashboard</h4> -->

                    </div>

                    <div class="card-body">
                        <div class="row bg-secondary ">
                            <div class="col-lg-4 my-3 col-md-6 col-sm-6 col-12">
                                <div class="card card-statistic-1">
                                    <div class="card-icon bg-primary">
                                        <i class="far fa-user"></i>
                                    </div>
                                    <div class="card-wrap">
                                        <div class="card-header">
                                            <h4>Total Admin</h4>
                                        </div>
                                        <div class="card-body">
                                            10
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-3 justify-content-center ">
                            @foreach($products as $row)
                            <div class="col-md-3">
                                <div class="card  shadow" style="max-width: 16rem; border-radius:8px;">
                                    <!-- <div class="mb-1 card-header" style=" border-radius:18px;"> -->
                                    <div class="row mt-2 justify-content-center card-outline-success" style="border-radius:2px;">
                                        @if($row->photo == null)
                                        <img alt="image" src="{{ asset('file_upload/produk/produk.png') }}" class="card-img-top" style="max-width: 60%; object-fit: contain" data-toggle="tooltip" title="{{ $row->name }}">
                                        @else
                                        <img alt="image" src="{{ asset('file_upload/produk/' . $row->photo) }}" class="card-img-top" style="max-width: 60%; object-fit: contain" data-toggle="tooltip" title="{{ $row->name }}">
                                        @endif
                                        <!-- </div> -->
                                        <!-- <img width="invalid-value" height="invalid-value" alt="Logitech M171 Mouse Wireless untuk Windows, Mac, ChromeOS" 
                                        class="_7DTxhh vc8g9F" style="object-fit: contain" src="https://down-id.img.susercontent.com/file/sg-11134201-23020-gdse11jft2mva5_tn">
                                    -->
                                    </div>
                                    <div class="card-body">
                                        <h6 class="">{{ $row->name }}</h6>
                                        <p class="">{{ 'Rp. ' . number_format(($row->last_price), 0, ',', '.') }}</p>
                                        <p class="" style="margin-top: -20px;">{{'Stok :'  . $row->stok }}</p>
                                        @if( $row->stok <= 5) <button class="btn btn-danger">sedang</button>
                                            @else
                                            <button class="btn btn-success">Aman</button>
                                            @endif
                                            <a href="{{ route('checkout.show', $row) }}" class="btn btn-primary">Beli</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>