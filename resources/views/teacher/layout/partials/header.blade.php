<div id="kt_header" class="header flex-column header-fixed">
    <div class="header-top" style="background-color: #004693;">
        <div class="container">
            <div class="d-none d-lg-flex align-items-center mr-3">
                <a href="{{ route('teacher.index') }}" class="mr-20">
                    <img alt="Logo" src="https://khitah.com/wp-content/uploads/2021/01/logokhitah-1.png" class="max-h-45px" />
                </a>

                <ul class="header-tabs nav align-self-end font-size-lg" role="tablist">
                    <li class="nav-item">
                        <a href="/" class="nav-link py-4 px-6">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('teacher.calendar-akademic.index')  }}" class="nav-link py-4 px-6 {{ request()->route()->getName() == 'teacher.calendar-akademic.index' ? 'active' : '' }}">Calender Academik</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a href="{{ route('teacher.index') }}" class="nav-link py-4 px-6 {{ request()->route()->getName() == 'teacher.index' ? 'active' : '' }}">Overview Guru</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a href="{{ route('teacher.class.index') }}" class="nav-link py-4 px-6 {{ request()->route()->getName() == 'teacher.class.index' ? 'active' : '' }}">Overview Class</a>
                    </li>
                </ul>
            </div>

            <div class="topbar" style="background-color: #004693;">
                <div class="dropdown">
                    <div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">
                        <div class="btn btn-icon btn-hover-transparent-white w-sm-auto d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                            <div class="d-flex flex-column text-right pr-sm-3">
                                <span class="text-white opacity-50 font-weight-bold font-size-sm d-none d-sm-inline">Agus</span>
                                <span class="text-white font-weight-bolder font-size-sm d-none d-sm-inline">Teacher</span>
                            </div>
                            <span class="symbol symbol-35">
                                <span class="symbol-label font-size-h5 font-weight-bold text-white bg-white-o-30">J</span>
                            </span>
                        </div>
                    </div>
                    <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">
                        <div class="d-flex align-items-center p-8 rounded-top">
                            <div class="symbol symbol-md bg-light-primary mr-3 flex-shrink-0">
                                <span class="symbol symbol-35">
                                    <span class="symbol-label font-size-h5 font-weight-bold text-white bg-white-o-30">J</span>
                                </span>
                            </div>
                            <div class="text-dark m-0 flex-grow-1 mr-3 font-size-h5">Agus Triyono</div>
                        </div>
                        <div class="separator separator-solid"></div>
                        <div class="navi navi-spacer-x-0 pt-5">
                            <a href="#" class="navi-item px-8">
                                <div class="navi-link">
                                    <div class="navi-icon mr-2">
                                        <i class="flaticon2-calendar-3 text-success"></i>
                                    </div>
                                    <div class="navi-text">
                                        <div class="font-weight-bold">My profile</div>
                                        <div class="text-muted">Account settings and more</div>
                                    </div>
                                </div>
                            </a>
                            <div class="navi-separator mt-3"></div>
                            <div class="navi-footer px-8 py-5">
                                <a href="#" class="btn btn-light-primary btn-block font-weight-bold" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Sign Out
                                </a>
                                <form id="logout-form" action="#" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
