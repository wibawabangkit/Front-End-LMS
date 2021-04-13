@extends('headmaster.layout.main', ['title' => 'Overview Class'])
@section('stylesheet')
    <link href="{{ asset('dashboard/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card card-custom gutter-b">
{{--                            <div class="card-header">--}}
{{--                                <div class="card-title">--}}
{{--                                    <h3 class="card-label">Area Chart</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="card-body">
                                <table class="table table-bordered table-hover table-checkable" id="kt_datatable2" style="margin-top: 13px !important">
                                    <thead>
                                        <tr>
                                            <th width="1px">No</th>
                                            <th>Class/Matpel/Matkul</th>
                                            <th>Total Lesson</th>
                                            <th>Total Assigment</th>
                                            <th>Total Quiz</th>
                                            <th>Nilai Rata-rata</th>
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
    <script src="{{ asset('dashboard/assets/js/pages/features/charts/apexcharts.js') }}"></script>
    <script src="{{ asset('dashboard/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
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
                        url: APP_URL + "/api/assignments.php",
                        type: "POST",
                        data: {
                            columnsDef: ["OrderID", "ClassMapelMatkul", "TotalLesson", "TotalAssignment", "TotalQuiz", "NilaiRataRata"]
                        }
                    },
                    columns: [{
                        data: "OrderID"
                    }, {
                        data: "ClassMapelMatkul"
                    }, {
                        data: "TotalLesson"
                    }, {
                        data: "TotalAssignment"
                    }, {
                        data: "TotalQuiz"
                    }, {
                        data: "NilaiRataRata"
                    }]
                })
            }
        };
        jQuery(document).ready((function() {
            KTDatatablesDataSourceAjaxServer.init()
        }));
    </script>
@endpush
