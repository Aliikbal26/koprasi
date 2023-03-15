<x-app-layout>
    <div class="section-header">
        <h1>Dashboard</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        </div>
    </div>

    {{-- Content --}}
    <div class="section-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Dashboard</h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
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
                                <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="card card-statistic-1">
                                        <div class="card-icon bg-danger">
                                            <i class="far fa-newspaper"></i>
                                        </div>
                                        <div class="card-wrap">
                                            <div class="card-header">
                                                <h4>News</h4>
                                            </div>
                                            <div class="card-body">
                                                42
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="card card-statistic-1">
                                        <div class="card-icon bg-warning">
                                            <i class="far fa-file"></i>
                                        </div>
                                        <div class="card-wrap">
                                            <div class="card-header">
                                                <h4>Reports</h4>
                                            </div>
                                            <div class="card-body">
                                                1,201
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="card card-statistic-1">
                                        <div class="card-icon bg-success">
                                            <i class="fas fa-circle"></i>
                                        </div>
                                        <div class="card-wrap">
                                            <div class="card-header">
                                                <h4>Online Users</h4>
                                            </div>
                                            <div class="card-body">
                                                47
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card p-2">
                                        <h5>Penjualan</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, id.</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card p-2">
                                        <!-- <div class="card-header"> -->
                                        <h5>Keuntungan</h5>
                                        <!-- </div> -->
                                        <!-- <div class="card-body"> -->
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, magnam!</p>
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card p-2">
                                        <h5>Report</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, quod.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>