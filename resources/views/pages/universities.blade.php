﻿@extends('../layout/index')
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
                    <h1 class="page-title fw-semibold fs-18 mb-0">Universites</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb align-items-center mb-0">
                                <li ><a href="javascript:void(0);" class="text-primary">Home</a></li>
                                <i class="bx bx-chevron-right fs-18"></i>
                                <li class=" " aria-current="page">Universtities</li>
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
                                <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                    <div>
                                        <ul class="nav nav-tabs nav-tabs-header mb-0" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-all" aria-selected="true">All Universites</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-art" aria-selected="false" tabindex="-1">LATVIA University</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-art" aria-selected="false" tabindex="-1">Poland University</a>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="btn-list">
                                        <button type="button" class="btn btn-sm btn-secondary btn-wave">Filters</button>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-wave btn-primary waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                            Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">New Collection</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">High - Low</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Low - High</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

                <!-- Start:: row-2 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tab-content">
                            <div class="tab-pane show active p-0 border-0" id="nft-all" role="tabpanel">
                                <div class="row">


                                    <div class="  col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="card custom-card">
                                            <img src="../assets/images/nft-images/27.png" class="card-img-top" alt="...">

                                            <div class="card-body">

                                                <p class="mb-0 text-fixed-white nft-auction-time">
                                                    LATVIA University
                                                </p>
                                                <p class="fs-15 fw-semibold mb-2"><a href="javascript:void(0);">Air Training Group</a></p>
                                                <div class=" mb-4">
                                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque iusto numquam placeat iste sunt velit aspernatur, quis culpa autem praesentium quos ex cum dolore voluptates distinctio ad minus rem asperiores!</p>
                                                </div>
                                                <div class="d-grid">
                                                    <button type="button" class="btn btn-primary-light btn-wave waves-effect waves-light">View University</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <nav aria-label="Page navigation">
                                        <ul class="pagination justify-content-end mb-4">
                                            <li class="page-item disabled">
                                                <a class="page-link">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0);">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <!-- End:: row-2 -->

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
