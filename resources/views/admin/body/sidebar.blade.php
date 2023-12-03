<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->


        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('all.celeb') }}" class="waves-effect">
                        <i class="ri-team-line"></i>
                        <span>All Celebrity</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('create.celeb') }}" class=" waves-effect">
                        <i class="ri-user-heart-line"></i>
                        <span>Create Celebrity</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('profile.page') }}" class=" waves-effect">
                        <i class="ri-file-edit-line"></i>
                        <span>Edit Profile</span>
                    </a>
                </li>

                <li class="menu-title">Pages</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-home-4-line"></i>
                        <span>Home Content</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('content.about') }}">Home About Page</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
