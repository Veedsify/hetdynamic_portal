     <!-- Start::main-sidebar -->
     <div class="main-sidebar" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewbox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
            </div>
            <ul class="main-menu ">






                <!-- Start::slide -->
                <li class="slide ">
                    <a href="/" class="side-menu__item ">
                        <i class="bx bx-file-blank side-menu__icon"></i>
                        Dashbooard
                    </a>

                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide ">
                    <a href="{{ route('universities') }}" class="side-menu__item">
                        <i class="bx bx-task side-menu__icon"></i>
                        Universites
                    </a>
                                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide ">
                    <a href="{{ route('services') }}" class="side-menu__item">
                        <i class="bx bx-fingerprint side-menu__icon"></i>
                        Services
                    </a>

                </li>
                <!-- End::slide -->

            
                <!-- End::slide -->
                                <!-- Start::slide -->
                <li class="slide ">
                    <a href="{{route('document')}}" class="side-menu__item">
                        <i class="bx bx-error side-menu__icon"></i>
                        My document
                    </a>

                </li>
                <!-- End::slide -->

                    <!-- Start::slide -->
                <li class="slide ">
                    <a href="{{route('blog')}}" class="side-menu__item">
                        <i class="bx bx-error side-menu__icon"></i>
                        Blog
                    </a>

                </li>
                <!-- Start::slide -->
                <li class="slide ">
                    <a href="{{route('application')}}" class="side-menu__item">
                        <i class="bx bx-error side-menu__icon"></i>
                        All Aplication
                    </a>

                </li>
                <!-- End::slide -->



          <!-- Start::slide -->
                <li class="slide ">
                    <a href="{{route(('profile'))}}" class="side-menu__item ">
                        <i class="bx bx-file-blank side-menu__icon"></i>
                        Profile
                    </a>

                </li>
                <!-- End::slide -->








            </ul>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->
