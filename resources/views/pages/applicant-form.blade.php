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
                        <h1 class="page-title fw-semibold fs-18 mb-0">Application Form</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb align-items-center mb-0">
                                    <li ><a href="javascript:void(0);" class="text-primary">Home</a></li>
                                    <i class="bx bx-chevrons-right fs-18"></i>
                                    <li class=" " aria-current="page">Application Form</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <div class="container">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Fill In Correct Details
                                    </div>

                                </div>
                                <div class="card-body">
                                    <form class="row g-3 mt-0">
                                        <div class="col-md-6">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email id">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputnumber" class="form-label">Phone No.</label>
                                            <input type="phone" class="form-control" id="inputnumber" placeholder="+1 902 9...">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputAddress" class="form-label">Address</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputAddress2" class="form-label">Address 2</label>
                                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputCity" class="form-label">City</label>
                                            <input type="text" class="form-control" id="inputCity">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label">State</label>
                                            <select id="inputState" class="form-select form-select-lg">
                                                <option selected="">Choose...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputCountry" class="form-label">Country</label>
                                            <select id="inputCountry" class="form-select form-select-lg">
                                                <option selected="">Choose...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputZip" class="form-label">Zip</label>
                                            <input type="text" class="form-control" id="inputZip">
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck3">
                                                <label class="form-check-label" for="gridCheck3">
                                                    I agrre to the <a href="#" class="text-decoration-underline ">terms and condition</a> and <a href="#" class="text-decoration-underline ">Privacy Policy</a>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-block text-center">
                                            <button type="submit" class="btn btn-primary  col-md-10 ">Sign in</button>
                                        </div>
                                    </form>
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
