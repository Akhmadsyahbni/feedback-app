<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <!-- Dashboard Nav -->

        <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? '' : 'collapsed' }}">
            <span>Dashboard</span>
        </a>
        <a href="{{ route('feedback.index') }}" class="nav-link {{ request()->routeIs('feedback.index') ? '' : 'collapsed' }}">
            <span>Data Feedback</span>
        </a>
        <a href="{{ route('profile.edit') }}" class="nav-link {{ request()->routeIs('profile.edit') ? '' : 'collapsed' }}">
            <span>Profile</span>
        </a>


    </ul>

</aside><!-- End Sidebar -->
