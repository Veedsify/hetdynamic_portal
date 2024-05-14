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
        <div class="main-content app-content">
            <div class="container">

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Profile</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb align-items-center mb-0">
                                <li ><a href="javascript:void(0);" class="text-primary">Home</a></li>
                                <i class="bx bx-chevron-right fs-18"></i>
                                <li class=" " aria-current="page">Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row ">
                    <div class=" col-xl-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body p-0">
                                <div class="d-sm-flex align-items-center p-4 border-bottom-0 main-profile-cover">
                                    <div>
                                        <span class="avatar avatar-xxl avatar-rounded online me-3">
                                            <img src="{{ asset('assets/images/faces/9.jpg')}}" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-fill main-profile-info">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="fw-semibold mb-1 text-fixed-white">Emmanuel Iwok</h6>
                                        </div>
                                        <p class="mb-1 text-muted text-fixed-white op-7">iwokemmanuel49@gmail.com</p>


                                    </div>
                                </div>

                                <div class="row p-2">

                                <div class="col-xl-4  ">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Contact information
                                        </div>
                                    </div>

                                    <div class="text-muted p-2 py-3">
                                        <p class="mb-2">
                                            <span class="avatar avatar-sm avatar-rounded me-2 bg-light text-muted">
                                                <i class="bx bx-user align-middle fs-14"></i>
                                            </span>
                                            Emmanuel Iwok
                                        </p>
                                        <p class="mb-2">
                                            <span class="avatar avatar-sm avatar-rounded me-2 bg-light text-muted">
                                                <i class="bx bx-mail-send align-middle fs-14"></i>
                                            </span>
                                            sonyataylor2531@gmail.com
                                        </p>
                                        <p class="mb-2">
                                            <span class="avatar avatar-sm avatar-rounded me-2 bg-light text-muted">
                                                <i class="bx bx-phone align-middle fs-14"></i>
                                            </span>
                                            +(555) 555-1234
                                        </p>
                                        <p class="mb-0">
                                            <span class="avatar avatar-sm avatar-rounded me-2 bg-light text-muted">
                                                <i class="bx bx-location-plus align-middle fs-14"></i>
                                            </span>
                                            MIG-1-11, Monroe Street,
                                        </p>
                                    </div>
                                </div>


                                <div class="col-xl-8">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Edit Profile
                                            </div>
                                        </div>
                                        <div class="card-body ">
                                            <ul class="list-group ">
                                                <li class="list-group-item p-3">
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <div class="me-2 fw-semibold">
                                                            Full Name :
                                                        </div>
                                                        <input type="text" class="w-100 border p-2 text-muted mt-2" placeholder="Update your fullname " style="outline: none">
                                                    </div>
                                                </li>
                                                <li class="list-group-item p-3">
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <div class="me-2 fw-semibold">
                                                            Email :
                                                        </div>
                                                        <input type="text" class="w-100 border p-2 text-muted mt-2" placeholder="Update your email " style="outline: none">
                                                    </div>
                                                </li>
                                                <li class="list-group-item p-3">
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <div class="me-2 fw-semibold">
                                                            Phone number :
                                                        </div>
                                                        <input type="text" class="w-100 border p-2 text-muted mt-2" placeholder="Phone " style="outline: none">
                                                    </div>
                                                </li>
                                                <li class="list-group-item p-3">
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <div class="me-2 fw-semibold">
                                                            Address :
                                                        </div>
                                                        <input type="text" class="w-100 border p-2 text-muted mt-2" placeholder="Address " style="outline: none">
                                                    </div>
                                                </li>
                                                <li class="list-group-item p-3">
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <div class="me-2 fw-semibold">
                                                            image :
                                                        </div>
                                                        <input type="file" class="w-100 border p-2 text-muted mt-2" placeholder="Address " style="outline: none">
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!--End::row-1 -->

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
