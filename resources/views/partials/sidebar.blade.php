<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="/assets/admin/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="#">
                            <i class="fa fa-file-text" style="font-size:48px;color:black"></i>Artikel</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('artikel.index') }}"><i style="font-size:24px;color:brown" class="fa">&#xf022;</i>Artikel</a>
                                </li>
                                <li>
                                    <a href="{{ route('kategoriartikel.index') }}"><i style="font-size:24px;color:silver" class="fa">&#xf0ea;</i>Kategori Artikel</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="js-arrow" href="#">
                            <i class="fa fa-area-chart" style="font-size:48px;color:blue"></i>Galeri</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="{{ route('galeri.index') }}"><i style="font-size:24pxcolor:brown" class="fa">&#xf1c5;</i>Galeri</a>
                            </li>
                            <li>
                                <a href="{{ route('kategorigaleri.index') }}"><i style="font-size:24px;color:pink" class="fa">&#xf07c;</i>Kategori Galeri</a>
                            </li>
                            </ul>
                        </li>
                        <li>
                            <a class="js-arrow"  href="#">
                            <i class="fa fa-address-book" style="font-size:48px;color:green"></i>Kurikulum</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="{{ route('kurikulum.index') }}"><i style="font-size:24px;color:darkred" class="fa">&#xf201;</i>Kurikulum</a>
                            </li>
                            <li>
                                <a href="{{ route('guru.index') }}"><i style="font-size:24px;color:indigo" class="fa">&#xf2c2;</i>Guru</a>
                            </li>
                            <li>
                                <a href="{{ route('staf.index') }}"><i style="font-size:24px;color:darkblue" class="fa">&#xf183;</i>Staf</a>
                            </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('eskul.index') }}">
                            <i class="fa fa-child" style="font-size:48px;color:red"></i>Eskul</a>
                        </li>
                        <li>
                            <a href="{{ route('fasilitas.index') }}">
                            <i class="fa fa-thumbs-up" style="font-size:48px;color:purple"></i>Fasilitas</a>
                        </li>
                        <li>
                            <a href="{{ route('profile.index') }}">
                            <i class="fa fa-user-circle" style="font-size:48px;color:orange"></i>Profile</a>
                        </li>             
                        <li class="has-sub">
                            <a href="{{ route('prestasi.index') }}">
                            <i class="fa fa-mortar-board" style="font-size:48px;color:yellow"></i>Prestasi</a>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>