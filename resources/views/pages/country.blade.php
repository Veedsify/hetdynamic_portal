@extends('../layout/index')
@section('content')



    <!-- Loader -->
    <div id="loader">
        <img src="{{ asset('assets/images/media/loader.svg')}}" alt="">
    </div>
    <!-- Loader -->

    <div class="page justify-content-start">
        <!-- app-header -->
        <x-header />
        <!-- /app-header -->
        <!-- Start::app-sidebar -->
       <x-aside />
        <!-- End::app-sidebar -->

        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container">

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Countries</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb align-items-center mb-0">
                                <li ><a href="javascript:void(0);" class="text-primary">Home</a></li>
                                <i class="bx bx-chevron-right fs-18"></i>
                                <li class=" " aria-current="page">Country</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="fs-16 fw-semibold">
                                    Select the Country of Your Choice
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card text-center">
                            <div class="card-body">
                                <span class="avatar avatar-xl avatar-rounded mb-3">
                                    <img src="{{asset('assets/images/faces/4.jpg')}}" alt="">
                                </span>
                                <p class="fw-semibold fs-15 mb-0"><a href="{{route('universities')}}" >Canada</a></p>
                                <span class="text-muted fs-12">From Sea to Sea</span>
                            </div>
                            <div class="card-footer">
                                <div class="btn-list align-items-center">
                                  <a href="{{route('universities')}}" class="fw-medium text-primary ">View Universites <i class="bi bi-arrow-up-right fw-medium"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- End::app-content -->


    </div>


    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->




 @endsection
