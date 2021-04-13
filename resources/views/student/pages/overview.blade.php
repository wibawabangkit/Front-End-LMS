@extends('student.layout.main', ['title' => 'Dashboard'])
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('dashboard/assets/custom/css/calendar-inline.css') }}">
@endsection
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="d-flex align-items-center justify-content-between flex-wrap py-3">
                            <div class="d-flex align-items-center mr-2 py-2">
                                <div class="d-flex mr-3">
                                    <div class="navi navi-hover navi-active navi-link-rounded navi-bold d-flex flex-row">
                                        <div class="navi-item mr-2">
                                            <span class="navi-text">Informasi Hari Ini</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="navi-text py-2">Semester Genap 2020/2021</span>
                        </div>
                        <div class="alert alert-custom alert-light-danger" role="alert">
                            <div class="alert-icon"><i class="flaticon2-bell-5 icon-md"></i></div>
                            Pengambilan raport akan dilakukan pada hari Rabu, 31 Maret 2021
                        </div>
                        <div class="card card-custom gutter-b">
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">Mata Pelajaran Anda</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover table-checkable" id="kt_datatable2" style="margin-top: 13px !important">
                                    <thead>
                                        <tr>
                                            <th width="1px">No</th>
                                            <th>Kelas/Mata Pelajaran/Mata Kuliah</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="">
                            <div class="card card-custom">
                                <div class="card-header">
                                    <div class="card-title">
                                        <a href="#" class="btn btn-icon btn-light-danger pulse pulse-danger mr-5">
                                            <i class="flaticon2-information"></i>
                                            <span class="pulse-ring"></span>
                                        </a>
                                        <h3 class="card-label">
                                            Notifikasi
                                        </h3>
                                    </div>
                                    <div class="card-toolbar">
                                        <a href="#" class="">
                                            Read More
                                            <i class="fas fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    There are tasks that you still haven't finished.
                                </div>
                            </div>
                            @include('student.pages.partials.calendar')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('dashboard/assets/js/pages/features/charts/apexcharts.js') }}"></script>
    <script src="https://unpkg.com/gauge-chart@latest/dist/bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" integrity="sha512-3n19xznO0ubPpSwYCRRBgHh63DrV+bdZfHK52b1esvId4GsfwStQNPJFjeQos2h3JwCmZl0/LgLxSKMAI55hgw==" crossorigin="anonymous"></script>
    <script src="{{ asset('dashboard/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script type="text/javascript">
        function chartNilai(avg) {
            if (isNaN(avg)) avg = 0;

            if (avg < 1) nilai = 1;
            else if (avg >= 100) nilai = 99;
            else nilai = avg;

            let element = document.querySelector('#gaugeNilai')
            let gaugeOptions = {
                hasNeedle: false,
                needleColor: 'gray',
                needleUpdateSpeed: 1000,
                arcColors: ['rgb(0, 172, 193)', 'rgb(236,239,241)'],
                arcDelimiters: [nilai],
                rangeLabel: ['0', '100'],
                centralLabel: avg.toPrecision(2),
            }

            GaugeChart.gaugeChart(element, 160, gaugeOptions)
        }
        chartNilai();
    </script>
    <script type="text/javascript">
        "use strict";
        var KTDatatablesDataSourceAjaxServer = {
            init: function() {
                $("#kt_datatable2").DataTable({
                    responsive: !0,
                    searchDelay: 500,
                    processing: !0,
                    serverSide: !0,
                    searching: 0,
                    lengthChange: 0,
                    paging: 0,
                    info: 0,
                    ajax: {
                        url: APP_URL + "/api/mapel.php",
                        type: "POST",
                        data: {
                            columnsDef: ["OrderID", "ClassMapelMatkul"]
                        }
                    },
                    columns: [{
                        data: "OrderID"
                    }, {
                        data: "ClassMapelMatkul"
                    }]
                })
            }
        };
        jQuery(document).ready((function() {
            KTDatatablesDataSourceAjaxServer.init()
        }));
    </script>
    <script src="{{ asset('dashboard/assets/custom/js/calendar-inline.js') }}"></script>
@endpush
