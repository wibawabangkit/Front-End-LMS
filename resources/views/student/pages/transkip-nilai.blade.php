@extends('student.layout.main', ['title' => 'Transkip Nilai'])
@section('stylesheet')
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card card-custom gutter-t">
                            <div class="card-header py-3">
                                <div class="card-title">
                                    <h3 class="card-label">Transkip Nilai</h3>
                                </div>
                                <div class="card-toolbar">
                                    <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-secondary btn-sm font-weight-bold" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-download"></i>Cetak</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover table-checkable" id="kt_datatable2" style="margin-top: 13px !important">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center; vertical-align: middle;" rowspan="2">No</th>
                                            <th style="text-align: center; vertical-align: middle;" rowspan="2">Class/Matpel/Matkul</th>
                                            <th style="text-align: center; vertical-align: middle;" colspan="3">Nilai Rata-rata</th>
                                            <th style="text-align: center; vertical-align: middle;" rowspan="2">Nilai</th>
                                        </tr>
                                        <tr>
                                            <th style="text-align: center; vertical-align: middle;">Lesson</th>
                                            <th style="text-align: center; vertical-align: middle;">Assignment</th>
                                            <th style="text-align: center; vertical-align: middle;">Test & Quiz</th>
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
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script type="text/javascript">
        "use strict";
        var KTDatatablesDataSourceAjaxServer = {
            init: function() {
                $("#kt_datatable2").DataTable({
                    responsive: !0,
                    processing: !0,
                    serverSide: !0,
                    searching: 0,
                    lengthChange: 0,
                    ajax: {
                        url: APP_URL + "/api/transkip_nilai.php",
                        type: "POST",
                        data: {
                            columnsDef: ["OrderID", "ClassMapelMatkul", "Lesson", "Assignment", "Quiz", "Nilai"]
                        }
                    },
                    columns: [{
                        data: "OrderID"
                    }, {
                        data: "ClassMapelMatkul"
                    }, {
                        data: "Lesson"
                    }, {
                        data: "Assignment"
                    }, {
                        data: "Quiz"
                    }, {
                        data: "Nilai"
                    }]
                })
            }
        };
        jQuery(document).ready((function() {
            KTDatatablesDataSourceAjaxServer.init()
        }));
    </script>
@endpush
