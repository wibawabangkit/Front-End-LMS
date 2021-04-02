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
                            <div class="card card-custom gutter-b">
                                <div class="card-header border-0 py-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label font-weight-bolder text-dark">Teacher Login Activities</span>
                                    </h3>
                                </div>
                                <div class="card-body pt-0 pb-3">
                                    <div class="tab-content">
                                        <div class="table-responsive" style="height: 370px !important; overflow: scroll;">
                                            <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                                                <thead>
                                                <tr class="text-left text-uppercase">
                                                    <th style="min-width: 200px" class="pl-7">
                                                        <span class="text-dark-75">Name</span>
                                                    </th>
                                                    <th style="min-width: 120px">Status</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="pl-0 py-8">
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50 symbol-light mr-4">
                                                                    <span class="symbol-label">
                                                                        <img src="{{ asset('assets/media/svg/avatars/001-boy.svg') }}" class="h-75 align-self-end" alt="" />
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Mrs. Siska</a>
                                                                    <span class="text-muted font-weight-bold d-block">Homeroom Teacher</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Teach</span>
                                                            <span class="font-weight-bold text-success">Online</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0 py-8">
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50 symbol-light mr-4">
                                                                    <span class="symbol-label">
                                                                        <img src="{{ asset('assets/media/svg/avatars/001-boy.svg') }}" class="h-75 align-self-end" alt="" />
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Mrs. Siska</a>
                                                                    <span class="text-muted font-weight-bold d-block">Homeroom Teacher</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Teach</span>
                                                            <span class="font-weight-bold text-success">Online</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0 py-8">
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50 symbol-light mr-4">
                                                                    <span class="symbol-label">
                                                                        <img src="{{ asset('assets/media/svg/avatars/001-boy.svg') }}" class="h-75 align-self-end" alt="" />
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Mrs. Siska</a>
                                                                    <span class="text-muted font-weight-bold d-block">Homeroom Teacher</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Teach</span>
                                                            <span class="font-weight-bold text-danger">Offline</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0 py-8">
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50 symbol-light mr-4">
                                                                    <span class="symbol-label">
                                                                        <img src="{{ asset('assets/media/svg/avatars/001-boy.svg') }}" class="h-75 align-self-end" alt="" />
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Mrs. Siska</a>
                                                                    <span class="text-muted font-weight-bold d-block">Homeroom Teacher</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Teach</span>
                                                            <span class="font-weight-bold text-danger">Offline</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
