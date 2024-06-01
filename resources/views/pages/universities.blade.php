@extends('../layout/index')
@section('content')
    <!-- Loader -->
    <div id="loader">
        <img src="{{ asset('assets/images/media/loader.svg') }}" alt="">
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
                                <li><a href="javascript:void(0);" class="text-primary">Home</a></li>
                                <i class="bx bx-chevrons-right fs-18"></i>
                                <li aria-current="page">Universtities</li>
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
                                    Select the University of Your Choice
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->
                <div class="row">
                    <h2>
                        {{ $universities->count() == 0 ? 'No University Found' : '' }}
                    </h2>
                </div>
                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Start:: row-2 -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="row">
                                    @foreach ($universities as $university)
                                        <div class=" col-lg-4  col-md-6 col-12    rounded">
                                            <div class="card custom-card border  p-md-4 p-3">
                                                <img src="https://hetdynamic.com/{{ $university->cover }}"
                                                    class="card-img-top " alt="...">
                                                <div class="card-body px-0">

                                                    <p class="mb-0 text-fixed-white nft-auction-time " style="right: 50px;">
                                                        {{ Str::limit($university->name, 20) }}
                                                    </p>
                                                    <p class="fs-15 fw-semibold mb-2"><a href="javascript:void(0);">
                                                            {{ $university->name }}
                                                        </a></p>
                                                    <div class=" mb-4">
                                                        <p>
                                                            {{ Str::limit($university->description, 150) }}
                                                        </p>
                                                    </div>
                                                    <div class="d-grid">

                                                        <a href="{{ route('universities.details', $university->slug) }}"
                                                            type="button"
                                                            class="btn btn-primary-light btn-wave waves-effect waves-light">View
                                                            University <i class="bi bi-arrow-up-right"></i></a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-2 -->
                    </div>
                </div>
                <!--End::row-1 -->

                <nav aria-label="Page navigation">
                    {{ $universities->links('vendor.pagination.bootstrap-5') }}
                </nav>

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
