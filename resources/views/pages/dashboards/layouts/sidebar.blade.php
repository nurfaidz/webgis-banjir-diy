<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar mb-3" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="list-divider"></li>
                <li class="sidebar-item"><a class="sidebar-link sidebar-link" href="{{ route('dashboard') }}"
                                            aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                            class="hide-menu">Dashboard</span></a>
                </li>

                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Master Data</span></li>
                <li class="sidebar-item" id="daerah"><a class="sidebar-link" href="{{route('flood-zones.index')}}"
                                                        aria-expanded="false"><i data-feather="tag"
                                                                                 class="feather-icon"></i><span
                            class="hide-menu">Titik Rawan Banjir
                            </span></a>
                </li>
                <li class="sidebar-item"><a class="sidebar-link" href="{{route('flood-zones.index')}}"
                                            aria-expanded="false"><i data-feather="message-square"
                                                                     class="feather-icon"></i><span
                            class="hide-menu">Area Rawan Banjir</span></a></li>
                <li class="sidebar-item"><a class="sidebar-link" href="{{route('weather.index')}}"
                                            aria-expanded="false"><i data-feather="message-square"
                                                                     class="feather-icon"></i><span
                            class="hide-menu">Cuaca</span></a></li>


            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
