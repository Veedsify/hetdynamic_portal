     <!-- Start::main-sidebar -->
     <div class="main-sidebar" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewbox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
            </div>
            <ul class="main-menu ">


<!-- Start::slide__category -->
<li class="slide__category d-lg-none"><span class="category-name">Main</span></li>
<!-- End::slide__category -->





                <!-- Start::slide -->
                <li class="slide ">
                    <a href="/" class="side-menu__item ">
                        <i class="bx bxs-home side-menu__icon"></i>
                        Dashbooard
                    </a>

                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide ">
                    <a href="{{ route('country') }}" class="side-menu__item">
                        <i class="bx bxs-graduation side-menu__icon"></i>
                        Universites
                    </a>
                                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide ">
                    <a href="{{ route('services') }}" class="side-menu__item">
                        <i class="bx bxs-book-bookmark side-menu__icon"></i>
                        Services
                    </a>

                </li>
                <!-- End::slide -->


                <!-- End::slide -->
                                <!-- Start::slide -->
                <li class="slide ">
                    <a href="{{route('document')}}" class="side-menu__item">
                        <i class="bx bx-book-open side-menu__icon"></i>
                        My document
                    </a>

                </li>
                <!-- End::slide -->

                    <!-- Start::slide -->
                <li class="slide ">
                    <a href="{{route('blog')}}" class="side-menu__item">
                        <i class="bx bx-book-bookmark side-menu__icon"></i>
                        Blog
                    </a>

                </li>
                <!-- Start::slide -->
                <li class="slide ">
                    <a href="{{route('application')}}" class="side-menu__item">
                        <i class="bx bxs-dashboard side-menu__icon"></i>
                        All Application
                    </a>

                </li>
                <!-- End::slide -->



          <!-- Start::slide -->
                <li class="slide ">
                    <a href="{{route(('profile'))}}" class="side-menu__item ">
                        <i class="bx bx-user-circle side-menu__icon"></i>
                        Profile
                    </a>

                </li>
                <!-- End::slide -->








            </ul>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->
