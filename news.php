<?php 
  $title = 'News';
  include('header.php'); 
?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>News</h2>
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>News</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">
                    <?php
                   $total_records = 5; 
                  $select_posts_result = select_news("ORDER BY news_date DESC LIMIT 5");

                  while ($row = $select_posts_result->fetch_assoc()) {
                    $news_id = $row["news_id"];
                    $news_title = $row["news_title"];
                    $news_image = $row["news_image"];
                    $news_content = substr($row["news_content"], 0, 250);
                    $news_date = $row["news_date"];
                    echo"
                    <article class='entry'>

                        <div class='entry-img'>
                            <img src='admin/html/ltr/images/news/{$news_image}' alt='' class='img-fluid'/>
                        </div>

                        <h2 class='entry-title'>
                            <a href='news-single.php?view-news={$news_id}' name='view-news'>{$news_title}</a>
                        </h2>

                        <div class='entry-meta'>
                            <ul>
                                <li class='d-flex align-items-center'><i class='bi bi-person'></i> <a
                                        href='news-single.php?view-news={$news_id}' name='view-news'>Admin</a></li>
                                <li class='d-flex align-items-center'><i class='bi bi-clock'></i> <a
                                        href='news-single.php?view-news={$news_id}' name='view-news'><time datetime='2020-01-01'>{$news_date}</time></a></li>
                            </ul>
                        </div>
 
                        <div class='entry-content'>
                           {$news_content}..............
                            <div class='read-more'>
                                <a href='news-single.php?view-news={$news_id}' name='view-news'>Read More</a>
                            </div>
                        </div>

                    </article>";} ?>

                    <!-- End blog entry -->

                    <div class="blog-pagination">
                        <ul class="justify-content-center">
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div>

                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">
                        <h3 class="sidebar-title">Older Posts</h3>
                        <div class="sidebar-item recent-posts">
                            <?php
                          $select_posts_result = select_news("ORDER BY news_date ASC LIMIT 10");

                          while ($row = $select_posts_result->fetch_assoc()) {
                            $news_id = $row["news_id"];
                            $news_title = substr($row["news_title"], 0, 40);
                            $news_image = $row["news_image"];
                            echo"
                            <div class='post-item clearfix'>
                                <img src='admin/html/ltr/images/news/{$news_image}' alt=''>
                                <h4><a href='news-single.php?view-news={$news_id}' name='view-news'>{$news_title}</a></h4>
                            </div>";} ?>

                        </div><!-- End sidebar recent posts-->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section><!-- End Blog Section -->

</main><!-- End #main -->

<?php include('footer.php'); ?>