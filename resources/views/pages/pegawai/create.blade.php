@extends('layouts.app')

@push('page-styles')
@endpush

@section('page-title')
    <!--begin::Page title-->
    <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
        <!--begin::Title-->
        <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Data Pegawai
        <!--begin::Separator-->
        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
        <!--end::Separator-->
        <!--end::Title-->
    </div>
    <!--end::Page title-->
@endsection

@section('content')
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Row-->
        <div class="row gy-5 g-xl-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">Data Pegawai</h3>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="mb-10 col-sm-6">
                                <label class="required form-label">Nama Lengkap</label>
                                <input type="text" class="form-control form-control-solid" autocomplete="off"/>
                            </div>
                            <div class="mb-10 col-sm-6">
                                <label class="required form-label">Nama Kecil</label>
                                <input type="text" class="form-control form-control-solid" autocomplete="off"/>
                            </div>
                            <div class="mb-10 col-sm-12">
                                <label class="required form-label">NPK</label>
                                <input type="text" class="form-control form-control-solid" autocomplete="off"/>
                            </div>
                            <div class="mb-10 col-sm-6">
                                <label class="required form-label">Alamat Sekarang</label>
                                <textarea class="form-control form-control-solid" autocomplete="off" rows="4"></textarea>
                            </div>
                            <div class="mb-10 col-sm-6">
                                <label class="required form-label">Alamat Di luar Swj/Sjj</label></label>
                                <textarea class="form-control form-control-solid" autocomplete="off" rows="4"></textarea>
                            </div>
                            <div class="mb-10 col-sm-4">
                                <label class="required form-label">Tinggi Badan</label>
                                <div class="input-group input-group-solid">
                                    <input type="number" class="form-control"/>
                                    <span class="input-group-text">CM</span>
                                </div>
                            </div>
                            <div class="mb-10 col-sm-4">
                                <label class="required form-label">Berat Badan</label>
                                <div class="input-group input-group-solid">
                                    <input type="number" class="form-control"/>
                                    <span class="input-group-text">KG</span>
                                </div>
                            </div>
                            <div class="mb-10 col-sm-4">
                                <label class="required form-label">Golongan Darah</label>
                                <select class="form-select form-select-solid" aria-label="Select example">
                                    <option>Pilih Goldar</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="O">O</option>
                                </select>
                            </div>
                            <div class="mb-10 col-sm-4">
                                <label class="required form-label">Jenis Kelamin</label>
                                <select class="form-select form-select-solid" aria-label="Select example">
                                    <option>Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-10 col-sm-4">
                                <label class="required form-label">Status</label>
                                <select class="form-select form-select-solid" aria-label="Select example">
                                    <option>Pilih Status</option>
                                    <option value="Menikah">Menikah</option>
                                    <option value="Belum Menikah">Belum Menikah</option>
                                </select>
                            </div>
                            <div class="mb-10 col-sm-4">
                                <label class="required form-label">Kewarganegaraan</label>
                                <input type="text" class="form-control form-control-solid" autocomplete="off"/>
                            </div>
                            <div class="mb-10 col-sm-6">
                                <label class="required form-label">Tempat Lahir</label>
                                <input type="text" class="form-control form-control-solid" autocomplete="off"/>
                            </div>
                            <div class="mb-10 col-sm-6">
                                <label class="required form-label">Tanggal Lahir</label>
                                <input type="text" class="form-control form-control-solid datepicker" autocomplete="off"/>
                            </div>
                            <div class="mb-10 col-sm-4">
                                <label class="required form-label">Suku</label>
                                <input type="text" class="form-control form-control-solid" autocomplete="off"/>
                            </div>
                            <div class="mb-10 col-sm-4">
                                <label class="required form-label">Agama</label>
                                <input type="text" class="form-control form-control-solid" autocomplete="off"/>
                            </div>
                            <div class="mb-10 col-sm-4">
                                <label class="required form-label">Mulai Bekerja</label>
                                <input type="text" class="form-control form-control-solid datepicker" autocomplete="off"/>
                            </div>
                            <div class="mb-10 col-sm-12">
                                <label class="required form-label">Perlengkapan Safety</label>
                                <input type="text" class="form-control form-control-solid" autocomplete="off"/>
                            </div>
                            <div class="mb-10 col-sm-12">
                                <label class="required form-label">No. KTP</label>
                                <input type="text" class="form-control form-control-solid" autocomplete="off"/>
                            </div>
                            <div class="mb-10 col-sm-12">
                                <label class="required form-label">No. SIM</label>
                                <input type="text" class="form-control form-control-solid" autocomplete="off"/>
                            </div>
                            <div class="mb-10 col-sm-12">
                                <label class="required form-label">No. Paspor</label>
                                <input type="text" class="form-control form-control-solid" autocomplete="off"/>
                            </div>
                            <div class="mb-10 col-sm-12 text-end">
                                <button type="submit" class="btn btn-primary me-3">Simpan</button>
                                <a href="{{ route('pegawai.index') }}" class="btn btn-warning">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('page-scripts')
    <script>
        $(".datepicker").daterangepicker({
            singleDatePicker: true,
            todayHighlight: true,
            orientation: "bottom left",
            autoclose : true,
            language : 'id',
            locale: {
                format : 'DD-MM-YYYY'
            }            
        }
    );
    </script>
@endpush