@extends('../layout/index')
@section('content')



    <!-- Loader -->
    <div id="loader">
        <img src="{{ asset('assets/images/media/loader.svg')}}" alt="">
    </div>
    <!-- Loader -->

    <div class="page">
        <!-- app-header -->
        <x-header />
        <!-- /app-header -->
        <!-- Start::app-sidebar -->
       <x-aside />
        <!-- End::app-sidebar -->

          <!-- Start::app-content -->
          <div class="main-content app-content ">
            <div class="container ">

                <!-- Page Header -->
                <div class="d-md-flex  d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Services</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Services</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->





                <!-- Start::row-3 -->
                <div class="row">
                    <div class="col-xxl-12" id="leads-discovered">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center fw-semibold justify-content-between gap-1 flex-wrap">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="lh-1">
                                            <span class="avatar avatar-sm avatar-badge">
                                                <img src="../assets/images/faces/12.jpg" alt="">
                                            </span>
                                        </div>
                                        <div class="fs-14"><a href="#">CANADA PERSONAL CARE ATTENDANT:</a></div>
                                    </div>
                                    <div>Canada</div>
                                </div>
                                <div class="deal-description">
                                    <div class="my-1">
                                        <span class="text-muted">services</span>

                                        <a href="javascript:void(0);" class="company-name">work-permit</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- End::row-3 -->


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
