@extends('headmaster.layout.main', ['title' => 'Overview Statistic'])
@section('stylesheet')
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card card-custom card-stretch gutter-b">
                                <div class="card-body d-flex align-items-center py-0 mt-8">
                                    <div class="d-flex flex-column flex-grow-1 py-2 py-lg-5">
                                        <a href="#" class="card-title font-weight-bolder text-dark-75 font-size-h5 mb-2 text-hover-primary">265</a>
                                        <span class="font-weight-bold text-muted font-size-lg">Total of Students</span>
                                    </div>
                                    <img src="{{ asset('assets/media/svg/avatars/014-girl-7.svg') }}" alt="" class="align-self-end h-100px" />
                                    <img src="{{ asset('assets/media/svg/avatars/029-boy-11.svg') }}" alt="" class="align-self-end h-100px" />
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card card-custom card-stretch gutter-b">
                                <div class="card-body d-flex align-items-center py-0 mt-8">
                                    <div class="d-flex flex-column flex-grow-1 py-2 py-lg-5">
                                        <a href="#" class="card-title font-weight-bolder text-dark-75 font-size-h5 mb-2 text-hover-primary">32</a>
                                        <span class="font-weight-bold text-muted font-size-lg">Total of teacher</span>
                                    </div>
                                    <img src="{{ asset('assets/media/svg/avatars/004-boy-1.svg') }}" alt="" class="align-self-end h-100px" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card card-custom gutter-b">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3 class="card-label">Ratio</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="chart_12" class="d-flex justify-content-center"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="card card-custom card-stretch gutter-b">
                                <div class="card-header border-0">
                                    <h3 class="card-title font-weight-bolder text-dark">Teacher Login Activities</h3>
                                </div>
                                <div class="card-body pt-0">
                                    <div data-scroll="true" data-height="350">
                                        <div class="d-flex align-items-center flex-wrap mb-8">
                                            <div class="symbol symbol-50 symbol-light mr-5">
                                                <span class="symbol-label">
                                                    <img src="{{ asset('assets/media/svg/avatars/001-boy.svg') }}" class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Karim Bale</a>
                                                <span class="text-muted font-weight-bold">Math Teacher</span>
                                            </div>
                                            <span class="label label-xl label-danger label-inline my-lg-0 my-2 text-white-100 font-weight-bolder">Offline</span>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap mb-8">
                                            <div class="symbol symbol-50 symbol-light mr-5">
                                                <span class="symbol-label">
                                                    <img src="{{ asset('assets/media/svg/avatars/001-boy.svg') }}" class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Simalakama</a>
                                                <span class="text-muted font-weight-bold">Database Teacher</span>
                                            </div>
                                            <span class="label label-xl label-primary label-inline my-lg-0 my-2 text-white-100 font-weight-bolder">Online</span>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap mb-8">
                                            <div class="symbol symbol-50 symbol-light mr-5">
                                                <span class="symbol-label">
                                                    <img src="{{ asset('assets/media/svg/avatars/001-boy.svg') }}" class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Urang Dayak</a>
                                                <span class="text-muted font-weight-bold">Geographic Teacher</span>
                                            </div>
                                            <span class="label label-xl label-primary label-inline my-lg-0 my-2 text-white-100 font-weight-bolder">Online</span>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap mb-8">
                                            <div class="symbol symbol-50 symbol-light mr-5">
                                                <span class="symbol-label">
                                                    <img src="{{ asset('assets/media/svg/avatars/001-boy.svg') }}" class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Iko Balerang</a>
                                                <span class="text-muted font-weight-bold">Kimia Teacher</span>
                                            </div>
                                            <span class="label label-xl label-danger label-inline my-lg-0 my-2 text-white-100 font-weight-bolder">Offline</span>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap mb-8">
                                            <div class="symbol symbol-50 symbol-light mr-5">
                                                <span class="symbol-label">
                                                    <img src="{{ asset('assets/media/svg/avatars/001-boy.svg') }}" class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Jordianopola</a>
                                                <span class="text-muted font-weight-bold">Indonesia Teacher</span>
                                            </div>
                                            <span class="label label-xl label-primary label-inline my-lg-0 my-2 text-white-100 font-weight-bolder">Online</span>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap mb-8">
                                            <div class="symbol symbol-50 symbol-light mr-5">
                                                <span class="symbol-label">
                                                    <img src="{{ asset('assets/media/svg/avatars/001-boy.svg') }}" class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Jordianopola</a>
                                                <span class="text-muted font-weight-bold">Indonesia Teacher</span>
                                            </div>
                                            <span class="label label-xl label-primary label-inline my-lg-0 my-2 text-white-100 font-weight-bolder">Online</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card card-custom gutter-b">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3 class="card-label">Student Totals</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-hover table-checkable" id="kt_datatable2" style="margin-top: 13px !important">
                                        <thead>
                                            <tr>
                                                <th width="1px">No</th>
                                                <th>Kelas/Mata Pelajaran/Mata Kuliah</th>
                                                <th>Jumlah Siswa</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('assets/js/pages/features/charts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script type="text/javascript">
        "use strict";
        var KTDatatablesDataSourceAjaxServer = {
            init: function() {
                $("#kt_datatable2").DataTable({
                    responsive: !0,
                    searchDelay: 500,
                    processing: !0,
                    serverSide: !0,
                    ajax: {
                        url: APP_URL + "/api/total_student.php",
                        type: "POST",
                        data: {
                            columnsDef: ["OrderID", "KelasMapelMatkul", "JumlahSiswa"]
                        }
                    },
                    columns: [{
                        data: "OrderID"
                    }, {
                        data: "KelasMapelMatkul"
                    }, {
                        data: "JumlahSiswa"
                    }]
                })
            }
        };
        jQuery(document).ready((function() {
            KTDatatablesDataSourceAjaxServer.init()
        }));
    </script>
@endpush
