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
            <div class="container ">

                <!-- Page Header -->
                <div class="d-md-flex card-body d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Latva University</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb align-items-center mb-0">
                                <li ><a href="javascript:void(0);" class="text-primary">Home</a></li>
                                <i class="bx bx-chevrons-right fs-18"></i>
                                <li  aria-current="page">Universtities</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->


                <!-- Start::row-1 -->
                                    <div class=" row align-items-start bg-white p-4 px-2 rounded">
                                        <img src="../assets/images/nft-images/7.png" class="col-xl-4  col-12" alt="...">

                                        <div class="card-body col-lg-8 mt-lg-0 mt-3 p-2">

                                            <img src="{{ asset('assets/images/brand-logos/desktop-white.png')}}" alt="" width="80px">
                                            <h2 class="Nigeria College mt-1 mb-2">
                                                Latva University
                                            </h2>
                                            <p class="fs-15 fw-semibold mb-1 p-0">Location: <a href="javascript:void(0);" class="text-info fw-normal">Air Training Group</a></p>
                                            <p class="fs-15 fw-semibold mb-2">Address: <a href="javascript:void(0);" class="text-info fw-normal">Queens Barrack</a></p>
                                            <div class=" mb-4 mt-3 col-lg-10 col-12">
                                                <p class="fs-15">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque iusto numquam placeat iste sunt velit aspernatur, quis culpa autem praesentium quos ex cum dolore voluptates distinctio ad minus rem asperiores!</p>
                                            </div>
                                            <div class="d-grid my-2">

                                                    <a href="{{route('universities').('/details')}}" type="button" class="btn fs-15 btn-primary-light col-lg-4 col-12 rounded-0 btn-wave fw-semibold waves-effect waves-light py-3">Contact Us</i></a>

                                            </div>
                                        </div>
                                    </div>
                                    <!--End::row-1 -->
                                    <!-- Start:: row-2 -->
                                    <div class="row">
                                        <div class="col-xl-12 mt-4">

                                            <h3>Description</h3>
                                            <p class="fw-normal mt-2 fs-15 ">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident quisquam esse repellat. Sint eum aliquam omnis soluta repudiandae eos autem? Unde iste labore asperiores provident odit nihil fugiat ea ullam!</p>
                                        </div>



                                        <div class="col-xl-12 fs-15 mt-4 bg-white p-md-4 rounded">

                                            <h3 class="mb-4">Courses</h3>

                                            <div class="border border-dark border-opacity-25  rounded p-3  ">
                                                <h6 class="text-primary fw-normal">Diploma Electrical Enginerring Technicain</h6>
                                                <p class="fw-normal">Nigara College</p>
                                                <P class="fw-normal">Ontario, Canada</P>
                                                <p>Attibute</p>

                                                    <div class="row mb-2  ">

                                                        <h6 class="fw-semibold col-4">Faculty:</h6>
                                                        <p class="col-4">Enginerring</p>
                                                        <p class="col-4">Study location Canada, Ontario</p>
                                                    </div>
                                                    <div class="row mb-2  ">

                                                        <h6 class="col-4 fw-semibold">Type:</h6>
                                                        <p class="col-8">Diploma in (Electricity Engineering Technician)</p>
                                                    </div>
                                                    <div class="row mb-2  ">

                                                        <h6 class="col-4 fw-semibold">Study Language:</h6>
                                                        <p class="col-8">English</p>
                                                    </div>
                                                    <div class="row mb-2  ">
                                                        <h6 class="col-4 fw-semibold">Duration:</h6>
                                                        <p class="col-8">4years</p>
                                                    </div>
                                                    <div class="row mb-2  ">
                                                        <h6 class="col-4 fw-semibold">Tuition Fee:</h6>
                                                        <p class="col-8">CA$52,838.09 per program</p>
                                                    </div>
                                                    <div class="row mb-2  ">
                                                        <h6 class="col-4 fw-semibold">Entry Qualification:</h6>
                                                        <p class="col-8 fw-semibold">High School</p>
                                                    </div>
                                                    <div class="row mb-2 mt-3">
                                                        <h6 class="col-4 fw-semibold">Language Requirements:</h6>
                                                        <p class="col-8 ">English</p>
                                                    </div>
                                                    <div class="row mb-2 ">
                                                        <h6 class="col-4 fw-semibold">Other Requirements:</h6>
                                                        <p class="col-8 ">Application fee 200 Euro</p>
                                                    </div>
                                                    <div class="row mb-2 ">
                                                        <h6 class="col-4 fw-semibold">Overview:</h6>
                                                        <div class="col-8">
                                                        <h6 class="fw-semibold col-4">Career Opportunities:</h6>
                                                        <p>
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit debitis quaerat dicta perferendis qui? Repellendus, vel tenetur commodi perspiciatis sit eum in accusantium doloribus fuga consequatur possimus dicta, voluptatibus vitae?
                                                        </p>

                                                        </div>
                                                    </div>
                                                    <div class="d-grid my-4  text-center  ">

                                                        <a href="{{route('universities').('/details')}}" type="button" class="btn fs-15 btn-primary-light col-lg-4 col-12 rounded-0 mx-auto btn-wave fw-semibold waves-effect waves-light py-3">Apply Now</i></a>

                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                     <!-- end:: row-2 -->
                                </div>
                            </div>



    </div>


    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->




 @endsection
