<?php 
  
  $title = 'News Singles';
  include('header.php');

?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>News Single</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="news.php">News</a></li>
                    <li>News Single</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">
                    <?php
                        if (isset($_GET["view-news"])) {
                            $news_id = $_GET["view-news"];

                            $select_news_result = select_news("WHERE news_id = {$news_id}");
                            $row = $select_news_result->fetch_assoc();
                            $news_title = $row["news_title"];
                            $news_image = $row["news_image"];
                            $news_date = $row["news_date"];
                            $news_content = substr($row["news_content"], 0, 20000); 
                        }

                    ?>
                    <article class="entry entry-single">

                        <div class="entry-img">
                            <img src="admin/html/ltr/images/news/<?=$news_image ?>" alt=" " class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="#"><?= $news_title ?></a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">Admin</a>
                                </li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                        href="#"><time><?=  $news_date ?></time></a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <?=  $news_content ?>

                        </div>
                    </article>
                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">
                        <h3 class="sidebar-title">Recent Posts</h3>
                        <div class="sidebar-item recent-posts">
                            <?php
                          $select_posts_result = select_news("ORDER BY news_date DESC LIMIT 3");

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
    </section><!-- End Blog Single Section -->

</main><!-- End #main -->

<?php 
  
  include('footer.php');

?>