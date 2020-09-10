<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-flat nav-compact nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
    <li class="nav-item">
        <router-link to="/dashboard" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Dashboard
            </p>
        </router-link>
    </li>
    @can('isAdmin')
    <li class="nav-item">
        <router-link to="/users" class="nav-link">
        <i class="nav-icon fas fa-user-tie"></i>
            <p>
                Users
            </p>
        </router-link>
    </li>
    @endcan
    <li class="nav-item">
        <router-link to="/user-profile" class="nav-link">
        <i class="nav-icon fas fa-id-card-alt"></i>
            <p>
                Profile
            </p>
        </router-link>
    </li>
    @can('isStudent')
    <li class="nav-item">
        <router-link to="/payment-history" class="nav-link">
        <i class="nav-icon fas fa-money-bill-wave"></i>
            <p>
                Balance/Payment History
            </p>
        </router-link>
    </li>
    <li class="nav-item">
        <router-link to="/student-grade" class="nav-link">
        <i class="nav-icon fas fa-medal"></i>
            <p>
                Grades
            </p>
        </router-link>
    </li>
    <li class="nav-item">
        <router-link to="/student-section" class="nav-link">
        <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
                Schedules
            </p>
        </router-link>
    </li>
    @endcan
    @can('isRegistrar')
    <li class="nav-item">
        <router-link to="/student-applicants" class="nav-link">
        <i class="nav-icon fas fa-user-check"></i>
            <p>
                Applicants
            </p>
        </router-link>
    </li>
    <li class="nav-item">
        <router-link to="/Program" class="nav-link">
        <i class="nav-icon fas fa-book"></i>
            <p>
                Program
            </p>
        </router-link>
    </li>
    <li class="nav-item">
        <router-link to="/Curriculum" class="nav-link">
        <i class="nav-icon fas fa-swatchbook"></i>
            <p>
                Curriculum
            </p>
        </router-link>
    </li>
    @endcan
    @can('isHumanResource')
    <li class="nav-item">
        <router-link to="/Department" class="nav-link">
        <i class="nav-icon fas fa-swatchbook"></i>
            <p>
                Department
            </p>
        </router-link>
    </li>
    @endcan
    <li class="nav-item">
        <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <i class="nav-icon fas fa-power-off"></i>
            <p>
                Logout
            </p>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>

</nav>
<!-- /.sidebar-menu -->