  <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="/assets/admin/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Absen Siswa</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('absensi_siswa.create') }}">input Absen siswa</a>
                                </li>
                                <li>
                                    <a href="{{ route('absensi_siswa.index') }}">View Data Absen</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Absen Guru</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('absensi_guru.create') }}">Input absen guru</a>
                                </li>
                                <li>
                                    <a href="{{ route('absensi_guru.index') }}">View Data Absen</a>
                                </li>
                                
                            </ul>
                        </li>
      
      <ul id="pagination" class="pagination-sm"></ul>

        <div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
            </div>
          </div>
        </div>              </ul>

                </nav>
            </div>
        </aside>
      