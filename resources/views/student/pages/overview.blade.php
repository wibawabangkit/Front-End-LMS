@extends('student.layout.main', ['title' => 'Dashboard'])
@section('stylesheet')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/css/datepicker.min.css" integrity="sha512-Ujn3LMQ8mHWqy7EPP32eqGKBhBU8v39JRIfCer4nTZqlsSZIwy5g3Wz9SaZrd6pp3vmjI34yyzguZ2KQ66CLSQ==" crossorigin="anonymous" />
    <style>
        .datepicker {
            border: none;
        }
    </style>
@endsection
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <section class="gfd-jadwal">
                            <div class="gfd-title">
                                <div>
                                <h2>Informasi Hari Ini</h2>
                                </div>
                                <div>
                                    <h2 class="pull-right" style="text-align: right;">Semester Genap 2020/2021</h2>
                                </div>
                            </div>
                            <div class="alert alert-custom alert-light-danger" role="alert">
                                <div class="alert-icon"><i class="flaticon2-bell-5 icon-md"></i></div>
                                Pengambilan raport akan dilakukan pada hari Rabu, 31 Maret 2021
                            </div>
                        </section>
                        <section class="gfd-semuajadwal">
                            <div class="gfd-title">
                                <div>
                                    <h2>Mata Pelajaran Anda</h2>
                                </div>
                            </div>
                            <div class="gfd-board-jadwal">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="figure-jadwal">
                                            <div class="rabu">{{ date('l') }}</div>
                                            <div class="figure-matkul">
                                                <h1 class="title-matkul">Sosiologi</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gfd-board-jadwal">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="figure-jadwal">
                                            <div class="rabu">{{ date('l') }}</div>
                                            <div class="figure-matkul">
                                                <h1 class="title-matkul">Match</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gfd-board-jadwal">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="figure-jadwal">
                                            <div class="rabu">{{ date('l') }}</div>
                                            <div class="figure-matkul">
                                                <h1 class="title-matkul">Biologi</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gfd-board-jadwal">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="figure-jadwal">
                                            <div class="rabu">{{ date('l') }}</div>
                                            <div class="figure-matkul">
                                                <h1 class="title-matkul">English</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-3 gfd-aside">
                        <div class="gfd-aside-panel ribbon ribbon-top ribbon-ver">
                            <div class="ribbon-target bg-danger btn btn-icon btn-light-white pulse pulse-danger" style="top: -2px; left: 20px;">
                                <i class="flaticon2-information"></i>
                                <span class="pulse-ring"></span>
                            </div><br><br>
                            <p class="gfd-aside-message mb-1">there are tasks that you still haven't finished.</p>
                            <hr>
                            <a href="#">Read More →</a>
                        </div>
                        <div class="datepicker-here" data-language='id'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.min.js" integrity="sha512-sM9DpZQXHGs+rFjJYXE1OcuCviEgaXoQIvgsH7nejZB64A09lKeTU4nrs/K6YxFs6f+9FF2awNeJTkaLuplBhg==" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/pages/features/charts/apexcharts.js') }}"></script>
    <script src="https://unpkg.com/gauge-chart@latest/dist/bundle.js"></script>
    <script src="{{ asset('assets/custom/js/datepicker.id.js') }}"></script>
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
@endpush
