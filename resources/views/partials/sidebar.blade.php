<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">{{config('app.name')}}</div>
        </a>
    
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
    
        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
            @foreach (menu() as $item)
            {{-- <li class="{{Iris::menu_active([Request::segment(2)], $item['text'], 'collapse show')}}">
              <a @if(isset($item['submenu'])) href="#dropdown-{{  str_slug($item['text']) }}" @else href="{{ $item['url'] }}" @endif aria-expanded="{{Iris::menu_active([Request::segment(2)], $item['text'], 'true')}}"  @if(isset($item['submenu'])) data-toggle="collapse" @endif>
                <i class="{{$item['icon'] }}"></i><span>{{ $item['text'] }}</span>
              </a>
              @if(isset($item['submenu']))
              <ul id="dropdown-{{ str_slug($item['text']) }}" class="collapse list-unstyled pt-0 {{Iris::menu_active([Request::segment(2)], $item['text'], 'show')}}">
                    @foreach ($item['submenu'] as $submenu)
                      <li>
                        <a class="{{Iris::menu_active(Request::segments(), $submenu['slug'], 'active')}}" href="{{ $submenu['url']}}">
                            {{ $submenu['text'] }}
                        </a>
                      </li>
                    @endforeach
                  </ul>
            @endif --}}
    
    
                @if(!isset($item['submenu']))
                  <li class="nav-item">
                  <a class="nav-link" href="{{route($item['url'])}}">
                        <i class="fas {{$item['icon'] }}"></i>
                        <span>{{ $item['text'] }}</span>
                  </a>
                </li>
             @else
             <li>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#{{  str_slug($item['text']) }}"
                aria-expanded="true" aria-controls="{{  str_slug($item['text']) }}">
                <i class="{{$item['icon'] }}"></i>
                <span>{{ $item['text'] }}</span>
            </a>
                <div id="{{  str_slug($item['text']) }}" class="collapse" aria-labelledby="headingUtilities" data-parent="#{{  str_slug($item['text']) }}">
                    <div class="bg-white py-2 collapse-inner rounded">
    
                        @foreach ($item['submenu'] as $submenu)
                            <a class="collapse-item" href="{{ $submenu['url']}}"> {{ $submenu['text'] }}</a>
                        @endforeach
                    </div>
                </div>
            </li>
            @endif
    
           @endforeach
    
        <!-- Divider -->
        {{-- <hr class="sidebar-divider">
    
        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>
    
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Components</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="buttons.html">Buttons</a>
                    <a class="collapse-item" href="cards.html">Cards</a>
                </div>
            </div>
        </li>
    
        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Utilities</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Utilities:</h6>
                    <a class="collapse-item" href="utilities-color.html">Colors</a>
                    <a class="collapse-item" href="utilities-border.html">Borders</a>
                    <a class="collapse-item" href="utilities-animation.html">Animations</a>
                    <a class="collapse-item" href="utilities-other.html">Other</a>
                </div>
            </div>
        </li>
    
        <!-- Divider -->
        <hr class="sidebar-divider">
    
        <!-- Heading -->
        <div class="sidebar-heading">
            Addons
        </div>
    
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item active">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Pages</span>
            </a>
            <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Login Screens:</h6>
                    <a class="collapse-item" href="login.html">Login</a>
                    <a class="collapse-item" href="register.html">Register</a>
                    <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                    <div class="collapse-divider"></div>
                    <h6 class="collapse-header">Other Pages:</h6>
                    <a class="collapse-item" href="404.html">404 Page</a>
                    <a class="collapse-item active" href="blank.html">Blank Page</a>
                </div>
            </div>
        </li>
    
        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="charts.html">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Charts</span></a>
        </li>
    
        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="tables.html">
                <i class="fas fa-fw fa-table"></i>
                <span>Tables</span></a>
        </li> --}}
    
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
    
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    
    </ul>
    <!-- End of Sidebar -->
    