<div id="sidebar-nav" class="sidebar">
    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 95%;"><div class="sidebar-scroll" style="overflow: hidden; width: auto; height: 95%;">
      <nav>
        <ul class="nav">
          <li><a class="{{ Request::is('/') ? 'active' : ''}}" href="/dashboard"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
          @if(auth()->user()->role == 'admin')
            <li><a class="{{ Request::is('anggota') ? 'active' : ''}}" href="/anggota"><i class="lnr lnr-users"></i> <span>Anggota Koperasi</span></a></li>
            <li><a class="{{ Request::is('simpanan') ? 'active' : ''}}" href="/simpanan"><i class="lnr lnr-book"></i> <span>Simpanan Anggota</span></a></li>
            <li><a class="{{ Request::is('pinjaman') ? 'active' : ''}}" href="/pinjaman" class=""><i class="lnr lnr-book"></i> <span>Pinjaman Anggota</span></a></li>
            <li><a class="{{ Request::is('angsuran') ? 'active' : ''}}" href="/angsuran" class=""><i class="lnr lnr-book"></i> <span>Angsuran Anggota</span></a></li>
            <li><a class="{{ Request::is('pemasukan') ? 'active' : ''}}" href="/pemasukan" class=""><i class="lnr lnr-enter"></i> <span>Pemasukan Angsuran</span></a></li>
            <li><a class="{{ Request::is('tabungan') ? 'active' : ''}}" href="/tabungan" class=""><i class="lnr lnr-enter"></i> <span>Pemasukan Simpanan</span></a></li>
            <li><a class="{{ Request::is('keluar') ? 'active' : ''}}" href="/keluar" class=""><i class="lnr lnr-exit"></i> <span>Pengeluaran</span></a></li>
            <li><a class="{{ Request::is('laporan') ? 'active' : ''}}" href="/laporan" class=""><i class="lnr lnr-calendar-full"></i> <span>Laporan Saldo Bulanan</span></a></li>
            <li><a class="{{ Request::is('logout') ? 'active' : ''}}"href="/logout"><i class="lnr lnr-exit-up"></i> <span>Logout</span></a></li>
            @endif
        </ul>
      </nav>
    </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 555px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
</div>