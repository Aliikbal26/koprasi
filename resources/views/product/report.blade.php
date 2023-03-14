<x-app-layout>
    <div class="section-header">
        <h1>Report Data</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item">Report</div>
        </div>
    </div>

    {{-- Content --}}
    <div class="section-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Keuntungan</h4>
                        <a href="" class="btn btn-success"> <i class="fas fa-download"></i> Download Report</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Report Penjualan</h5>
                                    </div>
                                    <div class="card-body">
                                        <h6>Bulan</h6>
                                        <h6>Total Penjualan</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Report Pembelian</h5>
                                    </div>
                                    <div class="card-body">
                                        <h6>Bulan</h6>
                                        <h6>Total Pembelian</h6>
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