<?php 
    include('header.php'); 
    require_once("auth.php");
?>

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Dashboard</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Library
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-md-6 col-lg-3">
                <div class="card card-hover">
                    <div class="box bg-cyan text-center">
                        <h1 class="font-light text-white">45</h1>
                        <h6 class="text-white">News Items</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3">
                <div class="card card-hover">
                    <div class="box bg-success text-center">
                        <h1 class="font-light text-white">4</h1>
                        <h6 class="text-white">Gallery Items</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3">
                <div class="card card-hover">
                    <div class="box bg-warning text-center">
                        <h1 class="font-light text-white">123</h1>
                        <h6 class="text-white">Clients</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3">
                <div class="card card-hover">
                    <div class="box bg-danger text-center">
                        <h1 class="font-light text-white">
                            <i class="mdi mdi-border-outside"></i>
                        </h1>
                        <h6 class="text-white">Tables</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- column -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Latest News</h4>
                    </div>
                    <div class="comment-widgets scrollable">
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row mt-0">
                            <div class="p-2">
                                <img src="assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle" />
                            </div>
                            <div class="comment-text w-100">
                                <h6 class="font-medium">James Anderson</h6>
                                <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and
                                    type setting industry.
                                </span>
                                <div class="comment-footer">
                                    <span class="text-muted float-end">April 14, 2021</span>
                                    <button type="button" class="btn btn-cyan btn-sm text-white">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-success btn-sm text-white">
                                        Publish
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm text-white">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row">
                            <div class="p-2">
                                <img src="assets/images/users/2.jpg" alt="user" width="50" class="rounded-circle" />
                            </div>
                            <div class="comment-text active w-100">
                                <h6 class="font-medium">Michael Jorden</h6>
                                <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and
                                    type setting industry.
                                </span>
                                <div class="comment-footer">
                                    <span class="text-muted float-end">May 10, 2021</span>
                                    <button type="button" class="btn btn-cyan btn-sm text-white">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-success btn-sm text-white">
                                        Publish
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm text-white">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row">
                            <div class="p-2">
                                <img src="assets/images/users/2.png" alt="user" width="50" class="rounded-circle" />
                            </div>
                            <div class="comment-text w-100">
                                <h6 class="font-medium">Johnathan Doeting</h6>
                                <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and
                                    type setting industry.
                                </span>
                                <div class="comment-footer">
                                    <span class="text-muted float-end">August 1, 2021</span>
                                    <button type="button" class="btn btn-cyan btn-sm text-white">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-success btn-sm text-white">
                                        Publish
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm text-white">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column -->
        </div>
    </div>
    <?php include('footer.php'); ?>