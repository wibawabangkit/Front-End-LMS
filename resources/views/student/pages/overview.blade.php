@extends('student.layout.main', ['title' => 'Overview Statistic'])
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
                                    <h2>Jadwal Pelajaran Anda</h2>
                                </div>
                                <div>
                                    <h2 class="pull-right" style="text-align: right;">Periode {{ date('d') }} - 01 Apr 2021</h2>
                                </div>
                            </div>
                            <div class="gfd-board-jadwal">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="figure-jadwal">
                                            <div class="rabu">{{ date('l') }}</div>
                                            <div class="figure-matkul">
                                                <p class="waktu-matkul">10:00 - 12:00 WIB</p>
                                                <h1 class="title-matkul">Sosiologi</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="action-jadwal">
                                            <div class="jenis">

                                            </div>
                                            <div class="aksi">
                                                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modalMateri">Lihat Nilai</a>
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
                                                <p class="waktu-matkul">09:00 - 12:00 WIB</p>
                                                <h1 class="title-matkul">Match</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="action-jadwal">
                                            <div class="jenis">

                                            </div>
                                            <div class="aksi">
                                                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modalMateri">Lihat Nilai</a>
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
                                                <p class="waktu-matkul">10:00 - 12:00 WIB</p>
                                                <h1 class="title-matkul">Biologi</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="action-jadwal">
                                            <div class="jenis">

                                            </div>
                                            <div class="aksi">
                                                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modalMateri">Lihat Nilai</a>
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
                                                <p class="waktu-matkul">10:00 - 12:00 WIB</p>
                                                <h1 class="title-matkul">English</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="action-jadwal">
                                            <div class="jenis">

                                            </div>
                                            <div class="aksi">
                                                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modalMateri">Lihat Nilai</a>
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
                            </div>

                            <br><br>
                        <div class="gfd-aside-panel">
                            <h4 class="gfd-aside-greeting">Hi, WIBAWA BANGKIT</h4>
                            <p class="gfd-aside-message">there are tasks that you still haven't finished. </p>
                            <hr>
                            <a href="#">Read More →</a>
                        </div>
                            <div class="datepicker-here" data-language='id'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalMateri" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">
                        <h3 class="modal-label">Match</h3>
                    </div>
                        <div class="col-md-4">
                            <div id="gaugeNilai" class="pull-right"></div>
                        </div>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_1">
                            <thead>
                                <tr class="text-left">
                                    <th class="text-center" style="min-width: 150px">Sub Penilaian</th>
                                    <th class="text-center" style="min-width: 150px">Nilai Rata-rata</th>
                                    <th class="text-center" style="min-width: 150px">Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">
                                        <span class="label label-lg label-light-danger label-inline">Task</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">75</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">70</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <span class="label label-lg label-light-warning label-inline">Quiz</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">75</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">70</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <span class="label label-lg label-light-primary label-inline">Test</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">75</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">70</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
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
    <script>
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
