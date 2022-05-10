      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src="{{ asset('backend/img/logo/logo.png') }}">
            </div>
            <div class="sidebar-user-details">
                <div class="user-name">{{ Auth::user()->name }}</div>
                <div class="user-role">{{Auth::user()->roles->first()->name}}</div>
                <div class="sidebar-userpic-btn">
                    <a href="?language=en" data-toggle="tooltip" title="English">
                        <img src="https://img.icons8.com/emoji/32/000000/united-kingdom-emoji.png"/>
                    </a>
                    <a href="?language=ka" data-toggle="tooltip" title="ქართული">
                        <img src="https://img.icons8.com/emoji/32/000000/georgia-emoji.png"/>
                    </a>
                    <a href="?language=ru" data-toggle="tooltip" title="Russian">
                        <img src="https://img.icons8.com/emoji/32/000000/russia-emoji.png"/>
                    </a>
                </div>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header"></li>

            <li class="dropdown">
              <a href="{{ route('dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>@lang('dashboard.Dashboard')</span></a>
            </li>
            {{-- @can('contact-list')
            <li class="dropdown">
                <a href="{{ route('messages.index') }}" class="nav-link"><i data-feather="bell"></i><span>@lang('dashboard.Notifications')</span></a>
            </li>
            @endcan --}}


            @can('post-list')
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="file-text"></i><span>@lang('dashboard.News')</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('posts.create') }}">@lang('dashboard.Add')</a></li>
                    <li><a class="nav-link" href="{{ route('posts.index') }}">@lang('dashboard.View')</a></li>
                </ul>
            </li>
            @endcan

            @can('employee-list')
            <li class="dropdown">
              <a href="{{ route('employees.index') }}" class="nav-link"><i data-feather="users"></i><span>@lang('dashboard.Employees')</span></a>
            </li>
            @endcan

            @can('project-list')
            <li class="dropdown">
                <a href="{{ route('projects.index') }}" class="nav-link"><i data-feather="file-plus"></i><span>@lang('dashboard.Projects')</span></a>
            </li>
            @endcan

            @can('client-list')
            <li class="dropdown">
              <a href="{{ route('clients.index') }}" class="nav-link"><i data-feather="briefcase"></i><span>@lang('dashboard.Clients')</span></a>
            </li>
            @endcan

            @can('service-list')
            <li class="dropdown">
              <a href="{{ route('services.index') }}" class="nav-link"><i data-feather="compass"></i><span>@lang('dashboard.Services')</span></a>
            </li>
            @endcan

            @can('vision-list')
            <li class="dropdown">
              <a href="{{ route('visions.index') }}" class="nav-link"><i data-feather="check-square"></i><span>@lang('dashboard.Visions')</span></a>
            </li>
            @endcan
            @can('vision-list')
            <li class="dropdown">
              <a href="{{ route('exclusives.index') }}" class="nav-link"><i data-feather="aperture"></i><span>@lang('dashboard.exclusives')</span></a>
            </li>
            @endcan


            @can('reservation-list')
            <li class="dropdown">
                <a href="{{ route('reservations.index') }}" class="nav-link"><i data-feather="phone-incoming"></i><span>@lang('dashboard.Calls')</span></a>
            </li>
            @endcan




            {{-- @can('contact-list')
            <li class="dropdown">
              <a href="{{ route('contacts.index') }}" class="nav-link"><i data-feather="map-pin"></i><span>@lang('dashboard.Contacts')</span></a>
            </li>
            @endcan --}}


            <li class="menu-header"><hr></li>

            @can('setting-list')
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="settings"></i><span>@lang('dashboard.Settings')</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('setting.general') }}"><i data-feather="briefcase"></i>&nbsp;  @lang('dashboard.Settings')</a></li>
                    <li><a class="nav-link" href="{{ route('setting.networks') }}"><i data-feather="at-sign"></i>&nbsp;  @lang('dashboard.Soc Networks')</a></li>
                    <li><a class="nav-link" href="{{ url('languages') }}" target="_blank"><i data-feather="globe"></i>&nbsp;  @lang('dashboard.Languages')</a></li>
                </ul>
            </li>
            @endcan
            @can('user-list')
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="users"></i><span>@lang('dashboard.Users')</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('users.index') }}">@lang('dashboard.User List')</a></li>
                    <li><a class="nav-link" href="{{ route('roles.index') }}">@lang('dashboard.Roles')</a></li>
                    <li><a class="nav-link" href="{{ route('permissions.index') }}">@lang('dashboard.Permissions')</a></li>
                </ul>
            </li>
            @endcan

            {{-- <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="book"></i><span>@lang('dashboard.Documentation')</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="#0">@lang('dashboard.Control Panel')</a></li>
                    <li><a class="nav-link" href="#0">@lang('dashboard.API')</a></li>
                </ul>
            </li> --}}
          </ul>
        </aside>
      </div>
