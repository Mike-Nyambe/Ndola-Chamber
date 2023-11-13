<?php 
include('header.php'); 
require_once("auth.php");
?>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">All News Items</h4>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">View all Listed news.
                        </h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Date</th>
                                        <th>News Title</th>
                                        <th>News Body</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                  $select_posts_result = select_news("ORDER BY news_date DESC");

                                  while ($row = $select_posts_result->fetch_assoc()) {
                                    $news_id = $row["news_id"];
                                    $news_title = substr($row["news_title"], 0, 90);
                                    $news_image = $row["news_image"];
                                    $news_content = substr($row["news_content"], 0, 200);
                                    $news_date = $row["news_date"];
                                    echo"
                                    <tr>
                                        <td><img src='images/news/{$news_image}' class='img-fluid' style='height:50px;'></td>
                                        <td>{$news_date}</td>
                                        <td>{$news_title}</td>
                                        <td>{$news_content}</td>
                                        <td class='d-flex justify-content-between'>
                                            <a href='editNews.php?edit-news={$news_id}' name='edit-news' class='btn btn-info mx-4'>Edit</a>
                                            <a href='viewNews.php?delete-news={$news_id}''name='delete-news' class='btn btn-danger'>Delete</a>
                                        </td>
                                    </tr>";}
                                ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Image</th>
                                        <th>Date</th>
                                        <th>News Title</th>
                                        <th>News Body</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
    <?php
        if (isset($_GET["delete-news"])) {
        $news_id = $_GET["delete-news"];
        $delete_news_result = delete_news($news_id);
        header("Location: viewNews.php");
        }
    ?>