<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page"
                href="/dashboard">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('/dashboard/calendar*') ? 'active' : '' }}"
                    href="/dashboard/calendars">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Calendar</span>
            </a>
        </li>
        @if(auth()->user()->level=="admin")
        <li class="nav-item">
            <a class="nav-link {{ Request::is('/dashboard/employee*') ? 'active' : '' }}"
                    href="/dashboard/employees">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Employee Pages</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('/dashboard/salary*') ? 'active' : '' }}"
                    href="/dashboard/salaries">
                <i class="icon-bar-graph menu-icon"></i>
                <span class="menu-title">Salary Pages</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('/dashboard/schedule*') ? 'active' : '' }}"
                    href="/dashboard/schedules">
                <i class="icon-grid-2 menu-icon"></i>
                <span class="menu-title">Schedule</span>
            </a>
        </li>
        @endif
        
        
    </ul>
</nav>
