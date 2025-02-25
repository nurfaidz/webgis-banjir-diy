@extends('pages.dashboards.layouts.app')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Titik Rawan Banjir DIY</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"
                                                           class="text-muted">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Titik Rawan Banjir DIY
                            </li>
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
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="card-title">Daftar Titik Rawan Banjir DIY</h4>
                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                    data-bs-target="#bs-example-modal-lg"><i class="nav-icon fas fa-plus"></i> &nbsp;
                                Tambah
                                Data
                            </button>
                        </div>
                        <div class="table-responsive">
                            <table id="dataTable" class="table border table-striped table-bordered text-nowrap">
                                <thead>
                                <tr>
                                    <th>Nama Titik</th>
                                    <th>Latitude</th>
                                    <th>Longtitude</th>
                                    <th>Tingkat Rawan</th>
                                    <th>Tanggal Terakhir</th>
                                    <th>Kode Region</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->latitude }}</td>
                                        <td>{{ $item->longtitude }}</td>
                                        <td>
                                            @if ($item->risk_level == 'HIGH')
                                                <span class="badge badge-danger">{{ $item->risk_level }}</span>
                                            @elseif ($item->risk_level == 'MEDIUM')
                                                <span class="badge badge-warning">{{ $item->risk_level }}</span>
                                            @else
                                                <span class="badge badge-success">{{ $item->risk_level }}</span>
                                            @endif
                                        </td>
                                        <td>{{ $item->last_flood_date }}</td>
                                        <td>{{ $item->adm4_code }}</td>
                                        <td>
                                            <button onclick="editForm('{{ route('siswa.update', $item->id) }}')"
                                                    class="btn btn-warning btn-sm" title="Edit"><i
                                                    class="nav-icon fas fa-edit"></i>
                                                &nbsp; Edit
                                            </button>
                                            <button onclick="deleteData('{{ route('siswa.destroy', $item->id) }}')"
                                                    class="btn btn-danger btn-sm" title="Hapus"><i
                                                    class="nav-icon fas fa-trash"></i> &nbsp; Hapus
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('pages.dashboards.flood-zones.modal-form')
@endsection
