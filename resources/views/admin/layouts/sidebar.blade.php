<div class="app-menu navbar-menu">
    <div class="navbar-brand-box">
        <a href="#" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{asset('assets/web/images/logo.png')}}" alt="" height="22">

                    </span>
            <span class="logo-lg">
                          <span
                              class="logo-lg text-white text-center fs-2"></span>
                 <img src="{{asset('assets/web/images/logo.png')}}"  height="50" alt="logo">
                    </span>
        </a>
        <a href="#" class="logo logo-light">
        <span class="logo-sm">
            <img src="{{asset('assets/web/images/logo.png')}}" alt="" height="22">
        </span>
            <span class="logo-lg">
              <span
                  class="logo-lg text-white text-center fs-2">
                   <img src="{{asset('assets/web/images/logo.png')}}" height="50" alt="logo">
              </span>
        </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{ (request()->segment(2) === 'dashboard') ? 'active' : '' }}"
                       href="{{ route('admin.dashboard') }}" role="button">
                        <i class="ri-home-line"></i> <span
                            data-key="t-dashboards">Dashboard</span>
                    </a>
                </li>
{{--                @if(Auth::user()->can('role-read') )--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link menu-link {{ (request()->segment(2) === 'role') ? 'active' : '' }}"--}}
{{--                           href="{{ route('admin.role.index') }}" role="button">--}}
{{--                            <i class="ri-bookmark-3-fill"></i> <span--}}
{{--                                data-key="t-dashboards">Roles</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                @endif--}}
{{--                @if(Auth::user()->can('permission-read') )--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link menu-link {{ (request()->segment(2) === 'permission') ? 'active' : '' }}"--}}
{{--                           href="{{ route('admin.permission.create') }}" role="button">--}}
{{--                            <i class="ri-group-fill"></i> <span--}}
{{--                                data-key="t-dashboards">Permissions</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                @endif--}}
                @if(Auth::user()->can('page-read') )
                <li class="nav-item">
                    <a class="nav-link menu-link {{ (request()->segment(2) === 'page') ? 'active' : '' }}"
                       href="{{ route('admin.page.index') }}" role="button">
                        <i class="ri-shield-user-fill"></i> <span
                            data-key="t-dashboards">Pages</span>
                    </a>
                </li>
                @endif
                @if(Auth::user()->can('service-read') )
                <li class="nav-item">
                    <a class="nav-link menu-link {{ (request()->segment(2) === 'service') ? 'active' : '' }}"
                       href="{{ route('admin.service.index') }}" role="button">
                        <i class="ri-user-fill"></i> <span
                            data-key="t-dashboards">Services</span>
                    </a>
                </li>
                @endif
                @if(Auth::user()->can('customer-read') )
                <li class="nav-item">
                    <a class="nav-link menu-link {{ (request()->segment(2) === 'customer') ? 'active' : '' }}"
                       href="{{ route('admin.customer.index') }}" role="button">
                        <i class="ri-bank-fill"></i> <span
                            data-key="t-dashboards">Customers</span>
                    </a>
                </li>
                @endif
                @if(Auth::user()->can('service-provider-read') )
                <li class="nav-item">
                    <a class="nav-link menu-link {{ (request()->segment(2) === 'service-provider') ? 'active' : '' }}"
                       href="{{ route('admin.service-provider.index') }}" role="button">
                        <i class="ri-user-add-fill"></i> <span
                            data-key="t-dashboards">Service Providers</span>
                    </a>
                </li>
                @endif
            </ul>
        </div>
    </div>

    <div class="sidebar-background"></div>
</div>
