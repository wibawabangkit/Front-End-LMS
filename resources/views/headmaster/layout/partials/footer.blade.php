<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted font-weight-bold mr-2">{{date('Y')}}©</span>
            <a href="{{ route('calender.index')  }}" target="_blank" class="text-dark-75 text-hover-primary">Khitah LMS . All rights reserved.</a>
        </div>
        <div class="nav nav-dark order-1 order-md-2">
            <a href="https://demo.khitah.com" class="nav-link pr-3 pl-0">Home</a>
            <a href="{{ route('calender.index')  }}" class="nav-link pr-3 pl-0">Calendar Academic</a>
            <a href="{{ route('statistik.index') }}" class="nav-link px-3">Overview Statistic</a>
            <a href="{{ route('class.index') }}" class="nav-link pl-3 pr-0">Overview Class</a>
        </div>
    </div>
</div>
