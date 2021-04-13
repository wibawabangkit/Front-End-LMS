@extends('auth.layout.main', ['title' => 'Welcome'])
@section('stylesheet')
    <link href="{{ asset('dashboard/assets/css/pages/login/login-4.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid">
        <div class="login-container order-2 order-lg-1 d-flex flex-center flex-row-fluid px-7 pt-lg-0 pb-lg-0 pt-4 pb-6 bg-dark">
            <div class="login-content d-flex flex-column pt-lg-0 pt-12">
                <a href="#" class="login-logo pb-xl-20 pb-15">
                    <img src="https://khitah.com/wp-content/uploads/2021/01/logokhitah-1.png" class="max-h-70px" alt="" />
                </a>
                <div class="pb-lg-0 pb-5">
                    <a href="{{ route('statistik.index') }}" class="btn btn-light-primary font-weight-bolder px-8 py-4 my-3 font-size-lg mr-2">
                        <i class="fas fa-user-secret text-warning icon-lg"></i> Sign in Headmaster
                    </a>
                    <a href="{{ route('dashboard.index') }}" class="btn btn-light-primary font-weight-bolder px-8 py-4 my-3 font-size-lg mr-2">
                        <i class="fas fa-user-check text-warning icon-lg"></i> Sign in Student
                    </a>
                    <a href="{{ route('teacher.index') }}" class="btn btn-light-primary font-weight-bolder px-8 py-4 my-3 font-size-lg mr-2">
                        <i class="fas fa-chalkboard-teacher text-warning icon-lg"></i> Sign in Teacher
                    </a>
                </div>
            </div>
        </div>
        <div class="login-aside order-1 order-lg-2 bgi-no-repeat bgi-position-x-right" style="background: linear-gradient(147.04deg, #181C32 0.74%, #121525 99.61%);">
            <div class="login-conteiner bgi-no-repeat bgi-position-x-right bgi-position-y-bottom" style="background-image: url({{ asset('dashboard/assets/media/svg/illustrations/login-visual-4.svg') }});">
                <h3 class="pt-lg-40 pl-lg-20 pb-lg-0 pl-10 py-20 m-0 d-flex justify-content-lg-start font-weight-boldest display5 display1-lg text-white">Build Your
                <br />Future And Grow With
                <br />Khitah</h3>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('dashboard/assets/js/pages/custom/login/login-4.js') }}"></script>
@endpush
