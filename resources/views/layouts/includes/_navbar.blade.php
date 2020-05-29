<nav class="navbar navbar-default navbar-fixed-top"> 
    <div class="brand">
      <a href="index.html"><img src="{{asset('admin/logo1.png')}}" alt="Klorofil Logo" 
        class="img-responsive logo"></a>
    </div>
    <div class="container-fluid">
      <div class="navbar-btn">
        <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
      </div>
      <div id="navbar-menu">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <form class="navbar-form" method="get" action="/anggota">
              <div class="form-group">
                <input name="cari" type="cari" class="form-control" placeholder="Search...">
                <span class="form-group-btn"><button name="cari" type="button" class="btn btn-primary">Go</button></span>
                  {{-- <a href="/anggota" class="btn btn-primary">Go</a> --}}
              </div>
            </form>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('admin/assets/img/user.png')}}" 
            class="img-circle" alt="Avatar"><span>{{auth()->user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>

            <ul class="dropdown-menu">
              <li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
              <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
              <li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
              <li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
            </ul>
          </li>
          <!-- <li>
            <a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>