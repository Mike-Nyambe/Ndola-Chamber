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
                <h4 class="page-title">Form Basic</h4>
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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <?php
                            if (isset($_POST["submit"])) {
                              if ($insert_post_result = insert_news()) {
                                header("Location: success.php");
                              }
                            }
                        ?>
                        <form action="addNews.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="image-news">Choose News Image</label>
                                <input type="file" name="image" class="form-control demo" required />
                            </div>
                            <div class="form-group">
                                <label for="new-title">News Title</label>
                                <input type="text" name="title" class="form-control demo" required />
                            </div>
                            <label>Date</label>
                            <div class="form-group">
                                <input type="date" class="form-control mydatepicker" placeholder="mm/dd/yyyy"
                                    name="date" required />
                            </div>
                            <div class="form-group mt-4">
                                <textarea name="content"></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn btn-info">Upload News</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>