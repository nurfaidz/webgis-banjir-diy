@php
    use App\Enums\RiskLevels\RiskLevel;
@endphp

{{-- Modal Tambah --}}
<div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Tambah Data</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    @csrf
                    <div class="row m-0">
                        <div class="col-md-12">
                            <input type="hidden" id="kelas_id" name="kelas_id" value="">
                            <div class="form-group mb-3">
                                <label for="name">Nama Titik</label>
                                <input type="text" id="name"
                                       class="form-control @error('name') is-invalid @enderror" name="name"
                                       value="{{ old('name') }}">
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="latitude">Latitude</label>
                                <input type="text" class="form-control @error('latitude') is-invalid @enderror"
                                       name="latitude" value="{{ old('latitude') }}">
                                @error('latitude')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="longtitude">Longtitude</label>
                                <input type="text" class="form-control @error('longtitude') is-invalid @enderror"
                                       name="longtitude" value="{{ old('longtitude') }}">
                                @error('longtitude')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="flood_level">Tingkat Rawan</label>
                                <select class="form-control">
                                    <option disabled selected>Pilih Tingkat Rawan</option>
                                    <option value="{{RiskLevel::HIGH->value}}">{{RiskLevel::HIGH->name}}</option>
                                    <option value="{{RiskLevel::MEDIUM->value}}">{{RiskLevel::MEDIUM->name}}</option>
                                    <option value="{{RiskLevel::LOW->value}}">{{RiskLevel::LOW->name}}</option>
                                </select>
                                @error('flood_level')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="last_flood_date">Tanggal Terakhir</label>
                                <input type="date" class="form-control @error('last_flood_date') is-invalid @enderror"
                                       name="last_flood_date" value="{{ old('last_flood_date') }}">
                                @error('last_flood_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button class="btn mb-3 align-items-end btn-primary btn-sm" type="submit"> Ubah
                                Data
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Modal Edit --}}
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Ubah Titik Zona</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row m-0">
                        <div class="col-md-12">
                            <input type="hidden" id="kelas_id" name="kelas_id" value="">
                            <div class="form-group mb-3">
                                <label for="name">Nama Titik</label>
                                <input type="text" id="name"
                                       class="form-control @error('name') is-invalid @enderror" name="name"
                                       value="{{ old('name') }}">
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="latitude">Latitude</label>
                                <input type="text" class="form-control @error('latitude') is-invalid @enderror"
                                       name="latitude" value="{{ old('latitude') }}">
                                @error('latitude')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="longtitude">Longtitude</label>
                                <input type="text" class="form-control @error('longtitude') is-invalid @enderror"
                                       name="longtitude" value="{{ old('longtitude') }}">
                                @error('longtitude')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="flood_level">Tingkat Rawan</label>
                                <select class="form-control">
                                    <option disabled selected>Pilih Tingkat Rawan</option>
                                    <option value="{{RiskLevel::HIGH->value}}">{{RiskLevel::HIGH->name}}</option>
                                    <option value="{{RiskLevel::MEDIUM->value}}">{{RiskLevel::MEDIUM->name}}</option>
                                    <option value="{{RiskLevel::LOW->value}}">{{RiskLevel::LOW->name}}</option>
                                </select>
                                @error('flood_level')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="last_flood_date">Tanggal Terakhir</label>
                                <input type="date" class="form-control @error('last_flood_date') is-invalid @enderror"
                                       name="last_flood_date" value="{{ old('last_flood_date') }}">
                                @error('last_flood_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button class="btn mb-3 align-items-end btn-primary btn-sm" type="submit"> Ubah
                                Data
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Hapus -->
<div id="modal-hapus" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-hapus-label"
     aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="POST">
            @csrf
            @method('POST')
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-danger">
                    <h4 class="modal-title" id="modal-hapus-label">Hapus Data?</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <h5 class="mt-0">Hapus data ini?</h5>
                    <p>Pastikan cek kembali data ini sebelum dihapus!.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                    <button class="btn btn-danger" type="submit">Hapus</button>
                </div>
            </div>
        </form>
    </div>
</div>
