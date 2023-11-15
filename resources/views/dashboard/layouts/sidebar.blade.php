<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <svg class="bi"><use xlink:href="#house-fill"/></svg>
              Dashboard
            </a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/biodata') ? 'active' : '' }}" href="/dashboard/biodata">
              <svg class="bi"><use xlink:href="#file-earmark"/></svg>
              Biodata
            </a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/latihan') ? 'active' : '' }}" href="/dashboard/latihan">
              <svg class="bi"><use xlink:href="#file-earmark"/></svg>
              Latihan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/laporan') ? 'active' : '' }}" href="/dashboard/laporan">
              <svg class="bi"><use xlink:href="#file-earmark"/></svg>
              Laporan
            </a>
          </li>
        </ul>

        {{-- Administrator --}}
        @can('admin')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted"><span>Administrator</span></h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/user') ? 'active' : '' }}" href="/dashboard/user">
              <svg class="bi"><use xlink:href="#file-earmark"/></svg>
              User
            </a>
          </li>
        </ul>
        @endcan

        {{-- User --}} 

        <hr class="my-3">

        <ul class="nav flex-column mb-auto">
          <li class="nav-item">
              <form class="nav-link d-flex align-items-center gap-2" action="/logout" method="POST">
                  @csrf
                  
                  <button type="submit" class="nav-link"><svg class="bi"><use xlink:href="#door-closed"/></svg> Logout</button></form>
          </li>
        </ul>
      </div>
    </div>
  </div>