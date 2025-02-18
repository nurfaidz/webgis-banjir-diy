@extends('pages.dashboards.layouts.app')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Area Rawan Banjir DIY</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"
                                                           class="text-muted">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Area Rawan Banjir DIY</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Daftar Area Rawan Banjir DIY</h4>
                        <div class="table-responsive">
                            <table id="dataTable" class="table border table-striped table-bordered text-nowrap">
                                <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Geojson</th>
                                    <th>Tingkat Rawan</th>
                                    <th>Tanggal Terakhir</th>
                                    <th>Kode Region</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_script')
    <script>
        $(document).ready(function () {
            const datatable = $('#dataTable');
            if (datatable.length) {
                const dt_table = datatable.DataTable({
                    responsive: true,
                    processing: true,
                    // ajax: {
                    //     'url': '/list-kelas-siswa',
                    // },
                    columns: [
                        {
                            data: 'name'
                        },
                        {
                            data: 'geojson'
                        },
                        {
                            data: 'risk_level'
                        },
                        {
                            data: 'last_flood_date'
                        },
                        {
                            data: 'adm4_code'
                        }
                    ],
                    columnDefs: [{
                        targets: 1,
                        className: 'text-center'
                    },],
                })
            }
        })
    </script>
@endsection
