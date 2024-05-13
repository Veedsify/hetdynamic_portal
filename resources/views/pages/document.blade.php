@extends('../layout/index')
@section('content')
    <!-- Loader -->
    <div id="loader">
        <img src="{{ asset('assets/images/media/loader.svg') }}" alt="">
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
                    <h1 class="page-title fw-semibold fs-18 mb-0">My documents</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">documents</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Multiple Upload
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="">

                                    <label for="file-document" class="cursor-pointer border text-center w-100 py-5 mb-3 border-dashed border-2">Click <u>here</u> to insert document</label>
                                    <input type="file" multiple id="file-document" hidden>
                                    
                                    <button class="btn btn-primary d-block ms-auto">Upload </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->
                    <div class="col-md-8 border">
                        <div class="table-responsive rounded ">
                            <table class="table text-nowrap ">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">type</th>
                                        <th scope="col">Size</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>


                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Emmanuel Iwok</td>
                                        <td>iwokemmanuel49@gmail.com</td>
                                        <td><span class="badge bg-outline-warning">Failed</span></td>
                                        <td><a href="{{ route('application') . '/details' }}"
                                                class="text-decoration-underline text-primary">service name</a>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-md border w-50">
                                                <img src="{{ asset('assets/images/media/media-2.jpg') }}" alt="img"
                                                    class="w-100 object-fit-cover">
                                            </div>
                                        </td>


                                        <td>
                                            <i class="ti ti-trash"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
