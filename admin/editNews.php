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
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <?php

                            if (isset($_GET["edit-news"])) {
                                $news_id = $_GET["edit-news"];

                                // Retrieve the existing news details
                                $select_news_result = select_news("WHERE news_id = {$news_id}");
                                $row = $select_news_result->fetch_assoc();
                                $news_title = $row["news_title"];
                                $news_image = $row["news_image"];
                                $news_content = $row["news_content"];
                            }

                            function update_news($news_id) {
                                $connection = connect_to_database("ndolaChamber"); 

                                if (isset($_POST["update-news"])) {
                                    // Sanitize and validate user input
                                    $news_title = $connection->real_escape_string($_POST["title"]);
                                    $news_content = $connection->real_escape_string($_POST["content"]);

                                    // Handle image upload
                                    $news_image = $news_image_temp = "";

                                    if (!empty($_FILES["image"]["name"])) {
                                        $news_image = $_FILES["image"]["name"];
                                        $news_image_temp = $_FILES["image"]["tmp_name"];
                                        move_uploaded_file($news_image_temp, "images/news/{$news_image}");
                                    }

                                    // If no new image was uploaded, retain the existing one
                                    if (empty($news_image)) {
                                        $query = "SELECT * FROM news WHERE news_id = $news_id ";
                                        $select_image = mysqli_query($connection, $query);
                                        while ($row = mysqli_fetch_array($select_image)) {
                                            $news_image = $row['news_image'];
                                        }
                                    }

                                    // Build the SQL query for updating the news
                                    $query = "UPDATE news SET";
                                    $query .= " news_title = '{$news_title}',";
                                    $query .= " news_image = '{$news_image}',";
                                    $query .= " news_date = NOW(),";
                                    $query .= " news_content = '{$news_content}'";
                                    $query .= " WHERE news_id = {$news_id}";

                                    // Execute the update query
                                    $result = $connection->query($query);

                                    if (!$result) {
                                        
                                        die("Update News query failed. " . $connection->error);
                                    }

                                    return $result;
                                }
                            }

                            if (isset($_POST["update-news"])) {
                                $news_id = $_GET["edit-news"];
                                $edit_news_result = update_news($news_id);
                                
                                if ($edit_news_result) {
                                    // Redirect to a success page or display a success message
                                    header("Location: viewNews.php");
                                } else {
                                    // Handle the case where the update fails, e.g., display an error message
                                    die("Failed to update news. Please try again.");
                                }
                            }

                        ?>

                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <img style="width: 100px;" src="images/news/<?= $news_image ?>" alt="">
                                <input type="file" name="image" class="form-control demo" />
                            </div>
                            <div class="form-group">
                                <label for="new-title">News Title</label>
                                <input type="text" name="title" class="form-control demo" value="<?= $news_title ?>"
                                    required />
                            </div>
                            <label>Date</label>
                            <div class="form-group">
                                <input type="date" class="form-control mydatepicker" placeholder="mm/dd/yyyy"
                                    name="date" value="<?= $news_date ?>" required />
                            </div>
                            <div class="form-group mt-4">
                                <textarea name="content"><?= $news_content ?></textarea>
                            </div>
                            <button type="submit" name="update-news" class="btn btn-info">Upload News</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>