<div class="sidebar">
    <div class="logo-details">
        <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">CodingLab</div>
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
        <li>
            <a href="{{ route('dashboard') }}">
                <i class='bx bx-grid-alt'></i>
                <span class="links_name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>
        @if (auth()->user()->id == 1)
        <li>
            <a href="{{ route('users.index') }}">
                <i class='bx bx-user'></i>
                <span class="links_name">Users</span>
            </a>
            <span class="tooltip">Users</span>
        </li>   
        @endif
        @if (auth()->user()->id == 1)
        <li>
            <a href="{{ route('roles.index') }}">
                <i class='bx bx-chat'></i>
                <span class="links_name">Roles</span>
            </a>
            <span class="tooltip">Roles</span>
        </li>
        @endif
        @if (auth()->user()->id == 1)
        <li>
            <a href="{{ route('banners.index') }}">
                <i class='bx bx-pie-chart-alt-2'></i>
                <span class="links_name">Banner</span>
            </a>
            <span class="tooltip">Banner</span>
        </li>
        @endif
        @if (auth()->user()->id == 1)
        <li>
            <a href="{{ route('services.index') }}">
                <i class='bx bx-cart-alt'></i>
                <span class="links_name">Services</span>
            </a>
            <span class="tooltip">Services</span>
        </li>
        @endif

        @if (auth()->user()->id == 1 || auth()->user()->roles()->first()->name == 'teacher')
        <li>
            <a href="{{ route('courses.index') }}">
                <i class='bx bx-heart'></i>
                <span class="links_name">Courses</span>
            </a>
            <span class="tooltip">Courses</span>
        </li>
        @endif
        @if (auth()->user()->id == 1 || auth()->user()->roles()->first()->name == 'teacher')
        <li>
            <a href="{{ route('teachers.index') }}">
                <i class='bx bx-ghost'></i>
                <span class="links_name">Teachers</span>
            </a>
            <span class="tooltip">Teachers</span>
        </li>
        @endif
        @if (auth()->user()->id == 1)
        <li>
            <a href="{{ route('events.index') }}">
                <i class='bx bx-square' ></i>
                <span class="links_name">Events</span>
            </a>
            <span class="tooltip">Events</span>
        </li>
        @endif
        @if (auth()->user()->id == 1 || auth()->user()->roles()->first()->name == 'redactor')
        <li>
            <a href="{{ route('articles.index') }}">
                <i class='bx bx-filter-alt' ></i>
                <span class="links_name">Articles</span>
            </a>
            <span class="tooltip">Articles</span>
        </li>
        @endif
        @if (auth()->user()->id == 1)
        <li>
            <a href="{{ route('categories.index') }}">
                <i class='bx bx-extension' ></i>
                <span class="links_name">Categories</span>
            </a>
            <span class="tooltip">Categories</span>
        </li>
        @endif
        @if (auth()->user()->id == 1)
        <li>    
            <a href="{{ route('tags.index') }}">
                <i class='bx bx-clinic' ></i>
                <span class="links_name">Tags</span>
            </a>
            <span class="tooltip">Tags</span>
        </li>
        @endif
        @if (auth()->user()->id == 1)
        <li>
            <a href="{{ route('pictures.index') }}">
                <i class='bx bx-scan' ></i>
                <span class="links_name">Pictures</span>
            </a>
            <span class="tooltip">Pictures</span>
        </li>
        @endif
        @if (auth()->user()->id == 1 || auth()->user()->roles()->first()->name == 'teacher')
        <li>
            <a href="{{ route('panels.index') }}">
                <i class='bx bx-filter-alt' ></i>
                <span class="links_name">Panels</span>
            </a>
            <span class="tooltip">Panels</span>
        </li>
        @endif

        <li class="profile">
            <div class="profile-details"></div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <div :href="route('logout')" style="cursor: pointer; color:white; margin-left:8px;" onclick="event.preventDefault();
                          this.closest('form').submit();">
                    {{ __('Log Out') }}
            </form>
        </li>
    </ul>
</div>
