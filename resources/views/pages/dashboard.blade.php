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

                <!-- Start::page-header -->

                <div class="d-md-flex border d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <div>
                        <p class="fw-semibold fs-18 mb-0">Welcome, Emmanuel Iwok!</p>
                        <span class="fs-semibold text-muted">To your hetdynamic portal 😊.</span>
                    </div>
                    <div class="btn-list mt-md-0 mt-2">
                        <button type="button" class="btn btn-primary btn-wave">
                            <i class="bx bx-filter me-2 align-middle d-inline-block"></i>Filters
                        </button>
                        <button type="button" class="btn btn-outline-secondary btn-wave">
                            <i class="bx bx-cloud-download me-2 align-middle d-inline-block"></i>Export
                        </button>
                    </div>
                </div>

                 <!-- End::page-header -->

                <!-- Start::row-1 -->

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-xl-3 col-md-4  ">
                                        <div class="card custom-card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex align-items-top justify-content-between">
                                                    <div>
                                                        <span class="avatar avatar-md avatar-rounded bg-primary">
                                                            <i class="bx bxs-book-bookmark fs-16"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill ms-3">
                                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                            <div>
                                                                <p class="text-muted mb-0">Total Services</p>
                                                                <h4 class="fw-semibold mt-1">1,02,890</h4>
                                                            </div>
                                                            <div id="crm-total-customers"></div>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between mt-1">
                                                            <div>
                                                                <a class="text-primary" href="{{route('services')}}">View All<i class="bi bi-arrow-up-right  ms-2 fw-semibold d-inline-block"></i></a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4  ">
                                        <div class="card custom-card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex align-items-top justify-content-between">
                                                    <div>
                                                        <span class="avatar avatar-md avatar-rounded bg-secondary">
                                                            <i class="bx bxs-graduation fs-16"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill ms-3">
                                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                            <div>
                                                                <p class="text-muted mb-0">Total Universities</p>
                                                                <h4 class="fw-semibold mt-1">$56,562</h4>
                                                            </div>
                                                            <div id="crm-total-revenue"></div>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between mt-1">
                                                            <div>
                                                                <a class="text-secondary" href="javascript:void(0);">View All<i class="bi bi-arrow-up-right ms-2 fw-semibold d-inline-block"></i></a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4  ">
                                        <div class="card custom-card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex align-items-top justify-content-between">
                                                    <div>
                                                        <span class="avatar avatar-md avatar-rounded bg-success">
                                                            <i class="bx bx-file-blank fs-16"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill ms-3">
                                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                            <div>
                                                                <p class="text-muted mb-0">Total Courses</p>
                                                                <h4 class="fw-semibold mt-1">12.08%</h4>
                                                            </div>
                                                            <div id="crm-conversion-ratio"></div>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between mt-1">
                                                            <div>
                                                                <a class="text-success" href="javascript:void(0);">View All<i class="bi bi-arrow-up-right ms-2 fw-semibold d-inline-block"></i></a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4  ">
                                        <div class="card custom-card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex align-items-top justify-content-between">
                                                    <div>
                                                        <span class="avatar avatar-md avatar-rounded bg-warning">
                                                            <i class="bx bxs-dashboard fs-16"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill ms-3">
                                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                            <div>
                                                                <p class="text-muted mb-0">My Applications</p>
                                                                <h4 class="fw-semibold mt-1">1</h4>
                                                            </div>
                                                            <div id="crm-total-deals"></div>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between mt-1">
                                                            <div>
                                                                <a class="text-warning" href="{{route('application')}}">View All<i class="bi bi-arrow-up-right ms-2 fw-semibold d-inline-block"></i></a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4  ">
                                        <div class="card custom-card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex align-items-top justify-content-between">
                                                    <div>
                                                        <span class="avatar avatar-md avatar-rounded bg-secondary">
                                                            <i class="bi bi-book fs-16"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill ms-3">
                                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                            <div>
                                                                <p class="text-muted mb-0">My Uploads</p>
                                                                <h4 class="fw-semibold mt-1">1</h4>
                                                            </div>
                                                            <div id="crm-total-revenue"></div>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between mt-1">
                                                            <div>
                                                                <a class="text-secondary" href="{{route('document')}}">View All<i class="bi bi-arrow-up-right ms-2 fw-semibold d-inline-block"></i></a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="col-xxl-12 col-xl-5">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Recent Blog
                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <ul class="list-unstyled mb-0 crm-recent-activity">
                                                <li class="crm-recent-activity-content">
                                                    <div class="d-flex align-items-top">
                                                        <div class="me-3">
                                                            <span class="avatar avatar-xs bg-primary-transparent avatar-rounded">
                                                                <i class="bi bi-circle-fill fs-8"></i>
                                                            </span>
                                                        </div>
                                                        <div class="crm-timeline-content  w-100">
                                                            <span class="fw-semibold">New Blog: </span><span><a href="javascript:void(0);" class="text-primary fw-semibold"> Lithuania Health Insurance for Family members of Non-Eu Workers.</a></span>
                                                        </div>
                                                        <div class="flex-fill text-end">
                                                            <span class="d-block text-muted fs-11 op-7">4:45PM</span>
                                                        </div>
                                                    </div>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-7 col-xxl-12">

                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                All Application
                                            </div>
                                            <div class="d-flex flex-wrap gap-2">
                                                <div>
                                                    <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Sort By<i class="bi bi-filter  align-middle ms-1 d-inline-block"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">New</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table text-nowrap table-hover border table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="row" class="ps-4"><input class="form-check-input" type="checkbox" id="checkboxNoLabel1" value="" aria-label="..."></th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Service</th>
                                                            <th scope="col">Application Image</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row" class="ps-4"><input class="form-check-input" type="checkbox" id="checkboxNoLabel2" value="" aria-label="..."></th>
                                                            <td>
                                                                <div class="d-flex align-items-center fw-semibold">
                                                                Emmanuel Iwok
                                                                </div>
                                                            </td>
                                                            <td>iwokemmanuel49@gmail.com</td>
                                                            <td>
                                                                <span class="badge bg-danger-transparent">Failed</span>
                                                            </td>
                                                            <td><a href="{{route('application').('/details')}}" class="text-decoration-underline text-primary">service name</a></td>
                                                            <td><div class="avatar avatar-md rounded-0 border w-50">
                                                                <img src="{{ asset('assets/images/media/media-2.jpg') }}" alt="img"
                                                                    class="w-100 object-fit-cover rounded-1">
                                                            </div></td>
                                                            <td>
                                                                <div class="hstack gap-2 fs-15">
                                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"><i class="bx bx-trash"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>




                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i>
                                                </div>
                                                <div class="ms-auto">
                                                    <nav aria-label="Page navigation" class="pagination-style-4">
                                                        <ul class="pagination mb-0">
                                                            <li class="page-item disabled">
                                                                <a class="page-link" href="javascript:void(0);">
                                                                    Prev
                                                                </a>
                                                            </li>
                                                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                            <li class="page-item">
                                                                <a class="page-link text-primary" href="javascript:void(0);">
                                                                    next
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                        </div>


                <!-- End::row-1 -->

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
