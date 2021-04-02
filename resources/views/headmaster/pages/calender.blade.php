@extends('headmaster.layout.main', ['title' => 'Calendar Academic'])
@section('stylesheet')
    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">

                <div class="card card-custom">
                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label font-weight-bolder text-dark">Calendar Academic</span>
                        </h3>
                    </div>
                    <div class="card-body pt-10">
                        <div id="kt_calendar"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.2.3') }}"></script>
    <script src="{{ asset('assets/custom/js/calendar.js') }}"></script>
@endpush

