<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="/assets/admin/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Data Siswa</a>
                        
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('siswa.create') }}">Input Data </a>
                                </li>
                                <li>
                                    <a href="{{ route('siswa.index') }}">View Data </a>
                                </li>
                                </ul>
                        </li>
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Data Guru</a>
                        
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('guru.create') }}">Input Data </a>
                                </li>
                                <li>
                                    <a href="{{ route('guru.index') }}">View Data </a>
                                </li>
                                </ul>
                    </li>
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Data Petugas</a>
                        
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('PetugasPiket.create') }}">Input Data </a>
                                </li>
                                <li>
                                    <a href="index3.html">View Data </a>
                                </li>
                                </ul>
                    </li>
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Data kelas</a>
                        
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('kelas.create') }}">Input Data </a>
                                </li>
                                <li>
                                    <a href="{{ route('kelas.index') }}">View Data </a>
                                </li>
                                </ul>
                    </li>
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Data Jurusan</a>
                        
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('jurusan.create') }}">Input Data </a>
                                </li>
                                <li>
                                    <a href="{{ route('jurusan.index') }}">View Data </a>
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

